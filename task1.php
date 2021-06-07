<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
</head>
<body>
	<center>
	<table border="2">
		<h1>User Form</h1>
		<tr><td>Enter Name: </td>
		<td><input type="text" name="name" maxlength="50" required="">
		</td></tr><br>

		<tr><td>Enter Password: </td>
		<td><input type="password" name="pwd" maxlength="50" required="" >
		</td></tr><br>

		<tr><td>Enter Address: </td>
		<td><input type="text" name="Address" maxlength="100" required="">
		</td></tr><br>

 	<tr><td>Select Game: </td>
		<td> <input type="checkbox" id="game1" name="game1" value="Hockey">
  	<label for="game1"> Hockey</label><br>
  		<input type="checkbox" id="game2" name="game2" value="Football">
  	<label for="game2"> Football</label><br>
  		<input type="checkbox" id="game3" name="game3" value="Badminton">
  	<label for="game3"> Badminton</label><br>
		<input type="checkbox" id="game4" name="game4" value="Cricket">
  	<label for="game4"> Cricket</label><br>
		<input type="checkbox" id="game5" name="game5" value="Volleyball">
  	<label for="game5"> Volleyball</label>

	</td></tr><br>

	<tr><td> Gender: </td>
	<td><input type="radio" name= "gender" checkbox>
			Male
			<input type= "radio" name="gender" checkbox>
			Female
	</td></tr><br>
		<tr><td>
			<label for="Age">Select Your Age:</label> </td>

	<td>

	<select name="age" id="age">

	<option value="18">select</option>
	<option value="19">18</option>
	<option value="20">19</option>
	<option value="21">20</option>
	<option value="22">21</option>
	<option value="23">22</option>
	<option value="24">23</option>
	<option value="25">24</option>
	<option value="26">25</option>
	<option value="27">26</option>
	<option value="28">27</option>
	<option value="29">28</option>
	<option value="30">29</option>

	</select>

	</td></tr><br>
	<td><button type="button" onclick="alert('This is Barna')">Click Me</button>
	<button type="button" onclick="alert('This is Barna')">Reset</button><td>
	<button type="button" onclick="alert('This is Barna')">Submit Form</button>
	</td>

</body>
</html>