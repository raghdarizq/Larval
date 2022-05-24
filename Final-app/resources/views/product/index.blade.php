<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>index-product</title>
</head>
<body dir="rtl">
    <h1> <a  href="{{ url('/Product/create')}}">اضافة منتج جديد </a> </h1>
    <div class="container mt-5">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>رقم المنتج</th>
                    <th>اسم المنتج </th>
                    <th>رقم تصنيف المنتجات</th>
                    <th>كمية المنتج</th>
                    <th>نوع كمية المنتج</th>
                    <th>رقم المورد</th>
                    <th>حالة المنتجات</th>
                    <th>صورة المنتج</th>
                    <th>رقم المخزن</th>
                    <th>العمليات </th>
                    <th>الحدف </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->productname}}</td>
                        <td>{{ $row->NoTasnifAlmuntajat}}</td>
                        <td>{{ $row->Productquantity}}</td>
                        <td>{{ $row->Productquantitytype}}</td>
                        <td>{{ $row->SupplierNo}}</td>
                        <td>{{ $row->ProductsStatus}}</td>
                        <td>{{ $row->ImgPro}}</td>
                        <td>{{ $row->storeNo}}</td>
                        <td>
                            <a href="{{ url('/Product/'.$row->id)}}"><button type="button" class="btn btn-info">show</button></a> |  
                            <a href="{{ url('/Product/'.$row->id.'/edit')}}"><button type="button" class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{ route('Product.destroy',$row->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>