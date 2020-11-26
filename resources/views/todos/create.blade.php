<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Todos</title>
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next you need To-Do</h1>
        <form class="py-5" action="/todos/save" method="POST">
            @csrf
            <input type="text" name="title" class="p-2 border rounded">
            <input type="submit" value="Create" class="p-2 border rounded">
        </form>
    </div>
</body>
</html>
