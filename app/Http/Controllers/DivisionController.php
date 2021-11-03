<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function show(Division $division) 
    {
        return view('division', [
            'title' => $division->name,
            'memberList' => $division->members,
            'division' => $division->name,
            'jobdesk' => $division->jobdesk
        ]);
    }
}
