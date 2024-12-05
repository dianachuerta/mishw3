<?php
$pageTitle = "Home";
include "view-header.php";  
?>

<style>
    nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #000080;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between; /* Space between the logo and other navbar content */
        z-index: 10; 
        border-radius: 20px; 
        margin: 10px;
    }

    nav img {
        height: 40px; /* Adjust logo size */
        margin-right: 10px;
    }

    nav .title {
        font-size: 24px;
        font-family: Arial, sans-serif;
        font-weight: bold;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('https://t4.ftcdn.net/jpg/01/66/84/65/360_F_166846543_qycnjeADgOS13Z778I8IC9IR2LEiRUF7.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    .content {
        margin-top: 80px; 
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
        align-items: flex-start; 
        height: 100vh;
        padding-left: 20px;
        background-color: rgba(255, 255, 255, 0.8); 
        border-radius: 10px;
        padding: 20px;
    }

    h1 {
        font-size: 72px; 
        font-family: 'Poppins', sans-serif;
        color: black; 
        margin: 0; 
        text-transform: uppercase; 
        font-weight: bold; 
        text-shadow: 
            2px 2px 0px #ffb3d9, 
            -2px -2px 0px #ffb3d9, 
            2px -2px 0px #ffb3d9, 
            -2px 2px 0px #ffb3d9; 
    }
</style>

<nav>
    <img src="https://thumbs.dreamstime.com/b/hospital-logo-icon-135146818.jpg" alt="Hospital Logo">
    <div class="title">Hospital Navbar</div>
</nav>

<div class="content">
    <h1>Final Project</h1>
</div>

<?php
include "view-footer.php"; 
?>
