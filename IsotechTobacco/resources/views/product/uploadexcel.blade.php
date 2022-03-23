<form method="POST" action="/uploadExcel" enctype='multipart/form-data'>
    @csrf
    <label for="excel" class="form-label">Input the Product Catalog Excel File</label> <br>
    <input type="file" name="excel" id="excel"><br>
    <input class="btn btn-md rounded font-sm hover-up"  type="submit" value="Submit">
</form>