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
            <div class="card-body">
                <form  action="#" method="post">
                    @csrf
                    <div class="col-5">
                        <label for=""> <mark>رقم المخزن :</mark> </label>
                        <label>{{ $data->id }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>اسم المخزن :</mark> </label>
                        <label>{{ $data->Storename }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>العنوان   :</mark> </label>
                        <label>{{ $data->Address }}</label> 
                    </div>
                    <div class="col-5 mt-3">
                        <label for=""> <mark>رقم التليفون  : </mark> </label>
                        <label>{{ $data->Productquantity }}</label> 
                    </div>
                </form>
            </div>
        </div>
        </div>
</body>
</html>