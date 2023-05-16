<x-app-layout>

          <h2>Add new Device </h2>
          <form class= " max-w-md" method="POST" action="/devices">
          @csrf    
     
          

          <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-green-900 max-w-md">
         <label for="caseid">Please enter the following Information</label><br />
         <br />
       <label for="ModelName">ModelName:</label>
           <input type="text" id="ModelName" name="ModelName">
           <br>
           <br>
         <label for="Brand">Brand:</label>
           <input type="text" id="Brand" name="Brand">
           <br>
           <br>
         <label for="ModelNumbers">ModelNumbers:</label>
           <input type="text" id="ModelNumbers" name="ModelNumbers">
           <br>
           <br>
           <label for="DeviceType">DeviceType:</label>
           <input type="text" id="DeviceType" name="DeviceType">
           <br>
           <br>
         <label for="title">ESim:</label>
           <input type="text" id="ESim" name="ESim">
           <br>
           <br>
           <label for="title">OperatingSystem:</label>
           <input type="text" id="OperatingSystem" name="OperatingSystem">
           

                <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Add device</button>
            </div>

           

        </x-app-layout>