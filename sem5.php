<!DOCTYPE html>
<html lang="en">
<head>
  <title>Techers Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "attendence";



$conn = mysqli_connect($host, $username, $password, $dbname);
?>
  <style>
  input[type=text]{
    width: 78px;
    height: 20px;
	text-align: center;
	
    display: inline-block;
    border: 1px solid #ccc;
    
}
  input1[type=text]{
    width: 50px;
    height: 20px;
    display: inline-block;
    border: 1px solid #ccc;
    
}

button {
    background-color: #009933;
    color: white;
    padding: 10px 30px;
    margin: 8px 0;
    cursor: pointer;
    width: auto;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 30px;
    background-color: #f44336;
}
  .form1
  {
	  margin: 0px;
	  padding :0px;
  }
  
  
  
  
  li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

  .container{
	  padding: 28px
  }

  table {
	  table-layout: variable;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
	padding: 1px;
	width: 2px;
	wordwrap: break-word;
	
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
	  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
	  
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Teachers Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Attendence</a>
    <div class="dropdown-content">
      <a href="sem3.php">sem3</a>
      <a href="#">sem5</a>
      
        <li><a href="#">Unit Test Marks</a></li>
        <li><a href="#">Announcements </a></li>
        <li><a href="#">Class lectures</a></li>
      </ul>
    </div>
  </div>
  
</nav>



  <div class="container">
<div class="container-fluids">
  <div class="row content">

<table class="fixed" id="table">
<thead>
  <tr>
  <th>USN</th>
    <th>MATH</th>
    <th>ADE</th>
	<th>DSA</th>
	<th>UNIX</th>
	<th>CO</th>
	<th>DMS</th>
	
	<th>ADLAB</th>
	<th>DSALAB</th>
	
  </tr>
  </thead>
  <tbody>
  
  
<?php

 $result = mysqli_query($conn, "SELECT * FROM sem5");
	 
     
 

 
 
 while ($row = mysqli_fetch_assoc($result))
 {
	 ?>
  <tr>
    
    <td><?php echo $row['usn'];?></td>
	<td><?php echo $row['sub1'];?></td>
	<td><?php echo $row['sub2'];?></td>
	<td><?php echo $row['sub3'];?></td>
	<td><?php echo $row['sub4'];?></td>
	<td><?php echo $row['sub5'];?></td>
	<td><?php echo $row['sub6'];?></td>
	<td><?php echo $row['sub7'];?></td>
	<td><?php echo $row['sub8'];?></td>
	
  </tr>
  <?php
 }
 ?>
</tbody>
</table>    


</div>
</div>
</div>
</div>

 <div class="container-fluid text-center">    
 
  <div class="row content">
  <div class="col-sm-1">
 
  </div>
  <div class="container1">
   <div class="col-sm-10 text-center">
   
<form  method="POST" action="insert1.php">



    <label><b>Usn</b></label>
    <input type="text" placeholder="Enter Usn" name="uname" value="1bi15cs" id="usn11" required>
	<label><b>ME</b></label>
    <input type="text" placeholder="%" name="su1" id="a">
	<label><b>CN</b></label>
    <input type="text" placeholder="%" name="su2" id="b" >
	<label><b>DBMS</b></label>
    <input type="text" placeholder="%" name="su3" id="c">
	<label><b>ATCI</b></label>
    <input type="text" placeholder="%" name="su4" id="d">
	<label><b>AJAVA</b></label>
    <input type="text" placeholder="%" name="su5" id="e">
	<label><b>ELEC</b></label>
    <input type="text" placeholder="%" name="su6" id="f">
	<label><b>CNLAB</b></label>
    <input type="text" placeholder="%" name="su7" id="g">
	<label><b>DBLAB</b></label>
    <input type="text" placeholder="%" name="su8" id="h">
           <div class="text-center">
    <button type="submit" name="get" value="1">insert</button> 
	<button type="submit" name="get" value="2">delete</button> 
	<button type="submit" name="get"  value="3">update</button> 

	</form>
	
 </div>
 </div>
 </div>
</div>
</div>

<script>


var table = document.getElementById('table'),rIndex;


for(var i = 0;i<table.rows.length;i++)
{
	table.rows[i].onclick = function()
	{
	
		rIndex = this.rowIndex;
		
		document.getElementById("usn11").value = this.cells[0].innerHTML;
		document.getElementById("a").value = this.cells[1].innerHTML;
		document.getElementById("b").value = this.cells[2].innerHTML;
		document.getElementById("c").value = this.cells[3].innerHTML;
		document.getElementById("d").value = this.cells[4].innerHTML;
		document.getElementById("e").value = this.cells[5].innerHTML;
		document.getElementById("f").value = this.cells[6].innerHTML;
		document.getElementById("g").value = this.cells[7].innerHTML;
		document.getElementById("h").value = this.cells[8].innerHTML;
	    
	};
	
}


</script>
  


</body>
</html>
