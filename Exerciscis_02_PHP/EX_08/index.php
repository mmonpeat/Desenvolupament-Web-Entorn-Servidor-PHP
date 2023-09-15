<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 8 </title>
</head>
<body>
<h1> EX 8 </h1>
    <?php
        function area_triangle($base, $altura)
        {
            $res_local = ($base * $altura) / 2;
            return ($res_local);
        }
        $res = area_triangle(10, 5);
        echo "Area del triangle és: $res";
    ?>
</body>
</html>