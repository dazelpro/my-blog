<!DOCTYPE html>
<html>
<head>
	<title>DAZELPRO - Category</title>
</head>
<body>
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Category</h3>
					<p class="panel-subtitle">Dashboard / Additional / Category</p><br>
					<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal"><i class="fa fa-plus-square"></i>&nbsp; Add New Data</a>
				</div>
				<div class="panel-body">
                    <div class="table-responsive text-nowrap">
    					<table class="table table-hover">
    						<thead>
    						<tr>
    							<th>#</th>
    							<th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
    						</tr>
    						</thead>
                            <tbody>
    						<?php $no=0; foreach ($data->result_array() as $d):$no++; ?>
    						<tr>
    							<td><?php echo $no;?></td>
                                <td><?php echo $d['category_name'] ?></td>
                                <td><?php echo $d['category_slug'] ?></td>
    							<td>
    								<button type="button" href="#modalEdit<?php echo $d['category_id'] ?>"  class="btn btn-primary btn-xs" 			data-toggle="modal">
    									<i class="fa fa-edit"></i>
    								</button>
    								<button type="button" href="#modalDelete<?php echo $d['category_id'] ?>" class="btn btn-danger btn-xs" 			data-toggle="modal">
    									<i class="fa fa-trash-o"></i>
    								</button>
    							</td>
    						</tr>
    						<?php endforeach;?>
                            </tbody>
    					</table>
                    </div>					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<!-- Modal Add -->
<form action="<?php echo site_url('backend/Category/save');?>" method="post">
	<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Category Name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            	<button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Edit -->
<?php foreach ($data->result_array() as $d){ ?>
<form action="<?php echo site_url('backend/Category/update');?>" method="post">
	<div class="modal fade" id="modalEdit<?php echo $d['category_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update This Category</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    	<input type="hidden" name="id" value="<?php echo $d['category_id'] ?>">
                        <input type="text" name="name" autocomplete="off"class="form-control" value="<?php echo $d['category_name'] ?>" autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            	<button class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php } ?>
<!-- Modal Delete -->
<?php foreach ($data->result_array() as $d){ ?>
<form action="<?php echo site_url('backend/Category/delete');?>" method="post">
	<div class="modal fade" id="modalDelete<?php echo $d['category_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    	<input type="hidden" name="id" value="<?php echo $d['category_id'] ?>">
                        <p>Delete category <b><?php echo $d['category_name'] ?></b>. Are you sure?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            	<button class="btn btn-danger">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php } ?>