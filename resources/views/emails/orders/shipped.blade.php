<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Cảm ơn quý khách đã đặt hàng bên Shop chúng tôi ! </h1>
        <table border="1px" class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên SP</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cart->content() as $value)
                <tr>
                    <td>{{$loop ->index + 1}}</td>
                    <td>{{$value['name']}}</td>
                    <td>{{$value['quantity']}}</td>
                    <th>{{$cart->get_total_price()}} $ </th>
                </tr>
               @endforeach
            </tbody>
        </table>
</body>
</html>