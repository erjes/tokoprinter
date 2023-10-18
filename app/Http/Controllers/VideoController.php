<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function preview()
    {
        $videoPath = 'videos/hamoood.mp4'; // Replace with the path to your video file

        // return view('preview', $videoPath);
        return view('preview', compact('videoPath'));
    }
}
