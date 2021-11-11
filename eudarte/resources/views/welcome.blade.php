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
    <link rel="stylesheet" href="css/css.css">

    <!-- Logo da página -->
    <link rel="shortcut icon" type="image/x-icon" href="logo/perfilFacebook.png"/>

    </head>
    <body>

<!-- Menu -->
@include('inc.menu')
<!-- Menu -->


<header class="mastheadindex">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h2 class="bannertitle">Bem-Vindo à Eu D'ARTE!</h2>
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="bannertext mb-4">Associação para a Integração de Jovens</p>
            </div>
        </div>
    </div>

</header>


<!-- Middle Section -->
<section class="page-mission bg-prim" id="aboutz">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Nossa Missão</h2>
                <!--<hr class="divider light my-4" />-->
                <p class="text-white-50 mb-4">A Associação visa promover e disponibilizar condições que contribuam para
                    uma vida com qualidade através da integração dos jovens com necessidades adicionais de suporte de
                    forma a permitir uma valorização pessoal e o aproveitamento das suas capacidades remanescentes.
                    Propõe ajudar a descobrir formas de apoio que visam o desenvolvimento dos Jovens e possibilitar a
                    procura de caminhos e ferramentas para os manter ativos, interessados, criativos e criadores.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Middle Section -->


<!-- Footer -->
@include('inc.footer')
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>
</html>
