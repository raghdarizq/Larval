<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>create-Product</title>
</head>
<body dir="rtl">
    <h1>hi</h1>
    <div class="container">
        <form action="{{ route('Store.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-5">
                    <label for="">رقم المخزن</label>
                    <input type="text" id="id" class="form-control mt-3" name="id">
                </div>
                <div class="col-5">
                    <label for="">اسم المخزن </label>
                    <input type="text" id="Storename" class="form-control mt-3" name="Storename">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">العنوان</label>
                    <input type="text" id="Address" class="form-control mt-3" name="Address">
                </div>
                <div class="col-5">
                    <label for="">رقم التليفون</label>
                    <input type="text" id="Phonenumber" class="form-control mt-3" name="Phonenumber">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">رقم المخزن </label>
                    <input type="text" id="storeNo" class="form-control mt-3" name="storeNo">
                </div>
                <div class="col-5">
                    <button type="submit" class="btn-primary btn mt-5">send data</button> 
                    <a href="{{ url('/Store') }}"><button type="button" class=" btn-primary btn mt-5">Show data</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>