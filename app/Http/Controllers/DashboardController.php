<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Notices;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;

class DashboardController extends Controller
{
    public function index()
    {
        $totalnews = News::count();
        $totalcategories = Category::count();
        $totalnotices = Notices::count();
        return view('dashboard', compact('totalnews', 'totalcategories', 'totalnotices'));
    }
}
