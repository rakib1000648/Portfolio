<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\ContactSection;
use DB;
use Livewire\WithPagination;

class MessageList extends Component
{
    use WithPagination;
    protected $allMsgs;
    public $getValue = "inbox";
    public $subject, $name, $email, $date, $message;
    public $checkedId = [];


    public function inboxMsgSeen($id)
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

    public function bookmark($id)
    {
        $check = ContactSection::find($id);

        if ($check->bookmark == 0) {
            $updateBookmark = ContactSection::find($id);
            $updateBookmark->bookmark = 1;
            $updateBookmark->save();
        }
        if ($check->bookmark == 1) {
            $updateBookmark = ContactSection::find($id);
            $updateBookmark->bookmark = 0;
            $updateBookmark->save();
        }

    }

    public function inboxMsg()
    {
        $this->getValue = "inbox";
    }

    public function importantMsg()
    {
        $this->getValue = "important";
    }

    public function trashMsg()
    {
        $this->getValue = "trash";
    }

    public function getAllMsg()
    {
        $value = $this->getValue;
        switch ($value) {
            case "inbox":
                $this->allMsgs=ContactSection::orderBy('id', 'DESC')->where('trash', '!=', 1)->paginate(5);
              break;
            case "important":
                $this->allMsgs=ContactSection::orderBy('id', 'DESC')->where('bookmark', 1)->paginate(5);
              break;
            case "trash":
                $this->allMsgs=ContactSection::orderBy('id', 'DESC')->where('trash', 1)->paginate(5);
              break;
            default:
                $this->allMsgs=ContactSection::orderBy('id', 'DESC')->where('trash', '!=', 1)->paginate(5);
          }


    }
    public function markRestore()
    {
        DB::table('contact_sections')->whereIn('id', $this->checkedId)->update(['trash' => 0]);
        $this->checkedId = [];

    }

    public function moveToTrash()
    {
        DB::table('contact_sections')->whereIn('id', $this->checkedId)->update(['trash' => 1, 'bookmark' => 0]);

        $this->checkedId = [];

    }

    public function render()
    {

        $this->getAllMsg();

        return view('livewire.profile.message-list', ['allMsgs' => $this->allMsgs]);
    }

}
