<?php

new class extends \Livewire\Volt\Component {
    public int $count = 0;

    public function inc(): void
    {
        $this->count++;
    }
}

?>

<x-layouts.app>
    <main class="container mx-auto min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="font-bold text-2xl mb-4">Laravel + Livewire + Volt + Folio</h1>
            @volt
            <button class="bg-blue-300 px-3 py-2 rounded shadow" wire:click="inc">
                Increment {{ $count }}
            </button>
            @endvolt
        </div>
    </main>
</x-layouts.app>
