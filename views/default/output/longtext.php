<?php
/**
 * Elgg display long text
 * Displays a large amount of text, with new lines converted to line breaks
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['value'] The text to display
 * @uses $vars['parse_urls'] Whether to turn urls into links. Default is true.
 * @uses $vars['class']
 */

$class = 'elgg-output elgg-output-longtext markdown-body';
$additional_class = elgg_extract('class', $vars, '');
if ($additional_class) {
	$vars['class'] = "$class $additional_class";
} else {
	$vars['class'] = $class;
}

$parse_urls = elgg_extract('parse_urls', $vars, false);
unset($vars['parse_urls']);

$text = $vars['value'];
unset($vars['value']);

if ($parse_urls) {
	$text = parse_urls($text);
}

/*$text = filter_tags($text);

$text = autop($text);*/

$text = markdown_wiki_parse_link($text);

$attributes = elgg_format_attributes($vars);

echo "<script type=\"text/template\" style=\"display:none\" $attributes>$text</script>";
