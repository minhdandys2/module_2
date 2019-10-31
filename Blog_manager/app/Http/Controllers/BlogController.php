<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogs;
    public function __construct(Blogs $blog)
    {
        $this->blogs = $blog;
        $this->middleware('auth');
    }
    public function index(){
        return view('index');
    }
}
