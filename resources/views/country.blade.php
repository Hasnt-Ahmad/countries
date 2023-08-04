<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="/css/welcome.css" rel="stylesheet">
        <link href="/css/country_page.css" rel="stylesheet">
        

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div>
            <nav>
                
            </nav>

        <br><br><br>
        

          @foreach ($groupedData as $countryName => $states)
          <h2>{{ $countryName }}</h2>
          <p>No. of States: {{ count($states) }}</p>
          <p>No. of Cities: {{ collect($states)->flatten()->count() }}</p>
          @foreach ($states as $stateName => $cities)
              <p>{{ $stateName }}</p>
              <ul>
                  @foreach ($cities as $city)
                      <li>{{ $city }}</li>
                  @endforeach
              </ul>
          @endforeach
          @endforeach

            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
