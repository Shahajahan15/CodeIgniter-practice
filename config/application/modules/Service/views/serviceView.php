hi<?php  
	// ========== header start ========== 
	echo $this->load->view('admin/includes/header.php');

	// ========== Topbar Start ========== 
	echo $this->load->view('admin/includes/top.php');

	// ========== Left Sidebar Start ========== 
	echo $this->load->view('admin/includes/leftSite.php');
 
	// ==========  main body ========== 
	// echo $this->load->view('admin/includes/body.php');

	?>

	<div class="content-page">
		<div class="content">
		    <div class="container-fluid">
				<div class="row">
                    <div class="col-12">
                        <!-- Portlet card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <a href="<?php echo base_url() ?>/service/service/index" class="btn btn-info float-right">Add  Service</a>
                                    <h4 class="header-title mb-0" style="font-size: 22px">All Service</h4>
                                </div>
                                
                                <div id="cardCollpase4" class="collapse pt-3 show">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-borderless mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>S. No.</th>
                                                    <th>Icon</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                        	<?php 
							                    foreach ($serviceInfo as $key => $value) {
							                ?>
                                                <tr>
                                                    <td><?php echo $value['id']; ?></td>
                                                    <td><?php echo $value['icon']; ?></td>
                                                    <td><?php echo $value['title']; ?></td>
                                                    <td>
                                                   		<?php 
                                                   			$des = $value['description'];
                                                   			echo substr($des,0,50);
                                                   		?>
                                                    </td>
                                                    <td class="tds">
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                            	}
                                            ?>

                                            </tbody>
                                        </table>
                                    </div> <!-- .table-responsive -->
                                </div> <!-- end collapse-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
		    </div>
		</div> 

<?php 

	// ==========  footer start ========== 
	echo $this->load->view('admin/includes/footer.php');

?>
