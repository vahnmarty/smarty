<div class="flex flex-col justify-between w-64 h-full min-h-screen bg-white border-r">

    <section>
        <header class="p-8">
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/logo.png') }}" class="w-8 h-8" alt="">
                <h1 class="text-xl font-bold text-gray-700 uppercase">Smarty</h1>
            </div>
        </header>
        <div>
            <ul>
                <x-sidebar-item href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
                    <x-slot name="icon">
                        <x-heroicon-o-home class="w-5 h-5" />
                    </x-slot>
                    Dashboard
                </x-sidebar-item>

                <x-sidebar-item href="{{ route('notes.index') }}" :active="request()->is('notes*')">
                    <x-slot name="icon">
                        <x-heroicon-o-pencil-alt class="w-5 h-5" />
                    </x-slot>
                    Notes
                </x-sidebar-item>

                
                <li class="px-8 py-3">
                    <a href="" class="inline-flex gap-3">
                        <x-heroicon-o-color-swatch class="w-5 h-5" />
                        <span>Flashcards</span>
                    </a>
                </li>
                <li class="px-8 py-3">
                    <a href="" class="inline-flex gap-3">
                        <x-heroicon-o-newspaper class="w-5 h-5" />
                        <span>QBanks</span>
                    </a>
                </li>
                <li class="px-8 py-3">
                    <a href="{{ route('notes.index') }}" class="inline-flex gap-3">
                        <x-heroicon-o-bookmark-alt class="w-5 h-5" />
                        <span>Subjects</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <div class="pb-16">
        <ul>
            <li class="px-8 py-3 transition hover:bg-gray-200">
                <a href="" class="inline-flex gap-3">
                    <x-heroicon-o-cash class="w-5 h-5" />
                    <span>Billing</span>
                </a>
            </li>
            <li class="px-8 py-3 transition hover:bg-gray-200">
                <a href="" class="inline-flex gap-3">
                    <x-heroicon-o-question-mark-circle class="w-5 h-5" />
                    <span>Help</span>
                </a>
            </li>
        </ul>
    </div>
</div>
