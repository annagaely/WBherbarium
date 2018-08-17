<?php 
    $date = "13-06-2015 23:45:52";
    echo DateTime::createFromFormat('d-m-Y H:i:s', $date)->format('Y-m-d h:i:s'); 
    echo "<br>";
    $date = "10.06.2015 09:25:52";
    echo DateTime::createFromFormat('d.m.Y H:i:s', $date)->format('Y-m-d h:i:s');
?>
echo '<script>alert("'.$start_date.'")</script>';