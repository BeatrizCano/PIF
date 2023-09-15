@extends('layouts.app')

@section('template_title')
    {{ $bookUser->name ?? "{{ __('Show') Book User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Préstamo</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary " href="{{ route('book-users.index') }}"> {{ __('Volver') }}</a>
                        </div>
                        <br>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $bookUser->book_id }}
                        </div>
                        <div class="form-group">
                            <strong>Título Libro:</strong>
                            {{ $bookUser->book ? $bookUser->book->title : 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $bookUser->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $bookUser->user ? $bookUser->user->name : 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $bookUser->bookLoan ? $bookUser->bookLoan->loan_date : 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolución:</strong>
                            {{ $bookUser->bookLoan ? $bookUser->bookLoan->return_date : 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $bookUser->book->status ?? 'N/A' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
