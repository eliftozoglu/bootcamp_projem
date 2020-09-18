@extends('layouts.admin-master')

@section('content')
   <form action ="{{route('user.import')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card-header">
            <strong>User Import Form</strong>
        </div>
        <input type="file" name="file" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

   {{-- <div class="card-header">
       <strong>User Import Form</strong>
   </div>
   <div class="row form-group">
       <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
       <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
   </div> --}}
   {{-- <div class="input-group">
       <div class="custom-file">
           <input type="file" class="custom-file-input" id="inputGroupFile04">
           <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
       </div>
       <div class="input-group-append">
           <button class="btn btn-outline-secondary" type="button">Submit</button>
       </div>
   </div>--}}
@endsection
