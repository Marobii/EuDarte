@section('form')
<!-- Form -->
<div class="container fcontacto">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
         <!--<h2>Contacto</h2>-->
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 addview">
            <address>
              <strong>EU D'ARTE</strong><br>
              Morada:  Travessa conselheiro veloso da cruz nº128 5º direito Trás 440-097 Vila Nova de Gaia<br>
            </address>
            <address>
                <strong>Contactos</strong><br>
                Telemóvel: 937 371 352<br>
                Email: assoc.eudarte@gmail.com<br>
              </address>
        </div>

        <div class="vl"></div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
            <h3 style="text-align:center">Envie-nos um e-mail</h3>
            {{-- Form model para adicionar algo a bd --}}
            {!! Form::open(array('url' => ['/contacto/Email/store'],'method'=>'post')) !!}
                <div class="form-group">
                    <label class="form-label" for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="nome" placeholder="Nome" tabindex="1" required oninvalid="this.setCustomValidity('Introduza um nome')">
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required oninvalid="this.setCustomValidity('Introduza um email')">
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Assunto</label>
                    <input type="text" class="form-control" id="subject" name="assunto" placeholder="Assunto" tabindex="3" oninvalid="this.setCustomValidity('Introduza um assunto')">
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Mensagem</label>
                    <textarea rows="5" cols="50" name="mensagem" class="form-control" id="message" placeholder="Messagem..." tabindex="4" required oninvalid="this.setCustomValidity('Introduza a sua mensagem')"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-start-order">Enviar</button>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
  </div>
<!-- Form -->
