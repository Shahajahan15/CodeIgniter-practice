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
		                <div class="card-box">
		                    <h3 class="header-title mb-3" style="font-size: 22px">Service Content Form</h3>
		                    <form method="post" action="<?php echo base_url();?>service/service/serviceAdd" enctype="">
		                        <div class="form-group row">
		                            <label for="icon" class="col-form-label col-2">Icon :</label>
		                            <div class="col-10">
		                            	<input type="text" id="icon" class="form-control" name="icon"required="" placeholder="Icon name">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="title" class="col-form-label col-2">Title :</label>
		                            <div class="col-10">
		                            	<input type="text" id="title" class="form-control" name="title"required="" placeholder="Title name">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="des" class="col-form-label col-2">Description :</label>
		                            <div class="col-10">
		                            	<textarea name="description" placeholder="Description here..." required="" id="des" class="form-control"></textarea>
		                            </div>
		                        </div>
								

		                        <div class="form-group mb-0 offset-sm-2">
		                            <input type="submit" class="btn btn-success mt-2" name="submit" value="Submit">
		                            <input type="submit" class="btn btn-danger mt-2" value="Reset">
		                        </div>

		                    </form>
		                </div> <!-- end card-box-->
		            </div> <!-- end col-->
		        </div>
		    </div>
		</div> 

<?php 

	// ==========  footer start ========== 
	echo $this->load->view('admin/includes/footer.php');

?>
