<form method="POST" action="/teskategori" enctype='multipart/form-data'>
    @csrf
    <label for="category" class="form-label">Search Product Category</label>
    <input type="text" placeholder="Type here" class="form-control" id="category" name="category">
    <input class="btn btn-md rounded font-sm hover-up"  type="submit" value="Search">
</form>
<br><br>
@foreach($items as $product)
<tr>
    <th>
        <img src="/storage/products/{{ $product->product_image_path }}" alt="" style="width: 50px; height: 50px;"></img>
    </th><br> 
    <th>Title: {{ $product->title}}</th> <br>
    <th>Category: {{ $product->category}}</th> <br>
    <th>Price: {{ $product->regular_price}}</th> <br>
    <!-- <th>Seen: {{ $product->seen_time}}</th> <br> -->
    
    <a href="/admin/view-product/{{$product->id}}">check item</a> <br><br>

</tr>
@endforeach