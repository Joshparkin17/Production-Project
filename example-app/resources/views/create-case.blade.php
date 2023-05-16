
<x-app-layout>

          <h2>Add new Case </h2>
          <form method="POST" action="{{ route('store') }}">
          @csrf    
          <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-green-900 max-w-md">
          

         
         <label for="caseid">Please enter the following Information</label><br />
         <br />
       <label for="caseid">CaseId:</label>
           <input type="text" id="caseid" name="caseid">
           
         <label for="title">Description:</label>
           <input type="text" id="description" name="description">
           

                <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Create</button>
            </div>

           
</div>
        </x-app-layout>