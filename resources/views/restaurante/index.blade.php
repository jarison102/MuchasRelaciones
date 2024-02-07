@extends('layouts.app')

@section('template_title')
    Restaurante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Restaurante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('restaurantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Restaurante</th>
										<th>Nombre</th>
										<th>Tipo</th>
										<th>Compraid</th>
										<th>Ventaid</th>
										<th>Empleadoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($restaurantes as $restaurante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $restaurante->id_Restaurante }}</td>
											<td>{{ $restaurante->Nombre }}</td>
											<td>{{ $restaurante->Tipo }}</td>
											<td>{{ $restaurante->Compraid }}</td>
											<td>{{ $restaurante->Ventaid }}</td>
											<td>{{ $restaurante->Empleadoid }}</td>

                                            <td>
                                                <form action="{{ route('restaurantes.destroy',$restaurante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('restaurantes.show',$restaurante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('restaurantes.edit',$restaurante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $restaurantes->links() !!}
            </div>
        </div>
    </div>
@endsection
