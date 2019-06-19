<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <table>
      <thead>
        <th>Location pick-up</th>
        <th>Pick-up</th>
        <th>Location drop-off</th>
        <th>Drop-off</th>
      </thead>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </table> -->
    <form class="" action="index.html" method="post">
      <label for="category">Category</label>
      <select class="" id="category" name="">
        @foreach($categories as $c)
        <option value="">{{$c->name}}</option>
        @endforeach
      </select>
      <button type="submit" name="button">Submit</button>
    </form>
  </body>
</html>
