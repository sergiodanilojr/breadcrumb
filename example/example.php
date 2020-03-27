<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Trying the BreadCrumb Component</title>
</head>

<body>
<?php
require __DIR__ . "/../vendor/autoload.php";

$breadcrumb = (new \ElePHPant\Breadcrumb\Breadcrumb(null))
    ->base("https://www.sergiodanilojr.com.br", "Home")
    ->addCrumb("Blog", "blog")
    ->addCrumb("Nome do Artigo", "url-do-artigo")
    ->addCrumb("Comentários", "comments");
?>

<?= $breadcrumb->render(); ?>
<?php var_dump($breadcrumb->allCrumbs()); ?>

</body>
</html>
