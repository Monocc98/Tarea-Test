<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>Model</th>
        <th>Vehicles</th>
      </thead>
      @foreach($categories as $c)
      <tr>
        <td>{{$c->name}}</td>
        <td>{{$c->cars->count()}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
