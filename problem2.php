<!DOCTYPE html>
<html>
<head>
    <title>problem2</title>
</head>
<body>
    <?php 
        $marks = 94;

        if ($marks>=90) {
            echo "A+";
        }
        elseif ($marks>=80 && $marks<90) {
            echo "A & marks = $marks";
        }
        elseif ($marks>=70 && $marks<80) {
            echo "B & marks = $marks";
        }
        elseif ($marks>=60 && $marks<70) {
            echo "C & marks = $marks";
        }elseif ($marks>=50 && $marks<60) {
            echo "D & marks = $marks";
        }
        else{
            echo "Fail";
        }

     ?>
</body>
</html>
