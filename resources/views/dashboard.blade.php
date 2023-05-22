<x-app-layout>

    <div>
        <header class="lg:px-3">
            <h1 class="text-2xl"><strong>Greetings, </strong> {{ Auth::user()->name }}</h1>
        </header>

        <div class="lg:px-3">
            <div class="grid grid-cols-6 gap-8 mt-6">
                <div class="col-span-4 space-y-8">
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-3">
                        <div class="p-4 bg-pink-100 border border-pink-200 rounded-md">
                            <x-heroicon-s-chart-bar class="w-6 h-6 p-1 text-white bg-pink-500 rounded-full" />

                            <h2 class="mt-3 text-xl font-bold">0</h2>
                            <p class="mt-1 text-sm">Notes</p>
                        </div>
                        <div class="p-4 bg-yellow-100 border border-yellow-200 rounded-md">
                            <x-heroicon-s-chart-bar class="w-6 h-6 p-1 text-white bg-yellow-500 rounded-full" />

                            <h2 class="mt-3 text-xl font-bold">0</h2>
                            <p class="mt-1 text-sm">Flash Cards</p>
                        </div>
                        <div class="p-4 bg-green-100 border border-green-200 rounded-md">
                            <x-heroicon-s-chart-bar class="w-6 h-6 p-1 text-white bg-green-500 rounded-full" />

                            <h2 class="mt-3 text-xl font-bold">0</h2>
                            <p class="mt-1 text-sm">QBanks</p>
                        </div>
                    </div>
                    <div class="p-4 bg-white border border-gray-300 rounded-md">
                        <div class="flex gap-3 pb-2">
                            <x-heroicon-o-lightning-bolt class="w-6 h-6 text-yellow-600" />
                            <h3 class="font-bold">Invitations</h3>
                        </div>
                        <div class="flex flex-col items-center justify-center py-6 mt-2 bg-gray-200 rounded-md">
                            <x-heroicon-o-newspaper class="flex-shrink-0 w-16 h-16 text-gray-400" />
                            <p class="flex-1 text-gray-600">No invitations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="space-y-8">
                        <div class="p-4 bg-white border border-gray-300 rounded-md">
                            <div class="flex gap-3 pb-2">
                                <x-heroicon-o-lightning-bolt class="w-6 h-6 text-yellow-600" />
                                <h3 class="font-bold">Upcoming Exams</h3>
                            </div>
                            <div class="flex flex-col items-center justify-center py-6 mt-2 bg-gray-200 rounded-md">
                                <x-heroicon-o-newspaper class="flex-shrink-0 w-16 h-16 text-gray-400" />
                                <p class="flex-1 text-gray-600">No upcoming exams or quiz.</p>
                            </div>
                        </div>
                        <div class="p-4 bg-white border border-gray-300 rounded-md">
                            <div class="flex gap-3 pb-2">
                                <x-heroicon-o-lightning-bolt class="w-6 h-6 text-yellow-600" />
                                <h3 class="font-bold">Announcements</h3>
                            </div>
                            <div class="flex flex-col items-center justify-center py-6 mt-2 bg-gray-200 rounded-md">
                                <x-heroicon-o-newspaper class="flex-shrink-0 w-16 h-16 text-gray-400" />
                                <p class="flex-1 text-gray-600">No announcements today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
