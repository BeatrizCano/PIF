@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Book User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Book User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('book-users.update', $bookUser->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('book-user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
