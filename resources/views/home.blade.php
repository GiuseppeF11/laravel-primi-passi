@php

$pages = [
[
'name' => 'Home'
],
[
'name' => 'Opportunity'
],
[
'name' => 'About'
],
[
'name' => 'Info'
],
[
'name' => 'Contacts'
],
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-primary-subtle">
    <div class="container" id="app">
        <header class="mb-5">
            <h1 class="text-center mb-5">@{{message}}</h1>
            <ul class="row p-3 list-unstyled text-center justify-content-around bg-light rounded-3 ">
                @foreach ($pages as $li)
                <li class="col-auto px-3 border border-black rounded-3">
                    <a href=""> link </a>
                </li>
                @endforeach
                <li class="col-auto px-3">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </header>

        <main>
            <div class="row row-cols-5">
                @for ($i = 0; $i < 10; $i++) 
                    <div class="col mb-3">
                        <div class="card">
                            <div class="img" style="width: 100%;">
                                <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-featured.png" alt="Laravel" style="width: 100%; border-radius:5px;">
                            </div>
                            <div class="text-center py-2 ">
                                <h4>This is Laravel</h4>
                                <p>The last lesson for this course</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </main>
    </div>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- MY JS -->
    <script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>