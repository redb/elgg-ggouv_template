<?php

elgg_register_event_handler('init','system','elgg_ggouv_template_init');

function elgg_ggouv_template_init() {
	
	//elgg_extend_view('css/elgg','ggouv_template/css');
	//elgg_register_js('jquery.livequery', '/mod/facebook_theme/vendors/jquery.livequery-1.1.1/jquery.livequery.min.js', 'footer');
	//elgg_extend_view('js/elgg', 'ggouv_template/js');

	//elgg_register_event_handler('pagesetup', 'system', 'ggouv_custom_page_setup');

	// add actions for header_input
	//$action_base = $CONFIG->pluginspath . 'thewire/actions';
	//elgg_register_action("header_input", "$action_base/add.php");

	if (elgg_is_active_plugin('search')) {
		//elgg_unextend_view('page/elements/header', 'search/search_box');
		//elgg_extend_view('page/elements/topbar', 'search/search_box');
	}

	//elgg_register_plugin_hook_handler('register', 'menu:composer', 'ggouv_theme_composer_menu_handler');

	//elgg_unregister_menu_item('footer', 'report_this');

	// Want ggouv logo present, not Elgg's

	// provide link on @user and !group
	//$CONFIG->mentions_user_match_regexp = '/[\b]?@([\p{L}\p{M}_\.0-9]+)[\b]?/iu';
	//$CONFIG->mentions_group_match_regexp = '/[\b]?!([\p{L}\p{M}_\.0-9]+)[\b]?/iu';
	//register_plugin_hook('output', 'page', 'mentions_user_rewrite');
	//register_plugin_hook('output', 'page', 'mentions_group_rewrite');



}

function ggouv_custom_page_setup() {
	global $CONFIG, $fb;

	elgg_unregister_menu_item('topbar', 'elgg_logo');
	elgg_unregister_menu_item('topbar', 'profile');
	elgg_unregister_menu_item('topbar', 'dashboard');
	elgg_unregister_menu_item('topbar', 'friends');
	elgg_unregister_menu_item('topbar', 'usersettings');
	elgg_unregister_menu_item('topbar', 'logout');

	elgg_register_menu_item('topbar', array(
		'name' => 'logo',
		'href' => elgg_get_site_url(),
		'text' => "<span class='logoGreen'>&nabla;</span><span class='logoRed'>&nabla;</span><span class='logoWhite'>&nabla;</span>",
		'priority' => 1,
	));

	$user = elgg_get_logged_in_user_entity();
	$class_html_char = array('ggouv-menu-item-html-char');
	if ($user) {

// profil icon for dashboard
		$icon_url = $user->getIconURL('small');
		$title = elgg_echo('dashboard');
		elgg_register_menu_item('topbar', array(
			'name' => 'dashboard',
			'href' => elgg_get_site_url() . 'dashboard',
			'itemClass' => array('elgg-parent-menu'),
			'text' => "<img src=\"$icon_url\" alt=\"$user->name\" title=\"$title\" />",
			'priority' => 100,
		));

// @ for user profile, friends, collections, search user(@todo)... sub menu at page/elements/ggouv-sub-menu.php
		$sub_menu = '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix"><li>Profile</li></ul>';
		elgg_register_menu_item('topbar', array(
			'name' => 'at',
			'href' => '#at',
			'itemClass' => array('ggouv-menu-item-html-char','elgg-parent-menu'),
			'text' => '@',
			'priority' => 200,
		));

// groups
		elgg_register_menu_item('topbar', array(
			'name' => 'groups',
			'href' => '#groups',
			'itemClass' => array('ggouv-menu-item-html-char','elgg-parent-menu'),
			'text' => '!',
			'priority' => 400,
		));


		elgg_register_menu_item('topbar', array(
			'name' => 'usersettings',
			'href' => "settings/user/{$user->username}",
			'text' => '<span class="ggouv-icons ggouv-icon-settings"></span>',
			'priority' => 500,
			'section' => 'alt',
		));

		elgg_register_menu_item('topbar', array(
			'name' => 'logout',
			'href' => "action/logout",
			'text' => '<span class="ggouv-icons ggouv-icon-logout"></span>',
			'title' => elgg_echo('logout'),
			'is_action' => TRUE,
			'priority' => 1000,
			'section' => 'alt',
		));
	}

}

function mentions_user_rewrite($hook, $entity_type, $returnvalue, $params) {
	global $CONFIG;

	$returnvalue = preg_replace_callback($CONFIG->mentions_user_match_regexp,
		create_function(
			'$matches',
			'
				global $CONFIG;
				if ($user = get_user_by_username($matches[1])) {
					return "<a href=\"{$user->getURL()}\">{$matches[0]}</a>";
				} else {
					return $matches[0];
				}
			'
	), $returnvalue);

	return $returnvalue;
}

function mentions_group_rewrite($hook, $entity_type, $returnvalue, $params) {
	global $CONFIG;

	$returnvalue = preg_replace_callback($CONFIG->mentions_group_match_regexp,
		create_function(
			'$matches',
			'
				global $CONFIG;
				$db_prefix = elgg_get_config("dbprefix");
				$query = "SELECT * from {$CONFIG->dbprefix}groups_entity where name = \'{$matches[1]}\'";
				$dt = get_data($query, "entity_row_to_elggstar");
				if (count($dt) === 1) {
					return "<a href=\"groups/profile/{$dt[0]->guid}/{$matches[1]}\">{$matches[0]}</a>";
				} elseif (count($dt) > 1) {
					return "<a href=\"groups/profile/xxxx/{$matches[1]}\">{$matches[0]}</a>";
				} else {
					return $matches[0];
				}
			'
	), $returnvalue);

	return $returnvalue;
}