<!DOCTYPE html>
<html lang="en">

<head>
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

        <header class="mastheadqa">
        </header>

        <div class="container qabox">
            <h5 class="qatext">* Todas estas respostas não são de terapeutas, mas de uma mãe ou pai.</h5>
            <div class="accordion" id="accordion">
                <div class="card">
                    @foreach($qas as $index => $faq)
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-parent="#accordion" aria-expanded="false" aria-controls="collapseTen"  href="#collapse-{{ $index }}">
                                {{ $faq->pergunta }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-{{ $index }}" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            {{ $faq->resposta }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



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
