<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $repository;
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }
}
