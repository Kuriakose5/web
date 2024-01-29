<html> 
<head> 
    <title>Electricity Bill Calculator</title> 
    <style>         body {             font-family: Arial, sans-serif;             background-color: #f4f4f4; 
            text-align: center;             margin: 0;             padding: 0; 
        } 
 
        .calculator-container {             width: 30%;             margin: 50px auto;             background-color: green;             padding: 20px;             border-radius: 8px;             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        } 
         h2 { 
            color:red; 
        } 
 
        form {             margin-top: 20px; 
        } 
         label {             display: block; 
            margin-bottom: 10px; 
        } 
 
        input {             width: 100%;             padding: 10px;             margin-bottom: 20px;             box-sizing: border-box; 
        } 
 
        button {             background-color:black;             color:powderblue;             padding: 10px 15px;             border: none;             border-radius: 4px;             cursor: pointer; 
        } 
 
        button:hover { 
            background-color: #45a049; 
        }          p {             color: #333; 
            margin-top: 20px; 
        } 
    </style> 
</head> 
<body style="background-color:linen;">
    <div class="calculator-container"> 
        <h2>Electricity Bill Calculator</h2>         <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">             <label for="units">Enter Units Consumed:</label> 
            <input type="number" name="units" required> 
            <br> 
            <button type="submit">Calculate Bill</button> 
        </form> 
         
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        function test_input($data) {             $data = trim($data); 
            $data = stripslashes($data);             $data = htmlspecialchars($data); 
            return $data; 
        } 
 
        $units = isset($_POST["units"]) ? test_input($_POST["units"]) : 0; 
 
        $unitRate1 = 5.00;  // Rate for the first 100 units 
        $unitRate2 = 7.50;  // Rate for units above 100 
 
        if ($units <= 100) { 
            $bill = $units * $unitRate1; 
        } else { 
            $bill = (100 * $unitRate1) + (($units - 100) * $unitRate2); 
        } 
        echo"<h2>";         echo "<p>Units Consumed: $units</p>";         echo "<p>Electricity Bill: $bill/-</p>";         echo "<div class='breakup'>";         echo "<h3>Breakup of the Amount</h3>";         echo "<p>Rate for the first 100 units: $unitRate1 per unit</p>";         echo "<p>Rate for units above 100: $unitRate2 per unit</p>";         echo "</div>"; 
    } 
    ?> 
</div> 
</body> 
</html> 
