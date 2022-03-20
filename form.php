

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		ADD TEACHER
	</title>

	<style>

		
		body {
			background-color: #f5faf9;
			font-family: Verdana;
			text-align: center;
		}

		
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
	</style>
</head>
<script>



</script>

<body>
	<h1>ADD TEACHER</h1>

	
	<form id="form" method="POST">

		<div class="form-control">
			<label for="id" id="id">
				Teacher_ID
			</label>
			<input type="text"
				id="name"
				placeholder="Enter Teacher_ID" />
		</div>
		
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			
			<input type="text"
				id="name"
				placeholder="Enter your name" />
		</div>

		<div class="form-control">
			<label for="email" id="label-email">
				Email
			</label>

			
			<input type="email"
				id="email"
				placeholder="Enter The email" />
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				Age
			</label>

			
			<input type="text"
				id="age"
				placeholder="Enter The age" />
		</div>
		<div class="form-control">
			<label for="address" id="label-address">
				Address
			</label>

			
			<input type="text"
				id="adress"
				placeholder="Enter The Address" />
		</div>

		<div class="form-control">
			<label for="city" id="label-city">
				City
			</label>

			
			<input type="text"
				id="city"
				placeholder="Enter the city" />
		</div>
		<div class="form-control">
			<label for="state" id="label-state">
				State
			</label>

			
			<input type="text"
				id="city"
				placeholder="Enter the State" />
		</div>
		<div class="form-control">
			<label for="salary" id="label-salary">
				Salary
			</label>

			
			<input type="text"
				id="salary"
				placeholder="Enter the Salary" />
		</div>


		<div class="form-control">
			<label for="role" id="label-role">
				Designation
			</label>
			
			
			<select name="role" id="role">
				<option value="HOD">Principal</option>
				<option value="HOD">HOD</option>
				<option value="Faculty">TEACHER
				</option>

				
				
			</select>
			</div>
			<div class="form-control">
				<label for ="subject" id="label-subject">
					Department
				</label>
				<select name="subject"id="subject">
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Maths">Maths</option>
				</select>
				
            
		</div>

		
			
		</div>

		

		

			

		
		<button type="submit" value="submit">
			Submit
		</button>
	</form>
</body>

</html>
