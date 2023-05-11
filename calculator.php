<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
     <h1 style="color:white;background-color:brown; width:60%;margin:auto;text-align:center;">Compound Interest Calculator</h1>
<div style="display:flex;flex-direction:column; width:55%;margin:auto; gap:10px;">
     Principal (P):$ <input type="number" id="p">
     Rate (R):% <input type="number"  id="r">
     Time (t in years):<input type="text" id="t">

     <div style="display:flex; justify-content:center;color:brown;outline:none;">
     
     <button type="submit" style="color:white;background-color:brown;border:none;padding:10px;border-radius:10px;" id="btn">Calculate</button>
     </div>
     <h1 style="color:brown;" id="result"></h1>
</div>
 <script src="index.js" ></script>
</body>
</html>