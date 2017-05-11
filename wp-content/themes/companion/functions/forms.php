<?php


// Contact form sent through SMTP
add_action('phpmailer_init', 'amped_phpmailer_init');


function amped_phpmailer_init(PHPMailer $phpmailer)
{

	$email_host = get_field('smtp_server_address', 'option');
	$email_port = get_field('smtp_server_port', 'option');
	$email_username = get_field('smtp_username', 'option');
	$email_password = get_field('smtp_password', 'option');
	$email_security = get_field('smtp_security', 'option');

	$phpmailer->Host = '' . $email_host . '';
	$phpmailer->Port = $email_port; // could be different
	$phpmailer->Username = '' . $email_username . ''; // if required
	$phpmailer->Password = '' . $email_password . ''; // if required
	$phpmailer->SMTPAuth = true; // if required
	$phpmailer->SMTPSecure = '' . $email_security . ''; // enable if required, 'tls' is another possible value

	$phpmailer->IsSMTP();
}


// create options page for ACF
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Contact Form',
		'menu_title' => 'Contact Form',
		'menu_slug' => 'contact-form',
		'capability' => 'edit_posts',
		'redirect' => false
	));

}


// ACF custom fields build out.
if (function_exists('acf_add_local_field_group')):

	acf_add_local_field_group(array(
		'key' => 'group_5876990e8dbc4',
		'title' => 'Contact Form',
		'fields' => array(
			array(
				'key' => 'field_58769914e5546',
				'label' => 'SMTP server address:',
				'name' => 'smtp_server_address',
				'type' => 'text',
				'instructions' => 'Example: smtp.gmail.com',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_58769998e2d7c',
				'label' => 'SMTP server port:',
				'name' => 'smtp_server_port',
				'type' => 'number',
				'instructions' => 'Default for gmail is \'465\'',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_587699d250ddd',
				'label' => 'SMTP username:',
				'name' => 'smtp_username',
				'type' => 'email',
				'instructions' => 'Example: johndoe@gmail.com',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_58769a25ef53f',
				'label' => 'SMTP password:',
				'name' => 'smtp_password',
				'type' => 'password',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'field_58769a5904950',
				'label' => 'SMTP Security:',
				'name' => 'smtp_security',
				'type' => 'radio',
				'instructions' => 'Checked SSL for gmail',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'ssl' => 'SSL',
					'tsl' => 'TSL',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'contact-form',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;