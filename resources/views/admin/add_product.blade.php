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
            height: 50px
        }

        h1 {
            color: #ffffff;
        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: #ffffff !important;
        }

        .input_deg {
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
                <h1>Add Category</h1>
                <div class="div_deg">
                    <form action="{{ url('upload_product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label for="title">Product Name</label>
                            <input type="text" name="title">
                        </div>
                        <div class="input_deg">
                            <label for="description"> Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="input_deg">
                            <label for="price">Price</label>
                            <input type="text" name="price">
                        </div>
                        <div class="input_deg">
                            <label for="qty">Quantity</label>
                            <input type="number" name="qty">
                        </div>
                        <div class="input_deg">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option>Select Option</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input_deg">
                            <label for="image">Product Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Add Prouduct" >
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
