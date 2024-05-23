
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
<body>
    <div class="p-3">
        <nav class="navbar navbar-expand-lg navbar-light navbar-light" style="background-color: #e3f2fd;">
            <a class="nav-item nav-link" href="{{ url('/welcome')}}" >Welcome</a>
            <a class="nav-item nav-link" href="{{ url('/')}}">Home Page</a>
            <a class="nav-item nav-link" href="{{ url('/product')}}">Product card</a>
        </nav>
        <div class = "pt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->first_name }}</td>
                        <td>{{ $post->last_name }}</td>
                        <td>{{ $post->password }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>