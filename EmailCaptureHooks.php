<?php
/**
 * Hooks for EmailCapture extension
 * 
 * @author tparscal
 */
class EmailCaptureHooks {
	/**
	 * LoadExtensionSchemaUpdates hook
	 */
	public static function loadExtensionSchemaUpdates( $updater = null ) {
		if ( $updater === null ) {
			global $wgExtNewTables;
			$wgExtNewTables[] = array(
				'email_capture',
				dirname( __FILE__ ) . '/sql/CreateEmailCaptureTable.sql'
			);
		} else {
			$dir = dirname( __FILE__ );
			$db = $updater->getDB();
			if ( !$db->tableExists( 'article_feedback' ) ) {
				// Initial install tables
				$updater->addExtensionUpdate( array(
					'addTable',
					'email_capture',
					$dir . '/sql/CreateEmailCaptureTable.sql',
					true
				) );
			}
		}
		return true;
	}

	/**
	 * ParserTestTables hook
	 */
	public static function parserTestTables( &$tables ) {
		$tables[] = 'email_capture';
		return true;
	}
}
