<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::all();
        $categories = Category::all();

        return view('dashboard', compact('user', 'posts', 'categories'));
    }
}
