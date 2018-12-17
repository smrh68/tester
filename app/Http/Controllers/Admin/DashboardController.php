<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $title = 'داشبورد';
        return view('admin.dashboard.index', compact('title'));
    }
}
