<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function show()
    {
        return view('profile.inbox');
    }
}
