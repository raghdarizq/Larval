<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>create-Tasnif</title>
</head>
<body dir="rtl">
    <h1>hi</h1>
    <div class="container">
        <form action="{{ route('Tasnif.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-5">
                    <label for="">رقم تصنيف المنتج</label>
                    <input type="text" id="id" class="form-control mt-3" name="id">
                </div>
                <div class="col-5">
                    <label for="">اسم تصنيف المنتجات </label>
                    <input type="text" id="Categoryname" class="form-control mt-3" name="Categoryname">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <button type="submit" class="btn-primary btn mt-5">send data</button> 
                    <a href="{{ url('/Tasnif') }}"><button type="button" class=" btn-primary btn mt-5">Show data</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>