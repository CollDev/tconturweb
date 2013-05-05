/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    var ckeditor_folder = '/lib/ckeditor';
    config.filebrowserBrowseUrl      = ckeditor_folder + '/browse.php?type=files';
    config.filebrowserImageBrowseUrl = ckeditor_folder + '/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = ckeditor_folder + '/browse.php?type=flash';
    config.filebrowserUploadUrl      = ckeditor_folder + '/upload.php?type=files';
    config.filebrowserImageUploadUrl = ckeditor_folder + '/upload.php?type=images';
    config.filebrowserFlashUploadUrl = ckeditor_folder + '/upload.php?type=flash';
};
