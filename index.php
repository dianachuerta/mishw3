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
        background-size: cover; /* Ensures full background coverage */
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed; /* Keeps the background static during scrolling */
    }

    .content {
        margin-top: 80px; 
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center; 
        height: 100vh;
        padding: 20px;
    }

    h1 {
        font-size: 48px; /* Adjust the font size */
        font-family: 'Poppins', sans-serif; /* Modern font style */
        font-weight: bold;
        color: white; /* White text color */
        text-align: center;
        background-color: #000080; /* Navy blue background */
        padding: 10px 20px; /* Add padding inside the highlight */
        border-radius: 15px; /* Rounded corners */
        display: inline-block; /* Ensures the highlight wraps the text tightly */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional shadow for a lifted effect */
    }
</style>

<div class="content">
    <h1>Welcome to my website!</h1>
</div>

<?php
include "view-footer.php"; 
?>
