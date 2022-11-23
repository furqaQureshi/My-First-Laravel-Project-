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
        <form method="post" action="/add" enctype="multipart/form-data">
            @csrf
            <!-- cross-site-request-forgery -->
            <div class="form-group">
                <label for="my-input">Title</label>
                <input id="my-input" class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label for="my-input">Author</label>
                <input id="my-input" class="form-control" type="text" name="author">
            </div>
            <div class="form-group">
                <label for="my-input">Price</label>
                <input id="my-input" class="form-control" type="text" name="price">
            </div>
            <div class="form-group">
                <label for="my-input">Images</label>
                <input id="my-input" class="form-control" type="file" name="img">
            </div>
            <button class="btn btn-warning">Submit</button>
        </form>

    </div>
</body>
</html>
