<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class ShowNote extends Component
{
    public Note $note;
    
    public function render()
    {
        return view('livewire.notes.show-note');
    }

    public function mount($uuid)
    {
        $this->note = Note::whereUuid($uuid)->firstOrFail();
    }
}
