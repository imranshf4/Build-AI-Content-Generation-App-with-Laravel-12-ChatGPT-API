@extends('admin.admin_master')
@section('admin')

<div class="page-container">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
            <div class="flex-shrink-0 d-flex align-items-center gap-2">
                <div class="position-relative">
        <h2>Generated Content </h2>          
                </div>
            </div>

            <a href="{{ route('add.content') }}" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Add Content</a>
        </div>

<div class="table-responsive">
    <table class="table table-hover text-nowrap mb-0">
        <thead class="bg-light-subtle">
    <tr> 
        <th class="fs-12 text-uppercase text-muted py-1">Sl</th>
        <th class="fs-12 text-uppercase text-muted py-1">Title </th>
        <th class="fs-12 text-uppercase text-muted py-1">Content Preview</th>
        <th class="fs-12 text-uppercase text-muted py-1">Word Count</th>
        <th class="fs-12 text-uppercase text-muted py-1">Created</th> 
        <th class="text-center  py-1 fs-12 text-uppercase text-muted" style="width: 120px;">Action</th>
    </tr>
        </thead>
        <!-- end table-head -->

        <tbody>
        @foreach ($contents as $key => $item) 
        @php
            // Ddecode JSON input to get title 
            $inputData = json_decode($item->input, true);
            $title = $inputData['title'] ?? 'Untitled';
            $wordLimit = $inputData['word_count_limit'] ?? 0;
            
            // Clean content for preview 
            $cleanContent = strip_tags($item->output);
            $preview = Str::limit($cleanContent, 80, '...');

        @endphp
            <tr>
                <td>#{{ $key+1 }}</td>
                <td>{{ Str::limit($title, 30, '...') }}</td>
                <td>{{ $preview }}</td>
                <td><span class="text-muted">{{ $item->word_count }} Words</span></td> 
 <td><span class="text-muted"> {{ $item->created_at->format('M d, Y') }} </span></td>
                 
                <td class="pe-3">
                    <div class="hstack gap-1 justify-content-end">
                       
   <button type="button" class="btn btn-soft-primary btn-icon btn-sm rounded-circle" data-bs-toggle="modal" data-bs-target="#viewContent{{ $item->id }}" title="View Content"> <i class="ti ti-eye"></i> </button>                    

    <a href="{{ route('edit.contents',$item->id) }}" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> <i class="ti ti-edit fs-16"></i></a>
    <a href="{{ route('delete.contents',$item->id) }}" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> <i class="ti ti-trash"></i></a>
                    </div>
                </td>
            </tr><!-- end table-row -->


    <!--- Vie Content Modal --->
    <div class="modal fade" id="viewContent{{ $item->id }}" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                </div>
    <div class="modal-body">
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <small class="text-muted">Word: Count:</small>
                    <span class="badge bg-info"> {{ $item->word_count  }} Word </span>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Created:</small>
                    <span class="text-muted">{{ $item->created_at->format('M d, Y') }} </span>
                </div> 
            </div> 
        </div> 
    <hr>
    <div class="content-preview">
        {!! nl2br($item->output ) !!}
    </div> 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>  
            </div> 
        </div> 
    </div>
<!--- End View Content Modal --->

       @endforeach
        </tbody><!-- end table-body -->
    </table><!-- end table -->
</div>

         
    </div> <!-- end card-->
</div> <!-- end col -->
</div>

</div>





@endsection