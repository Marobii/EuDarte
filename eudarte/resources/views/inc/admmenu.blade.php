@section('admmenu')
<!-- Admin menu -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center">
    <div class="container">
        <a href="/backoffice/Team/index" class="navbar-brand d-flex w-50 mr-auto">EuDarte Painel de Administrador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <!-- Equipa -->
                <li class="nav-item ">
                    <a class="nav-link " href="{{ url('backoffice/Team/index') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Equipa
                    </a>
                  </li>

                  <!-- Qa -->
                  <li class="nav-item ">
                  <a class="nav-link " href="{{ url('backoffice/Qa/index') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        QA
                    </a>
                  </li>

                  <!-- Email -->
                  <li class="nav-item ">
                    <a class="nav-link " href="{{ url('backoffice/Email/index') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          Email
                      </a>
                    </li>


            </ul>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" style="color: white;font-size:18px;">Logout
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>
        </div>
    </div>
</nav>
<!-- Admin menu -->
