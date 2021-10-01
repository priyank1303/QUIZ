<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz Teacher-side</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="heading">
	<h1>Welcome to quiz master</h1>
</div>

<div class="wrap">
	<div class="name">
		<p>Organized By :- </p>
	</div>

	<div class="name-input">
		<input type="text" name="text" placeholder="enter your name">
	</div>

	<div class="question-input">
		<form>
			  <div class="form-row align-items-center">
			    <div class="col-auto my-1">
			      <label class="mr-sm-2" for="inlineFormCustomSelect">How many question do you want to ask?</label>
			      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			        <option selected>Choose...</option>
			        <option value="1">One</option>
			        <option value="2">Two</option>
			        <option value="3">Three</option>
			        <option value="4">Four</option>
			        <option value="5">Five</option>
			        <option value="6">Six</option>
			        <option value="7">Seven</option>
			        <option value="8">Eight</option>
			        <option value="9">Nine</option>
			        <option value="10">Ten</option>
			      </select>
			    </div>
			    <div class="col-auto my-1">
			      <button type="submit" class="btn btn-primary">Submit</button>
			    </div>
			  </div>
		</form>
	</div>


</div>


</body>
</html>