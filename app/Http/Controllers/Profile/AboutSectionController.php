<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AboutSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    public function index()
    {
        $uid=auth()->user()->user_id;

        $data = DB::table('about_sections')->where('user_id',$uid)->get();


            return view('profile.about',compact('data',$data));


    }
    public function CreateAndUpdate(request $input)
    {
        $uid=auth()->user()->user_id;

        if ($input->hasFile('photo')) {
            $extension = $input->photo->extension();
            $photo = "photo-".$uid.".".$extension;

            Storage::putFileAs(
                'public/img/user/about',$input->file('photo'),$photo
            );

        }
        else{
            $photo = DB::table('about_sections')->where('user_id', $uid)->value('photo');
        }

        $validated = $input->validate([
            'birthday' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);

        DB::table('about_sections')->updateOrInsert(
            ['user_id' => $uid],
            [
            'introduction' => $input->introduction,
            'title'=>$input->title,
            'brief_description'=>$input->brief_description,
            'birthday'=>$input->birthday,
            'gender'=>$input->gender,
            'website'=>$input->website,
            'degree'=>$input->degree,
            'phone'=>$input->phone,
            'email'=>$input->email,
            'city'=>$input->city,
            'freelance'=>$input->freelance,
            'conclusion'=>$input->conclusion,
            'photo'=>$photo,
            ]
        );
        return redirect('/home/about')->withInput();
    }
}
