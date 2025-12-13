@extends('admin.admin_master')
@section('admin')

<div class="page-container">

<div class="row">
   
    @foreach ($genimage as $img) 
   
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <img src="{{ asset($img->image_path) }}" class="card-img-top" alt="...">
            <div class="card-body"> 
                <p class="card-text">
                     {{ $img->prompt }}
                </p>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col-->
     @endforeach



                </div>




</div>
@endsection