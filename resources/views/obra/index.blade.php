@extends('layouts.app')

@section('template_title')
    Obras
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
@endsection





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Obras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('obras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-2">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table id="articulos" class="table table-striped table-hover" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
									<th >Categoria</th>
									<th >Titulo</th>
									<th >Descripcion</th>
									<th >Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obras as $obra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $obra->categoria->nombre }}</td>
										<td >{{ $obra->titulo }}</td>
										<td >{{ $obra->descripcion }}</td>
										<td >{{ $obra->precio }}</td>
										

                                            <td>
                                                <form action="{{ route('obras.destroy', $obra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('obras.show', $obra->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('obras.edit', $obra->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $obras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

<script>
  
//   new DataTable('#articulos');

    $(document).ready(function() {
    new DataTable('#articulos', {
        paging: true,            
        ordering: false,         
        info: true,             
        searching: true,        
        pageLength: 5,         
        lengthMenu:[[5,10,50,-1],[5,10,50,'todo']],
        language: {             
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "search": "Buscar:",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "No hay registros disponibles",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior",
            }
        },
        columnDefs: [
            { targets: 0, orderable: true }, 
            { targets: 1, visible: true }     
        ]
    });
});




</script>
@endsection