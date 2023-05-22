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
        </div>
    </div>
</div>
