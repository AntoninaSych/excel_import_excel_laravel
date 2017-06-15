<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Imported excel data</title>
</head>
<body>
<?php

dump($clients);


?>

<caption>clients</caption>
<table border="1px">
    <tr><th>First column</th><th>Second column</th><th>Third column</th><th>Fourth column</th><th>Fifth column</th></tr>

@foreach($clients as $client)

        <tr><td>{{$client->nom}}</td>
    <td>$clients</td>
    <td>{{$client->emails}}</td>
    <td>{{$client->adress}}</td>
  <td>{{$client->phone}}</td></tr>
 @endforeach

</table>



</body>
</html>