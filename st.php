<html> 
<head> 
    <title>Student Names</title> 
</head> 
<style>
.myDiv {
  border: 6px ;
  background-color:black;    
  text-align: center;
}
</style>
  <body style="background-color:linen;">
<center> 

<div class="myDiv"
<h2 style="color:white">Student Details</h2></div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <label for="student_names">Enter student names in format 'Name:rollNumber' separated by comma: </label><br><br> 
    <input type="text" style="width: 300px; height: 50px; " name="student_names" id="student_names" required><br> 
<br><br>
    <button type="submit">Submit</button> 
</form> 
 
<?php 
$studentNames = array(); 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 
    $namesInput = $_POST["student_names"];     $students = explode(",", $namesInput);     foreach ($students as $student) {         list($name, $rollNumber) = explode(":", $student);         $studentNames[trim($rollNumber)] = trim($name); 
    } 
} 
 
echo "<h2>Student Names using print_r</h2>"; print_r($studentNames); 
 
asort($studentNames); 
 
echo "<h2>Student Names in Ascending Order based on Values</h2>"; print_r($studentNames); 
 
arsort($studentNames); 
 
echo "<h2>Student Names in Descending Order based on Values</h2>"; print_r($studentNames); 
?> 
</center> 
</body> 
</html> 
