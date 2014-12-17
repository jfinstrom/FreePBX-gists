<?php
/*
 * Basic tabbed page
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
						<form class="fpbx-submit" name="frm_extensions" action="" method="post" data-fpbx-delete="" role="form">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" data-name="tab1" class="active">
									<a href="#tab1" aria-controls="certificates" role="tab" data-toggle="tab">
										<?php echo _("Tab1")?>
									</a>
								</li>
								<li role="presentation" data-name="tab2" class="change-tab">
									<a href="#tab2" aria-controls="casettings" role="tab" data-toggle="tab">
										<?php echo _("Tab2")?>
									</a>
								</li>
							</ul>
								<div class="tab-content display">
									<div role=tabpanel" id="tab1" class="tab-pane active">
										Tab1 Content
									</div>
									<div role=tabpanel" id="casettings" class="tab-pane">
										Tab2 Content		
									</div>
								</div>
						</form>
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
</div>
