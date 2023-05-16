<x-app-layout>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
   
    <x-cases-card :case="$cases" /> 
 
    <table class="table-auto w-full">
  <thead>
    <tr>
      <th class="px-4 py-2">CaseId</th>
      <th class="px-4 py-2">Description</th>
      </tr>
  </thead>
  <tbody>
    
      <tr>
        <td class="border px-4 py-2">{{ $cases->caseid}}</td>
        <td class="border px-4 py-2">{{ $case->description}}</td>
        </tr>
 
 </tbody>
</table>
</div>
</x-app-layout>