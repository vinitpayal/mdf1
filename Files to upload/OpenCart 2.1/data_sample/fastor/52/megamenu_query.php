<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["megamenu_module"] = array (
  0 => 
  array (
    'module_id' => 0,
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '0',
    'sort_order' => 1,
    'orientation' => '0',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      1 => '',
      2 => '',
    ),
    'home_text' => 
    array (
      1 => '',
      2 => '',
    ),
    'full_width' => '1',
    'home_item' => 'disabled',
    'animation' => 'shift-up',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
);
 
$this->model_setting_setting->editSetting( "megamenu", $output );

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_modules`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_links`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`module_id` int(11) NOT NULL DEFAULT '0',
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`label` text,
		`label_text_color` text,
		`label_background_color` text,
		`custom_class` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`display_on_mobile` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`submenu_background` text,
		`submenu_background_position` text,
		`submenu_background_repeat` text,
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_modules` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_links` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		`name_for_autocomplete` text,
		`url` text,
		`label` text,
		`label_text` text,
		`label_background` text,
		`image` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `custom_class`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (25, 0, 18, 5, '', 'a:2:{i:1;s:6:\"Banner\";i:" . $language_id . ";s:6:\"Banner\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 6, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:221:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/shoes2/banner-women.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;float: right;margin: -30px -45px -40px 0px;position: relative&quot;&gt;&lt;/a&gt;\";i:" . $language_id . ";s:221:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/shoes2/banner-women.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;float: right;margin: -30px -45px -40px 0px;position: relative&quot;&gt;&lt;/a&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (24, 0, 18, 4, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 6, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:3484:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Shop by category&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Athletic Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Casual Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clogs and Slides&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Narrow Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Slippers&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Winter Boots&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sandals&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6 with-border-left&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Brands&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Adidas&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;New Balance&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Nike&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Reebok&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot; class=&quot;button shoes2-small-button mobile-disabled&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:3484:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Shop by category&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Athletic Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Casual Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clogs and Slides&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Narrow Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Slippers&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Winter Boots&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sandals&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6 with-border-left&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Brands&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Adidas&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;New Balance&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Nike&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Reebok&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot; class=&quot;button shoes2-small-button mobile-disabled&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (17, 0, 0, 0, 'catalog/shoes2/men.png', 'a:2:{i:1;s:3:\"Men\";i:" . $language_id . ";s:3:\"Men\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, 'catalog/shoes2/bg-women.png', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (18, 0, 0, 3, 'catalog/shoes2/women.png', 'a:2:{i:1;s:5:\"Women\";i:" . $language_id . ";s:5:\"Women\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"NEW\";i:" . $language_id . ";s:3:\"NEW\";}', '#fff', '#f35e16', '', 0, 0, 0, 0, '100%', 0, 'catalog/shoes2/bg-men.png', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (19, 0, 0, 6, 'catalog/shoes2/kids.png', 'a:2:{i:1;s:4:\"Kids\";i:" . $language_id . ";s:4:\"Kids\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (20, 0, 0, 7, '', 'a:2:{i:1;s:4:\"Sale\";i:" . $language_id . ";s:4:\"Sale\";}', 'index.php?route=product/special', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"HOT\";i:" . $language_id . ";s:3:\"HOT\";}', '#000', '#97e524', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (21, 0, 0, 8, '', 'a:2:{i:1;s:15:\"Latest products\";i:" . $language_id . ";s:15:\"Latest products\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (22, 0, 17, 1, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 6, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:3484:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Shop by category&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Athletic Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Casual Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clogs and Slides&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Narrow Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Slippers&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Winter Boots&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sandals&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6 with-border-left&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Brands&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Adidas&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;New Balance&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Nike&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Reebok&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot; class=&quot;button shoes2-small-button mobile-disabled&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:3484:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Shop by category&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Athletic Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Casual Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clogs and Slides&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Narrow Shoes&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Slippers&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Winter Boots&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sandals&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6 with-border-left&quot;&gt;\r\n          &lt;div class=&quot;static-menu&quot; style=&quot;position: relative;margin-bottom: -20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;main-menu&quot;&gt;Brands&lt;/a&gt;\r\n                              &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Adidas&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;New Balance&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Nike&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot;&gt;Reebok&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/manufacturer&quot; class=&quot;button shoes2-small-button mobile-disabled&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (23, 0, 17, 2, '', 'a:2:{i:1;s:6:\"Banner\";i:" . $language_id . ";s:6:\"Banner\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 6, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:219:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/shoes2/banner-men.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;float: right;margin: -30px -45px -40px 0px;position: relative&quot;&gt;&lt;/a&gt;\";i:" . $language_id . ";s:219:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/shoes2/banner-men.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;float: right;margin: -30px -45px -40px 0px;position: relative&quot;&gt;&lt;/a&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>