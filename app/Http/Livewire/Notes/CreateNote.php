<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use App\Enums\NoteStatus;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Str;

class CreateNote extends Component implements HasForms
{
    use InteractsWithForms;

    public $title, $subject_id, $contents, $ai_prompt;
    
    public function render()
    {
        return view('livewire.notes.create-note');
    }

    protected function getFormSchema(): array 
    {
        return [
            Grid::make(2)
            ->schema([
                TextInput::make('title')->required()->placeholder('Enter Title here'),
                Select::make('subject_id')->options([])->placeholder('Select Subject'),
                TextInput::make('ai_prompt')
                    ->label("AI Prompt (For Premium Users only)")
                    ->columnSpan('full')
                    ->disabled()
                    ->placeholder('Write your prompt here and let AI generate contents for you'),
                Textarea::make('contents')->rows(7)->placeholder('Write your notes here.')->columnSpan('full')
            ])
            
        ];
    }

    public function save($status = null)
    {
        $data = $this->form->getState();

        $note = new Note;
        $note->uuid = Str::uuid();
        $note->user_id = auth()->id();
        $note->team_id = auth()->user()->currentTeam?->id;
        $note->title = $data['title'];
        $note->subject_id = $data['subject_id'];
        $note->contents = $data['contents'];
        $note->price = 0.00;
        $note->status = $status  == 'draft' ? NoteStatus::Draft : NoteStatus::Published;
        $note->save();

        return redirect()->route('notes.show', $note->uuid);
    }
}
