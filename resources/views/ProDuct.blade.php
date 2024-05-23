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
        <div class="p-3">
            @foreach ($posts as $post)
            <div class="col-12 shadow-sm bg-white p-2 d-flex mb-2 brs">
                <div class="image">
                    <img class="brs" src="{{}}" width="100%" height="100%">
                </div>
                <div class="px-2 content">
                    <p class = "mb-1 fw600">Tital</p>
                    <p class = "mb-1 text-cl fw200">hello</p>
                    <div>
                        <p class="text-success mb-0 fw600 f290 float-start">2003</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>