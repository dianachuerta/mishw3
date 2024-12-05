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
        background-color: #ffebf2; 
    }

    .content {
        margin-top: 60px; 
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
        align-items: flex-start; 
        height: 100vh;
        padding-left: 20px;
    }

    h1 {
        font-size: 72px; 
        font-family: 'Poppins', sans-serif;
        background-color: #E6E6FA; 
        padding: 20px 40px; 
        border-radius: 10px; 
        display: inline-block; 
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

    .image-container {
        margin-top: 20px;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

<div class="content">
    <h1>Welcome to my final project!</h1>
    <div class="image-container">
        <img src="https://images.pexels.com/photos/3769151/pexels-photo-3769151.jpeg?cs=srgb&dl=pexels-olly-3769151.jpg&fm=jpg" alt="Hospital">
    </div>
</div>

<?php
include "view-footer.php"; 
?>
