<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404</title>
    <style>
        <?php echo file_get_contents("App/Controllers/Init/index.css") ?>
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-red-600">Erro 404</h1>
            <h2 class="text-red-500 mt-4"> <?php echo $this->msg ?> </h2>
            <a href="/" class="mt-6 inline-block px-6 py-3 text-white bg-red-500 rounded-lg hover:bg-red-600">Voltar para a Página Inicial</a>
        </div>
    </div>
</body>
</html>