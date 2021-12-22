<!DOCTYPE html>
<html>
<body>

<h2>Create Product</h2>

<form method="POST" action="/admin/create-product" enctype='multipart/form-data'>
    @csrf

  <h1>GENERAL<h1>  
    <label for="title">Product Title:</label><br>
    <input type="text" id="title" name="title" placeholder="Title"><br>

    <label for="title">Kode Stok:</label><br>
    <input type="text" id="SKU" name="SKU" placeholder="Kode Stok"><br>

    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" placeholder="Description"><br>
        
    <label for="description">Stock:</label><br>
    <input type="text" id="stock" name="stock" placeholder="Stock"><br>

    <label for="category">Category:</label><br>
    <select name="category">
      <option value="Cat A">Cat A</option>
      <option value="Cat B">Cat B</option>
      <option value="Cat C">Cat C</option>
    </select>
    
    <input type="file" name="product_image" id="product_image">
    <br><br>

  <h1>PRICING</h1>
    <label for="regular_price">Regular Price:</label>
    <input type="text" id="regular_price" name="regular_price" placeholder="Price"><br>

    <label for="promo_price">Promo Price:</label>
    <input type="text" id="promo_price" name="promo_price" placeholder="Promo Price"><br>

    <label for="tax_rate">Tax Rate:</label>
    <input type="text" id="tax_rate" name="tax_rate" placeholder="tax_rate" value=0.0>%<br>
    <br><br>

  <h1>DELIVERY</h1>
    <label for="width">Product Width:</label>
    <input type="text" id="width" name="width" placeholder="Product Width">cm<br>

    <label for="height">Product Height:</label>
    <input type="text" id="height" name="height" placeholder="Product Height">cm<br>
    
    <label for="weight">Product Weight:</label>
    <input type="text" id="weight" name="weight" placeholder="Product Weight">kg<br>
    <br>

  <input type="submit" value="submit"></input>
</form>

</body>
</html>