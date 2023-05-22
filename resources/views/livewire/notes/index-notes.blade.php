<div>
    <div>
        <header class="flex items-center justify-between lg:px-3">
            <h1 class="text-2xl font-bold">Notes</h1>
            <div class="flex gap-3">

                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-plus class="w-4 h-4 "/>
                    <span class="text-sm">Create</span>
                </a>

                <a href="" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-archive class="w-4 h-4 "/>
                    <span class="text-sm">Import</span>
                </a>

                <a href="" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-library class="w-4 h-4 "/>
                    <span class="text-sm">Marketplace</span>
                </a>
            </div>
        </header>

        <div class="lg:px-3">

            <div class="mt-8 space-y-6">
                @foreach($notes as $note)
                <div class="bg-white border rounded-md shadow-sm">
                    <div class="flex gap-8 p-6">
                        <x-heroicon-o-lightning-bolt class="flex-shrink-0 w-8 h-8 p-1 text-white bg-gray-500 rounded-sm"/>

                        <div>
                            <h4 class="text-xl font-bold">{{ $note->title }}</h4>
                            <div class="text-sm text-gray-600">{{ Str::limit($note->contents, 400) }}</div>
                        </div>

                        <button type="button">
                            <x-heroicon-o-dots-circle-horizontal class="w-7 h-7"/>
                        </button>

                    </div>
                    <div class="flex items-center justify-between gap-4 px-6 py-3 border-t">
                        <div class="flex gap-4">
                            <div class="inline-flex gap-2 text-xs text-gray-600">
                                <x-heroicon-o-calendar class="w-4 h-4 "/>
                                <p>{{ $note->created_at->format('F d, Y h:i a') }}</p>
                            </div>
                            <span class="px-1 py-1 text-xs text-green-900 bg-green-200 rounded-md">Published</span>
                        </div>
                        <div>
                            <a href="{{ route('notes.show', $note->uuid) }}" class="px-3 py-1 text-xs bg-gray-200 border rounded-sm hover:bg-gray-300">View</a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
