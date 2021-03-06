<?php 
/**
 * @author Palasthotel <rezeption@palasthotel.de>
 * @copyright Copyright (c) 2014, Palasthotel
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 * @package Palasthotel\Grid-Wordpress
 */
?>
<div class="grid-box<?php echo ($this->style)? " ".$this->style." ": " "; echo implode($this->classes," ")?>">
	<?php
	if ($this->title!=""){

		if ($this->titleurl !=""){
		?>
			<h2 class="grid-box-title"><a href="<?php echo $this->titleurl?>"><?php echo $this->title?></a></h2>
		<?php }else{?>
			<h2 class="grid-box-title"><?php echo $this->title?></h2>
		<?php }?>
	<?php }?>
	
	<?php if($this->prolog != "") { ?>
	<div class="grid-box-prolog">
		<?php echo $this->prolog?>
	</div>
	<?php } ?>
	
	<?php echo $content->rendered_html;	?>

	<?php if($this->epilog != ""){ ?>
	<div class="grid-box-epilog">
		<?php echo $this->epilog?>
	</div>
	<?php } ?>
  	<?php
	if ($this->readmore!=""){?>
	<a href="<?php echo $this->readmoreurl?>" class="grid-box-readmore-link"><?php echo $this->readmore?></a>
	<?php }?>
	
</div>
