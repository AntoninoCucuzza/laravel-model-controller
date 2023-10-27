<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <nav class="nav align-items-center">
            <a href="#" class="nav-link active ">
                <h1>Logo film</h1>
            </a>
            <a class="nav-link " href="#" aria-current="page">Active link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                @forelse ($movies as $i => $movie)
                    <div class="col-6 p-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <h2>
                                    {{ $movie->title }}
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="img-fluid"
                                            src="https://picsum.photos/200/300?random={{ $i }}"
                                            alt="">
                                    </div>
                                    <div class="col-8">
                                        <h3>trama</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis,
                                            exercitationem, saepe enim iste ab quasi quos repellat nam perspiciatis, est
                                            error ut? Soluta animi voluptate deserunt optio ut architecto modi.
                                        </p>
                                        <h3>Random Cit</h3>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, sequi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <h1>we non ci stanno film we </h1>
                @endforelse
            </div>

        </div>
    </main>

</body>

</html>
