<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    // Home page
    public function home(): View
    {
        return view('home');
    }

    // About me page
    public function aboutMe(): View
    {
        return view('aboutme');
    }

    // Data-based projects page
    public function dataBasedProjects(): View
    {
        // You can pass data here if needed
        return view('data_based_projects');
    }

    // Figma projects page
    public function figma(): View
    {
        return view('figma');
    }

    // Research page
    public function research(): View
    {
        return view('research');
    }
}