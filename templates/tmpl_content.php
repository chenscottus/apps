<?php
/**
* @package imprint an ownCloud app
* @category base
* @author Christian Reiner
* @copyright 2012 Christian Reiner <foss@christian-reiner.info>
* @license GNU Affero General Public license (AGPL)
* @link information
* @link repository https://svn.christian-reiner.info/svn/app/oc/imprint
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the license, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.
* If not, see <http://www.gnu.org/licenses/>.
*
*/
?>

<?php
/**
 * @file templates/tmpl_content.php
 * Visualizes the configured imprint content.
 * @access public
 * @author Christian Reiner
 */
?>

<!-- an iframe holding the imprints content (safety reasons...) -->
<iframe id="imprint-content" width="100%" height="100%"></iframe>
<!-- imprint template content to be processed by the small script below -->
<script id="imprint-template" type="text/template"><?php echo $_['imprint'];?></script>
<!-- small script to transfer template content from above into the iframe document object -->
<script type="text/javascript">
	$(document).ready(function(){
		var markup=$('<body />').append($('#imprint-template').html());
		$('#imprint-content').contents().find('html body').html(markup.text());
		$('#imprint-content').contents().find('html head').append(style);
		$('#imprint-template').remove();
	})
</script>
