<html>
<head>
<title>Resume Builder</title>
<h1> Resume Builder <h1>
</head>

<body>

<form action="/resume.php" method="POST">
<section>

<h3>Name</h3>

	<label>Full Name:</label>
<span>
	<input type="text" name="fullname" placeholder="First+Last" size="50" maxlength="60" value=""/><br>
</span><br>

<h3>Contact Details</h3>
    <label>Phone Number:</label>
<span>
	<input type="phone number" name="phone" placeholder="888-999-1000" size="50" maxlength="12" value=""/><br>
</span><br>

<label>Email Address:</label>
<span>
	<input type="email" name="email" placeholder="e.g. mvit@sirmvit.edu" size="50" maxlength="150" value=""/><br>
</span><br>

<label>Github:</label>
<span>
	<input type="url" name="github" placeholder="www.github.com/username" size="50" maxlength="150" value=""/><br>
</span><br>

<label>Address:</label>
<br><br>
	<input type="text" name="street" placeholder="street" size="50" maxlength="1000" value=""/><br><br>
	<input type="text" name="city" placeholder="city" size="50" maxlength="1000" value=""/><br><br>
	<input type="text" name="state" placeholder="state" size="50" maxlength="1000" value=""/><br><br>
	<input type="text" name="country" placeholder="country" size="50" maxlength="1000" value=""/><br><br>
</span>				

<h3>Education</h3>

<label>Institution Name:</label>
	<input type="text" name="college" size="30" maxlength="150" value=""/><br><br>
							
<label>Date of Completion:</label>
	<input type="date" name="date" size="30" maxlength="10" value=""/><br><br>

<label>Degree:</label>
	<input type="text" name="degree" size="30" maxlength="150" value=""/><br><br>

<h3>Work Experience</h3>
  
<label>Job Title</label>
<span>
	<input type="text" name="job1" maxlength="250" value=""/><br>       
<label>Start Date</label>
    <input type="date" name="sjobdate1" maxlength="20" value=""/><br>
<label>End Date</label>
    <input type="date" name="ejobdate1" maxlength="20" value=""/><br>
<label>Job Description</label><br> 
	<textarea name="job1description" maxlength="10000" value=""></textarea><br><br>

<label>Job Title</label>
<span>
	<input type="text" name="job2" maxlength="250" value=""/><br>       
<label>Start Date</label>
    <input type="date" name="sjobdate2" maxlength="10" value=""/><br>
<label>End Date</label>
    <input type="date" name="ejobdate2" maxlength="10" value=""/><br>
<label>Job Description</label><br> 
	<textarea name="job2description" maxlength="10000" value=""></textarea><br><br>

<label>Job Title</label>
<span>
	<input type="text" name="job3" maxlength="250" value=""/><br>       
<label>Start Date</label>
    <input type="date" name="sjobdate3" maxlength="10" value=""/><br>
<label>End Date</label>
    <input type="date" name="ejobdate3" maxlength="10" value=""/><br>
<label>Job Description</label><br> 
	<textarea name="job3description" maxlength="10000" value=""></textarea><br><br>

<label>Job Title</label>
<span>
	<input type="text" name="job4" maxlength="250" value=""/><br>       
<label>Start Date</label>
    <input type="date" name="sjobdate4" maxlength="10" value=""/><br>
<label>End Date</label>
	<input type="date" name="ejobdate4" maxlength="10" value=""/><br>
<label>Job Description</label><br> 
	<textarea name="job4description" maxlength="10000" value=""></textarea><br>

<h3>Skills</h3>
				
<textarea name="skills" maxlength="10000" value=""></textarea><br><br>

<input id="saveresume" class="buttons" type="submit" name="submit" value="Submit" />

</body>
</html>