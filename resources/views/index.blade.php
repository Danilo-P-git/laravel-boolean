<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
  <body>
    <div class="wrapper">


      <div class="name">
        @foreach ($students as $student)
          <p> <strong>{{$student->name}}</strong> </p>
        @endforeach
      </div>

      <div class="lastname">
        @foreach ($students as $student)
          <p> <strong>{{$student->lastname}}</strong> </p>
        @endforeach
      </div>

      <div class="date_of_birth">
        @foreach ($students as $student)
          <p> <strong>{{$student->date_of_birth}}</strong> </p>
        @endforeach
      </div>
    </div>
  </body>
</html>
