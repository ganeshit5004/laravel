<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class='navbar navbar-expand-lg bg'>
        <div class="container">
            <a href="#" class="navbar-brand">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent'>
            <span class="navbar-toggler-icon"></span></button>
            <div class="cloapse navbar-collapse" id='navbarSupportedContent'>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                </ul>
                <form action="{{route('logout')}}" method="POST"  class='d-flex' role='search'>
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type='submit'>Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>welcome {{Auth::user()->name}}</h1>
    </div>
    
</body>
</html>