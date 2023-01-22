<!doctype html>
<html lang="en">

<head>
  <title>Booking</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

@php
    $array=explode(',', $seats[0]->Booking);
    //str_split($initial_string, $splitting_length)
    $firstElem=str_split($array[0]);
    $lastElem=str_split($array[count($array)-1]);
    $array[0]=$firstElem[1];
    $array[count($array)-1]=$lastElem[0];
@endphp

<div class="container-fluid">
    <div class="row">
@foreach ($array as $seat)
@if ($seat=="0")
<a href=""><button class="btn col-lg-4" onclick="turnGreen(this)" style="background-color: purple">0</button>
</a>
  @elseif ($seat=="1")
  <a href="">  <button class="btn " disabled style="background-color: red">1</button>
  </a>



@endif
{{-- @php
    if ($loop->iteration % 3 == 0){
        echo "<br>";
    }
@endphp --}}
@endforeach
</div>
</div>


  </main>
  <script>
    selectedSeats = [];

    function turnGreen(element) {


        if (selectedSeats.includes(element)) {
            element.style.backgroundColor = "purple";
            const index = selectedSeats.indexOf(element);
            selectedSeats.splice(index, 1);
        }
        else
        {
            element.style.backgroundColor = "green";
            selectedSeats.push(element);
        }
  console.log(selectedSeats);
    };
 </script>
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
