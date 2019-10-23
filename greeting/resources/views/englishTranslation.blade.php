<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>English Translation</title>
</head>
<body>
<h1>English Translation</h1>
<form action="{{route("checkEnglish")}}" method="post">
    @csrf
    <table>
        <tr>
            <td>English</td>
            <td><input type="text" name="english"></td>
        </tr>
        <tr>
            <td><button type="submit">Translation</button></td>
        </tr>
    </table>
</form>
</body>
</html>
