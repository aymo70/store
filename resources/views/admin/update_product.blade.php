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
            width: 350px;
            height: 50px
        }

        textarea {
            width: 450px;
            height: 100px;
        }

        h1 {
            color: #ffffff;
        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: #ffffff !important;
            padding: 20px;
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
                    <form action="{{ url('edit_product',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $data->title }}">
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description">{{ $data->description }}</textarea>
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $data->price }}">
                        </div>
                        <div>
                            <label>Quantity</label>
                            <input type="text" name="qty" value="{{ $data->quantity }}">
                        </div>
                        <div>
                            <label>Category</label>
                            <select name="category">
                                <option value="{{ $data->category }}">{{ $data->category }}</option>
                                @foreach ($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Current Image</label>
                            <img width="150" src="/products/{{ $data->image }}" alt="">
                        </div>
                        <div>
                            <label for="image">New Image</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </div>
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
