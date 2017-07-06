<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>

    @foreach ($products as $value)
        {{ $value->title }}
    @endforeach
</body>
</html>