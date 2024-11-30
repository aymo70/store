<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $data->name }}</h1>
    <center>
        <h3>Customer name : {{ $data->name }}</h3>
        <h3>Customer address : {{ $data->rec_address }}</h3>
        <h3>Customer phone : {{ $data->phone }}</h3>
        <h3>Product name : {{ $data->product->title }}</h3>
    </center>
</body>
</html>
