/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
		config.toolbar = [					
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
			{ name: 'paragraph',  items: [ 'NumberedList', 'BulletedList' ] },
			{ name: 'links', items: [ 'Link', 'Unlink'] },
// 			{ name: 'document', items: [ 'Source'] },
			{ name: 'clipboard', items: ['Undo', 'Redo' ] }			
		];
		
		config.autoGrow_onStartup = true;
		
		config.height = '250px';
		
//		config.autoGrow_maxHeight = 400;
		
		config.autoGrow_minHeight = 50;
	
};
