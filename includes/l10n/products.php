<?php
	$mozilla['en']->name			            = 'Mozilla';
	$mozilla['en']->version			            = '1.7.13';
	$mozilla['en']->releaseNotes	        	= 'http://www.mozilla.com/releases/mozilla1.7.13/';
	$mozilla['en']->baseDownload	        	= 'http://download.mozilla.org/?lang=en-US&amp;product=suite-1.7.13&amp;os=';
	$mozilla['en']->downloads['win32']      	= array('size' => 12031696, 'link' => 'win');
	$mozilla['en']->downloads['linux']      	= array('size' => 13577033, 'link' => 'linux');
	$mozilla['en']->downloads['macosx']     	= array('size' => 14265094, 'link' => 'osx');
	$mozilla['en']->downloads['contrib']    	= array('size' => 0, 'link' => 'http://ftp.eu.mozilla.org/pub/mozilla.org/mozilla/releases/mozilla1.7.13/contrib/');

	$firefox['en']->name	    	        	= 'Firefox';
	$firefox['en']->version	    	        	= '1.5.0.6'; // Firefox
	$firefox['en']->releaseNotes	        	= 'http://www.mozilla.com/products/firefox/releases/'.$firefox['en']->version.'.html';
	$firefox['en']->baseDownload	        	= 'http://download.mozilla.org/?lang=en-GB&amp;product=firefox-'.$firefox['en']->version.'&amp;os=';
	$firefox['en']->downloads['win32']      	= array('size' => 5124840, 'link' => 'win');
	$firefox['en']->downloads['linux']      	= array('size' => 8469737, 'link' => 'linux');
	$firefox['en']->downloads['macosx']     	= array('size' => 16833512, 'link' => 'osx');
	$firefox['en']->downloads['contrib']    	= array('size' => 0, 'link' => 'http://ftp.eu.mozilla.org/pub/mozilla.org/firefox/releases/'.$firefox['en']->version.'/contrib/');

	$thunderbird['en']->name	            	= 'Thunderbird';
	$thunderbird['en']->version	            	= '1.5.0.5'; // Thunderbird
	$thunderbird['en']->releaseNotes        	= 'http://www.mozilla.com/thunderbird/releases/'.$thunderbird['en']->version.'.html';
	$thunderbird['en']->baseDownload        	= 'http://download.mozilla.org/?lang=en-GB&amp;product=thunderbird-'.$thunderbird['en']->version.'&amp;os=';
	$thunderbird['en']->downloads['win32']  	= array('size' => 6033720, 'link' => 'win');
	$thunderbird['en']->downloads['linux']  	= array('size' => 10366456, 'link' => 'linux');
	$thunderbird['en']->downloads['macosx']	    = array('size' => 18570612, 'link' => 'osx');
	$thunderbird['en']->downloads['contrib']    = array('size' => 0, 'link' => 'http://ftp.eu.mozilla.org/pub/mozilla.org/thunderbird/releases/'.$thunderbird['en']->version.'/contrib/');	

	$camino['en']->name			                = 'Camino';
	$camino['en']->version		            	= '1.0';
	$camino['en']->releaseNotes     	    	= 'http://www.caminobrowser.org/releases/1.0.php';
	$camino['en']->baseDownload     	    	= 'http://www.caminobrowser.org/download/releases/1.0-MultiLang/';
	$camino['en']->downloads['macosx']  	    = array('size' => 8127940, 'link' => '');
?>
