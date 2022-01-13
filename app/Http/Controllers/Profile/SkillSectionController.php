<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SkillSectionDetail;
class SkillSectionController extends Controller
{
    public function index()
    {
        $uid=auth()->user()->user_id;

        $data = DB::table('skill_sections')->where('user_id',$uid)->get();
        $data2 = DB::table('skill_section_details')->where('user_id',$uid)->get();


            return view('profile.skill')
            ->with('skill',$data)
            ->with('skill_details',$data2);
    }

}
