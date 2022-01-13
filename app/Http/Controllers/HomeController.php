<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;
use App\Models\HeaderSection;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function show()
    {
        $uid=auth()->user()->user_id;
        $section= DB::table('sections')->where('user_id',$uid)->get();

        return view('home')->with('section',$section);

    }

    public function ManageSection(request $input)
    {
        $uid=auth()->user()->user_id;

        if ($input->header==1) {
           $header=1;
        } else {
            $header=0;
        }
        if ($input->about==1) {
            $about=1;
         } else {
             $about=0;
         }
         if ($input->facts==1) {
            $facts=1;
         } else {
             $facts=0;
         }
         if ($input->skills==1) {
            $skills=1;
         } else {
             $skills=0;
         }
         if ($input->resume==1) {
            $resume=1;
         } else {
             $resume=0;
         }
         if ($input->portfolio==1) {
            $portfolio=1;
         } else {
             $portfolio=0;
         }
         if ($input->services==1) {
            $services=1;
         } else {
             $services=0;
         }
         if ($input->testimonials==1) {
            $testimonials=1;
         } else {
             $testimonials=0;
         }
         if ($input->contact==1) {
            $contact=1;
         } else {
             $contact=0;
         }

        DB::table('sections')->updateOrInsert(
            ['user_id' => $uid],
            [
            'header' => $header,
            'about'=>$about,
            'facts'=>$facts,
            'skills'=>$skills,
            'resume'=>$resume,
            'portfolio'=>$portfolio,
            'services'=>$services,
            'testimonials'=>$testimonials,
            'contact'=>$contact,

            ]
        );
        return redirect('/home');
    }
}
