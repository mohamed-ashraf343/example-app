


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://unpkg.com/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Codezilla Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="">All Posts</a>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <form method="POST" action="">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" value="" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
{{--                    <option @if($user->id == $post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option>--}}
                    {{-- <option @selected($post->user_id == $user->id) value="{{$user->id}}">{{$user->name}}</option> --}}
                    <option value="ahmed"></option>
                     <option value="ahmed"></option>

            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
    </div>

<script src="https://unpkg.com/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


