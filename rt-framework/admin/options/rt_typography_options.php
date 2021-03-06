<?php

asort($this->google_fonts);//sort google fonts by name

$options = array (
    

			array(
				   "name" => __("Google Fonts",'rt_theme_admin'),
				   "desc" => __("You can turn on/off google font replacement plugin",'rt_theme_admin'),
				   "id" => THEMESLUG."_google_fonts",
				   "default" => "checked",				   
				   "type" => "checkbox"),
			
			array(
				   "name" => __("Cufon Fonts",'rt_theme_admin'),
				   "desc" => __("You can turn on/off cufon font replacement plugin",'rt_theme_admin'),
				   "id" => THEMESLUG."_cufon_fonts",				   
				   "type" => "checkbox"),		 

			array(
				   "name" => __("GOOGLE FONTS",'rt_theme_admin'), 
				   "type" => "heading"), 
			

			array(
				   "name" => __("Select Body Font Family",'rt_theme_admin'),
				   "desc" => __("Select a font family for body texts",'rt_theme_admin'),
				   "id" => THEMESLUG."_google_fonts_body",
				   "options" => $this->google_fonts,				   
				   "default"=>"Droid+Sans:400,700&v2",
				   "font-demo" => "true",
				   "font-system" => "google",
				   "class" => "fontlist",
				   "select"=>__("Select Font",'rt_theme_admin'),
				   "hr" => "true", 
				   "type" => "select"),

			array(
				   "name" => __("Select Heading Font",'rt_theme_admin'),
				   "desc" => __("Select a google font for headings",'rt_theme_admin'),
				   "id" => THEMESLUG."_google_fonts_heading",
				   "options" => $this->google_fonts,
				   "default"=>"Oswald&v1",
				   "font-demo" => "true",
				   "font-system" => "google",
				   "class" => "fontlist",
				   "select"=>__("Select Font",'rt_theme_admin'),
				   "hr" => "true",  
				   "type" => "select"),			
	
			array(
				   "name" => __("Select Menu Font",'rt_theme_admin'),
				   "desc" => __("Select a google font for menu",'rt_theme_admin'),
				   "id" => THEMESLUG."_google_fonts_menu",
				   "default"=>"Oswald&v1",
				   "options" => $this->google_fonts,
				   "font-demo" => "true",
				   "select"=>__("Select Font",'rt_theme_admin'),
				   "font-system" => "google",
				   "class" => "fontlist",
				   "type" => "select"),			

 
			array(
				   "name" => __("CUFON FONTS",'rt_theme_admin'), 
				   "type" => "heading"),
			
			array(
				   "name" => __("Select Cufon Fonts (Headings)",'rt_theme_admin'),
				   "desc" => __("Please choose a font for headings.",'rt_theme_admin'),
				   "id" => THEMESLUG."_cufon_font_file_heading",
				   "options" => $this->fonts,
				   "font-demo" => "true",
				   "select"=>__("Select Font",'rt_theme_admin'),
				   "font-system" => "cufon",
				   "class" => "fontlist",
				   "hr" => "true",
				   "type" => "select"),
		
			array(
				   "name" => __("Select Cufon Fonts  (Menu)",'rt_theme_admin'),
				   "desc" => __("Please choose a font for headings.",'rt_theme_admin'),
				   "id" => THEMESLUG."_cufon_font_file_menu",
				   "options" => $this->fonts,
				   "select"=>__("Select Font",'rt_theme_admin'),
				   "font-demo" => "true",
				   "font-system" => "cufon",
				   "class" => "fontlist",
				   "type" => "select"),
			
			array(
				   "name" => __("STANDART FONTS",'rt_theme_admin'), 
				   "type" => "heading"),
			 

			array(
				   "name" => __("Select Body Font Family",'rt_theme_admin'),
				   "desc" => __("Select a font family for body texts",'rt_theme_admin'),
				   "id" => THEMESLUG."_body_font_family",
				   "options" =>	array(
									"Arial, Helvetica, sans-serif" => "Arial, Helvetica, sans-serif",
									"'Arial Black', Gadget, sans-serif" => "'Arial Black', Gadget, sans-serif",
									"'Bookman Old Style', serif" => "'Bookman Old Style', serif",
									"'Comic Sans MS', cursive" => "'Comic Sans MS', cursive",
									"Courier, monospace" => "Courier, monospace", 
									"Garamond, serif" => "Garamond, serif",
									"Georgia, serif" => "Georgia, serif",
									"Impact, Charcoal, sans-serif" => "Impact, Charcoal, sans-serif",
									"'Lucida Console', Monaco, monospace" => "'Lucida Console', Monaco, monospace",
									"'Lucida Sans Unicode', 'Lucida Grande', sans-serif" => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif",
									"'MS Sans Serif', Geneva, sans-serif" => "'MS Sans Serif', Geneva, sans-serif",
									"'MS Serif', 'New York', sans-serif" => "'MS Serif', 'New York', sans-serif",
									"'Palatino Linotype', 'Book Antiqua', Palatino, serif" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif",
									"Tahoma, Geneva, sans-serif" => "Tahoma, Geneva, sans-serif",
									"'Times New Roman', Times, serif" => "'Times New Roman', Times, serif",
									"'Trebuchet MS', Helvetica, sans-serif" => "'Trebuchet MS', Helvetica, sans-serif",
									"Verdana, Geneva, sans-serif" => "Verdana, Geneva, sans-serif",
									"Webdings, sans-serif" => "Webdings, sans-serif",
									"Wingdings, 'Zapf Dingbats', sans-serif" => "Wingdings, 'Zapf Dingbats', sans-serif"
							    ),
				   "default"=>"Arial, Helvetica, sans-serif",
				   "dont_save"=>"true",
				   "help" => "true",
				   "type" => "select"),							



			array(
				   "name" => __("FONT SIZES",'rt_theme_admin'), 
				   "type" => "heading"),

			array(
				   "name" => __("Body Font Size (px)",'rt_theme_admin'),
				   "id" => THEMESLUG."_body_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"36",
				   "default"=>"12",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),
			
			array(
				   "name" => __("Menu Font Size (px)",'rt_theme_admin'),
				   "id" => THEMESLUG."_menu_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"24",
				   "default"=>"14",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),

			array(
				   "name" => __("Home Page Box Title Font Size (px)",'rt_theme_admin'),
				   "id" => THEMESLUG."_box_title_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"60",
				   "default"=>"18",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),     			  

			array(
				   "name" => __("Heading Font Size (H1)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h1_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"22",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),

			array(
				   "name" => __("Heading Font Size (H2)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h2_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"20",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),

			array(
				   "name" => __("Heading Font Size (H3)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h3_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"18",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),

			array(
				   "name" => __("Heading Font Size (H4)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h4_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"16",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),

			array(
				   "name" => __("Heading Font Size (H5)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h5_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"14",
				   "dont_save"=>"true",
				   "type" => "rangeinput"), 			

			array(
				   "name" => __("Heading Font Size (H6)",'rt_theme_admin'),
				   "id" => THEMESLUG."_h6_font_size",
				   "hr" => "true",
				   "min"=>"10",
				   "max"=>"100",
				   "default"=>"13",
				   "dont_save"=>"true",
				   "type" => "rangeinput"),
			
); 
?>