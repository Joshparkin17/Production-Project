


<div class="max-w-sm rounded overflow-hidden shadow-2xl shadow-black">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$case['caseid']}}</div>
        <p class="text-gray-700 text-base">{{$case['description']}}</p> 
     
    @if(Route::currentRouteName()=='cases')
        <button value="{{$case['id']}}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full select-cases">Select</button>
        @endif
    </div>