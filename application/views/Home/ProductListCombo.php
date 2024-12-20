<!DOCTYPE html>
<html lang="en">
	<head>
		
		<?php include('include/cssLinks.php') ?>  
		
		<style>
			.star-rating-widget{
			display:none;
			} 
			
			.disabled{
			background: #f3eeee;
			}
			
			.widget1{
			// border-top: 0.5px solid gainsboro;
			border-bottom: 0.5px solid gainsboro;
			padding: 20px 0;
			padding-bottom:0px;
			}
			.css-z4jw4f {
			display: block;
			position: relative;
			z-index: 1;
			border-bottom: 1px solid #000;
			margin: 15px 0 50px 0;
			z-index: 2;
			}
			.css-1f7cl0z {
			position: absolute;
			left: 2.1429rem;
			background-color: #fff;
			z-index: 1;
			padding: 0 2.1429rem;
			word-break: none;
			white-space: noWrap;
			bottom: -1.4286rem;
			font-size: 24px;
			font-weight: 600;
			line-height: 28px;
			-webkit-letter-spacing: -0.3px;
			-moz-letter-spacing: -0.3px;
			-ms-letter-spacing: -0.3px;
			letter-spacing: -0.3px;
			}
			.css-1e4cl8d {
			color: #999;
			font-size: 12px;
			font-weight: 400;
			line-height: 24px;
			-webkit-letter-spacing: 0;
			-moz-letter-spacing: 0;
			-ms-letter-spacing: 0;
			letter-spacing: 0;
			}
			.css-1o4xsyq {
			cursor: pointer;
			position: absolute;
			left: 75%;
			top: -23px;
			background-color: #fff;
			padding: 0 1.5rem;
			white-space: noWrap;
			}
			.css-ykz59f {
			position: relative;
			cursor: pointer;
			}
			.css-3i7m42 {
			display: -webkit-inline-box;
			display: -webkit-inline-flex;
			display: -ms-inline-flexbox;
			display: inline-flex;
			-webkit-align-items: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			z-index: 1;
			font-size: 16px;
			font-weight: 500;
			line-height: 24px;
			-webkit-letter-spacing: -0.1px;
			-moz-letter-spacing: -0.1px;
			-ms-letter-spacing: -0.1px;
			letter-spacing: -0.1px;
			color: #252525;
			}
			.css-19crm3d {
			display: inline-block;
			height: 24px;
			width: 24px;
			margin-right: 0.625rem;
			}
			.css-1vlnojd {
			margin: 0;
			font-size: 12px !important;
			font-weight: 600;
			line-height: 24px;
			-webkit-letter-spacing: 0;
			-moz-letter-spacing: 0;
			-ms-letter-spacing: 0;
			letter-spacing: 0;
			}
			
			@media only screen and (max-width:768px){
			.css-1f7cl0z {
			left: 1rem;
			padding: 0 1rem;
			font-size: 18px;
			}
			.css-1o4xsyq {
			left: 45%;
			}
			}
			
			.owl-dots .owl-dot{
			border: none;
			padding: 4px;
			border-radius:50%;
			margin:2px;
			background: #a4a0a0;
			}
			.owl-dots .owl-dot.active{
			background: #252323;
			}
			.owl-nav .owl-prev,.owl-nav .owl-next{
			font-size: 36px;
			}
			.toolbox-layout .card-view{
			padding: 4px 7px;
			background: #f7f7f7;
			border-radius: 50px;
			font-size: 14px;
			font-weight: 600;
			color: gray;
			margin: 0 4px;
			}
			
			@media only screen and (max-width:768px){
			.sale-countdown{
			display:none;
			}
			.product-slider-list img{
			height:120px;
			}
			}
			@media only screen and (min-width:1024px){
			#tile-view{
			padding:0 12px !important;
			padding-left:20px !important;
			}
			.tile-view-card{
			padding:0 5px;
			}
			}
		</style>
		
	</head>  
	
	<body>
		<?php include('include/header.php') ?>
		
		<div class="page-wrapper">
			<main class="main">
				<div class="page-header text-center" style="overflow: hidden;">
					<!--<h1 class="page-title">List<span>Shop</span></h1>-->
					<div class="product-slider-list owl-carousel owl-simple" style="display:block;">
						<a href="">
							<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/fermion/images/category_slider/img/tr:w-2698,/Beloved%20Labels-desktop.jpg?rnd=20200526195200" >
						</a>
						<a href="">
							<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/fermion/images/category_slider/img/tr:w-2698,/occasions-desktop.jpg?rnd=20200526195200" >
						</a>
						<a href="">
							<img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/fermion/images/category_slider/img/tr:w-2698,/Celebratory%20callings-desktop.jpg?rnd=20200526195200"  >
						</a>
					</div>
				</div><!-- End .page-header -->
				
				<div class="row m-0">
					<div class="col-6 ">
						<nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
							<div class="container-fluid p-0">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">List</li>
								</ol>
							</div><!-- End .container -->
						</nav><!-- End .breadcrumb-nav -->
					</div>
					<div class="col-6 ">
						<div class="toolbox mb-3 mt-1">
							<!--<div class="toolbox-left">
								<div class="toolbox-info">
								Showing <span>9 of 56</span> Products
								</div>
							</div><!-- End .toolbox-left -->
							
							<div class="toolbox-right w-100 " style="flex-direction:row;">
								
								<span style="font-size: 13px; font-weight: 600; color: gray; margin-top:4px;">View:</span>
								<div class="toolbox-layout mt-1">
									
									<span class="card-view">
										<span class="hide_in_mobile">Tile:</span>
										<a href="javascript:void(0)" class="btn-layout  product-view active" id="tile">
											<svg width="16" height="10">
												<rect x="0" y="0" width="4" height="4" />
												<rect x="6" y="0" width="4" height="4" />
												<rect x="12" y="0" width="4" height="4" />
												<rect x="0" y="6" width="4" height="4" />
												<rect x="6" y="6" width="4" height="4" />
												<rect x="12" y="6" width="4" height="4" />
											</svg>
										</a>
									</span>
									<span class="card-view">
										<span class="hide_in_mobile">List:</span>
										<a href="javascript:void(0)" class="btn-layout product-view" id="list">
											
											<svg width="16" height="10">
												<rect x="0" y="0" width="4" height="4" />
												<rect x="6" y="0" width="10" height="4" />
												<rect x="0" y="6" width="4" height="4" />
												<rect x="6" y="6" width="10" height="4" />
											</svg>
										</a>
									</span>
									
								</div><!-- End .toolbox-layout -->
							</div><!-- End .toolbox-right -->
						</div><!-- End .toolbox -->
					</div>
				</div>
				<div class="page-content">
					<div class="container-fluid">
						<header data-at="header" class="css-z4jw4f">
							<h1 class="css-1f7cl0z"><span style="text-transform: lowercase; color: #444141;">Indianwear</span><small data-at="plp-product-count" class="css-1e4cl8d">(87058)</small></h1>
							<div class="css-1o4xsyq hide_in_mobile">
								<div class="css-ykz59f">
									<div data-at="sort-by" class="css-3i7m42">
										<svg viewBox="0 0 24 24" class="css-19crm3d">
											<title></title>
											<path
											d="M6.42851 6.48961V9.51726L6.45766 17.476L7.15709 16.7659C7.29895 16.684 7.46379 16.6528 7.62518 16.6774C7.78657 16.702 7.93517 16.7808 8.04715 16.9013C8.15914 17.0218 8.22803 17.177 8.24278 17.342C8.25754 17.507 8.2173 17.6723 8.12852 17.8113L6.18566 19.7837C6.04905 19.9222 5.86387 20 5.6708 20C5.47772 20 5.29255 19.9222 5.15594 19.7837L3.21307 17.8113C3.07664 17.6726 3 17.4846 3 17.2886C3 17.0926 3.07664 16.9046 3.21307 16.7659C3.28005 16.6961 3.36011 16.6407 3.44854 16.6028C3.53696 16.5649 3.63196 16.5454 3.72793 16.5454C3.8239 16.5454 3.9189 16.5649 4.00733 16.6028C4.09575 16.6407 4.17582 16.6961 4.24279 16.7659L4.94222 17.476V6.48961L4.24279 7.19968C4.11022 7.32303 3.93691 7.39147 3.75708 7.39147C3.57724 7.39147 3.40394 7.32303 3.27136 7.19968C3.13492 7.06099 3.05829 6.87299 3.05829 6.67699C3.05829 6.48098 3.13492 6.29298 3.27136 6.1543L5.21422 4.18188C5.34964 4.06449 5.52187 4 5.69994 4C5.87801 4 6.05024 4.06449 6.18566 4.18188L8.12852 6.1543C8.26496 6.29298 8.3416 6.48098 8.3416 6.67699C8.3416 6.87299 8.26496 7.06099 8.12852 7.19968C7.994 7.31898 7.82143 7.38472 7.6428 7.38472C7.46418 7.38472 7.29161 7.31898 7.15709 7.19968L6.42851 6.48961Z"
											fill="#001325"
											fill-opacity="0.92"
											></path>
											<path
											d="M10.6931 5.50339H20.2714C20.4647 5.50339 20.65 5.58132 20.7866 5.72003C20.9232 5.85874 21 6.04688 21 6.24304C21 6.43921 20.9232 6.62735 20.7866 6.76606C20.65 6.90477 20.4647 6.9827 20.2714 6.9827H10.6931C10.4999 6.9827 10.3146 6.90477 10.1779 6.76606C10.0413 6.62735 9.96453 6.43921 9.96453 6.24304C9.96453 6.04688 10.0413 5.85874 10.1779 5.72003C10.3146 5.58132 10.4999 5.50339 10.6931 5.50339Z"
											fill="#001325"
											fill-opacity="0.92"
											></path>
											<path
											d="M10.6931 11.2431H17.2211C17.4144 11.2431 17.5997 11.3211 17.7363 11.4598C17.8729 11.5985 17.9497 11.7866 17.9497 11.9828C17.9497 12.179 17.8729 12.3671 17.7363 12.5058C17.5997 12.6445 17.4144 12.7224 17.2211 12.7224H10.6931C10.4999 12.7224 10.3146 12.6445 10.1779 12.5058C10.0413 12.3671 9.96453 12.179 9.96453 11.9828C9.96453 11.7866 10.0413 11.5985 10.1779 11.4598C10.3146 11.3211 10.4999 11.2431 10.6931 11.2431Z"
											fill="#001325"
											fill-opacity="0.92"
											></path>
											<path
											d="M13.3063 16.9829H10.6931C10.4999 16.9829 10.3146 17.0608 10.1779 17.1995C10.0413 17.3382 9.96453 17.5263 9.96453 17.7225C9.96453 17.9187 10.0413 18.1068 10.1779 18.2455C10.3146 18.3842 10.4999 18.4622 10.6931 18.4622H13.3063C13.4995 18.4622 13.6848 18.3842 13.8214 18.2455C13.9581 18.1068 14.0348 17.9187 14.0348 17.7225C14.0348 17.5263 13.9581 17.3382 13.8214 17.1995C13.6848 17.0608 13.4995 16.9829 13.3063 16.9829Z"
											fill="#001325"
											fill-opacity="0.92"
											></path>
										</svg>
										<div>  
											<label for="sortby" class="css-1vlnojd">Sort by:</label>  
											<p class="css-12jt4j8" >Popularity</p>  
											
										</div>
									</div>
									<div id="sub-nav" style="display:none;">   
										<div class="mt-2">    
											<div class="css-1wq2eip" style="border-radius:0;">
												<div class="activeSort css-16z3cmu desktop-filter-box common-selector">
													Popularity
													<div  class="css-1mlyadd">
														<div  class="css-10ltdh css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect checked"></div>
															<svg width="12" height="9" viewBox="0 0 12 9" fill="none"
															xmlns="http://www.w3.org/2000/svg">
																<path
																d="M3.99234 9C3.55863 9 3.55863 9 2.22951 7.67838L0.312789 5.78638C0.213795 5.69046 0.135118 5.57581 0.0813976 5.44918C0.0276768 5.32254 0 5.18649 0 5.04906C0 4.91162 0.0276768 4.77557 0.0813976 4.64894C0.135118 4.5223 0.213795 4.40765 0.312789 4.31173C0.509534 4.11634 0.77623 4.00659 1.0543 4.00659C1.33236 4.00659 1.59906 4.11634 1.7958 4.31173L3.99234 6.49588L10.2042 0.305141C10.4009 0.10975 10.6676 0 10.9457 0C11.2238 0 11.4905 0.10975 11.6872 0.305141C11.7862 0.401057 11.8649 0.515712 11.9186 0.642346C11.9723 0.768979 12 0.905026 12 1.04246C12 1.1799 11.9723 1.31595 11.9186 1.44259C11.8649 1.56922 11.7862 1.68387 11.6872 1.77979L4.69187 8.73568C4.49929 8.90628 4.25026 9.00037 3.99234 9Z"
																fill="white"></path> 
															</svg>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly=""  value="popularity" />   
													</div>
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">
													Price Low To High
													<div  class="css-1mlyadd">
														<div type="list" value="low-to-high" readonly="" class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect checked"></div>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="priceSort" />
													</div>
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">
													Price High To Low
													<div  class="css-1mlyadd">
														<div  class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect"></div>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="priceSortInv" />
													</div>
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">  
													New Arrivals
													<div type="list" value="new_arrivals" readonly="" class="css-1mlyadd">
														<div type="list" value="new_arrivals" readonly="" class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect"></div>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="newArrivals" />
													</div>   
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">
													Bestseller
													<div  class="css-1mlyadd">
														<div  class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect"></div>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="bestSeller" />
													</div>
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">
													Discount High to Low
													<div  class="css-1mlyadd"> 
														<div  class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect"></div>
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="discountSortInv" />
													</div>
												</div>
												<div class="css-16z3cmu desktop-filter-box common-selector">
													Fastest Shipping Time
													<div class="css-1mlyadd">
														<div class="css-1fifvl0">
															<div class="state-elem"></div>
															<div class="effect"></div>      
														</div>
														<input type="radio" name="sortby" class="radio sortby" readonly="" value="shipTime" />  
													</div>
												</div>  
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- sort by filter container for phone start-->
							<div class="sortby hide-sm">    
								<div class="css-1hj7f75"></div>   
								<div class="css-1o72e4w">
									<div class="css-1wq2eip">
										<div class="css-1uu6dpv">
											<svg viewBox="0 0 24 24" class="css-1oql73n">
												<title></title>
												<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
												<path
												d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
												fill="#001325" fill-opacity="0.92"></path>
											</svg>
										</div>
										<p class="css-1f2js3r">Sort by</p>
										<div class="activeSort css-16z3cmu common-selector">
											Popularity
											<div  class="css-1mlyadd">
												<div  class="css-10ltdh css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect checked"></div>
													<svg width="12" height="9" viewBox="0 0 12 9" fill="none"
													xmlns="http://www.w3.org/2000/svg">
														<path
														d="M3.99234 9C3.55863 9 3.55863 9 2.22951 7.67838L0.312789 5.78638C0.213795 5.69046 0.135118 5.57581 0.0813976 5.44918C0.0276768 5.32254 0 5.18649 0 5.04906C0 4.91162 0.0276768 4.77557 0.0813976 4.64894C0.135118 4.5223 0.213795 4.40765 0.312789 4.31173C0.509534 4.11634 0.77623 4.00659 1.0543 4.00659C1.33236 4.00659 1.59906 4.11634 1.7958 4.31173L3.99234 6.49588L10.2042 0.305141C10.4009 0.10975 10.6676 0 10.9457 0C11.2238 0 11.4905 0.10975 11.6872 0.305141C11.7862 0.401057 11.8649 0.515712 11.9186 0.642346C11.9723 0.768979 12 0.905026 12 1.04246C12 1.1799 11.9723 1.31595 11.9186 1.44259C11.8649 1.56922 11.7862 1.68387 11.6872 1.77979L4.69187 8.73568C4.49929 8.90628 4.25026 9.00037 3.99234 9Z"
														fill="white"></path> 
													</svg>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly=""  value="popularity" />   
											</div>
										</div>
										<div class="css-16z3cmu common-selector">
											Price Low To High
											<div  class="css-1mlyadd">
												<div type="list" value="low-to-high" readonly="" class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect checked"></div>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="priceSort" />
											</div>
										</div>
										<div class="css-16z3cmu common-selector">
											Price High To Low
											<div  class="css-1mlyadd">
												<div  class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect"></div>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="priceSortInv" />
											</div>
										</div>
										<div class="css-16z3cmu common-selector">  
											New Arrivals
											<div type="list" value="new_arrivals" readonly="" class="css-1mlyadd">
												<div type="list" value="new_arrivals" readonly="" class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect"></div>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="newArrivals" />
											</div>   
										</div>
										<div class="css-16z3cmu common-selector">
											Bestseller
											<div  class="css-1mlyadd">
												<div  class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect"></div>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="bestSeller" />
											</div>
										</div>
										<div class="css-16z3cmu common-selector">
											Discount High to Low
											<div  class="css-1mlyadd">
												<div  class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect"></div>
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="discountSortInv" />
											</div>
										</div>
										<div class="css-16z3cmu common-selector">
											Fastest Shipping Time
											<div class="css-1mlyadd">
												<div class="css-1fifvl0">
													<div class="state-elem"></div>
													<div class="effect"></div>      
												</div>
												<input type="radio" name="sortby" class="radio sortby" readonly="" value="shipTime" />  
											</div>
										</div>  
									</div>
								</div>
							</div>
							<!-- sort by filter container for phone end-->
						</header>
						
						<div class="row m-0 "> 
							<!--product card section area start-->
							<div class="col-lg-9 p-0 filter-data">
								<!-- tile view start-->
								<div class="col-lg-12 product-card-view p-0" id="tile-view">
									<div class="products mb-3">
										
										<div class="row justify-content-center ">
											<?php
												$sr = 1;
												$comboProduct=$this->db->get_where('tbl_combo',['is_status'=>'true'])->result();
												foreach($comboProduct as $each) 
												{
													$icons = explode(',',$each->image);
													$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','sale_type'=>'combo'))->row();
													if(!empty($saleProduct)){
														
														$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
														
														$last_date = date_create(date('Y-m-d H:i:s')); 
														$today = date_create($tblSale->end_date);  
														$date_difference = date_diff($last_date,$today);  
														$days=$date_difference->format('%r%a');
														$hour=$date_difference->format('%r%h');
														$min=$date_difference->format('%r%i');
														$sec=$date_difference->format('%r%s');  
														$timer=$days."D".$hour."H".$min."M".$sec."S" ;
													}
													
												?>
												<div class="col-6 col-md-4 col-lg-3 col-xl-3 tile-view-card" >
													<div class="product product-7 text-center "  >  
														<figure class="product-media"> 
															<?php 
																if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																{	
																?> 
																<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
																<?php 
																}else if((int)$each->discount_price!=(int)$each->price)
																{
																	$discount=(((int)$each->price-(int)$each->discount_price)/(int)$each->price)*100;
																?>
																<span class="product-label label-primary"><?=(int)$discount ?>%OFF</span>  
															<?php } ?>
															<a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>">
																<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" alt="<?=$each->name;?>" class="product-image  ">
																<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  alt="<?=$each->name;?>" class="product-image-hover">
															</a>
															
															<div class="product-action-vertical">  
																<a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>add to wishlist</span></a>
																<a href="javascript:void(0)" class="btn-product-icon btn-quickview btn-expandable" title="Quick view" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal"><span>Quick view</span></a>
																<a href="<?= base_url('Home/Compare')?>"  class="btn-product-icon btn-compare btn-expandable" title="Compare"><span>Compare Product</span></a>  
															</div><!-- End .product-action-vertical -->
															
															
															<div class="container hide_in_mobile" id="app">
																<div class="product-action">
																	<a href="javascript:void(0)" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal" class="btn-product btn-cart"  style="font-size:12px;">Quick Add</a>
																</div><!-- End .product-action -->
															</div>
															<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-"){?>     
																<div class="deal-countdown offer-countdown hide_in_mobile" data-until="<?=$timer?>"></div>
															<?php } ?> 
														</figure><!-- End .product-media -->
														
														<div class="product-body">
															
															<h2 class="product-title"><a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>"><?= $each->name; ?></a></h2><!-- End .product-title -->
															<div class="product-price">
																<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																	{	$price=$each->price; 
																		$discount=(int)$saleProduct->discount;
																		$saleprice=$price - ( ($price/100) * $discount );
																	?> 
																	<span>₹<?=(int)$saleprice;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																	<?php  
																	}else
																	{ ?>
																	<span>₹<?= $each->discount_price ?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																<?php } ?>
															</div><!-- End .product-price -->
															<div class="ratings-container">
																<div class="ratings">
																	<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
																</div><!-- End .ratings -->
																<span class="ratings-text">( 2 Reviews )</span>
															</div><!-- End .rating-container -->
															
															<div class="product-nav product-nav-dots d-none">
																<?php 
																	$data=$this->db->get_where('product_variant',array('product_id'=>$each->id))->row();
																	$colors=explode(",",$data->color);
																	if(!empty($data->color)){
																		$count=1;
																		foreach($colors as $color)
																		{
																		?>
																		<a href="javascript:void(0)" class="<?php if($count==1){echo 'active';} if($count>4){echo 'MoreColor';}?>" style="background:<?= $color?>"><span class="sr-only">Color name</span></a>
																		<?php
																			$count++; 
																		}
																	?>
																	<button class="MoreColorBtn btn p-0 m-0 <?php if(count($colors)<4 || (count($colors)-4)==0){echo 'd-none';}?>" style="position: relative; top:-5px; border: 1px solid gray; width: 20px; height: 20px; color: #fe0631;" title="<?=(count($colors)-4)?>">+<?=(count($colors)-4)?></button>
																	<?php
																	} 
																?>
															</div><!-- End .product-nav -->
														</div><!-- End .product-body -->
													</div><!-- End .product -->
												</div><!-- End .col-sm-6 col-lg-4 col-xl-4 -->
												<?php
													$sr++;
												}
											?>
											
										</div><!-- End .row -->
									</div><!-- End .products -->
									
								</div><!-- End .col-lg-9 -->
								<!-- tile view end-->
								
								<!-- list view start-->  
								<div class="col-lg-12 product-card-view p-0" id="list-view" style="display:none;">
									<div class="products mb-3">
										<?php
											$sr = 1;
											$comboProduct=$this->db->get('tbl_combo')->result();
											foreach($comboProduct as $each)
											{
												$icons = explode(',',$each->image);
												$saleProduct=$this->db->get_where('sale_product',array('product_id'=>$each->id,'is_status'=>'true','sale_type'=>'combo'))->row();
												if(!empty($saleProduct)){
													
													$tblSale=$this->db->get_where('tbl_sale',array('id'=>$saleProduct->sale_id))->row();
													
													$last_date = date_create(date('Y-m-d H:i:s')); 
													$today = date_create($tblSale->end_date);  
													$date_difference = date_diff($last_date,$today);  
													$days=$date_difference->format('%r%a');
													$hour=$date_difference->format('%r%h');
													$min=$date_difference->format('%r%i');
													$sec=$date_difference->format('%r%s');  
													$timer=$days."D".$hour."H".$min."M".$sec."S" ;
												}
											?>
											<form action="<?php echo base_url($this->data->controller . '/AddToCart/Add'); ?>" method="post" enctype="multipart/form-data" class="addForm">
												<input type="hidden" required name="productid" value="<?= $each->id; ?>">
												<div class="product product-list">
													<div class="row">
														<div class="col-6 col-lg-3">
															<figure class="product-media">
																<?php 
																	if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																	{	
																	?> 
																	<span class="product-label label-primary">SALE&nbsp;<?=(int)$saleProduct->discount?>%OFF</span>
																	<?php 
																	}else if((int)$each->discount_price!=(int)$each->price)
																	{
																		$discount=(((int)$each->price-(int)$each->discount_price)/(int)$each->price)*100;
																	?>
																	<span class="product-label label-primary"><?=(int)$discount ?>%OFF</span>  
																<?php } ?>
																
																<a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>">
																	<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>"  class="product-image  ">
																	<img src="<?php if(!empty($icons[1])){echo base_url('uploads/product/').$icons[1];} ?>"  class="product-image-hover">
																</a>
															</figure><!-- End .product-media -->
														</div><!-- End .col-sm-6 col-lg-3 -->
														
														<div class="col-6 col-lg-3 order-lg-last">
															<div class="product-list-action py-1">
																<div class="product-price">
																	<?if(!empty($saleProduct->sale_id) AND substr(strval($days), 0, 1) != "-")
																		{	$price=$each->price; 
																			$discount=(int)$saleProduct->discount;
																			$saleprice=$price - ( ($price/100) * $discount );
																		?> 
																		<span>₹<?=(int)$saleprice;?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																		<?php  
																		}else
																		{ ?>
																		<span>₹<?= $each->discount_price ?></span>&nbsp;&nbsp;<del class="<?php if((int)$each->discount_price==(int)$each->price){ echo "d-none";} ?>" style="color: gray;"><?= $each->price ?></del>
																	<?php } ?>
																</div><!-- End .product-price -->
																<div class="ratings-container">
																	<div class="ratings">
																		<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
																	</div><!-- End .ratings -->
																	<span class="ratings-text">( 2 Reviews )</span>
																</div><!-- End .rating-container -->
																
																<div class="product-action">
																	<a href="javascript:void(0)" onclick="quickView(<?= $each->id; ?>,'Combo')" class="btn-product btn-quickview" data-toggle="modal" data-target="#QuickViewModal" title="Quick view"><span>quick view</span></a>
																	<a href="<?= base_url('Home/Compare')?>" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
																</div><!-- End .product-action -->
																
																<a href="javascript:void(0)" class="btn-product btn-cart w-100" onclick="quickView(<?= $each->id; ?>,'Combo')" data-toggle="modal" data-target="#QuickViewModal"><span>add to cart</span></a>
																
															</div><!-- End .product-list-action -->
														</div><!-- End .col-sm-6 col-lg-3 -->
														
														<div class="col-lg-6">
															<div class="product-body product-action-inner">
																<a href="javascript:void(0)" class="btn-product btn-wishlist" title="Add to wishlist" onclick="AddToWishlist(<?= $each->id; ?>,'combo')"><span>add to wishlist</span></a>
																<div class="product-cat">
																	<a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>">
																		<?php if(!empty($each->category)){
																			$catName=$this->db->get_where("categories",array('id'=>$each->category))->row();
																			if(!empty($catName->name)){
																				echo $catName->name; 
																			} 
																		} ?>
																	</a>
																</div><!-- End .product-cat -->
																<h3 class="product-title"><a href="<?php echo  base_url('Home/ProductComboDetails/').$each->id?>"><?= $each->name?></a></h3><!-- End .product-title -->
																
																<div class="product-content mb-2">
																	<p style="font-weight:500;"><?= $each->description?></p>    
																</div><!-- End .product-content -->
																<div class="product-content mb-2">
																	<p>Combo's Product</p>    
																</div><!-- End combo title -->
																<div class="owl-carousel popup-combo overflow-hidden " >  
																	<?php
																		$productCount = 1;
																		$comboItems=$this->db->get_where('combo_item',array('combo_id'=>$each->id))->result();
																		foreach ($comboItems as $each1) {  
																			
																			$product=$this->db->get_where('products',array('id'=>$each1->product_id))->row();
																			$icons = explode(',',$product->image1);   
																		?>
																		<span>
																			<input type="radio" name="" id="combo<?= $productCount ?>" class="color-item sr-only" value="<?= $product->id ?>">
																			<label for="combo<?= $productCount ?>"  class="gallery-item <?php if ($productCount == 1) {
																				echo "selected";
																			} ?>"  style="padding-left:0px; ">
																			<img src="<?php if(!empty($icons[0])){echo base_url('uploads/product/').$icons[0];} ?>" class="img-fluid" onclick="combosProduct()" style="height: 60px !important;width: 60px !important; ">
																			<!--<span style="font-size: 12px; font-weight: 500; padding: 5px;"><?=$product->title;?></span>-->
																			</label>  
																		</span>
																	<?php } ?>
																</div>
															</div><!-- End .product-body -->
														</div><!-- End .col-lg-6 -->
														
													</div><!-- End .row -->
												</div><!-- End .product -->
											</form> 
											
										<?php $sr++; }  ?>
									</div><!-- End .products -->
									
									<!--<nav aria-label="Page navigation">   
										<ul class="pagination d-flex justify-content-center" style="border:none;">
										<li class="page-item disabled" >
										<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true" style="border:none;">
										<span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
										</a>
										</li>
										<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item-total">of 6</li>
										<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next" style="border:none;">
										Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
										</a>
										</li>
										</ul>
									</nav>-->
								</div><!-- End .col-lg-9 -->
								<!-- list view end-->
							</div>
							<!--product card section area end--> 
							
							<aside class="col-lg-3 order-lg-first filter-sm-container" style="border: 1px solid gainsboro;">
								<button type="button" class="close-filter" style="padding: 10px 0;font-size: 36px;">
									<div class="css-1uu6dpv p-0">
										<svg viewBox="0 0 24 24" class="css-1oql73n">
											<title></title>
											<circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
											<path
											d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z"
											fill="#001325" fill-opacity="0.92"></path>
										</svg>
									</div>
								</button> 
								<div class="sidebar sidebar-shop">
									<div class="widget2 widget-clean justify-content-between" style="    border-bottom: 1px solid gainsboro; padding-bottom: 20px;">
										<label style="font-size:13px; font-weight: 600;">Filters:</label>
										<a href="#" class="sidebar-filter-clear" style="font-weight: 600;font-size: 12px; color:#FA057E;">Clean All</a>
									</div><!-- End .widget widget-clean-->
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
												Category
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-1">
											<div class="widget-body">
												<div class="filter-search-filterSearchBox filter-search-expanded">  
													<input type="text" class="filter-search-inputBox" name="category" value="" placeholder="Search for Categories" >
													<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
												</div>
												<div class="filter-items filter-items-count ">
													
													<?php 
														$category=$this->db->get('categories')->result();
														if(!empty($category)){
															$count=1; 
															foreach($category as $cat){
															?>
															
															<div class="filter-item " >       
																
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input category common-selector" value="<?= $cat->id; ?>" id="cat-<?= $count; ?>">
																	<label class="custom-control-label" for="cat-<?= $count; ?>"><?= $cat->name; ?></label>
																</div><!-- End .custom-checkbox -->
																
																<span class="item-count"> 
																	<?php 
																		$catId=$cat->id;
																		$catNumber=$this->db->get_where('products',array('category'=>$catId))->num_rows();
																		echo $catNumber;
																	?>
																</span>
																
															</div><!-- End .filter-item -->
															
														<?php $count++ ;}  ?> 
														
														
													<?php } ?>
												</div><!-- End .filter-items -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
									
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
												Size
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-2">
											<div class="widget-body">
												<div class="filter-search-filterSearchBox filter-search-expanded">
													<input type="text" class="filter-search-inputBox" placeholder="Search for Size">
													<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
												</div>
												<div class="filter-items">
													
													
													<div class="filter-item">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input common-selector size" value="S" id="size-2">
															<label class="custom-control-label" for="size-2">S</label>
														</div><!-- End .custom-checkbox -->
													</div><!-- End .filter-item -->
													
													<div class="filter-item">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input common-selector size"  value="M" id="size-3">
															<label class="custom-control-label" for="size-3">M</label>
														</div><!-- End .custom-checkbox -->
													</div><!-- End .filter-item -->
													
													<div class="filter-item">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input common-selector size" value="L"  id="size-4">
															<label class="custom-control-label" for="size-4">L</label>
														</div><!-- End .custom-checkbox -->
													</div><!-- End .filter-item -->
													
													<div class="filter-item">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input common-selector size" value="XL" id="size-5">
															<label class="custom-control-label" for="size-5">XL</label>
														</div><!-- End .custom-checkbox -->
													</div><!-- End .filter-item -->
													
													<div class="filter-item">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input common-selector size" value="XXL" id="size-6">
															<label class="custom-control-label" for="size-6">XXL</label>
														</div><!-- End .custom-checkbox -->
													</div><!-- End .filter-item -->
													
												</div><!-- End .filter-items -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
									
									<!-- festival filters start-->
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
												Brand 
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-4">
											<div class="widget-body">
												<div class="filter-search-filterSearchBox filter-search-expanded">
													<input type="text" class="filter-search-inputBox " placeholder="Search for Brand">
													<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
												</div>
												<div class="filter-items pb-4">
													<?php 
														$brands=$this->db->get('brand')->result();
														if(!empty($brands)){
															$count=1;
															foreach($brands as $brand){
															?>
															
															<div class="filter-item ">
																
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input common-selector brand" value="<?= $brand->id; ?>" id="brand-<?= $count; ?>">
																	<label class="custom-control-label" for="brand-<?= $count; ?>"><?= $brand->name; ?></label>
																</div><!-- End .custom-checkbox -->
															</div><!-- End .filter-item -->
															
														<?php $count++ ;}  ?> 
														
													<?php } ?>
												</div><!-- End .filter-items -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
									<!-- festival filters end-->  
									
									<!-- looks filters start-->
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-looks" role="button" aria-expanded="true" aria-controls="widget-looks">
												Looks 
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-looks">
											<div class="widget-body">
												<div class="filter-search-filterSearchBox filter-search-expanded">
													<input type="text" class="filter-search-inputBox" placeholder="Search for Brand">
													<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
												</div>
												<div class="filter-items">
													<?php 
														$brands=$this->db->get('brand')->result();
														if(!empty($brands)){
															$count=1;
															// foreach($brands as $brand){ 
														?>
														
														<div class="filter-item ">  
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input common-selector brand" value="<?= $brand->id; ?>" id="brand-<?= $count; ?>">
																<label class="custom-control-label" for="brand-<?= $count; ?>">Sajar Look</label></br><span>(Suit+Earring)</span></br></br>
															</div><!-- End .custom-checkbox -->
														</div><!-- End .filter-item -->
														<div class="filter-item ">  
															<div class="custom-control custom-checkbox"> 
																<input type="checkbox" class="custom-control-input common-selector brand" value="<?= $brand->id; ?>" id="brand-<?= $count; ?>">
																<label class="custom-control-label" for="brand-<?= $count; ?>">Pallet Look</label></br><span>(Suit+Earring+Purse)</span></br></br>
															</div><!-- End .custom-checkbox -->
														</div><!-- End .filter-item -->
														<div class="filter-item ">  
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input common-selector brand" value="<?= $brand->id; ?>" id="brand-<?= $count; ?>">
																<label class="custom-control-label" for="brand-<?= $count; ?>">Pearl Look</label></br><span>(Suit+Earring+Purse+Footwear)</span></br></br>
															</div><!-- End .custom-checkbox -->
														</div><!-- End .filter-item -->
														
														<?php $count++ ; ?> 
														
													<?php } ?>
												</div><!-- End .filter-items -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
									<!-- looks filters end-->  
									
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
												Color
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-3">
											<div class="widget-body">
												<div class="filter-search-filterSearchBox filter-search-expanded">
													<input type="text" class="filter-search-inputBox " placeholder="Search for Color">
													<span class=" filter-search-iconSearch sprites-search bi bi-search"></span>
												</div>
												<div class="filter-items">
													<?php 
														$colors=$this->db->get('tbl_color')->result();       
														if(!empty($colors)){
															$count=1;
															foreach($colors as $color){
															?>
															<div class="filter-item ">
																
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input common-selector color" value="<?= $color->code; ?>" id="color-<?= $count; ?>">
																	<label class="custom-control-label d-flex" for="color-<?= $count; ?>"><span style="display:block; width:16px; height: 16px; border-radius:50%; background:<?= $color->code; ?>;"></span>&nbsp;&nbsp;<?= $color->name; ?></label>
																</div><!-- End .custom-checkbox -->
															</div><!-- End .filter-item -->
															
														<?php $count++ ;}  ?> 
													<?php } ?>
													
												</div><!-- End .filter-colors -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
									
									
									
									<div class="widget1 widget-collapsible">
										<h3 class="widget-title">
											<a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
												Price
											</a>
										</h3><!-- End .widget-title -->
										
										<div class="collapse show" id="widget-5">
											<div class="widget-body">
												<div class="filter-price">
													<div class="filter-price-text">
														Price Range:
														<span id="filter-price-range"></span> 
													</div><!-- End .filter-price-text -->
													
													<div id="price-slider"></div><!-- End #price-slider -->
												</div><!-- End .filter-price -->
											</div><!-- End .widget-body -->
										</div><!-- End .collapse -->
									</div><!-- End .widget -->
								</div><!-- End .sidebar sidebar-shop -->
							</aside><!-- End .col-lg-3 -->
						</div><!-- End .row -->
					</div><!-- End .container -->
				</div><!-- End .page-content -->
			</main><!-- End .main -->
			
			<div class="filter-sm w-100 row m-0 ">     
				<button class="sort-by-btn col-6 d-flex justify-content-between"><span>Sort By</span><i class="bi bi-sort-down"></i></button>
				<button class="filter-btn col-6 d-flex justify-content-between" ><span>Filter</span><i class="bi bi-sliders"></i></button>
			</div>
		</div><!-- End .page-wrapper -->
		
		
		<?php include('include/footer.php'); ?>
		<script src="<?= base_url('assets/website/')?>assets/js/nouislider.min.js"></script>
		<script src="<?= base_url('assets/website/')?>assets/js/wNumb.js"></script>
		<?php include('include/jsLinks.php'); ?>  
		
		<script>
			$(document).ready(function(){
				$('.product-view').click(function(){     
					$('.product-view').removeClass("active");
					$(this).addClass("active");
					if(this.id=='tile'){
						$('#tile-view').show();
						$('#list-view').hide();
						}else{
						$('#tile-view').hide();
						$('#list-view').show();
					}
					
				})
				
			})
		</script>
		
		<!-- Plugins JS File -->
		<script>
			$('.product-slider-list').owlCarousel({
				loop:true,
				autoplay:true,
				nav:true,
				dots:true,
				margin:0,
				responsive:{
					0:{
						items:1,
						
					},
					460:{
						items:1,
					},
					1024:{
						items:1,
					},
				},
				
			})
			
			
			
			$(function () {
				var austDay = new Date();
				austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
				$('#defaultCountdown').countdown({until: austDay});
				$('#year').text(austDay.getFullYear()); 
			});
			
			
		</script>
		
		<!--product filter implemented-->
		<script>
			$(document).ready(function(){
				// filter_data();
				function filter_data() 
				{
					$('.filter-data').html('<img src="http://slickpattern.himanshukashyap.com/public/images/loader-64x/loading.gif" id="loading" style="margin:30vh auto; width:70px; height:70px; display:flex;justify-content:center;align-items:center;" ></div>');
					
					var action = 'fetch_data';
					// var minimum_price = $('#hidden_minimum_price').val();
					// var maximum_price = $('#hidden_maximum_price').val();
					var category = get_filter('category');
					var brand = get_filter('brand');
					var size = get_filter('size');
					var color = get_filter('color');
					var sortby =$("input[name='sortby']:checked").val();      
					
					$.ajax({
						url:"<?= base_url('Home/productFilter')?>", 
						method:"POST",
						data:{action:action, brand:brand, category:category,color:color,size:size,sortby:sortby},  
						success:function(pdata){
							$('.filter-data').html(pdata); 
						}
					});
				}
				
				function get_filter(class_name)    
				{
					var filter = [];
					$('.'+class_name+':checked').each(function(){
						filter.push($(this).val());
					}); 
					return filter;
				}
				
				$('.common-selector').click(function(){
					filter_data(); 
				});
				
				
				
				
				// $('#sortby').change(function(){
			// filter_data();  
			// });
			
			// $('#price_range').slider({
			// range:true,
			// min:1000,
			// max:65000,
			// values:[1000, 65000],
			// step:500,
			// stop:function(event, ui)
			// {
			// $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
			// $('#hidden_minimum_price').val(ui.values[0]);
			// $('#hidden_maximum_price').val(ui.values[1]);
			// filter_data();
			// }
			// });
			
			});
			</script>
			
			</body>
			</html>																																																																																																																																																																																																																																							<!DOCTYPE html>
						