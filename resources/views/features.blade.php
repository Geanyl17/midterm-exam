<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Laravel Features</h1>
<table>
</thead>
    <tr>
        <th>ID</th>
        <th>Features</th>
        <th>Description</th>
    </tr>
</thead>
 <tbody>
    @foreach($categories as $category)
    <tr>
        <td>{{ $feature->id }}</td>
        <td>{{ $feature->name }}</td>
        <td>{{ $feature->desc }}</td>
    </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>