<?php echo $header; 
$theme_options = $this->registry->get('theme_options');
$config = $this->registry->get('config'); 
include('catalog/view/theme/' . $config->get('config_template') . '/template/new_elements/wrapper_top.tpl'); ?>

	  <form class="form-horizontal" action="<?php echo $add; ?>" method="post">
		<fieldset id="payment">
		  <div id="card-new">
			<div class="form-group required">
			  <label class="col-sm-2 control-label" for="input-cc-owner"><?php echo $entry_cc_owner; ?></label>
			  <div class="col-sm-10">
				<input type="text" name="cc_owner" value="" placeholder="<?php echo $entry_cc_owner; ?>" id="input-cc-owner" class="form-control" />
			  </div>
			</div>
			<div class="form-group required">
			  <label class="col-sm-2 control-label" for="input-cc-type"><?php echo $entry_cc_type; ?></label>
			  <div class="col-sm-10">
				<select name="cc_type" id="input-cc-type" class="form-control">
				  <?php foreach ($cards as $card) { ?>
					  <option value="<?php echo $card['value']; ?>"><?php echo $card['text']; ?></option>
				  <?php } ?>
				</select>
			  </div>
			</div>
			<div class="form-group required">
			  <label class="col-sm-2 control-label" for="input-cc-number"><?php echo $entry_cc_number; ?></label>
			  <div class="col-sm-10">
				<input type="text" name="cc_number" value="" placeholder="<?php echo $entry_cc_number; ?>" id="input-cc-number" class="form-control" />
			  </div>
			</div>
			<div class="form-group required">
			  <label class="col-sm-2 control-label" for="input-cc-expire-date"><?php echo $entry_cc_expire_date; ?></label>
			  <div class="col-sm-3">
				<select name="cc_expire_date_month" id="input-cc-expire-date" class="form-control">
				  <?php foreach ($months as $month) { ?>
					  <option value="<?php echo $month['value']; ?>"><?php echo $month['text']; ?></option>
				  <?php } ?>
				</select>
			  </div>
			  <div class="col-sm-3">
				<select name="cc_expire_date_year" class="form-control">
				  <?php foreach ($year_expire as $year) { ?>
					  <option value="<?php echo $year['value']; ?>"><?php echo $year['text']; ?></option>
				  <?php } ?>
				</select>
			  </div>
			</div>
			<div class="form-group required">
			  <label class="col-sm-2 control-label" for="input-cc-cvv2"><?php echo $entry_cc_cvv2; ?></label>
			  <div class="col-sm-10">
				<input type="text" name="cc_cvv2" value="" placeholder="<?php echo $entry_cc_cvv2; ?>" id="input-cc-cvv2" class="form-control" />
			  </div>
			</div>
		  </div>
		  <div class="buttons clearfix">
			<div class="pull-left"><a href="<?php echo $back; ?>" class="btn btn-default"><?php echo $button_back; ?></a></div>
			<div class="pull-right"><input type="submit" value="<?php echo $button_add_card; ?>" class="btn btn-primary" /></div>
		  </div>
		</fieldset>
	  </form>
	  
<?php include('catalog/view/theme/' . $config->get('config_template') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
