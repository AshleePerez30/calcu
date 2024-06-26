<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perez Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Basic Calculator</h1>
        <form action="" name="clc" class="container">
            <input type="text" name="display" readonly style="width: 370px; height: 70px; background-color: #4c555c;color: white; padding-left:5px; padding-right:5px;"><br>
            <input class="btn" type="button" value="1" onclick="clc.display.value += '1'">
            <input class="btn" type="button" value="2" onclick="clc.display.value += '2'">
            <input class="btn" type="button" value="3" onclick="clc.display.value += '3'">
            <input class="btns" type="button" value="+" onclick="clc.display.value += '+'"><br>
            <input class="btn" type="button" value="4" onclick="clc.display.value += '4'">
            <input class="btn" type="button" value="5" onclick="clc.display.value += '5'">
            <input class="btn" type="button" value="6" onclick="clc.display.value += '6'">
            <input class="btns" type="button" value="-" onclick="clc.display.value += '-'" ><br>
            <input class="btn" type="button" value="7" onclick="clc.display.value += '7'">
            <input class="btn" type="button" value="8" onclick="clc.display.value += '8'">
            <input class="btn" type="button" value="9" onclick="clc.display.value += '9'">
            <input class="btns" type="button" value="*" onclick="clc.display.value += '*'" ><br>
            <input class="btnc" type="button" value="C" onclick="clc.display.value =''">  
            <input class="btn" type="button" value="0" onclick="clc.display.value += '0'">
            <input class="btnc" type="button" value="←" onclick="display.value = display.value.toString().slice(0,-1)"> 
            <input class="btns" type="button" value="&#247;" onclick="clc.display.value += '/'"><br>
            <input class="btn" type="button" value="." onclick="clc.display.value += '.'"> 
            <input class="eql" type="button" value="=" onclick="clc.display.value =eval(clc.display.value)">  
        </form>
    </div>

    <?php
session_start();

// Initialize session variables if not set
if (!isset($_SESSION['expression'])) {
    $_SESSION['expression'] = '';
}

// Handle number and operator inputs
if (isset($_POST['input'])) {
    $_SESSION['expression'] .= $_POST['input'];
} 

if (isset($_POST['operator'])) {
    $_SESSION['expression'] .= ' ' . $_POST['operator'] . ' ';
} 

// Handle dot input
if (isset($_POST['dot'])) {
    $_SESSION['expression'] .= '.';
}

// Clear the calculator
if (isset($_POST['clear'])) {
    $_SESSION['expression'] = '';
}

// Calculate the result
if (isset($_POST['equal'])) {
    $result = eval('return ' . $_SESSION['expression'] . ';');
    $_SESSION['expression'] = $result;
}
?>

</body>
</html>
