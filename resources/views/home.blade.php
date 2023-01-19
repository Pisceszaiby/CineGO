<!doctype html>
<html lang="en">

<head>
  <title>CineGo</title>
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
    <div class="container-fluid">
<h1>Welcome to CineGo</h1>
<h2>Select the Movie you want to watch</h2>

@foreach ($movie as $item)
<div class="form-check">
  <input class="form-check-input" onclick="getRadioVal()" type="radio" name="movie" value= "{{ $item->ID }}" id={{ $item->ID }}>
  <label class="form-check-label" for="movie">
    {{ $item->Name }}
  </label>
</div>

@endforeach
<div id="Selection" style="display:none">
Movie:
</div>
<div id="showtime" style="display:none">
<h2 >Showtimes: </h2>
@foreach ($showtime as $item)
<div class="form-check">
  <input class="form-check-input" type="radio" name="showtime" value= "{{ $item->ID }}" id={{ $item->ID }}>
  <label class="form-check-label" for="movie">
   Time:  {{ $item->Time }}
   Date: {{ $item->Date }}
  </label>
</div>

@endforeach
</div>
<script>
    function getRadioVal() {
        var movieID;
        var ele = document.getElementsByName('movie');
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked){
            document.getElementById("Selection").innerHTML= "Movie: "+ele[i].value;
            movieID=ele[i].value;
            }
        }
        document.getElementById("showtime").style.display = "block";

    }
</script>



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
