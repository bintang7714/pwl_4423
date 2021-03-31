<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $tank_str = "Jangan lupa kalo hidup cuman sekali";
        //Menghitung dan menampilkan jumlah string pada kata
        echo str_word_count($tank_str);
        ?>
    </body>
<br>
<br> 
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Saya sangat sepoh tolo beri saya uang";
        //Menampilkan string yg di replace
        echo str_replace("uang", "rokok", $tank_str);
        ?>
    </body>
<br> <br>
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $tank_str = "Jangan tegang mari relax";
        //Menampilkan string yg di replace
        echo strrev($tank_str)
        ?>
    </body>
</html>