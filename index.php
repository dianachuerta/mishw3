<?php
$pageTitle = "Home";
include "view-header.php";  // This will include the navbar
?>

<style>
    /* Ensure the navbar stays at the top of the screen */
    nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #333; /* Dark background for the navbar */
        color: white;
        padding: 10px 0;
        text-align: center;
        z-index: 10; /* Keeps the navbar on top */
    }

    /* Body styling with light pink background */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #ffebf2; /* Light pink background */
    }

    /* Create space under the navbar for content */
    .content {
        padding-top: 30px; /* Reduced space between navbar and content */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Bubble letter style for the "Final Project" heading */
    h1 {
        font-size: 72px; /* Big letters for "Final Project" */
        font-family: 'Poppins', sans-serif; /* Using a rounded, bubbly font */
        background-color: lightblue; /* Light blue highlight */
        padding: 20px 40px; /* Padding around the text */
        border-radius: 10px; /* Rounded corners */
        display: inline-block; /* Makes the background only around the text */
        color: black; /* Black text color */
        margin: 0; /* Remove default margin */
        text-transform: uppercase; /* Optional: Makes the text all uppercase */
        font-weight: bold; /* Bold font for more impact */
        text-shadow: 
            2px 2px 0px #ffb3d9, /* Light pink shadow to create a bubble effect */
            -2px -2px 0px #ffb3d9, 
            2px -2px 0px #ffb3d9, 
            -2px 2px 0px #ffb3d9; /* More shadows for a rounded bubble look */
    }
</style>

<div class="content">
    <h1>Final Project</h1>
</div>

<?php
include "view-footer.php";  // This will include the footer
?>

