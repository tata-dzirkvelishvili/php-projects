<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('main_page', ['quizzes' => $quizzes]);
    }

    public function createOrUpdate(Post $post, Request $request) {
        $post->fill($request->all())->save();
        return redirect()->route('post.list');
        }
}


