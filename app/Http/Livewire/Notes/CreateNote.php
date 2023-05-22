<?php

namespace App\Http\Livewire\Notes;

use Livewire\Component;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class CreateNote extends Component implements HasForms
{
    use InteractsWithForms;

    public $title, $subjects = [];
    
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
                Select::make('subjects')->options([])->placeholder('Select Subject'),
                TextInput::make('ai_prompt')
                    ->label("AI Prompt (For Premium Users only)")
                    ->columnSpan('full')
                    ->disabled()
                    ->placeholder('Write your prompt here and let AI generate contents for you'),
                Textarea::make('contents')->rows(14)->placeholder('Write your notes here.')->columnSpan('full')
            ])
            
        ];
    }
}
