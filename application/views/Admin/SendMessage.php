<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
		<style>
			[data-after-text],
			[data-before-text] {
			--badge-offset-x: calc(0px - var(--badge-size) / 2.2);
			--badge-offset-y: calc(0px - var(--badge-size) / 2.2);
			--badge-size: 0.8rem;
			--circle-size: 1rem;
			--dot-offset: 1rem;
			--dot-size: 0.5rem;
			
			--b: initial;
			--bgcw: hsl(0deg 85.37% 40.5%);
			--bgcd: hsl(0deg 85.37% 40.5%);
			--bgcs hsl(0deg 85.37% 40.5%);
			--bdrs: 0;
			--c: hsl(195, 100%, 99%);
			--d: inline-flex;
			--fz: 0.625rem;
			--fw: 700;
			--h: auto;
			--l: initial;
			--m: 0.4rem;
			--p: 0;
			--pos: static;
			--r: -5px;
			--t: -6px;
			--tt: uppercase;
			--w: initial;
			
			position: relative;
			}
			
			[data-after-text]:not([data-after-text=""])::after {
			content: attr(data-after-text);
			}
			[data-before-text]:not([data-before-text=""])::before {
			content: attr(data-before-text);
			}
			
			[data-after-text]:not([data-after-text=""])::after,
			[data-before-text]:not([data-before-text=""])::before {
			align-items: center;
			background: var(--bgc);
			border-radius: var(--bdrs);
			bottom: var(--b);
			box-shadow: var(--bxsh);
			box-sizing: border-box;
			color: var(--c);
			display: var(--d);
			font-size: var(--fz);
			font-weight: var(--fw);
			height: var(--h);
			justify-content: center;
			left: var(--l);
			padding: var(--p);
			position: var(--pos);
			right: var(--r);
			text-decoration: none;
			text-transform: var(--tt);
			top: var(--t);
			width: var(--w);
			}
			
			/* MODIFIERS */
			[data-after-type*="badge"]::after,
			[data-before-type*="badge"]::before {
			--bdrs: var(--badge-size);
			--bxsh: 0 0 0 2px rgba(255, 255, 255, 0.5);
			--h: var(--badge-size);
			--p: 0;
			--pos: absolute;
			--w: var(--badge-size);
			}
			[data-after-type*="circle"],
			[data-before-type*="circle"]{
			align-items: center;
			display: flex;
			}
			[data-after-type*="circle"]::after,
			[data-before-type*="circle"]::before {
			--bdrs: 50%;
			--fw: 400;
			--h: var(--circle-size);
			// --pos: relative;
			// --t: -0.75em;
			--tt: initial;
			--w: var(--circle-size);
			}
			[data-after-type*="circle"]::after,
			[data-after-type*="pill"]::after {
			margin-inline-start: 1ch;
			}
			[data-before-type*="circle"]::before,
			[data-before-type*="dot"]::before,
			[data-before-type*="pill"]::before {
			margin-inline-end: 1ch;
			}
			[data-after-type*="dot"]::after,
			[data-before-type*="dot"]::before {
			--bdrs: 50%;
			--d: inline-block;
			--fz: 50%;
			--h: var(--dot-size);
			--p: 0;
			--pos: relative;
			--t: -1px;
			--w: var(--dot-size);
			}
			[data-after-type*="dot"]::after,
			[data-before-type*="dot"]::before {
			content: "" !important;
			}
			[data-after-type*="pill"]::after,
			[data-before-type*="pil"]::before {
			--bdrs: 1rem;
			--p: 0.25rem 0.75rem;
			--pos: relative;
			--t: -1px;
			}
			
			/* COLORS */
			[data-after-type*="blue"]::after,
			[data-before-type*="blue"]::before {
			--bgc: #007acc;
			}
			[data-after-type*="darkgray"]::after,
			[data-before-type*="darkgray"]::before {
			--bgc: #706e6b;
			--c: #fff;
			}
			[data-after-type*="green"]::after,
			[data-before-type*="green"]::before {
			--bgc: #04844b;
			}
			[data-after-type*="lightgray"]::after,
			[data-before-type*="lightgray"]::before {
			--bgc: #ecebea;
			--c: #080707;
			}
			[data-after-type*="orange"]::after,
			[data-before-type*="orange"]::before {
			--bgc: #ffb75d;
			--c: #080707;
			}
			
			[data-after-type*="red"]::after,
			[data-before-type*="red"]::before {
			--bgc: #c23934;
			}
			
			/* POSITION */
			[data-after-type*="top"]::after,
			[data-before-type*="top"]::before {
			--b: auto;
			--pos: absolute;
			--t: var(--dot-offset);
			}
			[data-after-type*="right"]::after,
			[data-before-type*="right"]::before {
			--l: auto;
			--pos: absolute;
			--r: var(--dot-offset);
			}
			[data-after-type*="bottom"]::after,
			[data-before-type*="bottom"]::before {
			--b: var(--dot-offset);
			--pos: absolute;
			--t: auto;
			}
			[data-after-type*="left"]::after,
			[data-before-type*="left"]::before {
			--pos: absolute;
			--r: auto;
			--l: var(--dot-offset);
			}
			[data-after-type*="badge"][data-after-type*="top"]::after,
			[data-before-type*="badge"][data-before-type*="top"]::before {
			--m: 0;
			--t: var(--badge-offset-y);
			}
			[data-after-type*="badge"][data-after-type*="right"]::after,
			[data-before-type*="badge"][data-before-type*="right"]::before {
			--m: 0;
			--r: var(--badge-offset-x);
			}
			[data-after-type*="badge"][data-after-type*="bottom"]::after,
			[data-before-type*="badge"][data-before-type*="bottom"]::before {
			--b: var(--badge-offset-y);
			--m: 0;
			}
			[data-after-type*="badge"][data-after-type*="left"]::after,
			[data-before-type*="badge"][data-before-type*="left"]::before {
			--l: var(--badge-offset-x);
			--m: 0;
			}
			.act-btn+.act-btn{
			margin-right:4px;
			margin-left:4px;
			}
			.note-editor{
			border: 1px solid rgb(159 149 149 / 20%) !important;
			}
			.note-editable{
			height:150px;
			}
			.note-toolbar {
			background: unset;
			border-bottom: 1px solid lavender;
			}
			.alert-info {
			border-color: #6cddeb2e!important;
			background-color: #6cddeb2e!important;
			color: #0B4A53!important;
			}
			
		</style>
	</head>
    <body class="vertical-layout vertical-menu 1-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <?php require 'Topbar.php'; ?>
        <?php require 'Sidebar.php'; ?>
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1"> 
                        <div class="breadcrumbs-top">
                            <h5 class="content-header-title float-left pr-1 mb-0"><?=$this->data->pageTitle;?></h5>
                            <div class="breadcrumb-wrapper d-none d-sm-block">
                                <ol class="breadcrumb p-0 mb-0 pl-1">
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/index"><i class="fa fa-home"></i></a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="<?=base_url($this->data->controller);?>/Dashboard"><?= $this->data->title;?></a>
									</li>
									<li class="breadcrumb-item">
										<a href="<?= base_url($this->data->controller); ?>/ManageOrders/AllOrders"><?=$this->data->pageTitle;?></a>
									</li>
									<li class="breadcrumb-item active"><?= $this->data->subTitle;?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
					<section id="form-action-layouts">
						<div class="row match-height">
							<div class="col-sm-12">
								<?php 
									$id=$this->uri->segment(3);
									$cart=$this->db->get_where('tbl_cart',['id'=>$id])->row();
									if(!empty($cart) AND !empty($cart->order_query)){
										$userid=$cart->userid;
										$user_details=$this->db->get_where('tbl_user',['id'=>$userid])->row();
									?>
								<div class="alert alert-info alert-dismissible fade show" role="alert">
									<?= base64_decode($cart->order_query)?>
								</div>
								<?php } ?>
								<form class="card">
									<div class="card-header" style="background: lavender;">
										<h5 class="mb-0">New message</h5>
									</div>
									<div class="card-body p-0">
										<div class="border border-top-0 border-200"><input class="form-control border-0 rounded-0 outline-none px-x1" id="email-to" type="email" aria-describedby="email-to" placeholder="To" value="<?php if(!empty($user_details)){echo $user_details->email;}?>" /></div>
										<div class="border border-y-0 border-200"><input class="form-control border-0 rounded-0 outline-none px-x1" id="email-subject" type="text" aria-describedby="email-subject" placeholder="Subject" /></div>
										<div class="min-vh-50"><textarea class="summernote" name="content" style="height:150px;"></textarea></div>
									</div>
									<div class="card-footer border-top border-200 d-flex flex-between-center">
										<div class="d-flex align-items-center"><button class="btn btn-primary px-5 me-2" type="submit">Send</button></div>
									</div>
								</form>
							</div>
							</div>
							</section>
							</div>
							</div>
							</div>
							<?php require APPPATH.'views/Auth/Footer.php';?>
							<?php require APPPATH.'views/Auth/JsLinks.php';?>
							<script>
							function CancelView(id) {
							$("#CancelView").modal("show");
							$("#CancelView .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
							$("#CancelView .modal-body").load("<?php echo base_url($this->data->controller . '/' . $this->data->method . '/CancelItemDetails/') ?>" + id);
							}
							</script>
							</body>
							</html>																																																																																																																																																																																																																																																																		