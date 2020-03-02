<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_published', 'Date Published:') !!}
    {!! Form::date('date_published', null, ['class' => 'form-control','id'=>'date_published']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_published').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Number Of Pages Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_pages', 'Number Of Pages:') !!}
    {!! Form::number('number_of_pages', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Of Book Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_of_book', 'Type Of Book:') !!}
    {!! Form::select('type_of_book', array('one_of_novel'=>'one_of_novel','documentation'=>'documentation','other'=>'other'), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('books.index') }}" class="btn btn-default">Cancel</a>
</div>
