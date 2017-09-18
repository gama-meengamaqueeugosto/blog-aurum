<div class="card my-4">
    <h5 class="card-header">ASSINE NOSSO CONTEÚDO</h5>
    <div class="card-body">
        <form action="{{ route('leads.save') }}" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <form id="form-assinar" name="assign" novalidate>
                        <div class="form-group">
                            <input class="form-control" id="nome" type="text" placeholder="Nome *"
                                   required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="E-mail *"
                                   required
                                   data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        <i class="ion-paper-airplane"></i>
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>