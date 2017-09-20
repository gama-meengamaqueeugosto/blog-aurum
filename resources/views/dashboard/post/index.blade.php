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
                  <li class="active">Listagem</li>
                </ol>
              </div>
            </div>
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <a href="{{ route('adm.post.create') }}" class="btn btn-primary pull-right">Adicionar Post</a>    
                    </div> 
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover table-striped">
                            <th></th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Data Postagem</th>
                            <th>Ações</th>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <img width="70" src="{{ $post->image }}" alt="">
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author }}</td>
                                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('adm.post.edit', $post->id) }}" class="btn btn-default">Editar</a>
                                            <a href="{{ route('adm.post.destroy', $post->id) }}" class="btn btn-default">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
