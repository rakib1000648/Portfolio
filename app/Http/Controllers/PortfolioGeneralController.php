<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Section;
use App\Models\HeaderSection;
use App\Models\AboutSection;


class PortfolioGeneralController extends Controller
{
    public function show($userid)
    {
        if (HeaderSection::where('user_id',$userid)->exists()) {

            $section= DB::table('sections')->where('user_id',$userid)->get();

                $headersection= DB::table('header_sections')->where('user_id',$userid)->get();
                $aboutsection= DB::table('about_sections')->where('user_id',$userid)->get();
                $skillsectionInro= DB::table('skill_sections')->select('introduction')->where('user_id',$userid)->first();
                $skillsectionDetails= DB::table('skill_section_details')->where('user_id',$userid)->get();


            return view('layouts.portfolio_general')
            ->with('section',$section)
            ->with('header',$headersection)
            ->with('about',$aboutsection)
            ->with('sk_intro',$skillsectionInro->introduction)
            ->with('skillDetails',$skillsectionDetails)
            ;
        }


    }
}
