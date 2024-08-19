<x-layout>
    <x-slot:heading>
        Car Listings
    </x-slot:heading>
    <ul>
        @foreach($cars as $car)
            <li>
                <a href="/cars/{{$car ['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{$car ['model'] }}: </strong> Cost {{$car ['cost'] }}.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
