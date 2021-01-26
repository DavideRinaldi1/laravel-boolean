<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Il corso per diventare web developer</title>
</head>
<body>

        @include('layouts.header')
        

    <main>
        <div class="container">
            <h1>@yield('title', 'Boolean Careers')</h1>
        </div>
        @yield('content')
    </main>


        @include('layouts.footer')

</body>
</html>