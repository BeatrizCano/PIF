@extends('layouts.app')

@section('template_title')
    Book
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
										<th>Categoría</th>
                                        <th>Título</th>
										<th>Autor@s</th>
										<th>Descripción</th>
										<th>Idioma</th>
										<th>Editorial</th>
										<th>Año</th>
										<th>Isbn</th>
										<th>Imágen</th>
										<th>Precio</th>
										<th>Stock</th>
										<th>Estado</th>										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{ $book->category->name }}
                                            </td>

                                            <td>{{ $book->title }}</td>
											<td>{{ $book->authors }}</td>
											<td>{{ $book->description }}</td>
											<td>{{ $book->language }}</td>
											<td>{{ $book->publisher }}</td>
											<td>{{ $book->year }}</td>
											<td>{{ $book->isbn }}</td>
											<td>{{ $book->image }}</td>
											<td>{{ $book->price }}</td>
											<td>{{ $book->stock }}</td>
											<td>{{ $book->status }}</td>											

                                            <td>
                                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary custom-btn" href="{{ route('books.show',$book->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success custom-btn" href="{{ route('books.edit',$book->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm custom-btn"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection
