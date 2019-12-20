<?php  
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
                            <?php  

                                if ($this->session->flashdata('delete')) 
                                {
                                    $delete = $this->session->flashdata('delete');
                                    echo "<p class='alert alert-danger' id='myData'>$delete</P>";
                                }
                            ?>
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
                                                    <td>
                                                    	<i class="zmdi <?php echo $value['icon']; ?>"></i>
                                                    </td>
                                                    <td><?php echo $value['title']; ?></td>
                                                    <td>
                                                   		<?php 
                                                   			$des = $value['description'];
                                                   			echo substr($des,0,50);
                                                   		?>
                                                    </td>
                                                    <td class="tds">
                                                        <a href="#" class="action-icon text-success"> <i class="mdi mdi-square-edit-outline"></i></a>

                                                        <a href="#bs" data-toggle="modal" class="text-danger action-icon" data-id="<?php echo $value['id'] ?>" data-title="<?php echo $value['title'] ?>"> 
                                                        	<i class="mdi mdi-delete"></i>
                                                        </a>
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
                </div>  <!-- End row -->
		    </div> <!-- end container-fluid -->
		</div> <!-- content -->


        <div class="modal fade" style="display: none;" id="bs">

        	<form action="<?php echo base_url() ?>/service/service/deleteService" method="post" enctype="multipart/form-data">
        		<input type="hidden" id="data_value" name="data_value">

                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-danger" id="myCenterModalLabel">Service Delete</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h4>Are you sure ? Want to delete 
                            	<strong id="delete_id" class="text-danger"></strong> 
                        	Service content.</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                            <button type="submit" name="submit" class="btn btn-danger waves-effect waves-light">Yes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->

			</form>

        </div><!-- /.modal -->


<?php 

	// ==========  footer start ========== 
	echo $this->load->view('admin/includes/footer.php');

?>

		<script>
            
            setTimeout(function(){
                $('#myData').hide()
            },3000)

			$(document).on("click", ".action-icon", function(){
				var data_id = $(this).attr('data-id')
				var data_title = $(this).attr('data-title')
				$('#data_value').val(data_id)
				$('#delete_id').html(data_title)
			})

		</script> 
