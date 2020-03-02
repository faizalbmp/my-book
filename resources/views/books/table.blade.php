<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Author</th>
        <th>Date Published</th>
        <th>Number Of Pages</th>
        <th>Type Of Book</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->date_published }}</td>
            <td>{{ $book->number_of_pages }}</td>
            <td>{{ $book->type_of_book }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('books.edit', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
