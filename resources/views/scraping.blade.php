<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scraping</title>
</head>

<body>
    <ol class="container">
        @foreach($titles as $title)
        <li>{{ $title }}</li>
        @endforeach
    </ol>
</body>

</html>