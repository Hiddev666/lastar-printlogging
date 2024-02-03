<div class="recap">

    <div class="recap-left">
        <?php
        include "src/components/card-recap.php";
        ?>
    </div>
    <div class="recap-right">
    <?php
        $title = "Total Paper Usage";
        $icon = "src/img/paper-svgrepo-com(1).svg";
        $count = "20";
        include "src/components/card-recap-today.php";
        ?>

<?php
        $title = "Total Files Printed";
        $icon = "src/img/printer-svgrepo-com(3).svg";
        $count = "22";
        include "src/components/card-recap-today.php";
        ?>

<?php
        $title = "Total Income";
        $count = "Rp 200.000";
        $icon = "src/img/money-bag-svgrepo-com.svg";
        include "src/components/card-recap-today.php";
        ?>
    </div>
</div>