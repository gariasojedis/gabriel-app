<?php

namespace App\Http\Controllers;

use Database\Seeders\ArticleTableSeeder;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Article;


class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        return $articles;
    }

    public function show($id)
    {
        $articulo = Article::findorfail($id);
        return $articulo;
    }
    
}
