<?php echo $this->element('admin-header'); ?> 
<?php 
if(isset($admin_sidebar)){
echo $this->element($admin_sidebar.'-sidebar');	
}
 ?> 
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('admin-footer'); ?> 
