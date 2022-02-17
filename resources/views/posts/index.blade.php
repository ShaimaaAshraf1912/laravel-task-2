<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
               <title>Laravel</title>

    </head>
    <body>
       <h1>hello</h1>

<a href="/posts/create">Add new post</a>

       <table class="table">
 <thead>
    <tr>

        <th>id</th>
        <th>title</th>
         <th>description</th>
    </tr>
</thead>
  <tbody>
 @foreach ($posts as $post)
  <tr>

    <td>{{ $post['id'] }}</td>
    <td>{{ $post['title'] }}</td>
    <td>{{ $post['description'] }}</td>
    <td> <a href="/posts/{{ $post['id'] }}">show</a></td>
    <td> <a href="/posts/{{ $post['id'] }}/edit">edit</a></td>
   <td>

    <form action="/posts/{{ $post['id'] }}" method="post">

         @csrf
        @method("DELETE")
      <input type="submit" value="delete">
    </form>
</td>
   </tr>


@endforeach
</tbody>
    </table>




    </body>
</html>
