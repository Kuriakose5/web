<html>

<head>
    <title>Document</title>
</head>
<style>
.myDiv {
  border: 6px ;
  background-color:black;    
  text-align: center;
}
</style>
<body style="background-color:MediumSeaGreen;">
    <center>
<div class="myDiv">
<h2 style="color:violet"> Student Mark Table</h2></div>
        
        <form method="post">
            Rollno <input type="text" name="roll_no"><br><br>
            Name <input type="text" name="student_name"><br><br>
            Marks <input type="text" name="marks"><br><br>
            Course ID <input type="text" name="course_id"><br><br>
            <input type="submit" value="submit" name="submit">
            <input type="submit" value="update" name="update">
            <input type="submit" value="delete" name="delete">
            <input type="submit" value="search" name="search">
        </form>

        <?php
        $conn = mysqli_connect("localhost:3308", "root", "", "college");

        if (isset($_POST["submit"])) {
            $roll_no = $_POST["roll_no"];
            $student_name = $_POST["student_name"];
            $marks = $_POST["marks"];
            $course_id = $_POST["course_id"];
            $query = "INSERT INTO student VALUES ('$roll_no','$student_name','$marks','$course_id')";
            $run = mysqli_query($conn, $query);
            if ($run) {
                echo "Successfully Inserted";
            } else {
                echo "Failed";
            }
        } elseif (isset($_POST["update"])) {
            $roll_no = $_POST["roll_no"];
            $student_name = $_POST["student_name"];
            $marks = $_POST["marks"];
            $course_id = $_POST["course_id"];
            $query = "UPDATE student SET student_name='$student_name', marks='$marks', course_id='$course_id' WHERE roll_no = '$roll_no'";
            $run = mysqli_query($conn, $query);
            if ($run) {
                echo "Successfully Updated";
            } else {
                echo "Failed to update";
            }
        } elseif (isset($_POST["delete"])) {
            $roll_no = $_POST["roll_no"];
            $query = "DELETE FROM student WHERE roll_no = '$roll_no'";
            $run = mysqli_query($conn, $query);
            if ($run) {
                echo "Successfully Deleted";
            } else {
                echo "Failed to delete";
            }
        } elseif (isset($_POST["search"])) {
            $roll_no = $_POST["roll_no"];
            $query = "SELECT * FROM student WHERE roll_no = '$roll_no'";
            $run = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($run);

            if ($data) {
                echo "roll_no: " . $data['roll_no'] . "<br>";
                echo "student_name: " . $data['student_name'] . "<br>";
                echo "marks: " . $data['marks'] . "<br>";
                echo "course_id: " . $data['course_id'] . "<br>";
            } else {
                echo "No record found";
            }
        }
        ?>
    </center>
</body>

</html>
