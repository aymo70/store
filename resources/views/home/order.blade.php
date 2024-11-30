<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            text-aLign: center;
            margin: auto;
            border: 2px soLid black;
            margin-top: 50px;
        }

        th {
            background-color: black;
            border: 2px soLid skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            text-align: center;
        }

        td {
            border: 1px soLid skyblue;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        @include('home.header')

        <div class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>
                @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <img width="150px" src="{{ '/products/' . $item->product->image }}" alt="">
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('home.footer')

</body>

</html>
