<?php


$conn= mysqli_connect("localhost","root","","college");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{


  $roll_no = $_POST['rollno'];
  $student_name = $_POST['student_name'];
  $course_id = $_POST['course_id'];
 
  echo " The values are: ".'<br>';
   echo "Roll No: ".$roll_no.'<br>';
  echo "Name: ".$student_name.'<br>';
  echo "Course ID: ".$course_id.'<br>';

}

$sql="insert into student values(1,' Aby',101),(2,' Bibin',102),(3,'Cyriac',103)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>