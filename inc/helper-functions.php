<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

if ( !class_exists( 'FinbuzzTheme_Helper' ) ) {
	
	class FinbuzzTheme_Helper {
		
		

		public static function pagination() {
			if( is_singular() )
				return;

			global $wp_query;
            

			/** Stop execution if there's only 1 page */
			if( $wp_query->max_num_pages <= 1 )
				return;
			
			$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
			$max   = intval( $wp_query->max_num_pages );

			/**	Add current page to the array */
			if ( $paged >= 1 )
				$links[] = $paged;

			/**	Add the pages around the current page to the array */
			if ( $paged >= 3 ) {
				$links[] = $paged - 1;
				$links[] = $paged - 2;
			}

			if ( ( $paged + 2 ) <= $max ) {
				$links[] = $paged + 2;
				$links[] = $paged + 1;
			}
            
			include FINBUZZ_VIEW_DIR.'/pagination.php';
		}	
	}
}