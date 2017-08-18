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
		<div class="fpbx-container">
			<div class="display full-border">
				<ul class="nav nav-tabs" role="tablist">
					<li data-name="tab1" class="change-tab active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tab1 (active!)</a></li>
					<li data-name="tab2" class="change-tab"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Tab2</a></li>
				</ul>
				<div class="tab-content display">
					<div id="tab1" class="tab-pane active">
						Tab 1 Data (Shown)
					</div>
					<div id="tab2" class="tab-pane">
						Tab 2 Data (Hidden)
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
