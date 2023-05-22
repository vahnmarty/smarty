<div>
    <div>
        <header class="flex items-center justify-between lg:px-3">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-1 bg-gray-500 rounded-sm">
                    <x-heroicon-o-lightning-bolt class="w-8 h-8 text-white"/>
                </div>
                <div class="pl-3">
                    <h2 class="text-base font-bold">{{ $note->title }}</h2>
                    <p class="text-xs text-gray-600">{{ $note->subject_id  ?? 'Uncategorized'}}</p>
                </div>
            </div>
            <div class="flex gap-3">


                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-eye class="w-4 h-4 "/>
                    <span class="text-sm">Study</span>
                </a>

                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-pencil class="w-4 h-4 "/>
                    <span class="text-sm">Edit</span>
                </a>
                <a href="{{ route('notes.create') }}" class="flex items-center gap-3 px-6 py-2 transition bg-gray-300 rounded-md hover:bg-gray-400">
                    <x-heroicon-o-book-open class="w-4 h-4 "/>
                    <span class="text-sm">Review</span>
                </a>
            </div>
        </header>

        <div class="lg:px-3 lg:py-6">

            <div class="inline-flex gap-2 text-sm">
                <x-heroicon-o-calendar class="w-5 h-5 text-gray-700"/>
                <p>{{ $note->created_at->format('F d, Y h:i a') }}</p>
            </div>
            <div class="mt-4 leading-8 text-gray-700">
                {!! $note->contents !!}
            </div>
            
        </div>
    </div>
</div>
