<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home() {
        return view('portfolio.home');
    }
    public function about() {
        return view('portfolio.about');
    }
    public function projects() {
        return view('portfolio.projects');
    }
    public function contact() {
        return view('portfolio.contact');
    }
}
