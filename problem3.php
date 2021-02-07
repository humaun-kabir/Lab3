<!DOCTYPE html>
<html>
<head>
    <title>problem3</title>
</head>
<body>
    <?php

    $lenght = 5;
    $width = 5;

    $area = $lenght * $width;

    $perimeter = 2*($lenght + $width);

    echo "lenght and width = $lenght and $width";
    echo "area = $area ";
    echo "perimeter =  $perimeter";
    if ($lenght == $width){
        echo "the shape is a square";
    }
    ?>
</body>
</html>
