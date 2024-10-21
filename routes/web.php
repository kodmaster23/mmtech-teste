<?php

use App\Livewire\Proposal1\MemberPage;
use Illuminate\Support\Facades\Route;


Route::get('/', MemberPage::class)->name('members.index');
