<?php
require __DIR__ . "/vendor/autoload.php";
use App\Controllers\NoteController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leaveaNote</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>LeaveaNote!</h2>
    <h4>We don't code, we fucking spaghetti it!</h4>
    <div class="sendmsg">
        <form action="/Handlers/handle.php" method="POST">
            <input type="text" name="name" placeholder="Your name" required minlength="2" maxlength="24">
            <input type="text" name="message" placeholder="Leave a message" required maxlength="128">
            <input type="submit" value="Got it!">
        </form>
    </div>
    <div class="msglist">
        <?php
            $controller = new NoteController;
            $notes = $controller->handleGET($_GET);
            $notes = array_reverse($notes); ?>
            <?php foreach ($notes as $note): ?>
                <div class="message">
                    <span class="author"><?= htmlspecialchars($note['name'])?></span>
                    <span class="text"><?= htmlspecialchars($note['message'])?></span>
                </div>
        <?php endforeach; ?>
    </div>
</body>
</html>