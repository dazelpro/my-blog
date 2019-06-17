/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ){
config.filebrowserBrowseUrl = '<?php echo base_url().'asset/backend/kcfinder/browse.php?type=files'?>';
config.filebrowserImageBrowseUrl = '<?php echo base_url().'asset/backend/kcfinder/browse.php?type=images'?>';
config.filebrowserFlashBrowseUrl = '<?php echo base_url().'asset/backend/kcfinder/browse.php?type=flash'?>';
config.filebrowserUploadUrl = '<?php echo base_url().'asset/backend/kcfinder/upload.php?type=files'?>';
config.filebrowserImageUploadUrl = '<?php echo base_url().'asset/backend/kcfinder/upload.php?type=images'?>';
config.filebrowserFlashUploadUrl = '<?php echo base_url().'asset/backend/kcfinder/upload.php?type=flash'?>';
config.extraPlugins = 'youtube';
};
