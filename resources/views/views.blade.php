<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <a href="/" class="btn btn-warning">Add Book</a>
        <table class="table table-light">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Poster</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>

                @foreach($book as $value)
                <tr>
                    <th>{{ $value->id }}</th>
                    <th>{{ $value->title }}</th>
                    <th>{{ $value->author }}</th>
                    <th>{{ $value->price }}</th>
                    <th><img src="{{ $value->img }}" height="50px"></th>
                    <th><a href="/edit/{{$value->id}}" class="btn btn-success">Edit</a>
                <a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>


</html>
