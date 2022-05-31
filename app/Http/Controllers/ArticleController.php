<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    
    public function index()
    {
        return response()->json(DB::table('articles')->get());
    }

    public function show($id)
    {
        return response()->json(DB::table('articles')->where('id', $id)->first());
    }

    public function store(Request $request)
    {
        $article = DB::table('articles')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return response()->json($article, 201);
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('articles')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        $article = DB::table('articles')->where('id', $id)->delete();

        return response()->json($article, 200);
    }

}
