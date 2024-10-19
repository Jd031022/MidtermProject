<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // This method handles the main portfolio index view
    public function index()
    {
        // Return the main portfolio view (e.g., homepage)
        return view('index');
    }

    // Method for Lab 1: Views
    public function lab1()
    {
        // Return the view for Lab 1: Views
        return view('labs.views');
    }

    // Method for Lab 2: Routes
    public function lab2()
    {
        // Return the view for Lab 2: Routes
        return view('labs.routes');
    }

    // Method for Lab 3: Layouts
    public function lab3()
    {
        // Return the view for Lab 3: Layouts
        return view('labs.layouts');
    }

    // Method for Lab 4: Middleware
    public function lab4()
    {
        // Return the view for Lab 4: Middleware
        return view('labs.middleware');
    }

    public function projectView()
    {
        // Return the view for Lab 4: Middleware
        return view('projects.view');
    }
    
    public function projectRoute()
    {
        // Return the view for Lab 4: Middleware
        return view('projects.route');
    }

    public function projectLayout()
    {
        // Return the view for Lab 4: Middleware
        return view('projects.layout');
    }

    public function projectMiddleware()
    {
        // Return the view for Lab 4: Middleware
        return view('projects.middleware');
    }
}
