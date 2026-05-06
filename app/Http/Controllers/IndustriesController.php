<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndustriesController extends Controller
{
    /**
     * Landing page for all industries.
     */
    public function index()
    {
        return view('pages.industries.index');
    }

    /**
     * Dynamic route handler for specific industries.
     */
    public function show($slug)
    {
        // Path logic: looks in resources/views/pages/industries/
        $viewPath = "pages.industries.{$slug}";

        if (View::exists($viewPath)) {
            return view($viewPath);
        }

        abort(404);
    }
}