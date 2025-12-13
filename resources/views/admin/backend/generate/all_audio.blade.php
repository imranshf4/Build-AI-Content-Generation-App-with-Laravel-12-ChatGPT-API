@extends('admin.admin_master')
@section('admin')

<div class="page-container">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
            <div class="flex-shrink-0 d-flex align-items-center gap-2">
                <div class="position-relative">
        <h2>Generated Audio Content </h2>          
                </div>
            </div>

            <a href="{{ route('add.audio') }}" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Add Audio</a>
        </div>

<div class="table-responsive">
    <table class="table table-hover text-nowrap mb-0">
        <thead class="bg-light-subtle">
    <tr> 
        <th class="fs-12 text-uppercase text-muted py-1">Sl</th>
        <th class="fs-12 text-uppercase text-muted py-1">Prompt </th>
        <th class="fs-12 text-uppercase text-muted py-1">Audio</th> 
    </tr>
        </thead>
        <!-- end table-head -->

        <tbody>
        @foreach ($genaudio as $key => $item)  
            <tr>
                <td>#{{ $key+1 }}</td>
                <td>{{ Str::limit($item->prompt, 50, '...') }}</td>
                <td class="tb-col tb-col-sm"> 
  <div class="badge text-bg-success-soft rounded-pill px-2 py-1 fs-6 lh-sm">
        <audio controls>
    <source src="{{ asset($item->audio_path) }}" type="audio/mpeg" >
        </audio>
  </div>
                </td> 
            </tr><!-- end table-row --> 
       @endforeach
        </tbody><!-- end table-body -->
    </table><!-- end table -->
</div>

         
    </div> <!-- end card-->
</div> <!-- end col -->
</div>

</div>





@endsection