<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        
        $length = 2; 
        $width = 4;  

        $area = calculateArea($length, $width);

       
        echo "The area of a rectangle with a width of $width and $length is $area";
    ?>
</body>
</html>
