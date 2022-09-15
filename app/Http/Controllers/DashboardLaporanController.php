<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardLaporanController extends Controller
{
    public function index(){
        return view('dashboard.laporan.index');
    }
}
