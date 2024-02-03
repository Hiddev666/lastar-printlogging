<?php
function setSidebarMenu($page) {
    if($_GET['page'] == $page) {
        echo "-active";
    }
}
?>

<div class="sidebar">

    <div class="sidebar-header">
        <img src="src/img/printer.svg" alt="">
        <div>
            <h3>Lastar Print</h3>
            <p>Printer Logging</p>
        </div>
    </div>

    <div class="sidebar-menu">
        <a href="?page=dashboard">
            <div class="sidebar-item<?php setSidebarMenu("dashboard")?>">
                <p>Dashboard</p>
            </div>
        </a>
        <a href="?page=recap&recaptype=day" class="sidebar-item<?php setSidebarMenu("recap")?>">
            <div>
                <p>Recap</p>
            </div>
        </a>
        <a href="" class="sidebar-item">
            <div>
                <p>Logout</p>
            </div>
        </a>
    </div>

</div>