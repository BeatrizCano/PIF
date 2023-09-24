<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('categoría id') }}
            {{ Form::select('category_id', $categories,  $book->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoría Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('título') }}
            {{ Form::text('title', $book->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Título']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('autor@s') }}
            {{ Form::text('authors', $book->authors, ['class' => 'form-control' . ($errors->has('authors') ? ' is-invalid' : ''), 'placeholder' => 'Autores']) }}
            {!! $errors->first('authors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('description', $book->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('language', $book->language, ['class' => 'form-control' . ($errors->has('language') ? ' is-invalid' : ''), 'placeholder' => 'Idioma']) }}
            {!! $errors->first('language', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('publisher', $book->publisher, ['class' => 'form-control' . ($errors->has('publisher') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('publisher', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('year', $book->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isbn') }}
            {{ Form::text('isbn', $book->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imágen') }}
            {{ Form::text('image', $book->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Imágen']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $book->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $book->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('status', ['Disponible' => 'Disponible', 'No Disponible' => 'No Disponible'], $status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Envíar') }}</button>
    </div>
</div>