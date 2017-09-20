@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-body">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Posts</a></li>
                  @if($edit)
                    <li class="active">{{ $post->title }}</li>
                    <li class="active">Editar</li>
                  @else
                    <li class="active">Criar</li>
                  @endif
                </ol>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Editar post</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('adm.post.update',$post->id ) }}" method="post" id="form-associated" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <fieldset>
                            @include('dashboard.post.fields')
                        </fieldset>

                        <hr>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary js-btn-submit" data-loading-text="Carregando...">Salvar</button>
                                <a href="{{ route('adm.post.index') }}" class="btn">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
