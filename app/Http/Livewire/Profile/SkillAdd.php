<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\SkillSectionDetail;


class SkillAdd extends Component
{
    public $skills;

    public $skill_name;
    public $skill_volume=50;

    public $edit_skill_id;
    public $edit_skill_name;
    public $edit_skill_volume;

    protected $rules = [
        'skill_name' => 'required|string|max:40',
    ];

    public function render()
    {
        $uid=auth()->user()->user_id;
        $this->skills=SkillSectionDetail::all()->where('user_id',$uid);
        return view('livewire.profile.skill-add');
    }

    public function resetSkill()
    {
        $this->skill_name= "";
        $this->skill_volume= 50;

        $this->edit_skill_name= "";
        $this->edit_skill_volume= 50;
    }

    public function resetError()
    {
        $this->resetErrorBag();
    }

    public function volumeChange($value)
    {
        $this->skill_volume=$value;
    }
    public function ESvolumeChange($value)
    {
        $this->edit_skill_volume=$value;
    }
    public function addSkill()
    {
         $uid=auth()->user()->user_id;
         $this->validate();

        if($this->skill_volume==''){
            $u_skill_volume= 50;
        }else{
            $u_skill_volume= $this->skill_volume;
        }

        $checkSkill= DB::table('skill_section_details')
                        ->where('user_id',$uid)
                        ->where('skill_name',$this->skill_name)->first();

        if (is_null($checkSkill)) {
            SkillSectionDetail::create(
                [
                    'skill_name' => $this->skill_name,
                    'skill_volume' => $u_skill_volume,
                    'user_id' => $uid
            ],
        );
            $this->resetSkill();
        }else{
            $this->addError('skillExist', 'This skill is already exist !');
        };
    }

    public function editSkill($id, $skill_name, $skill_volume)
    {
        $this->edit_skill_id=$id;
        $this->edit_skill_name=$skill_name;
        $this->edit_skill_volume=$skill_volume;
    }

    public function skillUpdate()
    {
        $uid=auth()->user()->user_id;
        $id=$this->edit_skill_id;

        $validateData = $this->validate([
            'edit_skill_name' => 'required|string|max:40',
        ]);

        $checkSkill= DB::table('skill_section_details')
                        ->where('user_id',$uid)
                        ->where('skill_name',$this->edit_skill_name)->get();
        $numRows= count($checkSkill);
        if ($numRows===0) {

            $SkillSectionDetail = SkillSectionDetail::find($id);
            $SkillSectionDetail->skill_name = $this->edit_skill_name;
            $SkillSectionDetail->skill_volume = $this->edit_skill_volume;
            $SkillSectionDetail->save();
            $this->emit('skillUpdateClose');
        }elseif($numRows===1) {
            $SkillSectionDetail = SkillSectionDetail::find($id);
            $SkillSectionDetail->skill_volume = $this->edit_skill_volume;
            $SkillSectionDetail->save();
            $this->emit('skillUpdateClose');
        }
    }

    public function skillDelete()
    {
        $id=$this->edit_skill_id;
        $SkillSectionDetail = SkillSectionDetail::find($id);
        $SkillSectionDetail->delete();
    }


}
