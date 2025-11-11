<!-- Perulangan For -->
    <hr>
    <h1>Perulangan For</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }

    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>

    <!-- Perulangan While -->
    <hr>
    <h1>Perulangan While</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++;
        
    }
    ?>

    <!--  Perulangan Do While -->
    <hr>
    <h1>Perulangan Do While</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>