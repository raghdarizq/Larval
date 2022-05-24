<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit-Product</title>

</head>
<body>
    <div class="container">
        <form action="{{ route('Product.update',$data->id) }}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-5">
                    <label for="">رقم المنتج</label>
                    <input type="text" id="id" class="form-control mt-3" name="id" value="{{ $data->id }}" onblur="validate(1)">
                </div>
                <div class="col-5">
                    <label for="">اسم المنتج </label>
                    <input type="text" id="productname" class="form-control mt-3" name="productname" value="{{ $data->productname }}" onblur="validate(1)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">رقم تصنيف المنتجات</label>
                    <input type="text" id="NoTasnifAlmuntajat" class="form-control mt-3" name="NoTasnifAlmuntajat" value="{{ $data->NoTasnifAlmuntajat }}" onblur="validate(1)">
                </div>
                <div class="col-5">
                    <label for="">كمية المنتج  </label>
                    <input type="text" id="Productquantity" class="form-control mt-3" name="Productquantity" value="{{ $data->Productquantity }}" onblur="validate(1)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">نوع كمية المنتج </label>
                    <input type="text" id="Productquantitytype" class="form-control mt-3" name="Productquantitytype" value="{{ $data->Productquantitytype }}" onblur="validate(1)">
                </div>
                <div class="col-5">
                    <label for="">رقم المورد </label>
                    <input type="text" id="SupplierNo" class="form-control mt-3" name="SupplierNo" value="{{ $data->SupplierNo }}" onblur="validate(1)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">حالة المنتج  </label>
                    <input type="text" id="ProductsStatus" class="form-control mt-3" name="ProductsStatus" value="{{ $data->ProductsStatus }}" onblur="validate(1)">
                </div>
                <div class="col-5">
                    <label for="">صورة المنتج  </label>
                    <input type="text" id="ImgPro" class="form-control mt-3" name="ImgPro" value="{{ $data->ImgPro }}" onblur="validate(1)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="">رقم المخزن </label>
                    <input type="text" id="storeNo" class="form-control mt-3" name="storeNo" value="{{ $data->storeNo }}" onblur="validate(1)">
                </div>
                <div class="col-5">
                    <button type="submit" class="btn-primary btn mt-5">send data</button> 
                    <a href="{{ url('/Product') }}"><button type="button" class=" btn-primary btn mt-5">Show data</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>