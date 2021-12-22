@foreach($items as $product)
<tr>
    <th>
        <img src="/storage/products/{{ $product->product_image_path }}" alt="" style="width: 50px; height: 50px;"></img>
    </th><br> 
    <th>Title: {{ $product->title}}</th> <br>
    <th>Category: {{ $product->category}}</th> <br>
    <th>Price: {{ $product->regular_price}}</th> <br>
    <!-- <th>Seen: {{ $product->seen_time}}</th> <br> -->
    
    <a href="/view-product/{{$product->id}}">check item</a> <br><br>

</tr>
@endforeach