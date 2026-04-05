<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }

        .content {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <x-navbar />

    <div class="content">
        {{ $slot }}
    </div>

</body>

</html>