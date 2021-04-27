<?php
/*
 * Basic form input structure. Replace "__NAME__" with field id. Replace "__LABEL__" and "Help Text" appropriately
 */
?>

<!--__LABEL__-->
<div class="element-container">
	<div class="row">
		<div class="form-group">
			<div class="col-md-3">
				<label class="control-label" for="name"><?php echo _("__LABEL__") ?></label>
				<i class="fa fa-question-circle fpbx-help-icon" data-for="__NAME__"></i>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control" id="__NAME__" name="__NAME__" value="">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span id="__NAME__-help" class="help-block fpbx-help-block"><?php echo _("Help Text")?></span>
		</div>
	</div>
</div>
<!--END __LABEL__-->

