<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="container">
<h2>SHOP FORM</h2>
    <form action="{{route('Shop.form.update',$data->id)}}" method="POST">
    @csrf
        <div class="form">
            <div class="form-group col-md-4">
                <lable for="date">Date:</lable><br>
                <input type="date" name="date" id="date" class="form-control" placeholder="Enter your date"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="full_name">Full Name:</lable><br>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your full_name"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="mob_no">Mob No:</lable><br>
                <input type="text" name="mob_no" id="mob_no" class="form-control" placeholder="Enter your mob_no"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="address">Address:</lable><br>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address"><br>
            </div>
        
            <div class="form-group col-md-6">
                <lable for="email">Email:</lable><br>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email"><br>

                <lable for="fb_account">FB Account:</lable><br>
                <input type="text" name="fb_account" id="fb_account" class="form-control" placeholder="Enter your fb_account"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="units">Units:</lable><br>
                <input type="number" name="units" id="units" class="form-control" placeholder="Enter your units"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="premium_registration">Premium Registration:</lable><br>
                <input type="number" name="premium_registration" id="premium_registration" class="form-control" placeholder="Enter your premium_registration"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="discount">Discount:</lable><br>
                <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter your discount"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="total_payment">Total Payment:</lable><br>
                <input type="number" name="total_payment" id="total_payment" class="form-control" placeholder="Enter your total_payment"><br>
            </div>
            <div class="form-group col-md-4">
                <lable for="payment_mode">Payment Mode:</lable><br>
                <input type="text" name="payment_mode" id="payment_mode" class="form-control" placeholder="Enter your payment_mode"><br>
            </div>

        </div>
        <button type="submit" class="btn-btn-primary">Submit</button>
    </form>

</div>
    
</body>
</html>