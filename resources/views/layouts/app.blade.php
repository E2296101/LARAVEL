<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body class="bg-custom">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">MAISONNEUVE</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-link text-white" href="{{route('forum.index')}}">@lang('index.text_forum')</a>
                    <a class="nav-link text-white" href="/">@lang('index.text_repertoire')</a>
                </div>
                <div class="navbar-nav ms-auto d-flex align-items-center">
                 {!! Auth::user() ? '<a class="nav-link text-white" href="/deconnexion"><i class="fas fa-sign-out-alt"></i> ' . Auth::user()->etudiant->nom.'</a>'
                 : '<a class="nav-link text-white" href="'.route('login').'"><i class="fas fa-user text-white"></i>'. __('index.text_login') .'</a>' !!}
                   
                    <span class="nav-link text-white">|</span>
                    <a class="nav-link text-white" href="{{route('lang', 'en')}}">EN</a> /
                    <a class="nav-link text-white" href="{{route('lang', 'fr')}}">FR</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-6 mt-5">
                    @yield('titleHeader')
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>