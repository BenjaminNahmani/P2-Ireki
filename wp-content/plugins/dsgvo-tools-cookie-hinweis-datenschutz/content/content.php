<?php
function fhw_dsgvo_cookie_content() {
?>
<style>
	@keyframes fadein1 {
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	}
	
	#fhw_cookiehinweis { 
		width: 100%; 
		animation: fadein1 3s;
		position: fixed; 
		left: 0px;
		z-index: 9999;
		display: table;
<?php	
	if( esc_attr( get_option( 'fhw_dsgvo_cookie_position' ) ) == 2)  {
		echo "bottom: " . esc_attr( get_option( 'fhw_dsgvo_cookie_abstand', '0' ) ) . "px;";
	} else echo "top: " . esc_attr( get_option( 'fhw_dsgvo_cookie_abstand', '0' ) ) . "px;";
?>	
		background: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_bgcolor', 'orange' ) ); ?>;
	}


	#fhw_cookiehinweis .privacybutton {
		background: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_ppbuttonbg', '#222' ) ); ?>;
		color: inherit;
	}
	
	#fhw_cookiehinweis p {
		display: table-cell;
		text-align: center;
		width: 100%;
		padding: 10px;
		color: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_textcolor', 'red' ) ); ?>;
	}
	
	#fhw_cookiehinweis .mainbutton {
		background: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_buttonbgcolor', '#222' ) ) ?>;
		color: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_buttontextcolor', "white" ) ); ?>;
	}
	
	#fhw_cookiehinweis a {
		color: <?php echo esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutztextfarbe', "black" ) ); ?>;
	}
</style>
<div id="fhw_cookiehinweis">
	<p>
		<?php if( function_exists( 'pll_e' ) ) {
					pll_e( __( 'This website is using cookies to improve the user-friendliness. You agree by using the website further.' ) );
				}
				else echo esc_attr( get_option( 'fhw_dsgvo_cookie_text', __( 'This website is using cookies to improve the user-friendliness. You agree by using the website further.', 'dsgvo-tools-cookie-hinweis-datenschutz' ) ) );
		?>
        <button type="button" class="mainbutton" style="margin-left: 30px; margin-right: 30px;"><?php 
            if( function_exists( 'pll_e' ) ) {
                pll_e( __( 'Understand' ) );
            } else {
                echo esc_attr( get_option( 'fhw_dsgvo_cookie_buttontext', __( 'Understand', 'dsgvo-tools-cookie-hinweis-datenschutz' ) ) ); 
            } ?>
        </button>
		<?php if( 1 == esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutzerklaerung', 1 ) ) ) { ?>
			<a href="<?php 
				if( !function_exists( 'pll_register_string' ) ) {
					echo get_page_link( esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutzseite', 1 ) ) ); 
				} else {
					$translations = pll_languages_list( array( 'fields' => 'name' ) );
					for( $i = 0; $i < count( $translations ); $i++) {
						if( $translations[ $i ] == pll_current_language( 'name' ) )
							echo get_page_link( esc_attr( get_option( 'fhw_dsgvo_cookie_pp_' . $translations[ $i ], 1 ) ) );
					}
				}
				?>
			">
				<?php 
				if( 2 == esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutzdesign', 1 ) ) )
					echo "<button class='privacybutton' type='button'>";
                if( function_exists( 'pll_e' ) ) {
                    pll_e( __( 'Privacy policy' ) );
                } else {
                    echo esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutztext', __( 'Privacy policy', 'dsgvo-tools-cookie-hinweis-datenschutz' ) ) ); 
				} 
				if( 2 == esc_attr( get_option( 'fhw_dsgvo_cookie_datenschutzdesign', 1 ) ) )
					echo "</button>";	
				?>
            </a>
		<?php } ?>
	</p>
</div>
<?php
}
?>