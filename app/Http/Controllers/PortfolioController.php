<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Get featured projects
        $projects = Project::where('featured', true)
                          ->orderBy('order', 'asc')
                          ->get();
        
        // Get skills grouped by category
        $skills = Skill::orderBy('order', 'asc')
                      ->orderBy('category', 'asc')
                      ->get()
                      ->groupBy('category');
        
        return view('portfolio.index', compact('projects', 'skills'));
    }
    
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);
        
        // Here you would save to database and send email
        // For now, we'll just return success
        
        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! I\'ll get back to you soon.'
        ]);
    }
}