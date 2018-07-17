<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Article;

class DashboardController extends Controller
{
    public function dashboard(){
      return view('admin.dashboard',[
      	'categories' 	   => Category::LastCategories(5),
      	'articles' 		   => Article::LastArticles(5),
      	'count_articles'   => Article::count(), 
      	'count_categories' => Category::count(), 
      ]);
    }
}
