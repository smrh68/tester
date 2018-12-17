<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\MysqlUserRepository;

class UserController extends Controller
{
    protected $user;

    public function __construct(MysqlUserRepository $user)
    {
        $this->user = $user;
    }

    public function index ()
    {
        $users = $this->user->all();
        return view('admin.user.index', compact('users'));
    }
}