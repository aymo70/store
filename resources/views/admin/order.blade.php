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
            text-align: center;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            padding: 15px;
            color: white;
        }

        input[type='search'] {
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


                <table class="table_deg">
                    <tr>
                        <th>Customer Name</th>
                        <th> Address</th>
                        <th> phone</th>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Print PDF</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->rec_address }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->product->title }}</td>
                            <td>{{ $data->product->price }}</td>
                            <td><img width="150px" height="150px" src="{{ '/products/' . $data->product->image }}" alt="Product"></td>
                            <td>
                                @if ($data->status === 'On The Way')
                                    <span style="color: yellow">{{ $data->status }}</span>

                                @elseif ($data->status === 'Delivered')
                                    <span style="color: green">{{ $data->status }}</span>
                                @else
                                    {{ $data->status }}
                                @endif
                            </td>
                            <td>
                                @if ($data->status === 'On The Way')
                                    <a class="btn btn-success" href="{{ url('delivered', $data->id) }}">Delivered</a>
                                @elseif ($data->status === 'Delivered')
                                @else
                                    <a class="btn btn-primary" href="{{ url('on_the_way', $data->id) }}">On The Way</a>
                                    <a class="btn btn-success" href="{{ url('delivered', $data->id) }}">Delivered</a>
                                @endif
                            </td>
                            <td>
                                <a  class="btn btn-secondary" href="{{ url('print_pdf', $data->id) }}">Print PDF</a>
                            </td>

                        </tr>
                    @endforeach

                </table>

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
