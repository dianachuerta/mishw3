<?php
$pageTitle = "Home";
include "view-header.php";
?>

<style>
   
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: white; 
    }


    h1 {
        font-size: 72px; 
        background-color: lightblue; 
        padding: 20px 40px; 
        border-radius: 10px; 
        display: inline-block; 
        color: black; 
        margin: 0; 
    }

    
    .author {
        font-size: 24px; 
        background-color: lightblue; 
        padding: 10px 20px; 
        border-radius: 5px; 
        display: inline-block; 
        color: black; 
        margin-top: 10px; 
    }
</style>

<div>
    <h1>Final Project</h1>
    <div class="author">By: Diana Huerta</div>
</div>

<?php
include "view-footer.php";
?>
