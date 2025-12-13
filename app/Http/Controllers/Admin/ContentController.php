<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratedContent;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\GeneratedImage;
use Illuminate\Support\Str;
use App\Models\GenerateAudio;

class ContentController extends Controller
{
    public function GenerateContentMain(){
        $contents = GeneratedContent::latest()->get();
        return view('admin.backend.contents.all_contents',compact('contents'));
    }
    /// End Method 

    public function AddContent(){
        return view('admin.backend.contents.add_contents');
    }
     /// End Method 

    public function generateContentNew(Request $request){

        $request->validate([
            'title' => 'required|string',
            'word_count' => 'required|integer'
        ]);

        $title = $request->input('title');
        $wordCountLimit = $request->input('word_count');

 // Enhanced prompt for better structured content
    $prompt = "Write a well-structured blog post about '{$title}'. 
    Requirements:
    - Approximately {$wordCountLimit} words
    - Use clear headings and subheadings
    - Include engaging introduction and conclusion
    - Use proper paragraphs
    - Make it informative and well-organized
    - Format with HTML tags like <h2>, <h3>, <p>, <strong>, <em> for better presentation";

    try {

        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => $wordCountLimit,
            'temperature' => 0.7,
        ]);
    
    $generatedContent = $response->choices[0]->message->content;

    $formattedContent = $this->formatContentForQuill($generatedContent);
    $actualWordCount = str_word_count(strip_tags($formattedContent));

    $generated = new GeneratedContent();
    $generated->input = json_encode([
        'title' => $title,
        'word_count_limit' => $wordCountLimit,
    ]);
    $generated->output = $formattedContent;
    $generated->word_count = $actualWordCount;
    $generated->save();

    return response()->json([
        'success' => true,
        'content' => $formattedContent,
        'word_count' => $actualWordCount,
    ]);
         
    } catch (\Exception $e) {
       return response()->json([
        'success' => false,
        'message' => 'Failed to generate the content' . $e->getMessage(),
       ], 500);
    } 

 }
    /// End Method 

    /**
 * Format content for better display in Quill editor
 */
private function formatContentForQuill($content)
{
    // If content already has HTML tags, return as is
    if (strip_tags($content) !== $content) {
        return $content;
    }

    // Convert plain text to HTML format
    $lines = explode("\n", $content);
    $formattedLines = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line)) {
            continue;
        }

        // Check if line looks like a heading
        if (preg_match('/^#+\s/', $line)) {
            // Markdown heading
            $level = substr_count($line, '#');
            $text = trim(str_replace('#', '', $line));
            $formattedLines[] = "<h{$level}>{$text}</h{$level}>";
        } elseif (preg_match('/^[A-Z][^.!?]*[:.]\s*$/', $line) && strlen($line) < 100) {
            // Looks like a heading (short line ending with colon)
            $formattedLines[] = "<h3>{$line}</h3>";
        } else {
            // Regular paragraph
            $formattedLines[] = "<p>{$line}</p>";
        }
    }

    return implode("\n", $formattedLines);
}
 /// End Method 

  public function EditContents($id){

    $content = GeneratedContent::findOrFail($id);
    return view('admin.backend.contents.edit_contents',compact('content'));

  }
 /// End Method 

 public function ContentUpdate(Request $request, $id){

    $request->validate([
        'title' => 'required|string',
        'content' => 'required|string'
    ]);

    $content = GeneratedContent::findOrFail($id);

    $inputData = json_decode($content->input, true);
    $inputData['title'] = $request->title;

    $content->input = json_encode($inputData);
    $content->output = $request->content;    
    $content->save();

    return redirect()->route('generate.main')->with('success', 'Content updated successfully!');

 }
  /// End Method 

  public function ContentDelete($id){

    $content = GeneratedContent::findOrFail($id);
    $content->delete();

     return redirect()->route('generate.main')->with('success', 'Content Deleted successfully!');

  }
    /// End Method 


    public function GenerateImage(){
        $genimage = GeneratedImage::orderBy('id','desc')->get();
        return view('admin.backend.generate.all_image',compact('genimage'));
    }
     /// End Method 

    public function AddGenerateImage(){
        return view('admin.backend.generate.add_image');
    }
    /// End Method 

    public function GenerateSaveImage(Request $request){

        $request->validate([
            'prompt' => 'required|string'
        ]);

        $prompt = $request->input('prompt');

        /// Step 1 Generate the image
         $response = OpenAI::images()->create([
            'model' => 'dall-e-3',
            'prompt' => $prompt ,
            'n' => 1,
            'size' => '1024x1024',
        ]);

        $imageUrl = $response->data[0]->url;
         
        /// Step 2 download the image
        $imageContents = file_get_contents($imageUrl);

        $fileName = 'generated_' . time() . '_' . Str::random(6) . '.png';
        $destinationPath = public_path('upload/generated_image');

        file_put_contents($destinationPath . '/' . $fileName, $imageContents);

        $generatedImage = GeneratedImage::create([
            'prompt' => $prompt,
            'image_path' => 'upload/generated_image/' . $fileName,
        ]);

        return response()->json([
            'status' => 'success',
            'image_local_path' => asset('upload/generated_image/'. $fileName),
            'message' => 'Image genereated and save successfully',
        ]);

    }
     /// End Method 

     public function GenerateAudio(){
        $genaudio = GenerateAudio::orderBy('id','desc')->get();
        return view('admin.backend.generate.all_audio',compact('genaudio'));
    }
     /// End Method 

     public function AddGenerateAudio(){
        return view('admin.backend.generate.add_audio');
     }
       /// End Method 


    public function GenerateSaveAudio(Request $request){

    $request->validate([
        'prompt' => 'required|string'
    ]);

    $prompt = $request->input('prompt');

    /// Step 1 Generate the image
        $response = OpenAI::audio()->speech([
        'model' => 'tts-1',
        'input' => $prompt ,
        'voice' => 'nova',
        'response_format' => 'mp3',
    ]);
 
    /// Step 2 download the image 
    $fileName = 'tts_' . time() . '_' . Str::random(6) . '.mp3';
    $destinationPath = public_path('upload/audio/');

    file_put_contents($destinationPath . $fileName, $response);

     GenerateAudio::create([
        'prompt' => $prompt,
        'audio_path' => 'upload/audio/' . $fileName,
    ]);

    return response()->json([
        'status' => 'success',
        'audio_url' => asset('upload/audio/'. $fileName),
        'message' => 'Audio genereated and save successfully',
    ]);

}
    /// End Method 



}
