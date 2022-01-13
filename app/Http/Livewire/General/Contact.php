<?php

namespace App\Http\Livewire\General;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ContactSection;

class Contact extends Component
{
    public $name, $email, $subject, $message;

    protected $rules = [
        'name' => 'required|min:3|max:40',
        'email'=> 'required|email',
        'subject'=> 'required|min:5|max:300',
        'message'=> 'required|min:20|max:1000',
    ];

    public function resetContactForm()
    {
        $this->name= "";
        $this->email= "";
        $this->subject= "";
        $this->message= "";
    }
    public function contact()
    {
        $this->validate();
        ContactSection::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
                'action' => 1, // 1 = unseen & 0 = seen.
                'bookmark' => 0, // 0 = not bookmark & 1 = bookmarked.
                'trash' => 0 // 0 = not trash & 1 = trashed.
            ],
        );
        $this->resetContactForm();
        session()->flash('SuccessMessage', 'Your message has been sent. Thank you!');
        $this->emit('contactSuccess');
    }

    public function render()
    {
        return view('livewire.general.contact');
    }

}
