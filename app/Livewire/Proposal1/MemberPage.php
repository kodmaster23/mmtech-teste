<?php

namespace App\Livewire\Proposal1;

use Livewire\Attributes\On;
use Livewire\Component;

class MemberPage extends Component
{

    public $is_editing = false;
    public $editing_id = null;
    public function render()
    {
        return view('livewire.proposal1.member-page');
    }

    #[On('member-edit')]
    public function editMemeber($member_id)
    {
        $this->is_editing = true;
        $this->editing_id = $member_id;
        $this->dispatch('$refresh');
    }

    #[On('member-changed')]
    public function clearEditing()
    {
        if ($this->is_editing) {
            $this->is_editing = false;
            $this->editing_id = null;
        }
    }
}
