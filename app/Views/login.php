<?php
use App\Session;
use App\Request;

Session::init();

$style = file_get_contents("../public/index.css") ;

if (isset($_GET["error"])) {

    switch ($_GET["error"]) {
        case 0:
            $error = "Usuário não encontrado";
            break;
        case 1:
            $error = "Coloque seu Email";
            break;
        case 2:
            $error = "Coloque sua Senha";
        default:
    }
}

if (Session::get("session_login")) {
    Request::redirect("/");
}
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
    <?php require "Components/headerInit.php" ?>
    <!-- Start Generation Here -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Bem-vindo ao nosso site!</h1>
            <h2 class="text-gray-800"><?php echo $this->title ?></h2>
            <form action="login/create" method="post" class="mt-8 space-y-6">
                <fieldset class="border-0">

                    <legend class="text-2xl font-semibold text-gray-800 mb-6 text-center">Faça seu Login</legend>
                    <?php if (isset($error)) echo "<p class='text-red-600'>$error</p>" ?>
                    <div class="flex flex-col space-y-2">
                        <label for="email" class="text-left text-gray-600">Email</label>
                        <input type="email" name="email" id="email" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 hover:bg-gray-300 duration-100">
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="senha" class="text-left text-gray-600">Senha</label>
                        <input type="password" name="senha" id="senha" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 hover:bg-gray-300 duration-100">
                    </div>

                    <button type="submit" class="w-full mt-6 px-6 py-3 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition-colors">
                        Entrar
                    </button>

                </fieldset>
            </form>
        </div>
    </div>
    <!-- End Generation Here -->
</body>
</html>