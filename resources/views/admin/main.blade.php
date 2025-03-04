<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/admin.js'])
</head>
<body class="p-0 container-fluid d-flex flex-column" style="min-height: 100vh">
<div>

</div>
<div class="d-flex flex-column">

    @foreach($books as $book)
        <div class="d-flex m-2">
            <div class="">
                <img src="{{ $book->image }}" height="150">
            </div>
            <textarea class="d-flex ms-2" type="text" style="width: 450px">{{ $book->name }}</textarea>
        </div>
    @endforeach
</div>
<div class="container-fluid bottom-0 py-2 bg-dark position-fixed justify-content-center d-flex">
    <button class="btn btn-success fw-bold">Zapisz zmiany</button>
</div>
</body>
</html>
