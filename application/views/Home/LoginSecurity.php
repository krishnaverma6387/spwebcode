
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title>Slick Pattern - Login & Security</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<style>

		</style>
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Login </li>
					</ol>
				</div>
			</nav>
		</div> 
		<section class="pro-content login-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 mx-auto">
						<h1 style="font-size : 22px;">Login</h1>  
					</div>
					<div class="col-sm-7 mx-auto">
					 	<table class="table table-border">
						   	  <tbody>
								  <tr>
									  <td><span>Name:</span> <br>
									    <span class="font-weight-bold">Rahul Singh</span>	  
									 </td> 
									 <td class="text-right">
									 <button class="btn btn-secondary" onclick="ChnageUserData('Name')" >Edit</button>
									 </td>  
								  </tr> 
								  <tr>
									  <td><span>E-mail::</span> <br>
									    <span class="font-weight-bold">rahul@gmail.com</span>	  
									 </td> 
									 <td class="text-right">
									 <button class="btn btn-secondary" onclick="ChnageUserData('Email')">Edit</button>
									 </td>  
								  </tr>
								  <!--tr>
									  <td><span>Password::</span> <br>
									    <span class="font-weight-bold">********</span>	  
									 </td> 
									 <td class="text-right">
									 <button class="btn btn-secondary" onclick="ChnageUserData('Password')">Edit</button>
									 </td>  
								  </tr-->
							  </tbody>
						</table>
						<button class="btn btn-secondary">Done</button>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Modal -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-uppercase" id="exampleModalLabel">ss</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
				        <form>
						  <div class="form-group">
							  <label class="label_name"></label>  
							  <input type="text" name="text" id="placeholder" class="form-control form-control-lg" placeholder=''>
						  </div>
						  <div class="form-group">
							  <button class="btn btn-secondary">Save</button>  
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<?php include('include/footer.php'); ?>
		<?php include('include/jsLinks.php'); ?>
		
		
		<script>
		   function ChnageUserData(value)
		   {
		    var label = value;
		     var values = "Chnage "+ value;
			  jQuery("#Edit").modal('show');
			  jQuery(".modal-header .modal-title").html(values);
			  jQuery(".label_name").html(label);
			   $('#placeholder').attr('placeholder', label );

		   }
		</script>
		
	</body>
</html>																								
