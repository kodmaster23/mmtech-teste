<?php

namespace App\Livewire\Proposal1;

use App\Models\Member;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MemberCreate extends Component
{

    use LivewireAlert;
    public $name = '';
    public $email = '';
    public $phone = '';
    public function render()
    {
        return view('livewire.proposal1.member-create');
    }
    public function store()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email',
            'phone' => 'required|celular_com_ddd|unique:members,phone',
        ]);

        $member = Member::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ]
        );

        $this->dispatch('member-changed'); 
        $this->reset(['name', 'email', 'phone']);
        $this->alert('success', "{$member->name} cadastrado.");
    }
}
