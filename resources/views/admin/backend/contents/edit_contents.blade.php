@extends('admin.admin_master')
@section('admin')

 @php
       $inputData = json_decode($content->input, true);
       $title = $inputData['title'] ?? 'Untitled';
 @endphp

<div class="page-container">


<form action="{{ route('content.update',$content->id) }}" method="POST">
    @csrf 

 
<div class="row"> 

   <div class="col-xl-12">
    <div class="card">
     
    <div class="card-body">

     <div class="mb-3">
        <label for="title" class="form-label">Content Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $title }}">
    </div>

        <div class="mb-3">
     <label for="title" class="form-label">Content </label>
        <div id="snow-editor" style="height: 400px;"> 
             {!! $content->output !!}
        </div>
    <input type="hidden" name="content" id="content-input">
        </div>

    <div class="mt-3" id="saveSection">
    <button type="submit" class="btn btn-success" > Save Content</button> 
    </div> 
    </div> 
    </div> 
   </div> 


</div>  
</form>



</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const quill = new Quill('#snow-editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],
                [{ 'indent': '-1'}, { 'indent': '+1' }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['clean'],
                ['link', 'image']
            ]
        }
    });

 
  /// Update hiddend input before form submit
  document.querySelector('form').addEventListener('submit', function(){
    document.getElementById('content-input').value = quill.root.innerHTML;
  });
 
 
});

</script>

  @endsection