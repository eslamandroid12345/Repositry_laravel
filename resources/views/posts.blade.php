<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">body</th>
        <th scope="col">description</th>
        <th scope="col">updated_at</th>
        <th scope="col">user</th>
    </tr>
    </thead>

      @foreach($posts as $post)

        <tbody>
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
            <td>{{$post->user->name}}</td>

        </tr>

        </tbody>

        @endforeach
</table>

<div class="container">
    {{$posts->links()}}
</div>
</body>
</html>