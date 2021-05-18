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
    <h1>App Product Discount Calculator</h1>
    <form action='/display' method="POST" style="width: 50%;">
    @csrf
  <fieldset>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label" > Product Description :</label>
      <input type="text" class="form-control" placeholder="Product Description" name="description">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label" > List Price :</label>
      <input type="text" class="form-control" placeholder="List Price" name="price">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Discount Percent :</label>
      <select id="disabledSelect" class="form-select" name="discount">
        <option value="15">15%</option>
        <option value="25">25%</option>
        <option value="35">35%</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>