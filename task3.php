<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guestbook Application</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
    }
    form {
        margin-bottom: 20px;
    }
    textarea {
        width: 100%;
        height: 100px;
    }
    .comment {
        margin-bottom: 15px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Guestbook</h1>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $comment = $_POST["comment"];
        $file = fopen("guestbook.txt", "a");
        fwrite($file, "$name: $comment\n");
        fclose($file);
        echo "<p>Thank you for your comment!</p>";
    }
    ?>
    <h2>Comments:</h2>
    <?php
    $comments = file("guestbook.txt", FILE_IGNORE_NEW_LINES);
    if ($comments) {
        foreach ($comments as $comment) {
            echo "<div class='comment'>$comment</div>";
        }
    } else {
        echo "<p>No comments yet.</p>";
    }
    ?>
</div>
</body>
</html>
