<div>
    <div class="flex justify-center py-1 bg-indigo-500">
        <p class="text-xs text-white">You are in Study Mode.</p>
        <a href="{{ route('notes.show', $note->uuid) }}" class="px-3 text-xs text-white underline">
            <span>Exit</span>
        </a>
    </div>

    <div class="py-12">
        <div class="mx-auto lg:max-w-7xl lg:px-8">
            <h1 class="text-3xl font-bold">{{ $note->title }}</h1>

            <div class="mt-8 leading-8" id="app">{!! $note->contents !!}</div>
        </div>
    </div>
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