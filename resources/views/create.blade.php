<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка видео</title>
</head>
<body>
    <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Название:</label>
        <input type="text" name="title" required>

        <label for="description">Описание видео:</label>
        <textarea name="description" required></textarea>

        <label for="video">Choose a video:</label>
        <input type="file" name="video" accept="video/*" required>

        <button type="submit">Загрузить видео</button>
    </form>
</body>
</html>

