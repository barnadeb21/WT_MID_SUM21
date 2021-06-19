<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 Problem 2</title>
</head>
<body>
    <?php
        $marks = 90;
        $result = '';

        if($marks >=90) { $result = "A+"; }

        elseif($marks >=80 && $marks <90) { $result = "A"; }

        elseif($marks >=70 && $marks <80) { $result = "B"; }

        elseif($marks >=60 && $marks <70) { $result = "C"; }
        
        else { $result = "F"; }

        echo "RESULT " . $result;
    ?>
</body>
</html>