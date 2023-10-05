<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('post.store')}}" method="POST">
        <label for="title">
            Title:
            <input type="text" name="title">
        </label><br>
        <label for="year">
            Year:
            <input type="text" name="year">
        </label><br>
        <label for="synopsis">
            Sinopsis:
            <textarea name="synopsis"></textarea>
        </label><br>
        <label for="cover">
            Cover:
            <input type="text" name="cover">
        </label><br>
        <button type="submit">Submit</button>


    </form>
</body>

</html>