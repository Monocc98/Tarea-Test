<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('categories')}}" method="post">
      <label for="location">Location pick-up</label>
      <select class="" id="location" name="">
        @foreach($locations as $l)
        <option value="">{{$l->city}}</option>
        @endforeach
      </select>
      <label for="fechaS">Pick-up date</label>
      <input type="date" name="" id="fechaS" value="">
      <label for="location">Location drop-off</label>
      <select class="" id="location" name="">
        @foreach($locations as $l)
        <option value="">{{$l->city}}</option>
        @endforeach
      </select>
      <label for="fechaD">Drop-off date</label>
      <input type="date" name="" id="fechaD" value="">
      <button type="submit" name="button">Search</button>
    </form>
  </body>
</html>
