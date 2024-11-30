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
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_deg">
                    <h1>Add Category</h1>
                    <form action="{{ url('add_category') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="category">
                            <input class="btn btn-primary" type="submit" value="Add Category">
                        </div>
                    </form>
                </div>
                <div>
                    <table class="table_deg">
                        <tr>
                            <th>Category Name </th>
                            <th>Edit </th>
                            <th>Delete </th>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                                </td>
                                <td><a class="btn btn-danger" onclick="confirmation(event)"
                                        href="{{ url('delete_category', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
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
