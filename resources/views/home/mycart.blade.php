<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_deg {
            dispLay: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        table {
            padding: 15px;
            width: 800;
        }

        th {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            width: 250px;
            text-align: center;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            padding: 15px;
        }
        .order_deg{
            margin-top: -50px;
            padding-right: 100px;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        .div_gap{
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
    </div>

    <div class="div_deg">
        <div class="order_deg">
            <form action="{{ url('confirm_order') }}" method="post">
                @csrf
                <div class="div_gap">
                    <label>Receiver Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="div_gap">
                    <label>Receiver Address</label>
                    <textarea name="address">{{ Auth::user()->address }}</textarea>
                </div>
                <div class="div_gap">
                    <label>Receiver Phone</label>
                    <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                </div>
                <div class="div_gap">
                    <input class="btn btn-primary" type="submit" value="Place Order">
                </div>



            </form>
        </div>
        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
            @php
                $value = 0;
            @endphp
            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->product->title }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td><img src="products/{{ $cart->product->image }}" alt=""></td>
                    <td>
                        <a class="btn btn-danger" onclick="confirmation(event)"
                            href="{{ url('delete_cart', $cart->id) }}">Delete</a>
                    </td>
                </tr>
                @php
                    $value += $cart->product->price;
                @endphp
            @endforeach
            <tr>
                <td>Total</td>
                <td colspan="3"><b>{{ $value }}</b></td>
            </tr>
        </table>
    </div>

    @include('home.footer')

</body>

</html>
