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
        <div class="pt-5">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>