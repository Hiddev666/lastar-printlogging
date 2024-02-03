<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lastar Print | Printer Logging</title>

    <!-- Style -->
    <link rel="stylesheet" href="src/css/admin.css">
</head>

<body>

    <div class="main">
        <div class="main-left">
            <?php include "src/components/sidebar.php"; ?>
        </div>
        <div class="main-right">

            <?php
            if(isset($_GET['page'])) {
                if($_GET['page'] == "dashboard") { 
                    include "src/pages/dashboard.php";
                } else if($_GET["page"] == "recap") { 
                    include "src/pages/recap.php";
                } else if($_GET["page"] == "") {

                }
            }
            ?>

        </div>
    </div>



</body>

</html>