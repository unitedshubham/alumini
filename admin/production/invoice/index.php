
<?php
$p_id=$_GET['id'];
require '../../connect.php';
$data = $conn->query("SELECT *,(select deliver_address from customer where customer.id=product_order.cust_id) as deliver_address,(select first_name from customer where customer.id=product_order.cust_id) as first_name, (select middle_name from customer where customer.id=product_order.cust_id) as middle_name,(select last_name from customer where customer.id=product_order.cust_id) as last_name,(select product_name from products where products.id=product_order.pd_id) as product_name,(select product_desc from products where products.id=product_order.pd_id) as product_desc,(select price from products where products.id=product_order.pd_id) as price FROM product_order where invoice_no='".$p_id."'")->fetchAll();

foreach ($data as $row) {

                       $order_date  =$row['order_date'];
                         $delivery_no  =$row['delivery_no'];
                         $deliver_address  =$row['deliver_address'];
                          $first_name  =$row['first_name'];
                          $middle_name  =$row['middle_name'];
                          $last_name  =$row['last_name'];
                          $product_desc  =$row['product_desc'];
                           $product_name  =$row['product_name'];
                            $price  =$row['price'];
                            $order_quantity  =$row['order_quantity'];
                            $cust_id  =$row['cust_id'];
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
     @page {
    size: A4;
    margin: 40px;
}


    @media print {
    html,
    body {
        width: 210mm;
        height: 297mm;
    }
    @-moz-document url-prefix() {}
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-smdm-12 {
        float: left;
    }
    .col-sm-12,
    .col-md-12 {
        width: 100%;
    }
    .col-sm-11,
    .col-md-11 {
        width: 91.66666667%;
    }
    .col-sm-10,
    .col-md-10 {
        width: 83.33333333%;
    }
    .col-sm-9,
    .col-md-9 {
        width: 75%;
    }
    .col-sm-8,
    .col-md-8 {
        width: 66.66666667%;
    }
    .col-sm-7,
    .col-md-7 {
        width: 58.33333333%;
    }
    .col-sm-6,
    .col-md-6 {
        width: 50%;
    }
    .col-sm-5,
    .col-md-5 {
        width: 41.66666667%;
    }
    .col-sm-4,
    .col-md-4 {
        width: 33.33333333%;
    }
    .col-sm-3,
    .col-md-3 {
        width: 25%;
    }
    .col-sm-2,
    .col-md-2 {
        width: 16.66666667%;
    }
    .col-sm-1,
    .col-md-1 {
        width: 8.33333333%;
    }
    .col-sm-pull-12 {
        right: 100%;
    }
    .col-sm-pull-11 {
        right: 91.66666667%;
    }
    .col-sm-pull-10 {
        right: 83.33333333%;
    }
    .col-sm-pull-9 {
        right: 75%;
    }
    .col-sm-pull-8 {
        right: 66.66666667%;
    }
    .col-sm-pull-7 {
        right: 58.33333333%;
    }
    .col-sm-pull-6 {
        right: 50%;
    }
    .col-sm-pull-5 {
        right: 41.66666667%;
    }
    .col-sm-pull-4 {
        right: 33.33333333%;
    }
    .col-sm-pull-3 {
        right: 25%;
    }
    .col-sm-pull-2 {
        right: 16.66666667%;
    }
    .col-sm-pull-1 {
        right: 8.33333333%;
    }
    .col-sm-pull-0 {
        right: auto;
    }
    .col-sm-push-12 {
        left: 100%;
    }
    .col-sm-push-11 {
        left: 91.66666667%;
    }
    .col-sm-push-10 {
        left: 83.33333333%;
    }
    .col-sm-push-9 {
        left: 75%;
    }
    .col-sm-push-8 {
        left: 66.66666667%;
    }
    .col-sm-push-7 {
        left: 58.33333333%;
    }
    .col-sm-push-6 {
        left: 50%;
    }
    .col-sm-push-5 {
        left: 41.66666667%;
    }
    .col-sm-push-4 {
        left: 33.33333333%;
    }
    .col-sm-push-3 {
        left: 25%;
    }
    .col-sm-push-2 {
        left: 16.66666667%;
    }
    .col-sm-push-1 {
        left: 8.33333333%;
    }
    .col-sm-push-0 {
        left: auto;
    }
    .col-sm-offset-12 {
        margin-left: 100%;
    }
    .col-sm-offset-11 {
        margin-left: 91.66666667%;
    }
    .col-sm-offset-10 {
        margin-left: 83.33333333%;
    }
    .col-sm-offset-9 {
        margin-left: 75%;
    }
    .col-sm-offset-8 {
        margin-left: 66.66666667%;
    }
    .col-sm-offset-7 {
        margin-left: 58.33333333%;
    }
    .col-sm-offset-6 {
        margin-left: 50%;
    }
    .col-sm-offset-5 {
        margin-left: 41.66666667%;
    }
    .col-sm-offset-4 {
        margin-left: 33.33333333%;
    }
    .col-sm-offset-3 {
        margin-left: 25%;
    }
    .col-sm-offset-2 {
        margin-left: 16.66666667%;
    }
    .col-sm-offset-1 {
        margin-left: 8.33333333%;
    }
    .col-sm-offset-0 {
        margin-left: 0%;
    }
    .visible-xs {
        display: none !important;
    }
    .hidden-xs {
        display: block !important;
    }
    table.hidden-xs {
        display: table;
    }
    tr.hidden-xs {
        display: table-row !important;
    }
    th.hidden-xs,
    td.hidden-xs {
        display: table-cell !important;
    }
    .hidden-xs.hidden-print {
        display: none !important;
    }
    .hidden-sm {
        display: none !important;
    }
    .visible-sm {
        display: block !important;
    }
    table.visible-sm {
        display: table;
    }
    tr.visible-sm {
        display: table-row !important;
    }
    th.visible-sm,
    td.visible-sm {
        display: table-cell !important;
    }
}
  </style>
</head>
<body>
<div class="container-fluid">
<center>  <img src="images/logo.png" alt="logo" style="width: 100px">
<p>house no 486 Chandrawadda <br>fatorda Margao<br>
Salcete Goa</p>
</center><hr>
   <div class="row">
    <div class="col-sm-4">Invoice Date:<?php echo $order_date;?></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><h4>#Invoice no: <?php echo $delivery_no;?></h4></div>
  </div>
  <div class="row">
    <div class="col-sm-4">from:
    <h4><?php echo $first_name.' '.$middle_name.' '.$last_name;  ?></h4><span><?php echo $deliver_address;  ?></span></div>
    <div class="col-sm-4" ></div>
    <div class="col-sm-4">to:
     <h4><?php echo $first_name.' '.$middle_name.' '.$last_name;  ?></h4><span><?php echo $deliver_address;  ?></span></div>
  </div>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Item</th>
        <th>description</th>
        <th>price</th>
        <th>quantity</th>
        <th>total</th>
      </tr>
    </thead>
    <tbody>

<?php  

$totalarray = array();
foreach ($data as $row) {

                        
                          $product_desc  =$row['product_desc'];
                           $product_name  =$row['product_name'];
                            $price  =$row['price'];
                            $order_quantity  =$row['order_quantity'];
                            $total=$price*$order_quantity;
                echo ' <tr>
        <td></td>
        <td>'. $product_name .'</td>
        <td>'. $product_desc .'</td>
        <td>'. $price .'</td>
        <td>'. $order_quantity.'</td>
        <td>'. $total.'</td>
      </tr>' ; 


array_push($totalarray,$total);

}

$subtotal = array_sum($totalarray);


  ?>
     
     
    </tbody>
  </table>
  </div>
  <hr>

</div>
<div class="row">
    <div class="col-sm-4"></div>
    
    <div class="col-sm-3" ></div>
    <div class="col-sm-5">
      <div class="table-responsive">          
  <table class="table">

    <tbody>
      <tr>
        <td>Subtotal</td>
        <td><?php echo $subtotal; ?></td>
      
      </tr>
       <tr>
        
      
      </tr>
       <tr>
        
      
      </tr>

      </tr>
       <tr>
        <td>Total</td>
        <td><?php echo $subtotal; ?></td>
      
      </tr>


      
    </tbody>
  </table>
  </div>
    </div>
  </div>
<hr>
<div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" ></div>
    <div class="col-sm-4">
   <center>___________________
    <h4>Signature</center> </div>
  </div>
<center><button onclick="myFunction()">Print this page</button></center>
<input type="hidden" name="invoice_no" id="invoice_no" <?php echo 'value="'.$p_id.'"'; ?>>
<input type="hidden" name="order_date" id="order_date" <?php echo 'value="'.$order_date.'"'; ?>>
<input type="hidden" name="total" id="total" <?php echo 'value="'.$subtotal.'"'; ?>>
<input type="hidden" name="cust_id" id="cust_id" <?php echo 'value="'.$cust_id.'"'; ?>>


<script>
function myFunction() {


   var invoice_no= $('#invoice_no').val();
   var order_date= $('#order_date').val();
   var total= $('#total').val();
    var cust_id= $('#cust_id').val();
   var datastr= 'invoice_no='+invoice_no+'&order_date='+order_date+'&total='+total+'&cust_id='+cust_id;
      $.ajax({
        type: "POST",
        url:"../reports/finalbill.php",
        data: datastr,
        success: function(res){

            window.print();
  window.history.back();

        }
      });


  
}

</script>


</body>
</html>