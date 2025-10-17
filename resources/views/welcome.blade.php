<x-layout>
    <main class="grid max-w-250 mx-auto">
        @forelse($notes as $note)
            <a href="{{ $note->url() }}">
                {{ $note->title }}
            </a>
        @empty
            No notes yet.
        @endforelse
    </main>
</x-layout>
