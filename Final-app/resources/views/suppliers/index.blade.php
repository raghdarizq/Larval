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
    <div class="container mt-5">
        <h1> <a  href="{{ url('/Suppliers/create')}}">اضافة  جديد </a> </h1>
    </div>
    <div class="container mt-5">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>رقم المورد</th>
                    <th>العنوان</th>
                    <th>رقم الجوال</th>
                    <th>ملاحظات</th>
                    <th>اسم المورد</th>
                    <th>  صورة السجل التجاري للمورد</th>
                    <th>العمليات </th>
                    <th>الحدف </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->address}}</td>
                        <td>{{ $row->Mobilenumber}}</td>
                        <td>{{ $row->Nots}}</td>
                        <td>{{ $row->Suppliername}}</td>
                        <td>{{ $row->Supplierimg}}</td>
                        <td>
                            <a href="{{ url('/Suppliers/'.$row->id)}}"><button type="button" class="btn btn-info">show</button></a> |  
                            <a href="{{ url('/Suppliers/'.$row->id.'/edit')}}"><button type="button" class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{ route('Suppliers.destroy',$row->id)}}" method="post">
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