<?php
use App\Session;
use App\Request;

Session::init();

$style = file_get_contents("../public/index.css") ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css"> -->
    <style>
        <?php echo $style ?>
    </style>
</head>
<body>
    <?php
    if (Session::get("session_login")) {
        require "Components/header.php";
    }else {
        require "Components/headerInit.php";
    }
    ?>
    <!-- Start Generation Here -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Bem-vindo ao nosso site!</h1>
            <h2 class="text-gray-800"><?php echo $this->title ?></h2>
            <p class="mt-4 text-lg text-gray-600">Estamos felizes em tê-lo aqui. Explore nossos produtos e serviços.</p>
            <a href="/produtos" class="mt-6 inline-block px-6 py-3 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Ver Produtos</a>
        </div>
    </div>
    <!-- End Generation Here -->
</body>
</html>