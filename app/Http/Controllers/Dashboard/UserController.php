<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\UserController as DataController;

class UserController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }
}
