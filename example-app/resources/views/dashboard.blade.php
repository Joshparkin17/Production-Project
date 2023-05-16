<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <div> <p>Welcome</p>{{ Auth::user()->name }}</div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-15">
            <h1> To use this tool please use the navigation bar above </h1>
            <br>
            <p>The search bar can be used to search for any term that relates to a device such as typeofdevice,modelnumber,Modelname and brand </p>
            <br>
            <p>The device page , lists all the devices currenly in the database and each device can be clicked on for more information </p>
            <br>
            <p>The cases page , allows devices to be assgined to a case , with the storage of notes  </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
