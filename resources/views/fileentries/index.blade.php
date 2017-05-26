@extends('layouts.app')
@section('content')
<div class="container">
 
    <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="filefield">
        <input type="submit">
    </form>
 
 <h1> Pictures list</h1>
 <div class="row">
        <ul class="thumbnails">
 @foreach($entries as $entry)
            <div class="col-md-2">
                <div class="thumbnail">
                    {{-- <img src="/storage/uploads/{{ $entry->filename }}" alt="ALT NAME" class="img-responsive" /> --}}
                    <img src="{{route('getuploads', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />
                    {{-- <img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" /> --}}
                    <div class="caption">
                        <p>{{$entry->original_filename}}</p>
                    </div>
                </div>
            </div>
 @endforeach
 </ul>
 </div>
 </div>
 
@endsection