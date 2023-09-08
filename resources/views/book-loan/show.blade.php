@extends('layouts.app')

@section('template_title')
    {{ $bookLoan->name ?? "{{ __('Show') Book Loan" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Book Loan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('book-loans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Book User Id:</strong>
                            {{ $bookLoan->book_user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Loan Date:</strong>
                            {{ $bookLoan->loan_date }}
                        </div>
                        <div class="form-group">
                            <strong>Return Date:</strong>
                            {{ $bookLoan->return_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
