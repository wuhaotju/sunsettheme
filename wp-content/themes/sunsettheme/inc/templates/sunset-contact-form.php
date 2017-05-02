<h1>Sunset Contact Form</h1>
<?php settings_errors(); ?>

<p>Use this <strong>shortcode</strong> to activate Contact Form inside a Page or Post</p>
<p><code>[contact_form]</code></p>

<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-contact-options' ); ?>
	<?php do_settings_sections( 'alecaddd_sunset_theme_contact' ); ?>
	<?php submit_button(); ?>
</form>
