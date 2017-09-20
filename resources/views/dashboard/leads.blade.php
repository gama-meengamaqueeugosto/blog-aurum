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

                    <div class="col-md-12">
                        <p>Total de Leads {{ $leads->count() }}</p>
                        <table class="table table-bordered table-hover table-striped">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Dt. Cadastro</th>
                            <th>IP</th>
                            <th>Ações</th>
                            <tbody>
                                @foreach($leads as $lead)
                                    <tr>
                                        <td>
                                            {{ $lead->name }}
                                        </td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->type }}</td>
                                        <td>{{ $lead->created_at->format('d/m/Y H:i:s') }}</td>
                                        <td>{{ $lead->ip }}</td>
                                        <td>
                                            @if(auth()->check())
                                                {{-- <a href="" class="btn btn-default">Editar</a> --}}
                                                <a href="{{ route('site.leads.destroy', $lead->id) }}" class="btn btn-default">Excluir</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($leads->count() > 0)
                        {{ $leads->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
