<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('about.index', [
            "title" => "About",
            "members" => Member::all()
        ]);
    }
}
