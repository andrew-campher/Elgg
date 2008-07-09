<?php
	/**
	 * Elgg OpenDD aggregator
	 * 
	 * @package ElggOpenDD
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */	

	$limit = get_input("limit", 10);
	$offset = get_input("offset", 0);
	
	$context = get_context();
	
	set_context('search');
	$objects = list_entities('object','oddfeed', page_owner(), $limit, false);
		
	set_context($context);
	
	$body = elgg_view_layout('one_column', $objects);
	
	page_draw(elgg_echo("opendd:feeds"), $body);
?>