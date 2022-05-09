<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ajaxCRUD</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		body{
			background-color: #3498db;
		}
	</style>
</head>
<body>
	
	<div class="row" style="margin: 20px 0">
  <div class="col-md-3">
<div class="msg"></div>
<h3>Add Student</h3>
<div class="from-group">
	<input type="text" class="form-control mt-3" id="studentname" placeholder="Enter student Name">
</div>

<div class="from-group">
	<input type="text" class="form-control mt-3" id="sFatherName" placeholder="Enter student Father Name">
</div>

<div class="from-group">
	<input type="text" class="form-control mt-3" id="sMotherName" placeholder="Enter student Mother Name">
</div>	

<div class="from-group">
	<input type="text" class="form-control mt-3" id="sPhone" placeholder="Enter student Phone Number">
</div>

<div class="from-group">
     <textarea  id="sAddress" class="form-control mt-3" cols="10" rows="5" placeholder="Enter student address"></textarea>
</div>

<div class="form-group mt-2">
   <input type="submit" class="save form-control" value="Insert Student">
</div>
<div class="form-group mt-2">
   <input type="submit" class="update form-control" value="Update Student">
</div>

<div class="from-group">
	<input type="text" class="form-control mt-3" id="id" placeholder=" student id">
</div>

</div>
	<div class="col-md-9">
		<div class="alldata">
			
		</div>
	</div>
			
	</div>

<!-- script -->
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>