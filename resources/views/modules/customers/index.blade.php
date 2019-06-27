<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    @for($id = 1; $id <5; $id++)
    <thead>
    <tr>
        <th>{{$id}}</th>
        <th>Nguyễn văn A {{$id}}</th>
        <th>098773173{{$id}}</th>
        <th>abcg{{$id}}@gmail.com</th>
        <th><a href="{{route('customers.show', $id)}}">Xem</a> | <a href="{{route('customers.edit', $id)}}">Sửa</a> | <a href="{{route('customers.delete', $id)}}">Xóa</a></th>
    </tr>
    </thead>
    @endfor

</table>
</body>
</html>
