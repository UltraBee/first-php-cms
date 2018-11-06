<?php

session_start();

include_once('../includes/connection.php');

if(isset($_SESSION['logged_in'])) {

    ?>

    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>PHP CMS</title>
            <link rel="stylesheet" href="../assets/style.css">
        </head>
        <body>
            <div class="container">
                <a href="index.php" id="logo">CMS</a>
                <br><br>
                <h4>Add Article</h4>
                <form action="add.php" method="post" autocomplete="off">
                    <input type="text" name="title" placeholder="Title"><br><br>
                    <textarea name="content" cols="50" rows="15"></textarea><br><br>
                    <input type="submit" value="Add Article">
                </form>
            </div>
        </body>
        </html>

    <?php
} else {
    header('Location: index.php');
}

?>