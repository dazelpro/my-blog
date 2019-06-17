<!DOCTYPE html>
<html>
<head>
	<title>DAZELPRO - List Article</title>
  <style>
    
  </style>
</head>
<body>
	<div class="main-content">
		<div class="container-fluid">
      <form action="<?php echo base_url().'backend/Article/publish'?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-headline">
		          <div class="panel-heading">
                <h3 class="panel-title">List Article</h3>
                <p class="panel-subtitle">Dashboard / Article / List Article</p>
		          </div>
		          <div class="panel-body">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <tr>
                      <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <?php $no=0; foreach ($data->result_array() as $d):$no++; ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>
                            <?php 
                                $dt = $d['article_title'];
                                $dts = substr($dt,0,30);
                                echo $dts;
                            ?>...
                          </td>
                          <td><?php echo $d['article_date'] ?></td>
                          <td><?php echo $d['category_name'] ?></td>
                          <td><?php echo $d['article_views'] ?></td>
                          <td>
                            <button type="button" onclick="window.location.href='<?php echo site_url('backend/article/get/'.$d['article_id']);?>'" href="" class="btn btn-primary btn-xs">
                            <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" href="#modalDelete<?php echo $d['article_id'] ?>" class="btn btn-danger btn-xs"data-toggle="modal">
                            <i class="fa fa-trash-o"></i>
                            </button>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </tr>
                  </table>
                </div>  
		          </div>
            </div>
          </div>          
        </div>
      </div>
    </form>
	</div>
</div>
</body>
</html>
<!-- Modal Delete -->
<?php foreach ($data->result_array() as $d){ ?>
<form action="<?php echo site_url('backend/article/delete');?>" method="post">
  <div class="modal fade" id="modalDelete<?php echo $d['article_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $d['article_id'] ?>">
                        <p>Delete Article <b><?php echo $d['article_title'] ?></b>. <br>Are you sure?</p>
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