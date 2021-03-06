<?php
    require 'connect.php';
    
    $pdo = connect();    
    $queryResPosts = $pdo->query('SELECT * FROM posts;');
    $queryResUsers = $pdo->query('SELECT first_name, last_name FROM users;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Post</title>
    <style type="text/css">
        li {
            position: relative;
            display: block;
            padding: 0.5rem 1rem;
            color: #212529;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.php">Secret</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="get-post.php">Blog</a>
                <a class="nav-link" href="save-user-form.php">Registration of users</a>
                <a class="nav-link" href="get-users.php">See users</a>
                <a class="nav-link" href="save-form-post.php">Post</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <ul class="list-group text-center mt-5">
        <?php
                foreach($queryResPosts as $row) {
                    echo "<li> <strong>Id:</strong> {$row["id"]}   <strong>Title:</strong> {$row["title"]}  <strong>Content:</strong> {$row["content"]}   <strong>User:</strong> {$row["user_id"]}</li>";
                }
        ?>
        </ul>
    </div>
</body>
</html>