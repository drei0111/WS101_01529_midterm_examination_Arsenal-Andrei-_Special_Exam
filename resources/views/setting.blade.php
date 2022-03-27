<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 9px;
  margin: 2px 2px;
  transition-duration: 0.1s;
  cursor: pointer;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button5 {
    background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
  color: white;
}
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




</style>
</head>
<body>
<x-app-layout>
    <table>
       
              
        <tr>
          <th>Car Model</th>
          <th>Status</th>
          <th>License Plate</th>
          <th>Add/Remove</th>
        </tr>
        <tr>
          <td>Ferrarri</td>
          <TD ALIGN="center">
            <select>        
                 <option value="volvo">Available</option>
                 <option value="saab">Not Available</option>
                 
            </select>
         </TD>  
         <td>xxxxxx</td>  
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Add</button>
                <button class="button button3">Remove</button></div>
         </td>    
        </tr>
        <tr>
          <td>Alfa Romeo</td>
          <TD ALIGN="center">
            <select>        
                 <option value="volvo">Available</option>
                 <option value="saab">Not Available</option>
                 
            </select>
         </TD>  
         <td>xxxxxx</td>
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Add</button>
                <button class="button button3">Remove</button></div>
         </td>  
        </tr>
        <tr>
          <td>BMW</td>
          <TD ALIGN="center">
            <select>        
                 <option value="volvo">Available</option>
                 <option value="saab">Not Available</option>
                 
            </select>
         </TD>  
         <td>xxxxxx</td>
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Add</button>
                <button class="button button3">Remove</button></div>
         </td>  
        </tr>

        <tr>
            <td>Ford Motor</td>
            <TD ALIGN="center">
              <select>        
                   <option value="volvo">Available</option>
                   <option value="saab">Not Available</option>
                   
              </select>
           </TD>  
           <td>xxxxxx</td>
           <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Add</button>
                <button class="button button3">Remove</button></div>
         </td>  
          </tr>

          <tr>
            <td>Volkswagen</td>
            <TD ALIGN="center">
              <select>        
                   <option value="volvo">Available</option>
                   <option value="saab">Not Available</option>
                   
              </select>
           </TD>  
           <td>xxxxxx</td>
           <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Add</button>
                <button class="button button3">Remove</button></div>
         </td>  
          </tr>
      </table>
      
      </body>
      </html>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>

    
</x-app-layout>
