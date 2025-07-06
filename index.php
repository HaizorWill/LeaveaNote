<?php
require "/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Leave a note!</h2>
    <div class="sendmsg">
        <form>
            <input type="text" id="name" placeholder="Your name" required>
            <input type="text" id="message" placeholder="Leave a message" required>
            <input type="submit" value="Got it!">
        </form>
    </div>
    <div class="msglist">
        <?php ?>
        <div class="message">
            <span class="author">Author Name</span>
            <span class="text">Message content goes here.</span>
        </div>
    </div>
</body>
</html>