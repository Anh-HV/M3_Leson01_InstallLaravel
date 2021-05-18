<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <h1>Results</h1>
    <form style="width: 50%;">
        @csrf
        <fieldset disabled>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"> Product Description :</label>
                <input type="text" class="form-control" placeholder="Product Description" name="description" value="{{$description}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"> List Price :</label>
                <input type="number" class="form-control" placeholder="List Price" name="price" value="{{$price}}">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Discount Percent :</label>
                <input type="number" class="form-control" name="discount" value="{{$discount}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"> Discount Amount :</label>
                <input type="text" class="form-control" placeholder="Product Description" value="{{$discount_amount}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"> Discount Price :</label>
                <input type="text" class="form-control" placeholder="Product Description" value="{{$discount_price}}">
            </div>
        </fieldset>
    </form>
    <button onclick="window.history.go(-1);" class="btn btn-primary">Go Back</button>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>