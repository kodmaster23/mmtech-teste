<?php

namespace App\Livewire\Proposal1;

use Livewire\Component;

class MemberCreate extends Component
{

    public $options = [];
    public $team = [];
    public function render()
    {
        return view('livewire.proposal1.member-create');
    }
}
