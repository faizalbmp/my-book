<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $book->title }}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $book->author }}</p>
</div>

<!-- Date Published Field -->
<div class="form-group">
    {!! Form::label('date_published', 'Date Published:') !!}
    <p>{{ $book->date_published }}</p>
</div>

<!-- Number Of Pages Field -->
<div class="form-group">
    {!! Form::label('number_of_pages', 'Number Of Pages:') !!}
    <p>{{ $book->number_of_pages }}</p>
</div>

<!-- Type Of Book Field -->
<div class="form-group">
    {!! Form::label('type_of_book', 'Type Of Book:') !!}
    <p>{{ $book->type_of_book }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $book->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $book->updated_at }}</p>
</div>

