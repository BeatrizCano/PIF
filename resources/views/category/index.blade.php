@extends('layouts.app')

@section('template_title')
    Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categoría') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $category->name }}</td>

                                            <td>
                                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST" id="deleteForm{{ $category->id }}">
                                                    <a class="btn btn-sm btn-primary custom-btn" href="{{ route('categories.show',$category->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success custom-btn" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm custom-btn" onclick="confirmDelete({{ $category->id }})"><i class="fa fa-fw fa-trash"></i>{{_('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <script>
                                    function confirmDelete(categoryId) {
                                        if (confirm('¿Está seguro de que quiere eliminar este registro? Tenga en cuenta que se eliminarán todos los libros y prestamos asociados a dicha categoría. Recuerde que también puede "editar" la categoría a su gusto.')) {
                                            // Si el usuario hace clic en "Aceptar", envía el formulario
                                            document.getElementById('deleteForm' + categoryId).submit();
                                        } else {
                                            // Si el usuario hace clic en "Cancelar", no hace nada
                                            return false;
                                        }
                                    }
                            </script>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
