<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ortu;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $count = Post::select('title')->count();
 
        // dd($count);
        return view('dashboard.index', [
            'ibu' => Ortu::select('nama_ibu')->count(),
            'anak' => Anak::select('nama_anak')->count(),
            'user' => User::select('name')->count()
        ]);
    }
}
