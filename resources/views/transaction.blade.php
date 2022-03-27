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
navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>
<x-app-layout>
    <table>
       
              
        <tr>
          <th>Car Model</th>
          <th>Status</th>
          <th>Rent</th>
        </tr>
        <tr>
          <td>Ferrarri</td>
          <TD ALIGN="center">
            <select>        
                 <option value="volvo">Available</option>
                 <option value="saab">Not Available</option>
                 
            </select>
         </TD>
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Rent</button>
                <button class="button button3">Cancel</button></div>
         </td>         
     </TR>
        </tr>
        <tr>
          <td>Alfa Romeo</td>
          <TD ALIGN="center">
            <select>        
                 <option value="volvo">Available</option>
                 <option value="saab">Not Available</option>
                 
            </select>
         </TD>  
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Rent</button>
                <button class="button button3">Cancel</button></div>
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
         <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Rent</button>
                <button class="button button3">Cancel</button></div>
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
           <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Rent</button>
                <button class="button button3">Cancel</button></div>
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
           <td div class="w3-show-inline-block">
            <div class="w3-bar">
                <button class="button button5">Rent</button>
                <button class="button button3">Cancel</button></div>
         </td>
          </tr>
      </table>
      
      </body>
      </html>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    
</x-app-layout>
