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
                <li class="px-8 py-3 transition bg-gray-100 border-r-2 border-green-400 hover:bg-gray-200">
                    <a href="" class="inline-flex gap-3">
                        <x-heroicon-o-home class="w-5 h-5" />
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="px-8 py-3">
                    <a href="" class="inline-flex gap-3">
                        <x-heroicon-o-pencil-alt class="w-5 h-5" />
                        <span>Notes</span>
                    </a>
                </li>
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
