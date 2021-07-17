<?php 

require '../../connect.php' ;

$id = $_POST['id'];
$productname = $_POST['productname'];
$productdesc =$_POST['productdesc'];
$productnote =$_POST['productnote'];
$discountperc =$_POST['discountperc'];
$price =$_POST['price'];
$discprice =$_POST['discprice'];
$stock =$_POST['stock'];
$offer =$_POST['offer'];
$image_1 =$_POST['image1'];
$image_2 =$_POST['image2'];
$image_3 =$_POST['image3'];
$image_4 =$_POST['image4'];
$Category =$_POST['Category'];


	$sql1 = "UPDATE products SET product_name=:productname, product_desc=:productdesc, product_note=:productnote, discount_perc=:discountperc, price=:price, disc_price=:discprice,  stock=:stock, offer=:offer,  image_1=:image_1, image_2=:image_2, image_3=:image_3, image_4=:image_4, category=:Category  WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':productname' => $productname,
		':productdesc' => $productdesc,
		':productnote' => $productnote,
		':discountperc' =>$discountperc,
		':price' =>$price,
		':discprice' => $discprice,
		':stock' => $stock,
		':offer' => $offer,
		':image_1' =>$image_1,
		':image_2' =>$image_2,
		':image_3' =>$image_3,
		':image_4' =>$image_4,
		':Category' =>$Category,


		':id' => $id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}


?>

