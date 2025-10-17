<x-layout>
    <div class="grid grid-cols-[1fr_200px] max-w-250 mx-auto">
        <main>
            main
        </main>

        <aside>
            @forelse($notes as $note)
                <a href="{{ $note->url() }}">
                    {{ $note->title }}
                </a>
            @empty
                No notes yet.
            @endforelse
        </aside>
    </div>
</x-layout>
