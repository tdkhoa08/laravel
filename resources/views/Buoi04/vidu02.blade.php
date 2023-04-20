<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 02</title>
</head>
<body>

<form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myfile">
        <input type="submit" name="upload" value="Upload hình">
    </form>
</body>
</html>