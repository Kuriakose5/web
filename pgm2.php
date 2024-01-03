<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php

$indianPlayers = array("Rohit Sharma", "Virat Kohli", "KL Rahul","Shreyas Iyer", "Shubman Gill","Suryakumar Yadav","Ravindra Jadeja", "Jasprit Bumrah","Muhamed Shami","Kuldeep Yadav","Muhammed Siraj");


echo "<table>";
echo "<tr><th>Indian Cricket Players</th></tr>";
foreach ($indianPlayers as $player) {
    echo "<tr><td>$player</td></tr>";
}
echo "</table>";
?>

</body>
</html>
