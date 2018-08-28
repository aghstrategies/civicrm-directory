<!-- assets/templates/theme/civicrm-directory/directory-search.php -->
<section class="search">

	<h3><?php _e( 'Search', 'civicrm-directory' ); ?></h3>

	<p><?php _e( 'You can search by name or keyword.', 'civicrm-directory' ); ?></p>

	<form action="<?php echo $url; ?>" method="get" id="civicrm_directory_search">
		<label for="civicrm_directory_search_string"><?php esc_html_e( 'Search by Name', 'civicrm-directory' ); ?></label>
		<input type="text" id="civicrm_directory_search_string" name="civicrm_directory_search_string" value="">
<br/>
		<label for="civicrm_directory_specialization_search_string"><?php esc_html_e( 'Search by Specialization', 'civicrm-directory' ); ?></label>
		<?php civicrm_initialize();
		try {
			$result = civicrm_api3('OptionValue', 'get', array(
	      'sequential' => 1,
	      'option_group_id' => "area_of_expertise_social_insuran_20091023225943",
      ));
		}
		catch (CiviCRM_API3_Exception $e) {
			$error = $e->getMessage();
			CRM_Core_Error::debug_log_message($error);
		}
		if (isset($result['values'][0])) {
			foreach ($result['values'] as $value) {
				echo '<input type="checkbox" name=' . $value['value'] . 'value=' . $value['value'] . '> ' . $value['label'] . '<br/>';
			}
		}
		?>
		<input type="text" id="civicrm_directory_specialization_search_string" name="civicrm_directory_specialization_search_string" value="">
<br/>
		<label for="civicrm_directory_city_search_string"><?php esc_html_e( 'Search by City', 'civicrm-directory' ); ?></label>
		<input type="text" id="civicrm_directory_city_search_string" name="civicrm_directory_city_search_string" value="">
<br/>
		<label for="civicrm_directory_state_search_string"><?php esc_html_e( 'Search by State', 'civicrm-directory' ); ?></label>
		<input type="text" id="civicrm_directory_state_search_string" name="civicrm_directory_state_search_string" value="">
<br/>
		<input type="submit" id="civicrm_directory_search_submit" value="<?php esc_attr_e( 'Search', 'civicrm-directory' ); ?>">
	</form>

</section><!-- /.search -->
