<!DOCTYPE html>
<html lang="en">
<head>
<style>
 .center {
  margin-left: auto; 
  margin-right: auto;
}
        </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
  </head>

</style>

</head>
<body>
    <table id="Shop" border=2>
    <a href={{route('Shop.form')}}>Add New</a>
        <tr>
            <th>Date</th>
            <th>Full Name</th>
            <th>Mob No</th>
            <th>Address</th>
            <th>Email</th>
            <th>FB Account</th>
            <th>Units</th>
            <th>Premium Registration</th>
            <th>Discount</th>
            <th>Total Payment</th>
            <th>Payment Mode</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->date}}</td>
            <td>{{$d->full_name}}</td>
            <td>{{$d->mob_no}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->fb_account}}</td>
            <td>{{$d->units}}</td>
            <td>{{$d->premium_registration}}</td>
            <td>{{$d->discount}}</td>
            <td>{{$d->total_payment}}</td>
            <td>{{$d->payment_mode}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
            <td>
            <a href={{route('Shop.form.delete',$d->id)}}>Delete</a>
            <a href={{route('Shop.form.edit',$d->id)}}>Edit</a>
            </td>
        </tr>
        @endforeach
        {{$data->links()}}
    
    </table>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
</body>
</html>