

<html>

<head>

<style>

#regform{

border: 5px outset black;

background-color:linen;

text-align: center;

width: 600;

height: 700;

margin:auto;

}

table,tr,td,th{

border: 1px solid black;

}
.myDiv {
  border: 6px ;
  background-color:black;    
  text-align: center;
}
</style>
</head>
<body>
<div id="regform">
<div class="myDiv">
<h2 style="color:violet">Book Store</h2></div>
<form name="bookForm" action="form.php" method="post">
<label for="id">Book Id:</label>
<input type="text" id="id" name="id" > <br><br>
<label for="name">Book Name :</label>
<input type="text" id="name" name="name" ><br><br>
<label for="author">Author:</label>
<input type="text" id="author" name="author" > <br><br>
<label for="price"> Price:</label>
<input type="text" id="price" name="price" ><br><br>
<input type="submit" name="register" value="register"><br><br>
</form>

<h4>Search book Data</h4>
<form name="searchForm" action="form.php" method="post">
<label for="tot">Book Id:</label>
<input type="text" name="id" id="id">
<input type="submit" name="search" value="Search"><br><br>
</form>




<?php
$conn= mysqli_connect("localhost:3308","root","","books");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
if (isset($_POST['register'])){
$book_id = $_POST['id'];
$book_name = $_POST['name'];
$author = $_POST['author'];
$price = $_POST['price'];
echo " The values are: ".'<br>';
echo "book_id: ".$book_id.'<br>';
echo "book_name: ".$book_name.'<br>';
echo "author: ".$author.'<br>';
echo "price: ".$price.'<br>';
$sql1="insert into `tbl_books` (`book_id`, `book_name`, `author`, `price`) VALUES ('$book_id', '$book_name', '$author', '$price')";
// $sql1="INSERT INTO 'tbl_books' VALUES ('$book_id', '$book_name', '$author', '$price')";
if (mysqli_query($conn, $sql1)) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST['search'])){
$book_id2= $_POST['id'];   
echo "book_id: ".$book_id2.'<br>';
$sql="SELECT * from tbl_books where book_id=$book_id2 ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
    echo $row["book_id"].'<br>';
    echo $row["book_name"].'<br>';
    echo $row["author"].'<br>';
    echo $row["price"].'<br>';
}
}
?>