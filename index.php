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
        padding-top: 60px; /* Adjusted space between navbar and content */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Style for the "Final Project" heading */
    h1 {
        font-size: 72px; /* Big letters for "Final Project" */
        background-color: lightblue; /* Light blue highlight */
        padding: 20px 40px; /* Padding around the text */
        border-radius: 10px; /* Optional: rounded corners */
        display: inline-block; /* Makes the background only around the text */
        color: black; /* Black text color */
        margin: 0; /* Remove any default margin */
    }
</style>

<div class="content">
    <h1>Final Project</h1>
</div>

<?php
include "view-footer.php";  // This will include the footer
?>
