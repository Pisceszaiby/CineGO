<!doctype html>
<html lang="en">

<head>
  <title>Showtime</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
@php
    $dates=[];
@endphp
@foreach ($showtimes as $show)
@php
    if (!in_array($show->Date, $dates))
    $dates[]=$show->Date;
@endphp
@endforeach



<div class="accordion accordion-flush" id="accordionFlushExample">
@foreach ($dates as $date)
@php
@endphp
<div class="accordion-item">
    <h2 class="accordion-header" id="{{$date}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a{{$date}}" aria-expanded="false" aria-controls="a{{$date}}">
            {{$date}}
          </button>
        </h2>

    @foreach ($showtimes as $show)
        @if ($show->Date==$date)
        <div id="a{{$date}}" class="accordion-collapse collapse" aria-labelledby="{{$date}}" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><a href="/booking/{{$show->ID}}">{{$show->Time}} </a> </div>
          </div>

        @endif
    @endforeach
@endforeach
</div>







  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
