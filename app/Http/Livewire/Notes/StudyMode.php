<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class StudyMode extends Component
{
    public Note $note;

    public $ready = false;

    public function render()
    {
        return view('livewire.notes.study-mode')->layout('layouts.mode');
    }

    public function mount($uuid)
    {
        $this->note = Note::whereUuid($uuid)->firstOrFail();
    }
}
