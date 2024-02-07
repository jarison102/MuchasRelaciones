@extends('layouts.app')

@section('template_title')
    Ventum
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ventum') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('venta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Venta</th>
										<th>Clienteid</th>
										<th>Nombre</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($venta as $ventum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ventum->id_venta }}</td>
											<td>{{ $ventum->Clienteid }}</td>
											<td>{{ $ventum->Nombre }}</td>
											<td>{{ $ventum->Tipo }}</td>

                                            <td>
                                                <form action="{{ route('venta.destroy',$ventum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('venta.show',$ventum->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('venta.edit',$ventum->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $venta->links() !!}
            </div>
        </div>
    </div>
@endsection
