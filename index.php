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
        background-color: #333;
        color: white;
        padding: 10px 0;
        text-align: center;
        z-index: 10; 
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #ffebf2; 
    }

    
    .content {
        margin-top: 40px; 
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
        background-color: lightblue; 
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
</style>

<div class="content">
    <h1>Final Project</h1>
</div>

<?php
include "view-footer.php"; 
?>

