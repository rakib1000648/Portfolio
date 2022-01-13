<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\ContactSection;

class ContactMessage extends Component
{
    public $messages;
    public $subject, $name, $email, $date, $message;
    public $unseen= false;

    public function CheckSeen()
    {
        $unseen=ContactSection::where('action', 1)->first();
        if($unseen === null){
            $this->unseen = true;
        }
    }

    public function MsgSeen($id)
    {
        $UpdateSeen = ContactSection::find($id);
        $UpdateSeen->action = 0;
        $UpdateSeen->save();
        $this->subject = $UpdateSeen->subject;
        $this->name = $UpdateSeen->name;
        $this->email = $UpdateSeen->email;
        $this->date =date("M j, Y", strtotime($UpdateSeen->created_at))." ".date("g:i A", strtotime($UpdateSeen->created_at));
        $this->message = $UpdateSeen->message;
    }

    public function render()
    {
        $this->CheckSeen();
        $this->messages=ContactSection::orderBy('id', 'DESC')->take(3)->get();
        return view('livewire.profile.contact-message');
    }


}
