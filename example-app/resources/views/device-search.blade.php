<x-app-layout>
    
<div class="grid grid-cols-1 md:grid-cols-2  gap-4">
            @foreach($devices as $device)
                <x-device-card :device="$device" /> 
            @endforeach  
        </div>      

</x-app-layout>