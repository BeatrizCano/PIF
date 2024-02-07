<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('libro id') }}
            {{ Form::select('book_id', $books, $bookUser->book_id, ['class' => 'form-control' . ($errors->has('book_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('book_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br>
        <div class="form-group">
            {{ Form::label('usuario id') }}
            {{ Form::select('user_id', $users, $bookUser->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <br>
        <div class="form-group">
            {{ Form::label('fecha entrega') }}
            {{ Form::text('loan_date', $loanDate, ['class' => 'form-control' , 'placeholder' => 'yyyy/mm/dd']) }}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('fecha devolución') }}
            {{ Form::text('return_date', $returnDate, ['class' => 'form-control' , 'placeholder' => 'yyyy/mm/dd']) }}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('status', ['Disponible' => 'Disponible', 'No Disponible' => 'No Disponible'], optional($bookUser->book)->status ?? '', ['class' => 'form-control' . ($errors->has                       ('status') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Envíar') }}</button>
    </div>
</div>
