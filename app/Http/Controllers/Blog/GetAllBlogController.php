<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SubScriber;

class GetAllBlogController extends Controller
{
    public function __invoke() {
        $subscribers = SubScriber::with('Blog')->whereNotNull('blog_id')->orderBy('date', 'desc')->orderBy('subscribers', 'desc')->get();
        $blogs = $subscribers->pluck('blog')->unique('id')->filter(); // Получаем уникальные блоги, связанные с подписчиками
        
        return view('Blog' , compact('blogs'))->with('subscribers' , $subscribers);
    }
}
