<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('book_id') }}
            {{ Form::select('book_id', $books, $bookUser->book_id, ['class' => 'form-control' . ($errors->has('book_id') ? ' is-invalid' : ''), 'placeholder' => 'Book Id']) }}
            {!! $errors->first('book_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::select('user_id', $users, $bookUser->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <br>
        <div class="form-group">
            {{ Form::label('loan_date') }}
            {{ Form::text('loan_date', $loanDate, ['class' => 'form-control']) }}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('return_date') }}
            {{ Form::text('return_date', $returnDate, ['class' => 'form-control']) }}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status', ['Disponible' => 'Disponible', 'No Disponible' => 'No Disponible'], $status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>