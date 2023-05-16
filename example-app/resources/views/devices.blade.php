<x-app-layout>
<a href="{{ route('create') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
                Add Product

</a>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($devices as $device)
    <x-device-card :device="$device" /> 
    @endforeach

  

</div>
</x-app-layout>