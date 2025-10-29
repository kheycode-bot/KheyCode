<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }
}