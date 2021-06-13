<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>

    <section style="padding-top:60px;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header">
                  Add Post
              </div>
               <div class="card-body">
                 @if(Session::has('post_created'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('post_created')}}
                    </div>
                  @endif
                <form method="POST" action="{{route('post.create')}}">
                    @csrf
                  <div class="form-group">
                  <label for="title">Post title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Post title"/>
                </div><br>
                  <div class="form-group">
                  <label for="body">Post Description</label>
                  <textarea name="body" class="form-control" row="3"></textarea>
                </div><br>
                  <button type="submit" class="btn btn-success">Add Post</button>
                </form>
              </div>
            </div>
          </div>
         </div>
       </div>
    </section>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
