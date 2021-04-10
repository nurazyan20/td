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
		 <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
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
<br><br><center><h2><b>Create List</b></h2></br>
<button><i class='fa fa-home'></i><a href="td_show">Home</a></button></br></br>
<form method="post" action="td_submit">
	@csrf
	<table id="customers">
	<tr>
	  <td><center><b>List</b></td></center>
	  <td><center><input type="text" name="name" placeholder="List" required/></td></center>
	 </tr>
	 <tr>
	  <td></td>
	  <td><center><input type="submit" onclick="myFunction()" name="submit"></td></center>
	  <script>
function myFunction() {
  alert("List successfully added!");
}
</script>
	 </tr>
	 <table>
	 </form></center>
	 