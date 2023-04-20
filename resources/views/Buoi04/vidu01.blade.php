<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Lương</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        @csrf
        <table width="500" align="center" border="0">
            <tr class="bg-warning text-center fs-2">
                <td colspan="2">Tính Lương Nhân Viên</td>
            </tr>
            <tr>
                <td>Lương ngày</td>
                <td>
                    <input type="text" name="luongngay" value="{{$lg??null}}">
                    @if ($errors->has("luongngay"))
                        <div class="text-danger">{{$errors->first("luongngay")}}</div>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ngày công</td>
                <td>
                    <input type="text" name="ngaycong" value="{{$nc??null}}">
                    @if ($errors->has("ngaycong"))
                        <div class="text-danger">{{$errors->first("ngaycong")}}</div>
                    @endif
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="tinhluong" value="Tính Lương">
                </td>
            </tr>
            <tr align="center"> 
                <td colspan="2">
                    @if (isset($lt))
                        <div style="color:rgb(0,0,255)">
                            {{$lt??null}}
                        </div>
                    @endif
                </td>
            </tr>
        </table>
    </form>

    <form action="{{route('uploadfile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myfile">
        <input type="submit" name="upload" value="Upload hình">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>