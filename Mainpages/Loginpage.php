<?php
include './../Sharefolder/Header.php';
include './../CSS/Res.php';
?>

<style type="text/css">
    body {
        background-image: url(./../Images/High_resolution_wallpaper_background.jpg);
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    /* .position-ref {
        position: relative;
    } */

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #fff;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

</style>

<div class="bg-image"> </div>
<div class="container bg-text">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Welcome</h1>
            </div>

            <div class="links">
                <a href="./../Folder-Attendance/AttendLoginpage.php">Attendance</a>
                <a href="./../Folder-Dailytask/Login-page.php">Daily Work</a>
                <a href="">Leave Froms</a>
                <a href="">Station manager</a>
            </div>
        </div>
    </div>
</div>
<?php 
include './../Sharefolder/Footer.php';
?>