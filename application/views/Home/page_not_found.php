<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Not Found 404 </title>
		<meta name="robots" content="noindex, nofollow">
		<meta content="" name="description">
		<meta content="" name="keywords">
		<style>
			body {
			font-family: "Open Sans", sans-serif;
			background: #f6f9ff;
			color: #444444;
			}
			
			@media (min-width: 576px){
			.container, .container-sm {
			max-width: 540px;
			}
			}
			
			.error-404 h1 {
    font-size: 180px;
    font-weight: 700;
    color: #4154f1;
    margin-bottom: 0;
    line-height: 150px;
}
.error-404 {
    padding: 30px;
}

.align-items-center {
    align-items: center!important;
}
.justify-content-center {
    justify-content: center!important;
}
.flex-column {
    flex-direction: column!important;
}
.min-vh-100 {
    min-height: 100vh!important;
}
.d-flex {
    display: flex!important;
}

.error-404 h2 {
    font-size: 24px;
    font-weight: 700;
    color: #012970;
    margin-bottom: 30px;
}
.error-404 .btn {
    background: #51678f;
    color: #fff;
    padding: 8px 30px;
}
.py-5 {
    padding-top: 3rem!important;
    padding-bottom: 3rem!important;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
			
			.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
			--bs-gutter-x: 1.5rem;
			--bs-gutter-y: 0;
			width: 100%;
			padding-right: calc(var(--bs-gutter-x) * .5);
			padding-left: calc(var(--bs-gutter-x) * .5);
			margin-right: auto;
			margin-left: auto;
			}
		</style>
	</head>
	
	<body>
		<main>
			<div class="container">
				<section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
					<h1 style="font-size:6rem;">404</h1>
					<h2>The page you are looking for doesn't exist.</h2> <a class="btn" href="/">Back to home</a>
					<img src="<?= base_url('public/images/not-found.svg')?>" class="img-fluid py-5" style="width: 35%;" alt="Page Not Found">
				</section>
			</div>
		</main> 
	</body>
</html>