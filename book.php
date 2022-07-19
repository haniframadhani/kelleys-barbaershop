<?php
require 'asset/function/functions.php';
readBook();
into2d();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book page</title>
    <link rel="stylesheet" href="asset/style.css">
    <style>
        body {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <a href="index.php">back to home</a>
        <div class="container table mt-2">
            <table>
                <tr>
                    <th>name</th>
                    <th>phone number</th>
                    <th>date</th>
                </tr>
                <?php foreach ($new as $n) : ?>
                    <tr>
                        <td><?= $n[0] ?></td>
                        <td><?= $n[1] ?></td>
                        <td><?= $n[2] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
</body>

</html>