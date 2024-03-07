<?php
require_once __DIR__ . "/data.php";

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
    <table class="table">
        <thead >
            <th>Title</th>
            <th>Type</th>
            <th>Language</th>
            <th>Season</th>
            <th>Episodes</th>
            <th>Vote</th>
        </thead>
        <tbody >
            <?php foreach ($movies as $movie): ?>
                <tr>
                    <td> <?= $movie->title ?> </td>
                    <td> <?= $movie->type ?> </td>
                    <td> <?= $movie->lang ?> </td>
                    <td> <?= $movie->season ?> </td>
                    <td> <?= $movie->eps ?> </td>
                    <td> <?= $movie->vote ?> </td>                                               
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>

</html>