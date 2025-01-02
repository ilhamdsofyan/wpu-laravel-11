<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <h1>Contact</h1>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>{{ $telp }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td valign="top">Social Media</td>
            <td valign="top">:</td>
            <td valign="top">
                <ul>
                    @foreach ($socials as $key => $social)
                        <li>{{ Str::ucfirst($key) .': '. $social }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>