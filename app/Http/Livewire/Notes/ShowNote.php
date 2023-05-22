<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use App\Jobs\GenerateStudyMaterial;

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

    public function generateStudy()
    {
        GenerateStudyMaterial::dispatch($this->note);
    }
}
