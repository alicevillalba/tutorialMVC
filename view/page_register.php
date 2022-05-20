<?php
header("Content-type:text/html; charset=utf8");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Udemy</title>

    <!-- Ícone da janela do navegador -->
    <link rel="shortcut icon" href="../resources/favicon.png" type="image/x-icon">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Ícones do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- GoogleFonts - OpenSans -->
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

    <link rel="shortcut icon" href="resources/bellboy_hotel_worker_person_man_avatar_icon_196787" type="image/x-icon">

    <!-- Folha de Estilo (CSS) -->
    <style type="text/css">
        body{
            margin: 20px;
            background-color: #ffffff;
        }

        * {
            font-family: 'Open Sans', sans-serif;
        }

        h2 {
            font-family: 'Open Sans', sans-serif;
        }

        .thead {background-color: #f7f7f7;}

    </style>

</head>
<body>
    <!-- Dentro do container será criada toda a página -->
    <div class="container">
        <h2 class="py-5 text-center">Novo Usuário</i></h2>
    </div>

    <form method="POST" action="../controller/insert_client.php">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome <i class="bi bi-person"></i></label>
                <input type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i></label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-4">
                <label for="cpf" class="form-label">Cpf <i class="bi bi-credit-card-2-front"></i></label>
                <input type="text" class="form-control" name="cpf" required>
            </div>
            <div class="col-md-4">
                <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"></i></label>
                <input type="date" class="form-control" name="birth" required>
            </div>
            <div class="col-md-4">
                <label for="phone" class="form-label">Telefone <i class="bi bi-whatsapp"></i></label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">Endereço <i class="bi bi-map"></i></label>
                <input type="text" class="form-control" name="address" required>
            </div>

            <hr class="my-4">

            <div class="col-md-12 text-end">
                <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                <a class="btn btn-success btn-lg" href="../index.php">Cancelar</a>
            </div>
        </div>
    </form>


    <!-- JQuery e JQueryMask -->
    <script type="text/javascript" src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudfare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
</body>
</html>