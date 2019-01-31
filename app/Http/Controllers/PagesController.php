<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'WELCOME TO MYAPP';

        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        $data = array(
            'title' => 'Our Services',
            'services' => ['Website Design', 'Programming', 'SEO',
            'Mobile Application Design', 'Desktop Apllication', ], );

        return view('pages.service')->with($data);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
