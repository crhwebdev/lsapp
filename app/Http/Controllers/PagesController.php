<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel, Fine Denizens of the Interwebs';

        // return view('pages.index', compact('title'));

        return view('pages.index')->with('title', $title);

    }

    public function about(){
        $title = 'Out and About';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
