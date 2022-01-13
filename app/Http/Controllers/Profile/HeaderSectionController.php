<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HeaderSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class HeaderSectionController extends Controller
{


    public function index()
    {
        $uid=auth()->user()->user_id;

        $data = DB::table('header_sections')->where('user_id',$uid)->get();


            return view('profile.header',compact('data',$data));


    }
    public function CreateAndUpdate(request $input)
    {
        $uid=auth()->user()->user_id;

        if ($input->hasFile('bgimage')) {
            $extension = $input->bgimage->extension();
            $bgImageName = "bg-img-".$uid.".".$extension;

            Storage::putFileAs(
                'public/img/user/header',$input->file('bgimage'),$bgImageName
            );

        }
        else{
            $bgImageName = DB::table('header_sections')->where('user_id', $uid)->value('bgimage');
        }

        $validated = $input->validate([
            'name' => 'required|max:35',
            'designation' => 'required|max:100',
        ]);

        DB::table('header_sections')->updateOrInsert(
            ['user_id' => $uid],
            [
            'name' => $input->name,
            'designation'=>$input->designation,
            'twitter'=>$input->twitter,
            'facebook'=>$input->facebook,
            'instagram'=>$input->instagram,
            'skype'=>$input->skype,
            'linkedin'=>$input->linkedin,
            'bgimage'=>$bgImageName,
            ]
        );
        return redirect('/home/header');
    }
}
