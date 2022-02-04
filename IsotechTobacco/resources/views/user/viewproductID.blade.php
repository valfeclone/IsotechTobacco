<tr>
    <th>
        <img src="/storage/products/{{ $items->product_image_path }}" alt="" style="width: 50px; height: 50px;"></img>
    </th><br>
    <!-- <th>ID: {{ $items->id }}</th> <br> -->
    <th>Title: {{ $items->title}}</th> <br>
    <th>Kode Stok: {{ $items->SKU}}</th> <br>
    <th>Desc: {{ $items->description}}</th> <br>
    <th>Cat: {{ $items->category}}</th> <br>
    <th>Stock: {{ $items->stock}}</th> <br>
    <th>Seen: {{ $items->seen_time}}</th> <br>
    <th>Reg Price: {{ $items->regular_price}}</th> <br>
    <th>Promo Price: {{ $items->promo_price}}</th> <br>
    <th>Tax: {{ $items->tax_rate}}</th> <br>
    <th>Width: {{ $items->width}}</th> <br>
    <th>Height: {{ $items->height}}</th> <br><br>
    <th>Weight: {{ $items->weight}}</th> <br><br>
</tr>
<a href="/createcart">Beli Produk</a>
<form method="POST" action="/createcart" enctype='multipart/form-data'>
    @csrf
    <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $items->id }}" hidden>
    <input type="text" class="form-control" id="jumlahPesan" name="jumlahPesan" value=1 hidden>
    <input class="btn btn-md rounded font-sm hover-up"  type="submit" value="Beli Produk">
</form>

<a href="/createcart">Add to Cart</a>
