<?php
/**
 * Elgg owner block
 * Displays page ownership information
 *
 * @package Elgg
 * @subpackage Core
 *
 */

elgg_push_context('owner_block');

// groups and other users get owner block
$owner = elgg_get_page_owner_entity();
if ($owner instanceof ElggGroup ||
	($owner instanceof ElggUser && $owner->getGUID() != elgg_get_logged_in_user_guid())) {

	$header = elgg_view_entity($owner, array(
		'full_view' => false,
		'icon_size' => 'small'
	));

	if (elgg_get_plugin_user_setting('tiny_ownerblock', elgg_get_logged_in_user_guid(), 'elgg-ggouv_template') == 'yes') $tiny = 'tiny';
	$body = elgg_view_menu('owner_block', array(
		'entity' => $owner,
		'class' => "mtm $tiny"
	));

	$body .= elgg_view('page/elements/owner_block/extend', $vars);

	echo elgg_view('page/components/module', array(
		'header' => $header,
		'body' => $body,
		'class' => 'elgg-owner-block',
	));
}

elgg_pop_context();