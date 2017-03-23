<?php
$params = $dataObj::params();
$type = $_GET['type'];
if(!isset($type)) {
	$type = "button";
}

?>
<div class="ycf-bootstrap-wrapper">
<form method="POST" action="<?php echo admin_url();?>admin-post.php?action=save_data">
<input type="hidden" name="read-more-type" value="<?php echo esc_attr($type); ?>">
<input type="hidden" name="read-more-id" value="<?php echo esc_attr($id); ?>">
<div class="expm-wrapper">
	<div class="titles-wrapper">
		<h2 class="expander-page-title">Change settings</h2>
		<div class="button-wrapper">
			<p class="submit">
				<?php if(YRM_PKG == 1): ?>
					<input type="button" class="expm-update-to-pro" value="Upgrade to PRO version" onclick="window.open('<?php echo YRM_PRO_URL; ?>');">
				<?php endif;?>
				<input type="submit" class="button-primary" value="<?php echo 'Save Changes'; ?>">
			</p>
		</div>
	</div>
	<div class="clear"></div>
	<div class="row">
		<div class="col-xs-12">
			<input type="text" name="expm-title" class="form-control input-md" placeholder="Read more title" value="<?php echo $readMoreTitle; ?>">
		</div>
	</div>
	<div class="options-wrapper">
		<div class="panel panel-default">
			<div class="panel-heading">Read More Options</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Button width', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control input-md expm-options-margin expm-btn-width" name="button-width" value="<?php echo esc_attr($buttonWidth);?>"><br>
					</div>
					<div class="col-md-2 expm-option-info">(in pixels)</div>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Button height', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control input-md expm-options-margin expm-btn-height" name="button-height" value="<?php echo esc_attr($buttonHeight);?>"><br>
					</div>
					<div class="col-md-2 expm-option-info">(in pixels)</div>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Font size', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type='text' class="form-control input-md expm-option-font-size" name="font-size" value="<?php echo esc_attr($fontSize)?>"><br>
					</div>
					<div class="col-md-2 expm-option-info">(in pixels)</div>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Set animation speed', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
					<input type="text" class="form-control input-md  expm-options-margin" name="animation-duration" value="<?php echo esc_attr($animationDuration)?>">
					</div>
					<div class="col-md-2 expm-option-info"></div>
				</div>

			</div>
		</div>
		<div class="panel panel-default yrm-pro-options-wrapper">
			<div class="panel-heading"><?php _e('Advanced options', YRM_LANG);?></div>
			<div class="panel-body">
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Background Color', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="text" class="input-md background-color" name="btn-background-color" value="<?php echo $btnBackgroundColor ?>"><br>
					</div>
				</div>
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Text Color', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="text" class="input-md btn-text-color" name="btn-text-color" value="<?php echo esc_attr($btnTextColor)?>"><br>
					</div>
				</div>
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Font Family', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<?php echo $functions::createSelectBox($params['googleFonts'],"expander-font-family", esc_attr($expanderFontFamily));?><br>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Border radius', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control input-md btn-border-radius" name="btn-border-radius" value="<?php echo esc_attr($btnBorderRadius)?>"><br>
					</div>
				</div>
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Horizontal alignment', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<?php echo $functions::createSelectBox($params['horizontalAlign'],"horizontal", esc_attr($horizontal));?><br>
					</div>
				</div>
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Vertical alignment', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<?php echo $functions::createSelectBox($params['vertical'],"vertical", esc_attr($vertical));?><br>
					</div>
				</div>
				<div class="row row-static-margin-bottom">
					<div class="col-xs-5">
						<label class="control-label" for="textinput"><?php _e('Show only mobile devices', YRM_LANG);?>:</label>
					</div>
					<div class="col-xs-4">
						<input type="checkbox" name="show-only-mobile" <?php echo $showOnlyMobile;?>>
					</div>
				</div>

			</div>
			<?php if(YRM_PKG == 1) :?>
				<div class="yrm-pro-options" onclick="window.open('<?php echo YRM_PRO_URL; ?>');">

				</div>
			<?php endif;?>
		</div>
	</div>
	<div class="right-side">
		<div class="panel panel-default">
			<div class="panel-heading">Live preview</div>
			<div class="panel-body">
				<?php require_once(YRM_VIEWS."livePreview/buttonPreview.php");?>
			</div>
		</div>
		<?php $shortCode = '[read_more id="'.$id.'" more="Read more" less="Read less"]Read more hidden text[/read_more]'; ?>
		<?php if($id != 0): ?>
			<input type="text" id="expm-shortcode-info-div" class="widefat" readonly="readonly" value='<?php echo $shortCode; ?>'>
		<?php endif; ?>
	</div>
</div>
</form>
</div>