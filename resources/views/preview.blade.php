@extends('layout.template')


@section('konten')
    <h1>Video Preview</h1>
    <video width="640" height="360" controls>
        <source src="{{ asset('videos/hamood.mp4') }}" type="video/mp4">
            {{-- <source src="{{asset($videoPath)}}" type="video/mp4"> --}}
        Your browser does not support the video tag.
    </video>
@endsection
