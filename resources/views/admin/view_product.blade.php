<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        input[type='text'] {
            width: 400px;
            height: 50px
        }

        .div_deg {
            dispLay: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            text-aLign: center;
            margin: auto;
            border: 2px soLid yeLLowgreen;
            margin-top: 50px;
        }

        th {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            width: 250px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            padding: 15px;
        }
        input[type='search']{
            width: 500px;
            height: 60px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <form action="{{ url('product_search') }}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondry" value="Search">
                </form>
                <div>
                    <table class="table_deg">
                        <tr>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $products->title }}</td>
                                <td>{!! Str::limit($products->description, 50) !!}</td>
                                <td>{{ $products->category }}</td>
                                <td>{{ $products->price }}</td>
                                <td>{{ $products->quantity }}</td>
                                <td>
                                    <img src="products/{{ $products->image }}" alt="pro" height="120" width="120">
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('update_product', $products->id) }}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" 
                                        href="{{ url('delete_product', $products->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="div_deg">
                        {{ $product->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    </footer>
    </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
