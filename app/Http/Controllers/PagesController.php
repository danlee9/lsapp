<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $text = "stuff!!";
        // return view('pages.index', compact('text'));
        return view('pages.index')->with('text', $text);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
