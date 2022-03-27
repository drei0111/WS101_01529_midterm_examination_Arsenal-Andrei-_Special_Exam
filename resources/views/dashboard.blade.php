<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

</style>


<body>
<x-app-layout>
    <table style="width:100%">
        <tr>
          <th>Car Models</th>
          <th>Available</th>
          <th>Not available</th>
        
        </tr>
        <tr>
          <td>Abarith</td>
          <td>/</td>
          <td></td>
        
        </tr>
        <tr>
          <td>Ferrari</td>
          <td></td>
          <td>/</td>
         
        </tr>

        <tr>
            <td>Chevrolet</td>
            <td></td>
            <td>/</td>
           
          </tr>

          <tr>
            <td>Ford</td>
            <td></td>
            <td>/</td>
           
          </tr>

          <tr>
            <td>Dodge</td>
            <td>/</td>
            <td></td>
           
          </tr>
      </table>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
</x-app-layout>
