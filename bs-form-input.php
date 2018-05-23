<?php
/*
 * Basic form input structure. Replace "name" with field id. Replace "Label" and "Help Text" appropriately
 */
?>

<!--NAME-->
<div class="element-container">
	<div class="row">
		<div class="form-group">
			<div class="col-md-3">
				<label class="control-label" for="name"><?php echo _("LABEL") ?></label>
				<i class="fa fa-question-circle fpbx-help-icon" data-for="name"></i>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control" id="name" name="name" value="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span id="name-help" class="help-block fpbx-help-block"><?php echo _("Help Text")?></span>
		</div>
	</div>
</div>
<!--END NAME-->

<!--Toggle-->
<div class="element-container">
	<div class="row">
		<div class="form-group">
			<div class="col-md-3">
				<label class="control-label" for="toggle"><?php echo _("Toggle") ?></label>
				<i class="fa fa-question-circle fpbx-help-icon" data-for="toggle"></i>
			</div>
			<div class="col-md-9">
				<span class="radioset">
					<input type="radio" name="toggle" id="toggleyes" value="yes" <?php echo $toggle == "yes"?"CHECKED": "") ?>>
					<label for="toggleyes"><?php echo _("Yes");?></label>
					<input type="radio" name="toggle" id="toggleno" value="no" <?php echo ($toggle == "no"?"": "CHECKED") ?>>
					<label for="toggleno"><?php echo _("No");?></label>
				</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span id="toggle-help" class="help-block fpbx-help-block"><?php echo _("Toggle Help")?></span>
		</div>
	</div>
</div>
<!--Toggle-->