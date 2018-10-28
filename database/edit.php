<?php
    require_once __DIR__."/vendor/autoload.php";

    session_start();

    use Classes\Database;

    $database = new Database();

    if (!isset($_GET['id'])) {
        header("location: 404.php");
        die();
    }

    $database->query("SELECT * FROM posts WHERE id={$_GET["id"]}");
    $post = $database->resultSet()[0];

    if (!isset($post)) {
        header("location: 404.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Post</title>
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

        <form action="update.php" method="POST">
            <input name="id" type="hidden" value="<?= $_GET['id'] ?>">

            <div>
                <label>Title</label> <br/>
                <input name="title" type="text" required value="<?= $post['title'] ?>">
            </div>

            <br/>

            <div>
                <label>Content</label> <br/>
                <textarea name="content" required><?= $post['body'] ?></textarea>
            </div>

            <br/>
            
            <button>Submit</button>
        </form>
    </main>
</body>

</html>