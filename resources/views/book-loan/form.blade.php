<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('book_user_id') }}
            {{ Form::text('book_user_id', $bookLoan->book_user_id, ['class' => 'form-control' . ($errors->has('book_user_id') ? ' is-invalid' : ''), 'placeholder' => 'Book User Id']) }}
            {!! $errors->first('book_user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('loan_date') }}
            {{ Form::text('loan_date', $bookLoan->loan_date, ['class' => 'form-control' . ($errors->has('loan_date') ? ' is-invalid' : ''), 'placeholder' => 'Loan Date']) }}
            {!! $errors->first('loan_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('return_date') }}
            {{ Form::text('return_date', $bookLoan->return_date, ['class' => 'form-control' . ($errors->has('return_date') ? ' is-invalid' : ''), 'placeholder' => 'Return Date']) }}
            {!! $errors->first('return_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>