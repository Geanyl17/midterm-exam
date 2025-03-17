<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<h2 class="mb-4">Laravel Features</h2>
<table class="table table-bordered table-hover">
</thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Features</th>
        <th>Description</th>
    </tr>
</thead>
 <tbody>
    @foreach($features as $feature)
    <tr>
        <td>{{ $feature->id }}</td>
        <td>{{ $feature->name }}</td>
        <td>{{ $feature->description }}</td>
    </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>