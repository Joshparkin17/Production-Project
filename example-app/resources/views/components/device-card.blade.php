<div class="p-2 m-2 rounded-lg shadow-lg bg-black-50 border-2 border-black-900 max-w-md">
    <div class="px-10 py-6">
        <div class="font-bold text-xl mb-2">{{ $device['Brand']}}</div>
        <p class="text-gray-700 text-base">{{ $device['ModelName']}}</p> 
        <p class="text-gray-700 text-base">{{ $device['ModelNumbers']}}</p> 
        <p class="text-gray-700 text-base">{{ $device ['DeviceType']}}</p> 
    </div>
 




    @if(Route::currentRouteName()=='devices' || Route::currentRouteName()=='search')    
    <button value="{{$device['id']}}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full select-device">Learn More</button>
  

    
    @endif
</div>

