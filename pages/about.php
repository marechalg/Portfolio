<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>À Prosos</title>
    <link rel="icon" href="/assets/icons/likoubra.png">

    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>

    <?php
        $currentPage = basename(__FILE__);
        require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/header.php'
    ?>

    <main></main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/partials/footer.php' ?>
</body>

</html>