<?php include 'connect.php' ?>
<?php include 'calculate.php' ?>

<title style="color:white;"> Lisanslar </title>
<!---------------------------------------->
 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<script>
	setInterval(()=>window.location.reload(true),86400);
	</script>

<body style="background-color: black;">
	<div class="container" >
    <html>
  <head>
    <title style="color:white;"> Lisanslar </title>
  </head>
  <body>
    
    
    <p border="1"> </p>
  </body>
</html>
    <table class="table border">
       

        <thead>
            <tr>
                <th style="color:white;">Lisans</th>
                <th style="color:white;">Alınan Firma</th>
                <th style="color:white;">Lisans Tarihi</th>
                <th style="color:white;">Kalan Süre</th>
            <style> 
             {
            
			
			}



        </style>
           </tr>
        </thead>
        <tbody>
        	<?php
        	$productList=$db->prepare("SELECT * from license");
        	$productList->execute();

        	while ($product=$productList->fetch(PDO::FETCH_ASSOC)) {
        	?>
		

            <tr class="<?php echo $classname= state($product['expire_date']);?>">
                <td style="color:white;"><?php echo $product['license_name']; ?></td>
                <td style="color:white;"><?php echo $product['license_company']; ?></td>
                <td style="color:white;"><?php echo $product['expire_date']; ?></td>
                <td style="color:white;"><?php echo remainingTime($product['expire_date']);?></td>
     			       
            </tr>

            <?php
        	}
        	?>
        </tbody>
    </table>
    </div>
</body>
