<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="src/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/images/favicon/site.webmanifest">
    <link rel="stylesheet" href="src/views/css/imports.css">
    <link rel="stylesheet" href="src/views/css/layout.css">
    <link rel="stylesheet" href="src/modules/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="src/views/css/bootstrap_addons.css">
    <link rel="stylesheet" href="src/modules/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="src/modules/fontawesome/css/solid.css">
    <link rel="stylesheet" href="src/modules/fontawesome/css/brands.css">
    <script src="src/modules/bootstrap/bootstrap.js"></script>
</head>

<body class="bg-black text-white select-none">
    <?php require(COMPONENTS."header/header.php"); ?>
    <?php require(COMPONENTS."layout/alert.php"); ?>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center pt-3"> <?= $content; ?> </div>
    <?php require(COMPONENTS."footer/footer.php"); ?>
</body>

</html>