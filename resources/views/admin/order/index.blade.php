<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        @csrf
        <input type="text" name='keywords' value="">
        <select name="status">
            <option value="">--请选择订单状态--</option>
            @foreach ($status['status'] as $key=>$val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
        <button type="submit">搜 索</button>
    </form>
    <table border="1px" style="padding:5px;">
        <thead>
            <tr>
                <th>订单号</th>
                <th>卖家</th>
                <th>订单状态</th>
                <th>付款时间</th>
                <th>实付</th>
                <th>运单号</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderData as $order)
            <tr>
                <td>{{$order->order_sn}}</td>
                <td>{{$order->uid}}</td>
                <td>{{$status['status'][$order->status]}}</td>
                <td>{{date('Y-m-d H:i:s',$order->checkout_time)}}</td>
                <td>￥{{$order->payment}}</td>
                <td>{{$order->tracking_number}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-right paginate">
    {{ $orderData->links() }}
    </div>
</body>
</html>