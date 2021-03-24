<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    // public function pposts(){
    //     return view('pages.posts');
    // }
    // public function show($id){
    //     return 'this is show'.$id;
    // }
}
