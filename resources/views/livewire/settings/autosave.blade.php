<div x-data="{ on: false }" class="flex items-center">
    <button x-on:click="on = !on"
        :class="{ 'bg-indigo-600': on, 'bg-gray-200' : !on }"
        type="button" class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
      <span :class="{ 'translate-x-5': on, 'translate-x-0' : !on }"
       aria-hidden="true" class="inline-block w-5 h-5 transition duration-200 ease-in-out transform bg-white rounded-full shadow pointer-events-none ring-0"></span>
    </button>
    <span class="ml-3 text-sm">
      <span class="font-medium text-gray-900">Autosave</span>
    </span>
  </div>