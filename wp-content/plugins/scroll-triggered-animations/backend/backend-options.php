<?php function toast_sta_menu(  ) { 

	add_menu_page('Scroll Triggered Animations', 'Scroll Triggered Animations', 'manage_options', 'toast_sta_items', 'toast_sta_options_page', 'dashicons-lightbulb');

}
add_action( 'admin_menu', 'toast_sta_menu' );

add_action( 'admin_init', 'toast_sta_init' );
function toast_sta_init() { 
	register_setting( 'toast_sta_options', 'toast_sta_settings' );
	register_setting( 'toast_sta_advanced_options', 'toast_sta_settings' );
	add_settings_section(
		'toast_sta_optionsArea', 
		__( '', 'wordpress' ), 
		'toast_sta_section_callback', 
		'toast_sta_options'
	);
	
	add_settings_section(
		'toast_sta_advanced_optionsArea', 
		__( '', 'wordpress' ), 
		'toast_sta_section_callback', 
		'toast_sta_advanced_options'
	);
	
	
	add_settings_field( 
		'toast_sta_advanced_animations', 
		__( 'Element(s) to animate', 'wordpress' ), 
		'toast_sta_advanced_animations_render', 
		'toast_sta_advanced_options', 
		'toast_sta_advanced_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_animations_css', 
		__( 'Advanced Animations CSS', 'wordpress' ), 
		'toast_sta_animations_css_render', 
		'toast_sta_advanced_options', 
		'toast_sta_advanced_optionsArea' 
	);
	
	add_settings_field( 
		'toast_animate_on_page_load', 
		__( 'Add class on page load', 'wordpress' ), 
		'toast_animate_on_page_load_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_position_start', 
		__( 'Position from bottom of viewport to start animation (px)', 'wordpress' ), 
		'toast_sta_position_start_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_disable_on_mobile', 
		__( 'Disable on mobile', 'wordpress' ), 
		'toast_sta_disable_on_mobile_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_repeat_animations', 
		__( 'Repeat animations', 'wordpress' ), 
		'toast_sta_repeat_animations_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
}

function toast_sta_advanced_animations_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<input type="hidden" name='toast_sta_settings[toast_sta_advanced_animations]' value='<?php echo $option['toast_sta_advanced_animations']; ?>'>
<?php }

function toast_sta_animations_css_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	<textarea name='toast_sta_settings[toast_sta_animations_css]' value="<?php echo $option['toast_sta_animations_css']; ?>" placeholder="Apply your CSS"><?php echo $option['toast_sta_animations_css']; ?></textarea>
<?php }  

function toast_animate_on_page_load_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<div class="description">
	<h4>Add Class on page load?</h4>
	
	<div class="more-info">
	<i class="dashicons-editor-help"></i>
	<div class="hovered-text">
	Apply the animations before any scroll movement. Useful if you have animations at the top of a page.
	</div>
	</div>
	
	</div>
	
	<input type='checkbox' name='toast_sta_settings[toast_animate_on_page_load]' <?php if ( is_array( $option ) && $option['toast_animate_on_page_load'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?> value="on">
	
	
<?php } 

function toast_sta_position_start_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<div class="description">
	<h4>Offset From bottom</h4>
	
	<div class="more-info">
	<i class="dashicons-editor-help"></i>
	<div class="hovered-text">
	Position from the bottom of viewport to start animations. Useful if you have a fixed footer.
	</div>
	</div>
	
	</div>
	
	<select name='toast_sta_settings[toast_sta_position_start]' value='<?php echo $option['toast_sta_position_start']; ?>'>
	<?php for ($i = 0; $i <= 25; $i++): ?>
	<?php $sta_position_start = $i * 20; ?>
	
	<option value="<?php echo $sta_position_start; ?>" <?php if($option['toast_sta_position_start'] == $sta_position_start): ?>selected<?php endif; ?>><?php echo $sta_position_start; ?>px</option>
	<?php endfor; ?>
	
	</select>
	
	
<?php } 

function toast_sta_disable_on_mobile_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<div class="description premium-option">
	<h4>Disable default animations on mobile?</h4>
	
	<div class="more-info">
	<i class="dashicons-editor-help"></i>
	<div class="hovered-text">
	Disable all default animations on mobile devices.
	</div>
	</div>
	
	</div>
	
	<input type="checkbox" name='toast_sta_settings[toast_sta_disable_on_mobile]' <?php if ( is_array( $option ) && $option['toast_sta_disable_on_mobile'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?>>
	
	
<?php } 

function toast_sta_repeat_animations_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<div class="description premium-option">
	<h4>Repeat after leaving viewport?</h4>
	
	<div class="more-info">
	<i class="dashicons-editor-help"></i>
	<div class="hovered-text">
	Remove the class when the items leave the viewport. Animation will repeat for every time you scroll up and down the page and the items enters the viewport
	</div>
	</div>
	
	</div>
	
	<input type="checkbox" name='toast_sta_settings[toast_sta_repeat_animations]' <?php if ( is_array( $option ) && $option['toast_sta_repeat_animations'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?>>
	
	
<?php } 