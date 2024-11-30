<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .div_deg {
            dispLay: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type='text'] {
            width: 400px;
            height: 50px
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white">Updating Category</h1>
                <div class="div_deg">
                    <form action="{{ url('update_category', $data->id) }}" method="Post">
                        @csrf
                        <input type="text" name="category" value="{{ $data->category_name }}">
                        <input class="btn btn-primary" type="submit" value="Update Category">
                    </form>
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
