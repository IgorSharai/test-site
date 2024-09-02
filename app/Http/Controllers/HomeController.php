<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index1 (): \Illuminate\View\View
    {
       /* return View::make('home.index', [
        'name' => 'John',
        'age' => '35',
        'title' => 'Home page',
       ]);*/
       /* return view('home.index', ['title' => 'Home page']);*/
       return view('home.index1', ['title' => 'Home page1']);
    }

    public function test (): \Illuminate\View\View
    {
        /*$name = 'Katy';
        $age = '27';
        $title = 'Test Page';
        return view('home.test', compact('name', 'age', 'title'));*/
        return view('home.test', ['title' => 'Test']);
    }

    public function zapis (): \Illuminate\View\View
    {
        /*$name = 'Katy';
        $age = '27';
        $title = 'Test Page';
        return view('home.test', compact('name', 'age', 'title'));*/
        return view('home.zapis', ['title' => 'Запис партії']);
    }

}
