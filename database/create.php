<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
</head>

<body>
    <main>
        <h1>Post Form</h1>

        <a href="index.php">Index</a>

        <br/><br/>

        <?php
        if (isset($_SESSION['msg'])) {
            echo "<p>{$_SESSION['msg']}</p>";

            session_destroy();
        }
        ?>

        <form action="store.php" method="POST">
            <div>
                <label>Title</label> <br/>
                <input name="title" type="text" required>
            </div>

            <br/>

            <div>
                <label>Content</label> <br/>
                <textarea name="content" required></textarea>
            </div>

            <br/>
            
            <button>Submit</button>
        </form>
    </main>
</body>

</html>