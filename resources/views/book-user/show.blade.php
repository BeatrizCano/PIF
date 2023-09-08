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
                            <span class="card-title">{{ __('Show') }} Book User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('book-users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Book Id:</strong>
                            {{ $bookUser->book_id }}
                        </div>
                        <div class="form-group">
                            <strong>Book Title:</strong>
                            {{ $bookUser->book ? $bookUser->book->title : 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $bookUser->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Name:</strong>
                            {{ $bookUser->user ? $bookUser->user->name : 'N/A' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
