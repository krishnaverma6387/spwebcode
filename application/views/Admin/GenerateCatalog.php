

<html lang="en">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="description" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
		
		<meta name="keywords" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
		
		<meta name="author" content="<?=$this->data->appName.','.$this->data->copyrightName;?>">
		
		<title><?= $this->data->appName.' | '.$this->data->title.' | ';?> Generate Catalog</title>
		
		<style>
			/* fonts  */
			@import url('https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web');
			
			body {
			background: #DFC2F2;
			background-image: linear-gradient( 135deg, #CE9FFC 10%, #7367F0 100%);
			background-attachment: fixed;	
			background-size: cover;
			}
			
			#container{
			box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
			background: rgba(255, 255, 255, 0.90);
			text-align: center;
			border-radius: 5px;
			overflow: hidden;
			margin: 5em auto;
			height: 500px;
			width: 700px;
			}
			
			
			/* 	Product details  */
			.product-details {
			position: relative;
			text-align: left;
			overflow: hidden;
			padding: 30px;
			height: 100%;
			float: left;
			width: 40%;
			
			}
			
			/* 	Product Name */
			#container .product-details h1{
			font-family: 'Old Standard TT', serif;
			display: inline-block;
			position: relative;
			font-size: 34px;
			color: #344055;
			margin: 0;
			
			}
			
			#container .product-details h1:before{
			position: absolute;
			content: '';
			right: 0%; 
			top: 0%;
			transform: translate(25px, -15px);
			font-family: 'Farsan', cursive;
			display: inline-block;
			background: inherit;
			border-radius: 5px;
			font-size: 14px;
			padding: 5px;
			color: #FFF;
			margin: 0;
			animation: chan-sh 6s ease infinite;
			
			}
			
			/* The most important information about the product */
			#container .product-details > p {
			font-family: 'Farsan', cursive;
			text-align: center;
			font-size: 20px;
			color: #7d7d7d;
			
			}
			
			/* control */
			
			.control{
			position: absolute;
			bottom: 20%;
			left: 22.8%;
			
			}
			/* the Button */
			.btn {
			transform: translateY(0px);
			transition: 0.3s linear;
			background: #49C608;
			border-radius: 5px;
			position: relative;
			overflow: hidden;
			cursor: pointer;
			outline: none;
			border: none;
			color: #eee;
			padding: 0;
			margin: 0;
			
			}
			
			.btn:hover{transform: translateY(-4px);}
			
			.btn span {
			font-family: 'Farsan', cursive;
			transition: transform 0.3s;
			display: inline-block;
			padding: 10px 20px;
			font-size: 1.2em;
			margin:0;
			
			}
			/* shopping cart icon */
			.btn .price, .shopping-cart{
			background: #333;
			border: 0;
			margin: 0;
			}
			
			.btn .price {
			transform: translateX(-10%); padding-right: 15px;
			}
			
			/* the Icon */
			.btn .shopping-cart {
			transform: translateX(-100%);
			position: absolute;
			background: #333;
			z-index: 1;
			left: 0;
			top: 0;
			}
			
			/* buy */
			.btn .buy {z-index: 3; font-weight: bolder;}
			
			.btn:hover .price {transform: translateX(-110%);}
			
			.btn:hover .shopping-cart {transform: translateX(0%);}
			
			
			
			/* product image  */
			.product-image {
			transition: all 0.3s ease-out;
			display: inline-block;
			position: relative;
			overflow: hidden;
			height: 100%;
			float: right;
			width: 50%;
			display: inline-block;
			}
			
			#container img {width: 100%;height: 100%;}
			
			.info {
			background: rgba(27, 26, 26, 0.9);
			font-family: 'Farsan', cursive;
			transition: all 0.3s ease-out;
			transform: translateX(-100%);
			position: absolute;
			line-height: 1.9;
			text-align: left;
			font-size: 120%;
			cursor: no-drop;
			color: #FFF;
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			}
			
			.info h2 {text-align: center}
			.product-image:hover .info{transform: translateX(0);}
			
			.info ul li{transition: 0.3s ease;}
			.info ul li:hover{transform: translateX(50px) scale(1.3);}
			
			.product-image:hover img {transition: all 0.3s ease-out;}
			.product-image:hover img {transform: scale(1.2, 1.2);}
			
		</style>
	</head>
	<body>
		<button class="btn  btn-danger buy" id="btnpdf"> Download</button>
		<section id="catalogcol">
			<div id="container">	
				
				<div class="product-image " style="width:100% !important;">
					<img src="<?=base_url($this->data->appTempletePath);?>images/cover.jpg" alt="Omar Dsoky">
				</div>
			</div>
			<?php
				$i = 1;
				foreach($product as $each)
				{
					
					$image = explode(',',$each->image1);
					if($i%2 == 0)
					{
					?>
					<div id="container">
						<!-- Start	Product details -->
						<div class="product-details" >
							<!-- Product Name -->
							<h1><?= $each->name?></h1>
							<!-- The most important information about the product -->
							<p class="information"> <?= $each->long_desc?></p>
							<span style="position:absolute">Launch At : <?= $each->launch_time?></span><br>
							<span style="position:absolute">Url : <a href="<?= base_url();?>"><?= base_url();?></a></span>
						</div>
						<div class="product-image" >
							<img src="<?=base_url('uploads/product/').$image[0];?>" alt="Omar Dsoky">
						</div>
						<!--  End product image  -->
					</div>
					<?php
					}
					else
					{
					?>
					<div id="container">	
						<div class="product-image" style="float:left !important">
							<img src="<?=base_url('uploads/product/').$image[0];?>" alt="Omar Dsoky">
						</div>
						<!--  End product image  -->
						<!-- Start	Product details -->
						<div class="product-details" style="float:right !important">
							<!-- 	Product Name -->
							<h1><?= $each->name?></h1>
							<!-- The most important information about the product -->
							<p class="information"> <?= $each->long_desc?></p>
							<span style="position:absolute">Launch At : <?= $each->launch_time?></span><br>
							<span style="position:absolute">Url : <a href="<?= base_url();?>"><?= base_url();?></a></span>
						</div>
					</div>
					<?php
					}
					$i++;
				}
			?>
			
			
			
		</section>
		<!--div class="container"><br>
			<div class="row">
			<div class="col-sm-12" >
			<div class="card">
			<div class="card-body p-0">
			
			<div class="row">
			<div class="col-sm-12">
			<img src="<?=base_url($this->data->appTempletePath);?>images/cover.jpg" style="width:100%;">
			</div>
			
			</div>
			<?php foreach($product as $each)
				{
					$image = explode(',',$each->image1);
				?>
				<div class="row mt-2" id="rowproduct"  >
				<div class="col-sm-6">
				<img src="<?=base_url('uploads/product/').$image[0];?>" style="width:100%; height:1500px">
				</div>
				<div class="col-sm-6">
				
				</div>
				</div>
				<?php
				}
			?>
			</div>
			</div>
			</div>
			<div class="col-sm-12">
			<div class="float-right">
			<button class="btn  btn-danger" id="btnpdf"><i class="fa fa-image"></i> PDF</button>
			<button class=" btn btn-dark" onclick="window.print()" id="PrintBtn"> <i class="fa fa-print"></i> Print </button>
			
			<br>
			<br>
			</div>
			</div>
			</div>
		</div-->
		
		<!--script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		<script>
			document.getElementById("btnJPg").addEventListener("click", function() {
			var htmldata = $("#btnJPg").html();
			$("#btnJPg").html('Downloading..');
			$("#btnJPg").attr('disabled', 'true');
			html2canvas(document.querySelector("#invoicecol")).then(function (canvas) {			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			// document.getElementById("previewImg").appendChild(canvas);
			anchorTag.download = "<?= time();?>"+".jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
			$("#btnJPg").html(htmldata);
			$("#btnJPg").removeAttr('disabled');
			});
			
			});
			
		</script>
		
		<script>
			document.getElementById("btnpdf").addEventListener("click", function() {
				let element = document.getElementById('catalogcol');
				
				let opt = {
					margin:       1,
					filename:     '<?= time();?>.pdf',
					image:        { type: 'pdf', quality: 0.98 },
					html2canvas:  { scale: 2 },
					jsPDF:        { unit: 'in', format: 'a4', orientation: 'landscape' }
				};
				
				// New Promise-based usage:
				html2pdf().set(opt).from(element).save();
			});
		</script>
		
		
		
	</body>
</html>

