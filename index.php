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
        padding: 10px 0;
        text-align: center;
        z-index: 10; 
        border-radius: 20px; 
        margin: 10px;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('https://t4.ftcdn.net/jpg/01/66/84/65/360_F_166846543_qycnjeADgOS13Z778I8IC9IR2LEiRUF7.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed; /* Keeps the background fixed when scrolling */
    }

    .content {
        margin-top: 60px; 
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
        align-items: flex-start; 
        height: 100vh;
        padding-left: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
        border-radius: 10px;
        padding: 20px;
    }

    
</style>



<?php
include "view-footer.php"; 
?>


