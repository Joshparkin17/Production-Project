<x-app-layout>
    <div class="devicelist p-2">
    
        <x-device-card :device="$device" 
        
        />  
        


        <table class="table-auto w-full">
  <thead>
    <tr>
      <th class="px-7 py-2">ModelName</th>
      <th class="px-7 py-2">Brand</th>
      <th class="px-7 py-2">Modelnumbers</th>
      <th class="px-7 py-2">DeviceType</th>
      <th class="px-7 py-2">E-sim Compabatible</th>
      <th class="px-7 py-2">Operating system</th>
    </tr>
  </thead>
  <tbody>
    
      <tr>
        <td class="border px-4 py-2">{{ $device->ModelName}}</td>
        <td class="border px-4 py-2">{{ $device->Brand}}</td>
        <td class="border px-4 py-2">{{ $device->ModelNumbers}}</td>
        <td class="border px-4 py-2">{{ $device->DeviceType}}</td>
        <td class="border px-4 py-2">{{ $device->ESim}}</td>
        <td class="border px-4 py-2">{{ $device->OperatingSystem }}</td>
      </tr>
 
  </tbody>
</table>
</div> 
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="py-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
      Instructions for the Seizure of a {{$device->ModelName}}
    </h1>
    <div class="mt-8 text-xl font-medium text-gray-500">
      <p> The device currenly selected is an {{ $device->OperatingSystem }} device <span class="text-gray-900"></span>  <span class="text-gray-900">{{ $device->brand }}</span>.</p>
    </div>
 
</div>

    @csrf
    @if ( $device->OperatingSystem  =='Ios')

    <div>
        <label for="Iospower">Is the device switched on?</label>
        <select id="Iospower">
        <option value="no"></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
         
        </select>
        <p id="status"></p>
        <script>
    var selectBox = document.getElementById("Iospower");
    selectBox.addEventListener("change", function() {
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var status = document.getElementById("status");
       
        if (selectedValue === "yes") {
            status.innerHTML = "Please use the following steps as guidance, when handiling and seizing a switched on Ios device and ensure contemporaneous notes are being used throughout the process" + "<br>" + "<br>" + " 1. If the device can be accessed ensure airplane mode , wifi and bluetooth connections are disabled. After the connections are disabled or if it  was not possible to disable the connections please place the device in a faraday bag to avoid any network alterations of the device" +
            "  <br>  <br>2. The device must be kept  switched on at all times during this process ,   please ensure that if there is a external charging device present such as portable charger that it must fit in the faraday bag to ensure no remote connections are possilbe. Keep charging the device to ensure it does not run out of power , to reduce the risk of losing volitaile data " +
            "<br> <br> 3. Please make sure all known device identifiers are collected such as model number , model name , brand and serial numbers are noted down and are ready to be passed on to the forensic team"
        } else  {
            status.innerHTML = "When a device has been found switched off , Please ensure that the Ios device is not switched back on and ensure that all relevent device identifiers are collected such as model number , model name , brand and serial numbers are noted down and are ready to be passed on to the forensic team"
        }
    });

    


</script>
    
@elseif  ( $device->OperatingSystem  =='Android')
    

<div>
        <label for="Apower">Is the device switched on?</label>
        <select id="Apower">
        <option value="no"></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
         
        </select>
        <p id="status"></p>
        <script>
    var selectBox = document.getElementById("Apower");
    selectBox.addEventListener("change", function() {
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var status = document.getElementById("status");
       
        if (selectedValue === "yes") {
            status.innerHTML = "Please use the following steps as guidance, when handiling and seizing a switched on  android device and ensure that contemporaneous notes are being made throughout the process" + "<br>" + "<br>" + " 1. If the device can be accessed ensure airplane mode , wifi and bluetooth connections are disabled. After the connections are disabled ensure the setting usb debugging is selected, to ensure that evidence can be accessed at a later date." + " If the device canont be accessed please place the device in a faraday bag" +
            "  <br>  <br>2. The device must be kept  switched on at all times during this process ,   please ensure that if there is a external charging device present such as portable charger that it must fit in the faraday bag to ensure no remote connections are possilbe. Keep charging the device to ensure it does not run out of power , to reduce the risk of losing volitaile data " +
            "<br> <br> 3. Please make sure all known device identifiers are collected such as model number , model name , brand and serial numbers are noted down and are ready to be passed on to the forensic team <br>"
        } else  {
            status.innerHTML = "When a device has been found switched off , Please ensure that the Android device is not switched back on and ensure that all relevent device identifiers are collected such as model number , model name , brand and serial numbers are noted down and are ready to be passed on to the forensic team. If the device has a removeable battery please remove the battery along side any sim cards and mark the findings down <br>"
        }
    });
</script>
@endif
<div class="mt-10 text-x5 font-medium text-gray-700 border-gray-400">
<br>
      <p> Key Principles To Remember When collecting digital devices<span class="text-gray-600"></span></p>
      </div>
    <ul class="list-disc list-inside">
    <li>Ensure no action is taken to change data held on a digital device.</li>
    <li>A record of all actions taken and applied must be created.</li>
    <li>If there is no choice but to access the original data on a device , ensure you are compentent and understand the impact of your actions.</li>
</ul>
</div>
</x-app-layout>