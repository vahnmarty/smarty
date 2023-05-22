<div>
    <div class="flex justify-center py-1 bg-indigo-500">
        <p class="text-xs text-white">You are in Study Mode.</p>
        <a href="{{ route('notes.show', $note->uuid) }}" class="px-3 text-xs text-white underline">
            <span>Exit</span>
        </a>
    </div>

    <div class="py-12">
        <div class="mx-auto lg:max-w-7xl lg:px-8">
            <div class="mt-8 leading-8" id="app">{!! $study_material !!}</div>
        </div>
    </div>

    @if(!$ready)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-white/50 backdrop-blur-sm">
        <button type="button" wire:click="$set('ready', true)" class="px-16 py-4 text-xl text-white bg-green-600 rounded-md hover:bg-green-700">Start</button>
    </div>
    @endif
</div>


@push('scripts')
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
    function start()
    {
        var app = document.getElementById('app');

        var typewriter = new Typewriter(app, {
            loop: false
        });

        var contents = "{!! $note->contents !!}";

        typewriter.typeString('Hello World!')
            .pauseFor(2500)
            .start();
    }
</script>
@endpush