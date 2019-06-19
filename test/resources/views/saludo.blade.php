<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Testing</title>
  </head>
  <body>
    <!-- <h1>Hola {{$name}}</h1> -->
    <table>
      @foreach($categories as $c)
      <tr>
        <td>{{$c->name}}</td>
      </tr>
      @endforeach
    </table>
    {!!$categories->render()!!}
  </body>
</html>
