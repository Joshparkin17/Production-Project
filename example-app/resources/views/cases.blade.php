<x-app-layout>

<p> Welcome To the Case facility </p>

<a href="{{ route('create') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
                Add new Case
        </a>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($cases as $case)
    <x-cases-card :case="$case" /> 
    @endforeach
    </div>

</x-app-layout>