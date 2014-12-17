<?php
/*
 * Basic page
 */
?>

<div class="container-fluid">
	<h1><?php echo _('Heading')?></h1>
	<div class="well well-info">
		<?php echo _('Page info')?>
	</div>
	<div class = "display full-border">
		<div class="row">
			<div class="col-sm-9">
				<div class="fpbx-container">
					<div class="display full-border">
						Page contents
					</div>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs bootnav">
				<div class="list-group">
					<a href="?display=extensions" class="list-group-item active">Item One (active!)</a>
					<a href="?display=extensions" class="list-group-item">Item two</a>
				</div>
			</div>
		</div>
	</div>
</div>

