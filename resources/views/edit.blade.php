<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container w-50">
        <h1>Book Store</h1>
        <form method="post" action="/edit" enctype="multipart/form-data">
            @csrf
            <!-- cross-site-request-forgery -->
            <input type="hidden" value="{{$book->id}}" name="id">
            <div class="form-group">
                <label for="my-input">Title</label>
                <input id="my-input" class="form-control" type="text" name="title" value="{{$book->title}}">
            </div>
            <div class="form-group">
                <label for="my-input">Author</label>
                <input id="my-input" class="form-control" type="text" name="author" value="{{$book->author}}">
            </div>
            <div class="form-group">
                <label for="my-input">Price</label>
                <input id="my-input" class="form-control" type="text" name="price" value="{{$book->price}}">
            </div>
            <div class="form-group">
                <label for="my-input">Images</label>
                <img src="{{asset($book->img)}}" height="50px">
                <input id="my-input" class="form-control" type="file" name="img" value="{{$book->img}}">
            </div>
            <button class="btn btn-warning">Submit</button>
        </form>

    </div>
</body>
</html>
