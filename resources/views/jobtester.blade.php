<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-gray-600">
        <form method="POST">
            @csrf
            <button type="submit" name="sendEmail" value="1">SEND EMAIL</button>
        </form>
    </div>
</body>
</html>
