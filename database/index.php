<?php
require_once __DIR__."/vendor/autoload.php";

session_start();

use Classes\Database;

$database = new Database();

$database->query("SELECT * FROM posts");
$posts = $database->resultSet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <main>
        <h1>Posts</h1>
        <a href="create.php">Create a Post</a>
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<p>{$_SESSION['msg']}</p>";
    
                session_destroy();
            }

            if (count($posts) > 0) {
                foreach ($posts as $post) {
                    ?>
                    <h3><?= $post['title'] ?></h3>
                    <p><?= $post['body'] ?></p>

                    <div style="display: flex">
                        <form action="./edit.php" method="GET">
                            <input type="hidden" name="id" value="<?= $post["id"] ?>">

                            <button>Ubah</button>
                        </form>&nbsp

                        <form action="./destroy.php" method="POST">
                            <input type="hidden" name="id" value="<?= $post["id"] ?>">

                            <button>Hapus</button>
                        </form>
                    </div>
                    <?php
                }
            } else {
                echo "-";
            }
            ?>

    </main>    
</body>
</html>