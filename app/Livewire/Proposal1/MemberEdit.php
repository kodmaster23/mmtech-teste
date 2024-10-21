<?php

namespace App\Livewire\Proposal1;

use App\Models\Member;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MemberEdit extends Component
{
    
    use LivewireAlert;
    public $member;
    public $name = '';
    public $email = '';
    public $phone = '';

    public function mount(Member $member)
    {
        $this->member = $member;
        $this->name = $member->name;
        $this->email = $member->email;
        $this->phone = $member->phone;
    }
    public function render()
    {
        return view('livewire.proposal1.member-edit');
    }

    public function update()
    {

        $this->validate([
            'name' => 'required',
            'email' => "required|email|unique:members,email,".$this->member->id,
            'phone' => "required|celular_com_ddd|unique:members,phone,".$this->member->id,
        ]);

        $this->member->update(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ]
        );

        $this->dispatch('member-changed'); 
        
        $this->alert('success', "{$this->member->name} editado.");
    }
}
