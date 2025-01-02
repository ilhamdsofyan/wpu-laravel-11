<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <h1>Blog</h1>

    @foreach ($posts as $post)
        <h3>{{ $post['title'] }}
            <br/>
            <small>{{ $post['author'] }}</small>
        </h3>
        <p>{{ $post['body'] }}</p>
    @endforeach
</body>
</html>