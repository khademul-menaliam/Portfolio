<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function view($id)
    {
        // return your blade view (layouts/partials/view.blade.php)
        return view('layouts.partials.view', compact('id'));
    }
    public function show($section = 'all')
    {
        // Allowed sections
        $allowed = ['hero', 'about', 'skills', 'projects', 'contact', 'all'];

        // Fallback to 'all' if section is invalid
        if (!in_array($section, $allowed)) {
            $section = 'all';
        }

        return view('home', compact('section'));
    }
}
