<html>
<head>
<link rel="stylesheet" href="Registration.css">
<style>
body {
font-family: Arial, sans-serif;
background-color:powderblue;
}
.registration-container {
width: 50%;
margin: 50px auto;
background-color:linen;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.center-form {
text-align: center;
}
.error {
color: red;
}
label {
display: inline-block;
width: 150px;
text-align: right;
margin-right: 10px;
}
input, select, textarea {
width: 250px;
padding: 5px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
button {
background-color:black;
color: white;
padding: 10px 15px;
border: none;
border-radius: 4px;
cursor: pointer;
}
button:hover {
background-color:red;
}
</style>
<title>Registration Form</title>
</head>
<body>
<div class="registration-container">
<div class="center-form">
<form method="POST">
<center>
<h1>Registration for MCA</h1>
<p>Please fill in this form to complete your application</p>
</center>
<hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Function to sanitize and validate input
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$firstname = $middlename = $lastname = $bloodgroup = $nationality = $education =
$gender = $phone = $address = $email = $password = $repass = "";
if (empty($_POST["firstname"])) {
$firstnameErr = "Firstname is required";
} else {
$firstname = test_input($_POST["firstname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
$firstnameErr = "Only letters and white space allowed";
}
}
$middlename = test_input($_POST["middlename"]);
if (empty($_POST["lastname"])) {
$lastnameErr = "Lastname is required";
} else {
$lastname = test_input($_POST["lastname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
$lastnameErr = "Only letters and white space allowed";
}
}
$bloodgroup = test_input($_POST["bloodgroup"]);
$nationality = test_input($_POST["nationality"]);
$education = test_input($_POST["education"]);
if (empty($_POST["phone"])) {
$phoneErr = "Phone is required";
} else {
$phone = test_input($_POST["phone"]);
if (!preg_match("/^\d{10}$/", $phone)) {
$phoneErr = "Phone number must have 10 digits";
}
}
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}
if (empty($_POST["pass"])) {
$passwordErr = "Password is required";
} else {
$password = test_input($_POST["pass"]);
}
if (empty($_POST["repass"])) {
$repassErr = "Re-type Password is required";
} else {
$repass = test_input($_POST["repass"]);
if ($repass !== $password) {
$repassErr = "Passwords do not match";
}
}
if (empty($firstnameErr) && empty($lastnameErr) && empty($genderErr) &&
empty($phoneErr) && empty($emailErr) && empty($passwordErr) && empty($repassErr))
{
echo "<p>Registration Successful!<br>";
echo "Firstname: $firstname<br>";
echo "Middlename: $middlename<br>";
echo "Lastname: $lastname<br>";
echo "Blood Group: $bloodgroup<br>";
echo "Nationality: $nationality<br>";
echo "Highest Education: $education<br>";
echo "Gender: $gender<br>";
echo "Phone: $phone<br>";
echo "Address: $address<br>";
echo "Email: $email<br>";
echo "Password: $password</p>";
}
}
?>
<p>
<label> Firstname: </label><input type="text" name="firstname" size="15"
required> <span class="error"><?php echo isset($firstnameErr) ? $firstnameErr : "";
?></span> <br> <br>
<label> Middlename: </label> <input type="text" name="middlename"
size="15"/> <br> <br>
<label> Lastname: </label>
<input type="text" name="lastname" size="15" required> <span
class="error"><?php echo isset($lastnameErr) ? $lastnameErr : ""; ?></span> <br> <br>
<label> Blood Group: </label>
<input type="text" name="bloodgroup" required><span class="error"><?php
echo isset($bloodgroupErr) ? $bloodgroupErr : ""; ?></span><br><br>
<label> Nationality: </label>
<input type="text" name="nationality" required><span class="error"><?php
echo isset($nationalityErr) ? $nationalityErr : ""; ?></span><br><br>
<label>
Highest Education:
</label>
<select name="education">
<option value="Course">Course</option>
<option value="BCA">BCA</option>
<option value="B.ScP">B.Sc Physics</option>
<option value="B.ScM">B.Sc Mathematics</option>
<option value="B.Com">B.Com</option>
<option value="B.ScC">B.Sc Computer Science</option>
<option value="Other">Other</option>
</select>
<br>
<br>
<label>
Phone :
</label>
<input type="text" name="phone" size="10"/><span class="error"><?php echo
isset($phoneErr) ? $phoneErr : ""; ?></span> <br> <br>
<br>
<label>
Email :
</label>
<input type="email" id="email" name="email"/><span class="error"><?php
echo isset($emailErr) ? $emailErr : ""; ?></span> <br>
<br> <br>
<label>
Password :
</label>
<input type="password" id="pass" name="pass"><span class="error"><?php
echo isset($passwordErr) ? $passwordErr : ""; ?></span> <br>
<br> <br>
<label>
Re-type password :
</label>
<input type="password" id="repass" name="repass"><span class="error"><?php
echo isset($repassErr) ? $repassErr : ""; ?></span> <br> <br>
</p>
<p>
I have hereby verified all the above given details <input type="checkbox"
name="verify" required>
</p>
<button type="submit" class="registerbtn">Register</button>
</form>
</div>
</div>
</body>
</html>