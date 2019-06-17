<!DOCTYPE html>
<html>
<head>
	<title>DAZELPRO - Article</title>
</head>
<body>
	<div class="main-content">
		<div class="container-fluid">
      <?php echo $this->session->flashdata('msg');?>
      <form action="<?php echo base_url().'backend/Article/publish'?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-headline">
		          <div class="panel-heading">
                <h3 class="panel-title">New Article</h3>
                <p class="panel-subtitle">Dashboard / Article / New Article</p>
		          </div>
		          <div class="panel-body">
                <input type="text" class="form-control" onkeyup="tampil()" id="title" name="title" placeholder="Article Titles" autocomplete="off" required>
                <br>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Permalink" readonly style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" autocomplete="off" required>
                <br>
			          <textarea name="ckeditor" id="editor1"></textarea>
		          </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Image Thumbnail</h3>
              </div>
              <div class="panel-body" style="margin-top: -20px;">
                <img id="image-preview" src="<?php echo base_url('assets/backend/tes.jpg');?>" style="width: 100%;" alt="image preview"/><br/>
                <input type="file" class="form-control btn-primary" id="image-source" name="image" onchange="previewImage();" 
                required/>
              </div>
            </div>                
            <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Category</h3>
            </div>
            <div class="panel-body">
              <select class="form-control" name="category" required>
                  <option value="">-Select Option-</option>
                  <?php foreach ($category->result_array() as $d) { ?>
                    <option value="<?php echo $d['category_id'] ?>">
                    <?php echo $d['category_name'] ?>             
                    </option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Tags</h3>
            </div>
            <div class="panel-body">
              <?php foreach ($tag->result_array() as $d) { ?>
                <label class="fancy-checkbox">
                <input type="checkbox" name="tag[]" value="<?php echo $d['tag_name'] ?>">
                <span><?php echo $d['tag_name'] ?></span>
                </label>
              <?php } ?>
            </div>
          </div>                    
          <div class="panel">                        
            <div class="panel-body">
              <button type="submit" style="margin-top: 2%;" class="btn btn-lg btn-primary btn-block"><i class="fa fa-paper-plane-o"></i>&nbsp; Publish</button>
            </div>
          </div>  
        </div>
      </div>
    </form>
	</div>
</div>
</body>
</html>
<script src="<?php echo base_url().'assets/backend/ckeditor/ckeditor.js'?>"></script>
<script src="<?php echo base_url().'assets/backend/vendor/toastr/toastr.min.js'?>"></script>
<script>
// hljs.initHighlightingOnLoad();
CKEDITOR.replace( 'editor1', {
    height: 800,
    filebrowserImageBrowseUrl : '<?php echo base_url('assets/backend/kcfinder');?>',
    filebrowserWindowWidth: '700',
    filebrowserWindowHeight: '500',
    removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Redo,Undo,Replace,Find,SelectAll,Scayt,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Outdent,Indent,BidiLtr,BidiRtl,Language,Anchor,Flash,ShowBlocks,About,Form'
} );
</script>
<script type="text/javascript">
  function previewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
    oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<script type="text/javascript">
  function tampil() {
    var title   = document.getElementById("title").value;
    var newStr  = title.replace(/[^A-Za-z0-9\s]/g,' ').replace(/\s{2,}/g,' ');
    var newStrs = newStr.replace(/\s+/g, '-');
    var final   = newStrs.toLowerCase();
    document.getElementById("slug").value = final;
  };
</script>