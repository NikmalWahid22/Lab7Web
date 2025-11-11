<!-- Kondisi IF -->
    <hr>
    <h1>Kondisi IF</h1>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
    ?>

    <!-- Kondisi Switch -->
    <hr>
    <h1>Kondisi Switch</h1>
    <?php
    $nama_hari = date("l"); 

    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>