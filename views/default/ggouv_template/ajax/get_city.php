<?php
/**
 *	Elgg-workflow plugin
 *	@package elgg-workflow
 *	@author Emmanuel Salomon @ManUtopiK
 *	@license GNU Affero General Public License, version 3 or late
 *	@link https://github.com/ggouv/elgg-ggouv_template
 *
 *	Elgg-ggouv_template localgroups ajax search
 *
 */
$search = get_input('city', false);

if ($search) {
	if (is_numeric($search)) {
		echo json_encode(get_data_ville_by_cp($search));
	} else {
		echo json_encode(get_data_ville_by_name($search));
	}
}