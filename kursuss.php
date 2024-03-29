<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View <?=$Entity?></title>

</head>
<body class="hold-transition skin-black-light sidebar-mini">
<!-- <body class="hold-transition skin-blue sidebar-mini"> -->
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-12">

						<div class="box box-primary" style="<?=$boxStyle?>">
							<div class="box-header">
								<h3 class="box-title" style="font-size: 1.8em;"><?=$Entity?> Info.</h3>
								<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addModal">
									Add <?=$Entity?>
								</button>
							</div>


							<div class="modal fade" id="addModal">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title">Add <?=$Entity?></h4>
										</div>
										<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
											<div class="row">

												<div class="col-md-12">


						              <div class="alert alert-danger alert-dismissible" style="display: none">
						                <button type="button" class="close" onclick="$(this).parent().toggle();">&times;</button>
						                <h4><i class="icon fa fa-ban"></i>Errors In Form :(</h4>
						                <div id="formAddAlert">
						                	
						                </div>
						              </div>


													<div class="box box-primary" style="<?=$boxStyle?>">
														<div class="box-header with-border">
															<h3 class="box-title"><?=$Entity?> Details</h3>
														</div>

														<div class="row">
														<?php
															$this->load->helper('form');
															echo form_open('email/send', array("id"=>"formAdd".$Entity));
														?>
																<div class="col-md-12">

																	<div class="box-body">
																		<div class="row">

															        <div class="col-md-6">
															          <div class="form-group">
															            <label for="aCourseName" >Course Name</label>
															            <input name="aCourseName" id="aCourseName" type="text" class="form-control" placeholder="Name">
															          </div>
															        </div>

															        <div class="col-md-6">
															          <div class="form-group">
															            <label for="aDescription" >Description</label>
															            <input name="aDescription" id="aDescription" type="text" class="form-control" placeholder="Description">
															          </div>
															        </div>

															        <div class="col-md-12">
															          <div class="form-group">
															            <label for="aImage" >Image</label>
															            <input name="aImage" id="aImage" type="file" class="form-control" placeholder="Image">
															          </div>
															        </div>

																		</div>
																			

																		<?php //$div->formInputText("aCategoryName", "Category Name", "e.g. New", 0, 1, 1); ?>
																	</div>
																	<div class="box-footer">
																		<input name="btnAdd<?=$Entity?>" id="btnAdd<?=$Entity?>" type="submit" class="btn btn-success" value="Add <?=$Entity?>">
																		<button type="reset" class="btn btn-danger pull-right">Reset</button>
																	</div>
																</div>
															<?=form_close();?>
														</div>
													</div>

												</div>

											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div>


							<div class="modal fade" id="updateModal">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title"><?=$Entity?> Update</h4>
										</div>
										<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
											<div class="row">
												<div class="col-md-12">










						              <div class="alert alert-danger alert-dismissible" style="display: none">
						                <button type="button" class="close" onclick="$(this).parent().toggle();">&times;</button>
						                <h4><i class="icon fa fa-ban"></i>Errors In Form :(</h4>
						                <div id="formUpdateAlert">
						                	
						                </div>
						              </div>
												</div>
												<form class="form" id="formUpdate<?=$Entity?>" method="POST">

												</form>

											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div>


							<div class="modal fade" id="infoModal">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title"><?=$Entity?> Info</h4>
										</div>
										<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
											<div class="row" id="contentInfoModal">


											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div>


							<div class="box-body">
								<div class="">
		              <div class="alert alert-success alert-dismissible" style="display: none">
		                <button type="button" class="close" onclick="$(this).parent().toggle();">&times;</button>
		                <h4><i class="icon fa fa-check"></i>Success :)</h4>
		                <div id="pageAlert">
		                	
		                </div>
		              </div>
								</div>
								<table id="tblView<?=$Entity?>" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Image</th>											
											<th>Course</th>
											<th>Description</th>
											<th>Status</th>
											<th>Action</th>
											<th>View Chapters</th>
										</tr>
									</thead>
								</table>
							</div>


						</div>

					</div>
				</div>

			</section>
		</div>


</body>
</html>