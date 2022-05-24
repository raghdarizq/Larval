<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card
        {
            margin-left:auto;
            margin-right: auto;
        }
    </style>
    <title>Show-Product</title>
</head>
<body dir="rtl">
    <div class="container mt-5">
        <div class="card shadow" style="width:400px">
            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <form  action="#" method="post">
                    @csrf
                    <div class="col-5">
                        <label for=""> <mark>رقم المنتج :</mark> </label>
                        <label>{{ $data->id }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>اسم المنتج :</mark> </label>
                        <label>{{ $data->productname }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>رقم تصنيف المنتج :</mark> </label>
                        <label>{{ $data->NoTasnifAlmuntajat }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>كمية المنتج : </mark> </label>
                        <label>{{ $data->Productquantity }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>نوع كمية المنتج:</mark> </label>
                        <label>{{ $data->Productquantitytype }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>رقم المورد :</mark></label>
                        <label>{{ $data->SupplierNo }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>حالة المنتجات:</mark> </label>
                        <label>{{ $data->ProductsStatus }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>صورة المنتج : </mark> </label>
                        <label>{{ $data->ImgPro }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>رقم المخزن :</mark> </label>
                        <label>{{ $data->storeNo }}</label> 
                    </div>
                </form>
            </div>
        </div>
        </div>
</body>
</html>