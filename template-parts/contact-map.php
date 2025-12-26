<?php
/**
 * Contact Map Component Template
 *
 * Static map section for the Contact Us page
 *
 * @package tasheel
 */

?>

<section class="pt_80  contact_map_section">
 
		<div class="contact_map_wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
			<div id="contactMap" class="contact_map_container"></div>
		</div>

		<?php
		// Map Configuration
		// Multiple markers configuration
		$map_api_key = get_theme_mod( 'google_maps_api_key', 'AIzaSyAZY9WW5ucJZLvBYxY4cAeZYY8AvmjZygg' );
		$marker_icon = get_template_directory_uri() . '/assets/images/marker.png';
		
		// Default markers: Dubai, Sharjah, Abu Dhabi
		$default_markers = array(
			array(
				'latitude' => '25.2048',
				'longitude' => '55.2708',
				'title' => 'Dubai Office',
				'address' => 'Dubai, UAE'
			),
			array(
				'latitude' => '25.3573',
				'longitude' => '55.4033',
				'title' => 'Sharjah Office',
				'address' => 'Sharjah, UAE'
			),
			array(
				'latitude' => '24.4539',
				'longitude' => '54.3773',
				'title' => 'Abu Dhabi Office',
				'address' => 'Abu Dhabi, UAE'
			),
		);
		
		// Get markers from theme mods or use defaults
		$markers = get_theme_mod( 'contact_map_markers', $default_markers );
		if ( ! is_array( $markers ) || empty( $markers ) ) {
			$markers = $default_markers;
		}
		?>
		<script>
			window.contactMapConfig = {
				markers: <?php echo json_encode( $markers ); ?>,
				zoom: <?php echo esc_js( get_theme_mod( 'contact_map_zoom', '10' ) ); ?>,
				apiKey: '<?php echo esc_js( $map_api_key ); ?>',
				markerIcon: '<?php echo esc_url( $marker_icon ); ?>'
			};
		</script>
 
</section>


