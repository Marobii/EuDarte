<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EU D'ARTE - Associação para a Integração de Jovens</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dee30bf8aa.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/back.css">

    <!-- Logo da página -->
    <link rel="shortcut icon" type="image/x-icon" href="logo/perfilFacebook.png"/>

    </head>
    <body>

<!-- Admin Menu -->
@include('inc.admmenu')
<!-- Admin Menu -->

<!-- Form -->
<div class="container mform">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
            <h3 style="text-align:center; margin-bottom: 40px;">Editar dados Página Principal</h3>
            <form id="contact-form" class="form" action="#" method="POST" role="form">
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Upload de Imagem</label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Texto Boas Vindas</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Bem-Vindo à Eu D'ARTE!" tabindex="1">
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Subtítulo</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Nossa Missão" tabindex="3" >
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Descrição</label>
                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Messagem..." tabindex="4"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-start-order">Enviar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
<!-- Form -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>
</html>
