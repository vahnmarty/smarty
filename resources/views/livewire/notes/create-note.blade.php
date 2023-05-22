<div>
    <div>
        <header class="flex items-center justify-between lg:px-3">
            <div>
                <h1 class="text-2xl font-bold">Create Note</h1>
                <a href="{{ route('notes.index') }}" class="inline-flex items-center px-3 py-1 mt-1 text-xs bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-arrow-sm-left class="w-3 h-3"/>
                    Back
                </a>
            </div>
            <div class="flex gap-3">

                @livewire('settings.autosave')

                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-indigo-300 rounded-md hover:bg-indigo-400">
                    <x-heroicon-o-pencil class="w-4 h-4 "/>
                    <span class="text-sm">Save Draft</span>
                </a>

                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-green-300 rounded-md hover:bg-green-400">
                    <x-heroicon-o-save class="w-4 h-4 "/>
                    <span class="text-sm">Submit</span>
                </a>
            </div>
        </header>

        <div class="lg:px-3 lg:py-6">
            {{ $this->form }}

        </div>
    </div>
</div>
