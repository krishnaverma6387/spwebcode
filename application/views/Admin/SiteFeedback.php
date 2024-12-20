<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <?php require APPPATH.'views/Auth/CssLinks.php';?>
	</head>
    <body class="vertical-layout vertical-menu 1-columns  fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
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
                                    <li class="breadcrumb-item active">Site Feedback</li>
								</ol>
							</div>
						</div> 
					</div>
				</div>
                <div class="content-body">
                    <section id="form-action-layouts">
                        <div class="row match-height">
                            <div class="col-sm-12">
                                <div class="card card-dashboard">
                                    <div class="card-content collpase show">
                                        <div class="card-body table-responsive">
											<?php $srno=1; 
												$qid=$this->uri->segment(4);
												$question_data=$this->db->get_where('faqs',['id'=>$qid])->row();
												$question=$question_data->question;
												$label=json_encode(explode(',',$question_data->answer));
												$decode_label=explode(',',$question_data->answer);
												$label_res=[];
												for($i = 0; $i < count($decode_label); $i++) {
													$label_res[$decode_label[$i]]=0;
												}
												
												
												foreach ($list as $item){
													if (in_array($item->response, $decode_label)) {
														$label_res[$item->response]++;
													} 
												}
												$label_res=json_encode(array_values($label_res)); 
												
											?>
											<tr>
												<td>
													<span ><?=$question?></span>
													<canvas id="mycharts" style="max-width: 500px;"></canvas>
												</td>
											</tr>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php require APPPATH.'views/Auth/Footer.php';?>
	<?php require APPPATH.'views/Auth/JsLinks.php';?>
	<script
	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
	</script>
	<script>
		var ctx = document.getElementById('mycharts').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {   
				labels: <?=$label?>,
				datasets: [{     
					label: 'Survey report', 
					data: <?=$label_res?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255,99,132,1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
	</script>
</body>
</html>													