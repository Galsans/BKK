<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.landing');
    }

    public function lowongan()
    {
        return view('admin.lowongan.index');
    }
    public function komentar()
    {
        return view('admin.komentar.index');
    }
    public function perusahaan()
    {
        return view('admin.perusahaan.index');
    }
}
