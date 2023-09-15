@extends('layouts.app')

@section('template_title')
    {{ $book->name ?? "{{ __('Show') Book" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Libro</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm custom-btn" href="{{ route('books.index') }}"> {{ __('Volver') }}</a>
                        </div>
                        <br>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoría Id:</strong>
                            {{ $book->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Autor@s:</strong>
                            {{ $book->authors }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $book->description }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $book->language }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $book->publisher }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $book->year }}
                        </div>
                        <div class="form-group">
                            <strong>Isbn:</strong>
                            {{ $book->isbn }}
                        </div>
                        <div class="form-group">
                            <strong>Imágen:</strong>
                            {{ $book->image }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $book->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $book->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $book->status }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $book->title }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
