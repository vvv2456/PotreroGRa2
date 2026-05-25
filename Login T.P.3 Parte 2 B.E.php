<?php
    echo"PUNTO 1";
    $i = 1;
    while ($i < 101) {
        print "<p>$i</p>\n";
        $i++;
    }

    echo"PUNTO 2";
    $i = 100;
    do {
        print "<p>$i</p>\n";
        $i--;
    } while ($i > 0);

    echo"PUNTO 3";
    $i = 2;
    while ($i < 101) {
        print "<p>$i</p>\n";
        $i = $i + 2;
    }

    echo"PUNTO 4";
    $i = 1;
    while ($i < 101) {
        print "<p>$i</p>\n";
        $i = $i + 2;
    }

    echo"PUNTO 5";
    ?>
    <br>
    <?php
    $i = 1;
    while ($i < 20) {
        print "$i + ";
        $i++;
    }
    $resultado1 = 210;
    echo "$i = $resultado1";
    ?>
    <br>

    <?php
    echo"PUNTO 6";
    ?>
    <br>
    <?php
    $i = 2;
    while ($i < 20 ) {
        print "$i + ";
        $i = $i + 2;
    }
    $resultado2 = 110;
    echo "$i = $resultado2";
?>