<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ModulesController extends Controller
{
    /**
     * Landing page for all modules.
     */
    public function index()
    {
        return view('pages.modules.index');
    }

    /**
     * Dynamic route handler for individual modules.
     */
    public function show($slug)
    {
        // Path logic: looks in resources/views/pages/modules/
        $viewPath = "pages.modules.{$slug}";

        if (View::exists($viewPath)) {
            return view($viewPath);
        }

        abort(404);
    }
}