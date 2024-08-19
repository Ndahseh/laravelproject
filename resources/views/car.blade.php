<x-layout>
    <x-slot:heading>
        Car
    </x-slot:heading>

    <h2 class="font-bold text-lg">
        {{$car ['model'] }}
    </h2>

    <p>
        This car cost {{$car ['cost'] }} at this dealer shop.
    </p>
</x-layout>
