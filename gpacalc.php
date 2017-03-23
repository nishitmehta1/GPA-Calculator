<!DOCTYPE html>
<html>
<head>
 
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
 	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  	<script src="gpa_calc_script.js"></script>
 	<title>AM - GPA Calculator</title>
 	<style type="text/css">
 		#td{
 	 		padding: 6px;
		}	
		table{
			margin-top: 60px;
			box-shadow: 0 2px 2px 0 rgba(0,0,0,0.1), 0 2px 2px 0 rgba(0,0,0,0.1);
		}
		#addcourse,#calcdown,#subcourse{
			box-shadow: 0 2px 2px 0 rgba(0,0,0,0.1);
		}
 	</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Attendance Manager</a>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
          <li class="nav-item">
            <a class="nav-link" href="gpacalc.php">GPA Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Get one for my School as well.</a>
          </li>
        </ul>
    </div>
  </nav>
		
<!-- GPA CALCULATOR STARTS HERE -->
		<form class="form row">
			<table id="gpatable" class="table col-md-8 offset-md-2">
			  <thead class="bg-faded">	
			    <tr>
			      <th>#</th>
			      <th width="370px">Course Name</th>
			      <th>Credits</th>
			      <th>Grades</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" id="one" value="1">1</th>
			      <td class="td"><input type="text" name="subname" class="form-control col-md-8"></td>
				  <td class="td">
					  <select onchange="updatecreditarray(this.id);" id="select_credit" class="custom-select">
					  	<option selected value="0">-</option>
					  	<option value="1">1.00</option>
					  	<option value="2">2.00</option>
					  	<option value="3">3.00</option>
					  	<option value="4">4.00</option>
					  </select>
				  </td>
				  <td class="td">
					  <select id="select_grades" class="custom-select">
					  	<option selected value="0">-</option>
						<option value="4">A+</option>
						<option value="3.75">A</option>
						<option value="3.5">A-</option>
						<option value="3.25">B+</option>
						<option value="3">B</option>
						<option value="2.75">B-</option>
						<option value="2.5">C+</option>
						<option value="2.25">C</option>
						<option value="2">C-</option>
						<option value="0">F</option>
					</select>
				</td>
			    </tr>
			    <tr>
			      <th scope="row" id="two" value="2">2</th>
			      <td class="td"><input type="text" name="subname" class="form-control col-md-8"></td>
				  <td class="td">
					  <select onchange="updatecreditarray(this.id);" id="select_credit2" class="custom-select">
					  	<option selected value="0">-</option>
					  	<option value="1" value="1">1.00</option>
					  	<option value="2">2.00</option>
					  	<option value="3">3.00</option>
					  	<option value="4">4.00</option>
					  </select>
				  </td>
				  <td class="td">
					  <select id="select_grades2" class="custom-select">
					  	<option selected value="0">-</option>
						<option value="4">A+</option>
						<option value="3.75">A</option>
						<option value="3.5">A-</option>
						<option value="3.25">B+</option>
						<option value="3">B</option>
						<option value="2.75">B-</option>
						<option value="2.5">C+</option>
						<option value="2.25">C</option>
						<option value="2">C-</option>
						<option value="0">F</option>
					</select>
					</td>
			    </tr>
			  </tbody>
		</table>
		<div class=" row col-md-8 offset-md-2" style="padding:0;">
			<button title="Add course" type="button" onclick="addrow();" class="btn btn-secondary col-md-1 col-sm-5 col-xs-12" id="addcourse" name="addcourse"><i class="fa fa-plus" aria-hidden="true"></i></button>
			<button title="Remove course" type="button" onclick="subrow();" class="btn btn-secondary col-md-1 col-sm-5 col-xs-12" id="subcourse" name="addcourse"><i class="fa fa-minus" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-secondary col-md-3 col-sm-5 col-xs-12" id="calcdown" name="addcourse">Calculate &amp; Download&nbsp; <i class="fa fa-download" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-primary col-md-2 offset-md-5 col-sm-4 col-xs-12" onclick="calculator();" id="calc" name="calculate">Calculate&nbsp;&nbsp;<i class="fa fa-calculator" aria-hidden="true"></i></button>
		</div>
	</form>
    <div id="result"></div>

</body>


</html>