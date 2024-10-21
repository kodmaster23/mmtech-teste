<?php

namespace App\Livewire\Proposal1;

use App\Models\Member;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class MemberList extends Component
{
    use WithPagination, LivewireAlert;
     
    public function getListeners()
    {
        return [
            "member-changed" => 'updateMemberList',
            "confirmed"
        ];
    }
    public function render()
    {

        return view('livewire.proposal1.member-list', [
            'members' => Member::paginate(5)]);	
    }

    public function updateMemberList()
    {
        $this->render();
    }

    public function remove($id)
    {
        $this->alert('warning', 'Olá!', [
            'position' => 'center',
            'toast' => true,
            'showDenyButton' => true,
            'denyButtonText' => 'Não',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Sim',
            'text' => 'Deseja excluir esse membro?',
            'onConfirmed' => 'confirmed',
            'inputAttributes' => $id,
        ]);
    }

    public function confirmed($data)
    {
        Member::find($data['inputAttributes'])->delete();
        $this->dispatch('member-changed');
    }

    public function edit($member_id)
    {
        $this->dispatch('member-edit', $member_id)->to(MemberPage::class);
    }
}
