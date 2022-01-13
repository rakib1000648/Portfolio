<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\SkillSection;


class Skill extends Component
{

    public $introduction;

    protected $rules = [
        'introduction' => 'string|max:350',

    ];
    protected $messages = [
        'introduction.string' => 'You must change the value!',

    ];


    public function submit()
    {
        $uid=auth()->user()->user_id;
        $this->validate();

        DB::table('skill_sections')->updateOrInsert(
            ['user_id' => $uid],
            [
            'introduction' => $this->introduction,
            ]
        );

        session()->flash('message', 'Data successfully saved.');
        $this->emit('alert_remove');

    }

    public function render()
    {
        $uid=auth()->user()->user_id;

        $this->introduction=DB::table('skill_sections')->where('user_id', $uid)->pluck('introduction');
        return view('livewire.profile.skill');
    }
}
