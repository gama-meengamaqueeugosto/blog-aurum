<div class="card my-4">
    <h5 class="card-header">ASSINE NOSSO CONTEÚDO</h5>
    <div class="card-body">
        <form action="{{ route('leads.save') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <form id="form-assinar" name="assign" novalidate>
                        <div class="form-group">
                            <input class="form-control" id="nome" type="text" placeholder="Nome Completo *"
                                   required name="name" value="{{old('name')}}">
                            <p id="error-name" class="help-block text-danger">
                            @if($errors->has('name'))
                                {{ $errors->first('name')}}
                            @endif
                            @if(session()->has('error'))
                                {{ session()->get('error.name') }}
                            @endif
                            </p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="E-mail *"
                                   required name="email" value="{{old('email')}}">
                            <p class="help-block text-danger">
                                @if($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @endif
                            </p>
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