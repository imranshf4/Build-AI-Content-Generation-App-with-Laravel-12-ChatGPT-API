@extends('admin.admin_master')
@section('admin')

<div class="page-container">
    <h2> Add Generate Audio Page </h2>

    <form id="tts-form" >
        <div class="col-md-12">
            <div class="form-group">
                <label for="prompt" class="form-label">Generate Audio</label>
                <div class="form-control-wrap">
            <textarea class="form-control" name="prompt" id="prompt" placeholder="Enter your Audio Idea" ></textarea> 
                </div> 
            </div> 
        </div>

        <div class="col-lg-12 mt-3">
    <button type="submit" class="btn btn-primary" id="ttsBtn">Generate Audio & Save</button>
        </div>

    <div id="loader" class="mt-3" style="display: none">
        <p class="text-info">Generating image. Please Wait.... </p>
    </div>

    </form>

    <div id="audio-result" class="mt-3"></div> 

</div>

<script>
    document.getElementById("tts-form").addEventListener("submit", async function (e) {
        e.preventDefault();

    const prompt = document.getElementById('prompt').value;
    const loader = document.getElementById('loader');
    const result = document.getElementById('audio-result');
    const generateBtn = document.getElementById("ttsBtn");

    loader.style.display = "block";
    result.innerHTML = "";
    generateBtn.disabled = true;

    try {
        const res = await fetch("/generate-audio",{
            method: "POST",
            headers: {
                "Content-Type" : "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({prompt})
        });

         const data = await res.json(); 

        if (data.status === "success") {
            result.innerHTML = `
            <p>${data.message}</p>
          <audio controls>
          <source src="${data.audio_url}" type="audio/mpeg" >
        </audio>
            <br>
            <a href="${data.audio_url}" download class="btn btn-sm btn-success mt-2"> Download Audio </a>
            `
        } else {
            alert("Something went wrong");
        } 
    } catch (error) {
         alert("Failed to generete audio");
    } finally {
        loader.style.display = "none"; 
        generateBtn.disabled = false;
    } 

    }); 
</script>




@endsection