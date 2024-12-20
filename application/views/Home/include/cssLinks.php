
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi">
<link rel="icon" type="image/png" href="<?= !empty($this->webLogo) ? base_url('uploads/logo/'.$this->webLogo['favicon']):'' ?>">
<title>Slick Pattern</title>
<?php echo canonical_link(); ?>
<!-- Vendor CSS Files -->
<link rel="stylesheet" href="<?= base_url('assets/website/css/plugins/magnific-popup/magnific-popup.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/css/plugins/nouislider/nouislider.css') ?>">
<!-- <link rel="stylesheet" href="<?= base_url('assets/website/vendor/animate.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/vendor/toastr.min.css') ?>"> -->

<!-- Core CSS Files -->
<link rel="stylesheet" href="<?= base_url('assets/website/css/bootstrap.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
<link rel="stylesheet" href="https://codepen.io/imgix/pen/d06269809bb83c85326ebbbf7e81241b.scss">
<link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css">

<link rel="stylesheet" href="<?= base_url('assets/website/css/custom.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/css/responsive.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/css/countdown.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/css/external.css') ?>">

<!-- icon css -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/website/vendor/bootstrap-icons/font/bootstrap-icons.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/vendor/fontawesome-6.1.1/css/all.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/website/vendor/hover-min.css') ?>"> -->
<link rel="stylesheet" href="<?= base_url('assets/application/css/owl.carousel.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/application/css/owl.theme.css') ?>">
<!-- <link rel="stylesheet" href="<?= base_url('assets/application/css/custom.css') ?>"> -->
<!-- Core CSS Files -->
<link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/external.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic" />



<!-- fonts css -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin: 0;
}

element.style {
  bottom: 0px;
  left: 0px;
  position: absolute;
  z-index: 1000;
  border: 0px;
}
</style>

<style>
        /* Basic styles for the cookie consent modal */
        .cookie-consent-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9000;
        }

        .cookie-consent-content {
            background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    width: 99vw;
    max-width: 100vw;
    min-height: 66vh;
        }

        .cookie-consent-content p {
            margin-bottom: 20px;
        }

        .cookie-consent-content button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin: 5px;
        }

        .cookie-consent-content button.reject {
            background-color: #dc3545;
        }
    </style>

<script type="application/ld+json">
	        {
	        	"@context" : "https://schema.org",
	            "@type" : "Organization",
	            "Name" : "SlickPattern",
	            "URL" : "<?= base_url()?>",
	            "contactPoint" : [{
	            	"@type" : "ContactPoint",
	            	"telephone" : "+91-9454546567",
	            	"contactType" : "Customer Service"
	            }],
	            "logo" : "<?= !empty($this->webLogo) ? base_url('uploads/logo/' . $this->webLogo['web_header_logo']) : '' ?>",
	            "sameAs" : [
	            	"https://www.facebook.com/",
	            	"https://twitter.com/",
	            	"https://plus.google.com/",
	            	"https://www.instagram.com/",
	            	"https://www.youtube.com/"
	            ]
	        }
	    </script>
      
      <?php
      if(empty($this->uri->segment('1')))
      {
      ?>
      
      
      <script type="application/ld+json">
			{
				"@context" : "https://schema.org",
				"@type" : "WebSite",
				"url" : "<?= base_url()?>",
				"potentialAction" : {
					"@type" : "SearchAction",
					"target" : "<?= base_url()?>{search_term_string}",
					"query-input" : "required name=search_term_string"
				}
			}
		</script>
    
    <?php
    }
      if(isset($BreadcrumbList)){
        ?>
        <script type="application/ld+json">
			{
				"@context" : "https://schema.org",
				"@type" : "BreadcrumbList",
				"itemListElement": [
					{
					    "@type": "ListItem",
					    "position": 1,
					    "item": {
						    "@id" : "<?= base_url()?>clothing",
						    "name" : "Clothing"
					    }
					},
					{
					    "@type": "ListItem",
					    "position": 2,
					    "item": {
						    "@id" : "<?= base_url()?>men-clothing",
						    "name" : "Men"
					    }
					},
					{
					    "@type": "ListItem",
					    "position": 3,
					    "item": {
						    "@id" : "<?= base_url()?>tshirts",
						    "name" : "Tshirts"
					    }
					},
					{
					    "@type": "ListItem",
					    "position": 4,
					    "item": {
						    "@id" : "<?= base_url()?>louis-philippe-tshirts",
						    "name" : "Louis Philippe"
					    }
					},
					{
					    "@type": "ListItem",
					    "position": 5,
					    "item": {
						    "@id" : "<?= base_url()?>louis-philippe",
						    "name" : "More by Louis Philippe"
					    }
					}
				]
			}
		</script>
        <?php
      }
      if(isset($productList)){
        ?>
        
        <script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","itemListElement":[{"@type":"ListItem","position":1,"url":"<?= base_url()?>tshirts/louis+philippe/louis-philippe-pure-cotton-geometric-printed-polo-collar-t-shirt/28720044/buy","name":"Louis Philippe Pure Cotton Geometric Printed Polo Collar T-shirt"},{"@type":"ListItem","position":2,"url":"<?= base_url()?>tshirts/rare+rabbit/rare-rabbit-men-lester-slim-fit-polo-collar-cotton-t-shirt/27278252/buy","name":"RARE RABBIT Men Lester Slim Fit Polo Collar Cotton T-Shirt"},{"@type":"ListItem","position":3,"url":"<?= base_url()?>tshirts/aero+armour/aero-armour-unisex-typography-printed-cotton-t-shirt/29594116/buy","name":"Aero Armour Unisex Typography Printed Cotton T-shirt"},{"@type":"ListItem","position":4,"url":"<?= base_url()?>lounge-tshirts/pepe+jeans/pepe-jeans-cotton-sleeveless-lounge-t-shirt/28526204/buy","name":"Pepe Jeans Cotton Sleeveless Lounge T-shirt"},{"@type":"ListItem","position":5,"url":"<?= base_url()?>tshirts/red+tape/red-tape-polo-collar-pure-cotton-t-shirt/22183856/buy","name":"Red Tape Polo Collar Pure Cotton T-shirt"},{"@type":"ListItem","position":6,"url":"<?= base_url()?>tshirts/crazymonk/crazymonk-unisex-anime-printed-oversized-t-shirt/24357700/buy","name":"Crazymonk Unisex Anime Printed Oversized T-shirt"},{"@type":"ListItem","position":7,"url":"<?= base_url()?>tshirts/mascln+sassafras/mascln-sassafras-unisex-grey-typography-printed-cotton-oversize-t-shirt/28073540/buy","name":"MASCLN SASSAFRAS Unisex Grey Typography Printed Cotton Oversize T-shirt"},{"@type":"ListItem","position":8,"url":"<?= base_url()?>tshirts/red+tape/red-tape-polo-collar-pure-cotton-t-shirt/22183906/buy","name":"Red Tape Polo Collar Pure Cotton T-shirt"},{"@type":"ListItem","position":9,"url":"<?= base_url()?>tshirts/aero+armour/aero-armour-unisex-round-neck-pure-cotton-t-shirt/25899798/buy","name":"Aero Armour Unisex Round Neck Pure Cotton T-shirt"},{"@type":"ListItem","position":10,"url":"<?= base_url()?>lounge-tshirts/u.s.+polo+assn./us-polo-assn-embroidered-logo-pure-cotton-lounge-t-shirts/22492640/buy","name":"U.S. Polo Assn. Embroidered Logo Pure Cotton Lounge T-shirts"}]}</script>
        <?php
      }
      if(isset($productDetails)){
        ?>
        <script type="application/ld+json">
	        {
	        	"@context" : "https://schema.org",
	            "@type" : "Product",
	            "name" : "Louis Philippe Pure Cotton Geometric Printed Polo Collar T-shirt",
	            "image" : "https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/28720044/2024/5/13/7e9c49c3-fe83-4c10-a4e0-fec1e7c8c6de1715595092809-Louis-Philippe-Men-Tshirts-6981715595092354-1.jpg",
				"sku" : "28720044",
				"mpn" : "28720044",
				"description" : "Louis Philippe Pure Cotton Geometric Printed Polo Collar T-shirt",
				"offers": {
                    "@type": "Offer",
					"priceCurrency": "INR",
					"availability": "InStock",
					"price" : "1839",
					"url": "https://www.myntra.com/tshirts/louis+philippe/louis-philippe-pure-cotton-geometric-printed-polo-collar-t-shirt/28720044/buy"
                },
	            "brand" : {
	            	"@type" : "Thing",
	            	"name" : "Louis Philippe"
				}
				
				
	        }
	    </script>
      <?php
      }
  ?>