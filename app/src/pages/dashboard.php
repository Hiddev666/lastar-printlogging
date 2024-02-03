<div class="dashboard">

    <div class="dashboard-left">
        <?php
        include "src/components/card-detail-today.php";
        ?>
    </div>

    <div class="dashboard-right">
        <?php
        $title = "Today Paper Usage";
        $icon = "src/img/paper-svgrepo-com(1).svg";
        $count = "20";
        include "src/components/card-statistics-today.php";
        ?>

<?php
        $title = "Today Files Printed";
        $icon = "src/img/printer-svgrepo-com(3).svg";
        $count = "22";
        include "src/components/card-statistics-today.php";
        ?>

<?php
        $title = "Today Income";
        $count = "Rp 200.000";
        $icon = "src/img/money-bag-svgrepo-com.svg";
        include "src/components/card-statistics-today.php";
        ?>
    </div>


</div>