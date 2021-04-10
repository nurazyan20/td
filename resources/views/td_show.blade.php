@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To Do List</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>

        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
		<form method="post">
		 <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<br><br><center><h2><b>To Do List</b></h2></br>
<button><i class='fa fa-plus'></i><a href="td_create">Add List</a></button></br>
	</br></br>	 
			  <table id="customers">
			 
			  <tr>
				 
				  <td><center><b>List</center></b></td>
			
				  <td><b><center>Action</center></b></a></td>
			      
			   </tr>
			
			@foreach($tdArr as $td)
			 <tr>
			      
				  <td><center>{{$td->name}}</center></td>
				  
				  <td>
				   <center><button onclick="myFunction()"><i class='fa fa-trash'></i><a href="td_delete/{{$td->id}}">Delete</a>
<script>
function myFunction() {
  alert("List Deleted!");
}
</script>
				   <button><i class='fa fa-check'></i><a href="td_edit/{{$td->id}}">Edit</a></center>
				   </td>
			   </tr>
			@endforeach
			  </table>
		</form>  
        </div>
		</center>
    </body>
</html>
