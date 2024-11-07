<?php

namespace App\Http\Controllers\SubScriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SubScriber;

class GetAllSubScriberController extends Controller
{
    public function __invoke(Blog $blog) {
        $subScribers = SubScriber::where('blog_id' , $blog->id)->orderBy('date', 'desc')->orderBy('subscribers', 'desc')->get();
        return view('Subscriber' , compact('subScribers'));
    }
}
