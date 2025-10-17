@props([
    'items' => ['bold', 'code', 'duplicate', 'heading'],
])

<div data-toolbar class="hidden absolute rounded-xl p-2 bg-black shadow text-white flex gap-2">
    @foreach ($items as $item)
        <button class="hover:bg-white/50 transition rounded p-0.5 cursor-pointer" data-action="{{ $item }}">
            <img src="{{ asset('/images/' . $item . '.svg') }}" class="size-6 invert" />
        </button>
    @endforeach
</div>
