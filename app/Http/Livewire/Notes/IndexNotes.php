<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;
use Auth;
use App\Models\Note;

class IndexNotes extends Component
{
    public function render()
    {
        $notes = $this->getNotes();
        return view('livewire.notes.index-notes', compact('notes'));
    }

    public function mount()
    {
        
    }

    public function getNotes()
    {
        return Note::where('user_id', auth()->id())->get();
    }
}
