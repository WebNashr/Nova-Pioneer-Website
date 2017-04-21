<?php
backupbuddy_core::verifyAjaxAccess();


// Server info page database size update.

/*	refresh_database_size()
*	
*	Server info page database size refresh. Echos out the new site size (pretty version).
*	
*	@return		null
*/

$database_size = backupbuddy_core::get_database_size(); // array( database_size, database_size_sans_exclusions ).

echo pb_backupbuddy::$format->file_size( $database_size[1] );

die();
