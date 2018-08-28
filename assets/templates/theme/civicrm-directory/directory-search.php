<!-- assets/templates/theme/civicrm-directory/directory-search.php -->
<section class="search">

	<h3><?php _e( 'Search', 'civicrm-directory' ); ?></h3>

	<p><?php _e( 'You can search by name or keyword.', 'civicrm-directory' ); ?></p>

	<form action="<?php echo $url; ?>" method="get" id="civicrm_directory_search">
		<label for="civicrm_directory_search_string"><?php esc_html_e( 'Search by Name', 'civicrm-directory' ); ?></label>
		<input type="text" id="civicrm_directory_search_string" name="civicrm_directory_search_string" value="">
<br/>
		<label for="civicrm_directory_specialization_search_string"><?php esc_html_e( 'Search by Specialization', 'civicrm-directory' ); ?></label>
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
