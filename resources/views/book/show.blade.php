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
                            <span class="card-title">{{ __('Show') }} Book</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $book->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Authors:</strong>
                            {{ $book->authors }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $book->description }}
                        </div>
                        <div class="form-group">
                            <strong>Language:</strong>
                            {{ $book->language }}
                        </div>
                        <div class="form-group">
                            <strong>Publisher:</strong>
                            {{ $book->publisher }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $book->year }}
                        </div>
                        <div class="form-group">
                            <strong>Isbn:</strong>
                            {{ $book->isbn }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $book->image }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $book->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $book->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $book->status }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $book->title }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
