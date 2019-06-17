<!DOCTYPE html>
<html>
<head>
	<title>DAZELPRO - Tags</title>
</head>
<body>
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Tags</h3>
					<p class="panel-subtitle">Dashboard / Additional / Tag</p><br>
					<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal"><i class="fa fa-plus-square"></i>&nbsp; Add New Data</a>
				</div>
				<div class="panel-body">
                    <div class="table-responsive text-nowrap">
    					<table class="table table-hover">
    						<thead>
    						<tr>
    							<th>#</th>
    							<th>Title</th>
    							<th>Action</th>
    						</tr>
    						</thead>
    						<?php $no=0; foreach ($data->result_array() as $d):$no++; ?>
    						<tr>
    							<td><?php echo $no;?></td>
    							<td><?php echo $d['tag_name'] ?></td>
    							<td>
    								<button type="button" href="#modalEdit<?php echo $d['tag_id'] ?>"  class="btn btn-primary btn-xs" 			data-toggle="modal">
    									<i class="fa fa-edit"></i>
    								</button>
    								<button type="button" href="#modalDelete<?php echo $d['tag_id'] ?>" class="btn btn-danger btn-xs" 			data-toggle="modal">
    									<i class="fa fa-trash-o"></i>
    								</button>
    							</td>
    						</tr>
    						<?php endforeach;?>
    					</table>
                    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<!-- Modal Add -->
<form action="<?php echo site_url('backend/Tag/save');?>" method="post">
	<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Tag</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Tag Name" autocomplete="off" required>
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
<form action="<?php echo site_url('backend/Tag/update');?>" method="post">
	<div class="modal fade" id="modalEdit<?php echo $d['tag_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update This Tag</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    	<input type="hidden" name="id" value="<?php echo $d['tag_id'] ?>">
                        <input type="text" name="name" class="form-control" value="<?php echo $d['tag_name'] ?>" autocomplete="off" required>
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
<form action="<?php echo site_url('backend/Tag/delete');?>" method="post">
	<div class="modal fade" id="modalDelete<?php echo $d['tag_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    	<input type="hidden" name="id" value="<?php echo $d['tag_id'] ?>">
                        <p>Delete tag <b><?php echo $d['tag_name'] ?></b>. Are you sure?</p>
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