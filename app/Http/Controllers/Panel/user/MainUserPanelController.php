<?php

namespace App\Http\Controllers\panel\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainUserPanelController extends Controller
{
    public function index()
    {
        return redirect()->route("user.panel.active.plans");
    }




 
}
