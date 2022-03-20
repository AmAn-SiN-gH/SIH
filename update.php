
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
	UPDATE TEACHER
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

<body>
	<h1>Update Teacher Details</h1>

	
	<form id="form">

		<div class="form-control">
			<label for="id" id="id">
				Address
			</label>
			<input type="text"
				id="name"
				placeholder="Enter Updated Address" />
		</div>
		
		<div class="form-control">
			<label for="name" id="label-name">
				Salary
			</label>

			
			<input type="text"
				id="name"
				placeholder="Enter the salary" />
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
			<button type="submit" value="submit">
				Submit
			</button>
			</form>
		
        </body>
        </html>
        