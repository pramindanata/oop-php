<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?= asset("css/bootstrap.min.css") ?>">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("/") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("share") ?>">Share</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("user/register") ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("user/login") ?>">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">
        <?php require($view) ?>
    </main>

    <script src="<?= asset("js/jquery.js") ?>"></script>
    <script src="<?= asset("js/popper.min.js") ?>"></script>
    <script src="<?= asset("js/bootstrap.min.js") ?>"></script>
</body>
</html>