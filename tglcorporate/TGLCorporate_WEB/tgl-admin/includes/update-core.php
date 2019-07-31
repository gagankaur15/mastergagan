<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
WP_ADMIN_DIR_NAME.'/import-b2.php',
WP_ADMIN_DIR_NAME.'/import-blogger.php',
WP_ADMIN_DIR_NAME.'/import-greymatter.php',
WP_ADMIN_DIR_NAME.'/import-livejournal.php',
WP_ADMIN_DIR_NAME.'/import-mt.php',
WP_ADMIN_DIR_NAME.'/import-rss.php',
WP_ADMIN_DIR_NAME.'/import-textpattern.php',
WP_ADMIN_DIR_NAME.'/quicktags.js',
'wp-images/fade-butt.png',
'wp-images/get-firefox.png',
'wp-images/header-shadow.png',
'wp-images/smilies',
'wp-images/wp-small.png',
'wp-images/wpminilogo.png',
'wp.php',
// 2.0.8
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
WP_ADMIN_DIR_NAME.'/edit-form-ajax-cat.php',
WP_ADMIN_DIR_NAME.'/execute-pings.php',
WP_ADMIN_DIR_NAME.'/inline-uploading.php',
WP_ADMIN_DIR_NAME.'/link-categories.php',
WP_ADMIN_DIR_NAME.'/list-manipulation.js',
WP_ADMIN_DIR_NAME.'/list-manipulation.php',
WP_INCLUDE_DIR_NAME.'/comment-functions.php',
WP_INCLUDE_DIR_NAME.'/feed-functions.php',
WP_INCLUDE_DIR_NAME.'/functions-compat.php',
WP_INCLUDE_DIR_NAME.'/functions-formatting.php',
WP_INCLUDE_DIR_NAME.'/functions-post.php',
WP_INCLUDE_DIR_NAME.'/js/dbx-key.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/autosave/langs/cs.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/autosave/langs/sv.js',
WP_INCLUDE_DIR_NAME.'/links.php',
WP_INCLUDE_DIR_NAME.'/pluggable-functions.php',
WP_INCLUDE_DIR_NAME.'/template-functions-author.php',
WP_INCLUDE_DIR_NAME.'/template-functions-category.php',
WP_INCLUDE_DIR_NAME.'/template-functions-general.php',
WP_INCLUDE_DIR_NAME.'/template-functions-links.php',
WP_INCLUDE_DIR_NAME.'/template-functions-post.php',
WP_INCLUDE_DIR_NAME.'/wp-l10n.php',
// 2.2
WP_ADMIN_DIR_NAME.'/cat-js.php',
WP_ADMIN_DIR_NAME.'/import/b2.php',
WP_INCLUDE_DIR_NAME.'/js/autosave-js.php',
WP_INCLUDE_DIR_NAME.'/js/list-manipulation-js.php',
WP_INCLUDE_DIR_NAME.'/js/wp-ajax-js.php',
// 2.3
WP_ADMIN_DIR_NAME.'/admin-db.php',
WP_ADMIN_DIR_NAME.'/cat.js',
WP_ADMIN_DIR_NAME.'/categories.js',
WP_ADMIN_DIR_NAME.'/custom-fields.js',
WP_ADMIN_DIR_NAME.'/dbx-admin-key.js',
WP_ADMIN_DIR_NAME.'/edit-comments.js',
WP_ADMIN_DIR_NAME.'/install-rtl.css',
WP_ADMIN_DIR_NAME.'/install.css',
WP_ADMIN_DIR_NAME.'/upgrade-schema.php',
WP_ADMIN_DIR_NAME.'/upload-functions.php',
WP_ADMIN_DIR_NAME.'/upload-rtl.css',
WP_ADMIN_DIR_NAME.'/upload.css',
WP_ADMIN_DIR_NAME.'/upload.js',
WP_ADMIN_DIR_NAME.'/users.js',
WP_ADMIN_DIR_NAME.'/widgets-rtl.css',
WP_ADMIN_DIR_NAME.'/widgets.css',
WP_ADMIN_DIR_NAME.'/xfn.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/license.html',
// 2.5
WP_ADMIN_DIR_NAME.'/css/upload.css',
WP_ADMIN_DIR_NAME.'/images/box-bg-left.gif',
WP_ADMIN_DIR_NAME.'/images/box-bg-right.gif',
WP_ADMIN_DIR_NAME.'/images/box-bg.gif',
WP_ADMIN_DIR_NAME.'/images/box-butt-left.gif',
WP_ADMIN_DIR_NAME.'/images/box-butt-right.gif',
WP_ADMIN_DIR_NAME.'/images/box-butt.gif',
WP_ADMIN_DIR_NAME.'/images/box-head-left.gif',
WP_ADMIN_DIR_NAME.'/images/box-head-right.gif',
WP_ADMIN_DIR_NAME.'/images/box-head.gif',
WP_ADMIN_DIR_NAME.'/images/heading-bg.gif',
WP_ADMIN_DIR_NAME.'/images/login-bkg-bottom.gif',
WP_ADMIN_DIR_NAME.'/images/login-bkg-tile.gif',
WP_ADMIN_DIR_NAME.'/images/notice.gif',
WP_ADMIN_DIR_NAME.'/images/toggle.gif',
WP_ADMIN_DIR_NAME.'/includes/upload.php',
WP_ADMIN_DIR_NAME.'/js/dbx-admin-key.js',
WP_ADMIN_DIR_NAME.'/js/link-cat.js',
WP_ADMIN_DIR_NAME.'/profile-update.php',
WP_ADMIN_DIR_NAME.'/templates.php',
WP_INCLUDE_DIR_NAME.'/images/wlw/WpComments.png',
WP_INCLUDE_DIR_NAME.'/images/wlw/WpIcon.png',
WP_INCLUDE_DIR_NAME.'/images/wlw/WpWatermark.png',
WP_INCLUDE_DIR_NAME.'/js/dbx.js',
WP_INCLUDE_DIR_NAME.'/js/fat.js',
WP_INCLUDE_DIR_NAME.'/js/list-manipulation.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/langs/en.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/autosave/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/autosave/langs',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/directionality/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/directionality/langs',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/inlinepopups/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/inlinepopups/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/inlinepopups/jscripts',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/jscripts',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/langs',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/css/spellchecker.css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/langs',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker/tinyspell.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/langs',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/wordpress.css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wphelp',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/images',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/jscripts',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/langs',
// 2.5.1
WP_INCLUDE_DIR_NAME.'/js/tinymce/tiny_mce_gzip.php',
// 2.6
WP_ADMIN_DIR_NAME.'/bookmarklet.php',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.dimensions.min.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/popups.css',
WP_INCLUDE_DIR_NAME.'/js/wp-ajax.js',
// 2.7
WP_ADMIN_DIR_NAME.'/css/press-this-ie-rtl.css',
WP_ADMIN_DIR_NAME.'/css/press-this-ie.css',
WP_ADMIN_DIR_NAME.'/css/upload-rtl.css',
WP_ADMIN_DIR_NAME.'/edit-form.php',
WP_ADMIN_DIR_NAME.'/images/comment-pill.gif',
WP_ADMIN_DIR_NAME.'/images/comment-stalk-classic.gif',
WP_ADMIN_DIR_NAME.'/images/comment-stalk-fresh.gif',
WP_ADMIN_DIR_NAME.'/images/comment-stalk-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/del.png',
WP_ADMIN_DIR_NAME.'/images/gear.png',
WP_ADMIN_DIR_NAME.'/images/media-button-gallery.gif',
WP_ADMIN_DIR_NAME.'/images/media-buttons.gif',
WP_ADMIN_DIR_NAME.'/images/postbox-bg.gif',
WP_ADMIN_DIR_NAME.'/images/tab.png',
WP_ADMIN_DIR_NAME.'/images/tail.gif',
WP_ADMIN_DIR_NAME.'/js/forms.js',
WP_ADMIN_DIR_NAME.'/js/upload.js',
WP_ADMIN_DIR_NAME.'/link-import.php',
WP_INCLUDE_DIR_NAME.'/images/audio.png',
WP_INCLUDE_DIR_NAME.'/images/css.png',
WP_INCLUDE_DIR_NAME.'/images/default.png',
WP_INCLUDE_DIR_NAME.'/images/doc.png',
WP_INCLUDE_DIR_NAME.'/images/exe.png',
WP_INCLUDE_DIR_NAME.'/images/html.png',
WP_INCLUDE_DIR_NAME.'/images/js.png',
WP_INCLUDE_DIR_NAME.'/images/pdf.png',
WP_INCLUDE_DIR_NAME.'/images/swf.png',
WP_INCLUDE_DIR_NAME.'/images/tar.png',
WP_INCLUDE_DIR_NAME.'/images/text.png',
WP_INCLUDE_DIR_NAME.'/images/video.png',
WP_INCLUDE_DIR_NAME.'/images/zip.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/tiny_mce_config.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/tiny_mce_ext.js',
// 2.8
WP_ADMIN_DIR_NAME.'/js/users.js',
WP_INCLUDE_DIR_NAME.'/js/swfupload/plugins/swfupload.documentready.js',
WP_INCLUDE_DIR_NAME.'/js/swfupload/plugins/swfupload.graceful_degradation.js',
WP_INCLUDE_DIR_NAME.'/js/swfupload/swfupload_f9.swf',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/autosave',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/utils/mclayer.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/wordpress.css',
// 2.8.5
WP_ADMIN_DIR_NAME.'/import/btt.php',
WP_ADMIN_DIR_NAME.'/import/jkw.php',
// 2.9
WP_ADMIN_DIR_NAME.'/js/page.dev.js',
WP_ADMIN_DIR_NAME.'/js/page.js',
WP_ADMIN_DIR_NAME.'/js/set-post-thumbnail-handler.dev.js',
WP_ADMIN_DIR_NAME.'/js/set-post-thumbnail-handler.js',
WP_ADMIN_DIR_NAME.'/js/slug.dev.js',
WP_ADMIN_DIR_NAME.'/js/slug.js',
WP_INCLUDE_DIR_NAME.'/gettext.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/js',
WP_INCLUDE_DIR_NAME.'/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
WP_ADMIN_DIR_NAME.'/css/mu-rtl.css',
WP_ADMIN_DIR_NAME.'/css/mu.css',
WP_ADMIN_DIR_NAME.'/images/site-admin.png',
WP_ADMIN_DIR_NAME.'/includes/mu.php',
WP_ADMIN_DIR_NAME.'/wpmu-admin.php',
WP_ADMIN_DIR_NAME.'/wpmu-blogs.php',
WP_ADMIN_DIR_NAME.'/wpmu-edit.php',
WP_ADMIN_DIR_NAME.'/wpmu-options.php',
WP_ADMIN_DIR_NAME.'/wpmu-themes.php',
WP_ADMIN_DIR_NAME.'/wpmu-upgrade-site.php',
WP_ADMIN_DIR_NAME.'/wpmu-users.php',
WP_INCLUDE_DIR_NAME.'/images/wordpress-mu.png',
WP_INCLUDE_DIR_NAME.'/wpmu-default-filters.php',
WP_INCLUDE_DIR_NAME.'/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
WP_ADMIN_DIR_NAME.'/categories.php',
WP_ADMIN_DIR_NAME.'/edit-category-form.php',
WP_ADMIN_DIR_NAME.'/edit-page-form.php',
WP_ADMIN_DIR_NAME.'/edit-pages.php',
WP_ADMIN_DIR_NAME.'/images/admin-header-footer.png',
WP_ADMIN_DIR_NAME.'/images/browse-happy.gif',
WP_ADMIN_DIR_NAME.'/images/ico-add.png',
WP_ADMIN_DIR_NAME.'/images/ico-close.png',
WP_ADMIN_DIR_NAME.'/images/ico-edit.png',
WP_ADMIN_DIR_NAME.'/images/ico-viewpage.png',
WP_ADMIN_DIR_NAME.'/images/fav-top.png',
WP_ADMIN_DIR_NAME.'/images/screen-options-left.gif',
WP_ADMIN_DIR_NAME.'/images/wp-logo-vs.gif',
WP_ADMIN_DIR_NAME.'/images/wp-logo.gif',
WP_ADMIN_DIR_NAME.'/import',
WP_ADMIN_DIR_NAME.'/js/wp-gears.dev.js',
WP_ADMIN_DIR_NAME.'/js/wp-gears.js',
WP_ADMIN_DIR_NAME.'/options-misc.php',
WP_ADMIN_DIR_NAME.'/page-new.php',
WP_ADMIN_DIR_NAME.'/page.php',
WP_ADMIN_DIR_NAME.'/rtl.css',
WP_ADMIN_DIR_NAME.'/rtl.dev.css',
WP_ADMIN_DIR_NAME.'/update-links.php',
WP_ADMIN_DIR_NAME.'/wp-admin.css',
WP_ADMIN_DIR_NAME.'/wp-admin.dev.css',
WP_INCLUDE_DIR_NAME.'/js/codepress',
WP_INCLUDE_DIR_NAME.'/js/codepress/engines/khtml.js',
WP_INCLUDE_DIR_NAME.'/js/codepress/engines/older.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/autocomplete.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/autocomplete.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/interface.js',
WP_INCLUDE_DIR_NAME.'/js/scriptaculous/prototype.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/wp-tinymce.js',
// 3.1
WP_ADMIN_DIR_NAME.'/edit-attachment-rows.php',
WP_ADMIN_DIR_NAME.'/edit-link-categories.php',
WP_ADMIN_DIR_NAME.'/edit-link-category-form.php',
WP_ADMIN_DIR_NAME.'/edit-post-rows.php',
WP_ADMIN_DIR_NAME.'/images/button-grad-active-vs.png',
WP_ADMIN_DIR_NAME.'/images/button-grad-vs.png',
WP_ADMIN_DIR_NAME.'/images/fav-arrow-vs-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/fav-arrow-vs.gif',
WP_ADMIN_DIR_NAME.'/images/fav-top-vs.gif',
WP_ADMIN_DIR_NAME.'/images/list-vs.png',
WP_ADMIN_DIR_NAME.'/images/screen-options-right-up.gif',
WP_ADMIN_DIR_NAME.'/images/screen-options-right.gif',
WP_ADMIN_DIR_NAME.'/images/visit-site-button-grad-vs.gif',
WP_ADMIN_DIR_NAME.'/images/visit-site-button-grad.gif',
WP_ADMIN_DIR_NAME.'/link-category.php',
WP_ADMIN_DIR_NAME.'/sidebar.php',
WP_INCLUDE_DIR_NAME.'/classes.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/blank.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/css/content.css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/img',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/safari',
// 3.2
WP_ADMIN_DIR_NAME.'/images/logo-login.gif',
WP_ADMIN_DIR_NAME.'/images/star.gif',
WP_ADMIN_DIR_NAME.'/js/list-table.dev.js',
WP_ADMIN_DIR_NAME.'/js/list-table.js',
WP_INCLUDE_DIR_NAME.'/default-embeds.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/help.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/more.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/toolbars.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/img/fm.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
WP_ADMIN_DIR_NAME.'/css/colors-classic-rtl.css',
WP_ADMIN_DIR_NAME.'/css/colors-classic-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/colors-fresh-rtl.css',
WP_ADMIN_DIR_NAME.'/css/colors-fresh-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/dashboard-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/dashboard.dev.css',
WP_ADMIN_DIR_NAME.'/css/global-rtl.css',
WP_ADMIN_DIR_NAME.'/css/global-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/global.css',
WP_ADMIN_DIR_NAME.'/css/global.dev.css',
WP_ADMIN_DIR_NAME.'/css/install-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/login-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/login.dev.css',
WP_ADMIN_DIR_NAME.'/css/ms.css',
WP_ADMIN_DIR_NAME.'/css/ms.dev.css',
WP_ADMIN_DIR_NAME.'/css/nav-menu-rtl.css',
WP_ADMIN_DIR_NAME.'/css/nav-menu-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/nav-menu.css',
WP_ADMIN_DIR_NAME.'/css/nav-menu.dev.css',
WP_ADMIN_DIR_NAME.'/css/plugin-install-rtl.css',
WP_ADMIN_DIR_NAME.'/css/plugin-install-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/plugin-install.css',
WP_ADMIN_DIR_NAME.'/css/plugin-install.dev.css',
WP_ADMIN_DIR_NAME.'/css/press-this-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/press-this.dev.css',
WP_ADMIN_DIR_NAME.'/css/theme-editor-rtl.css',
WP_ADMIN_DIR_NAME.'/css/theme-editor-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/theme-editor.css',
WP_ADMIN_DIR_NAME.'/css/theme-editor.dev.css',
WP_ADMIN_DIR_NAME.'/css/theme-install-rtl.css',
WP_ADMIN_DIR_NAME.'/css/theme-install-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/theme-install.css',
WP_ADMIN_DIR_NAME.'/css/theme-install.dev.css',
WP_ADMIN_DIR_NAME.'/css/widgets-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/widgets.dev.css',
WP_ADMIN_DIR_NAME.'/includes/internal-linking.php',
WP_INCLUDE_DIR_NAME.'/images/admin-bar-sprite-rtl.png',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.button.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.core.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.dialog.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.draggable.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.droppable.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.mouse.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.position.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.resizable.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.selectable.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.sortable.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.tabs.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui.widget.js',
WP_INCLUDE_DIR_NAME.'/js/l10n.dev.js',
WP_INCLUDE_DIR_NAME.'/js/l10n.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/img',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/img/wpicons.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'wp-rss.php',
// Don't delete, yet: 'wp-rdf.php',
// Don't delete, yet: 'wp-rss2.php',
// Don't delete, yet: 'wp-commentsrss2.php',
// Don't delete, yet: 'wp-atom.php',
// Don't delete, yet: 'wp-feed.php',
// 3.4
WP_ADMIN_DIR_NAME.'/images/gray-star.png',
WP_ADMIN_DIR_NAME.'/images/logo-login.png',
WP_ADMIN_DIR_NAME.'/images/star.png',
WP_ADMIN_DIR_NAME.'/index-extra.php',
WP_ADMIN_DIR_NAME.'/network/index-extra.php',
WP_ADMIN_DIR_NAME.'/user/index-extra.php',
WP_ADMIN_DIR_NAME.'/images/screenshots/admin-flyouts.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/coediting.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/drag-and-drop.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/help-screen.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/media-icon.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/new-feature-pointer.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/welcome-screen.png',
WP_INCLUDE_DIR_NAME.'/css/editor-buttons.css',
WP_INCLUDE_DIR_NAME.'/css/editor-buttons.dev.css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/blank.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/embedded.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/more_bug.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img/page_bug.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpgallery/img/gallery.png',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'wp-pass.php',
// Don't delete, yet: 'wp-register.php',
// 3.5
WP_ADMIN_DIR_NAME.'/gears-manifest.php',
WP_ADMIN_DIR_NAME.'/includes/manifest.php',
WP_ADMIN_DIR_NAME.'/images/archive-link.png',
WP_ADMIN_DIR_NAME.'/images/blue-grad.png',
WP_ADMIN_DIR_NAME.'/images/button-grad-active.png',
WP_ADMIN_DIR_NAME.'/images/button-grad.png',
WP_ADMIN_DIR_NAME.'/images/ed-bg-vs.gif',
WP_ADMIN_DIR_NAME.'/images/ed-bg.gif',
WP_ADMIN_DIR_NAME.'/images/fade-butt.png',
WP_ADMIN_DIR_NAME.'/images/fav-arrow-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/fav-arrow.gif',
WP_ADMIN_DIR_NAME.'/images/fav-vs.png',
WP_ADMIN_DIR_NAME.'/images/fav.png',
WP_ADMIN_DIR_NAME.'/images/gray-grad.png',
WP_ADMIN_DIR_NAME.'/images/loading-publish.gif',
WP_ADMIN_DIR_NAME.'/images/logo-ghost.png',
WP_ADMIN_DIR_NAME.'/images/logo.gif',
WP_ADMIN_DIR_NAME.'/images/menu-arrow-frame-rtl.png',
WP_ADMIN_DIR_NAME.'/images/menu-arrow-frame.png',
WP_ADMIN_DIR_NAME.'/images/menu-arrows.gif',
WP_ADMIN_DIR_NAME.'/images/menu-bits-rtl-vs.gif',
WP_ADMIN_DIR_NAME.'/images/menu-bits-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/menu-bits-vs.gif',
WP_ADMIN_DIR_NAME.'/images/menu-bits.gif',
WP_ADMIN_DIR_NAME.'/images/menu-dark-rtl-vs.gif',
WP_ADMIN_DIR_NAME.'/images/menu-dark-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/menu-dark-vs.gif',
WP_ADMIN_DIR_NAME.'/images/menu-dark.gif',
WP_ADMIN_DIR_NAME.'/images/required.gif',
WP_ADMIN_DIR_NAME.'/images/screen-options-toggle-vs.gif',
WP_ADMIN_DIR_NAME.'/images/screen-options-toggle.gif',
WP_ADMIN_DIR_NAME.'/images/toggle-arrow-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/toggle-arrow.gif',
WP_ADMIN_DIR_NAME.'/images/upload-classic.png',
WP_ADMIN_DIR_NAME.'/images/upload-fresh.png',
WP_ADMIN_DIR_NAME.'/images/white-grad-active.png',
WP_ADMIN_DIR_NAME.'/images/white-grad.png',
WP_ADMIN_DIR_NAME.'/images/widgets-arrow-vs.gif',
WP_ADMIN_DIR_NAME.'/images/widgets-arrow.gif',
WP_ADMIN_DIR_NAME.'/images/wpspin_dark.gif',
WP_INCLUDE_DIR_NAME.'/images/upload.png',
WP_INCLUDE_DIR_NAME.'/js/prototype.js',
WP_INCLUDE_DIR_NAME.'/js/scriptaculous',
WP_ADMIN_DIR_NAME.'/css/wp-admin-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/wp-admin.dev.css',
WP_ADMIN_DIR_NAME.'/css/media-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/media.dev.css',
WP_ADMIN_DIR_NAME.'/css/colors-classic.dev.css',
WP_ADMIN_DIR_NAME.'/css/customize-controls-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/customize-controls.dev.css',
WP_ADMIN_DIR_NAME.'/css/ie-rtl.dev.css',
WP_ADMIN_DIR_NAME.'/css/ie.dev.css',
WP_ADMIN_DIR_NAME.'/css/install.dev.css',
WP_ADMIN_DIR_NAME.'/css/colors-fresh.dev.css',
WP_INCLUDE_DIR_NAME.'/js/customize-base.dev.js',
WP_INCLUDE_DIR_NAME.'/js/json2.dev.js',
WP_INCLUDE_DIR_NAME.'/js/comment-reply.dev.js',
WP_INCLUDE_DIR_NAME.'/js/customize-preview.dev.js',
WP_INCLUDE_DIR_NAME.'/js/wplink.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tw-sack.dev.js',
WP_INCLUDE_DIR_NAME.'/js/wp-list-revisions.dev.js',
WP_INCLUDE_DIR_NAME.'/js/autosave.dev.js',
WP_INCLUDE_DIR_NAME.'/js/admin-bar.dev.js',
WP_INCLUDE_DIR_NAME.'/js/quicktags.dev.js',
WP_INCLUDE_DIR_NAME.'/js/wp-ajax-response.dev.js',
WP_INCLUDE_DIR_NAME.'/js/wp-pointer.dev.js',
WP_INCLUDE_DIR_NAME.'/js/hoverIntent.dev.js',
WP_INCLUDE_DIR_NAME.'/js/colorpicker.dev.js',
WP_INCLUDE_DIR_NAME.'/js/wp-lists.dev.js',
WP_INCLUDE_DIR_NAME.'/js/customize-loader.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.table-hotkeys.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.color.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.color.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.hotkeys.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/jquery.form.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/suggest.dev.js',
WP_ADMIN_DIR_NAME.'/js/xfn.dev.js',
WP_ADMIN_DIR_NAME.'/js/set-post-thumbnail.dev.js',
WP_ADMIN_DIR_NAME.'/js/comment.dev.js',
WP_ADMIN_DIR_NAME.'/js/theme.dev.js',
WP_ADMIN_DIR_NAME.'/js/cat.dev.js',
WP_ADMIN_DIR_NAME.'/js/password-strength-meter.dev.js',
WP_ADMIN_DIR_NAME.'/js/user-profile.dev.js',
WP_ADMIN_DIR_NAME.'/js/theme-preview.dev.js',
WP_ADMIN_DIR_NAME.'/js/post.dev.js',
WP_ADMIN_DIR_NAME.'/js/media-upload.dev.js',
WP_ADMIN_DIR_NAME.'/js/word-count.dev.js',
WP_ADMIN_DIR_NAME.'/js/plugin-install.dev.js',
WP_ADMIN_DIR_NAME.'/js/edit-comments.dev.js',
WP_ADMIN_DIR_NAME.'/js/media-gallery.dev.js',
WP_ADMIN_DIR_NAME.'/js/custom-fields.dev.js',
WP_ADMIN_DIR_NAME.'/js/custom-background.dev.js',
WP_ADMIN_DIR_NAME.'/js/common.dev.js',
WP_ADMIN_DIR_NAME.'/js/inline-edit-tax.dev.js',
WP_ADMIN_DIR_NAME.'/js/gallery.dev.js',
WP_ADMIN_DIR_NAME.'/js/utils.dev.js',
WP_ADMIN_DIR_NAME.'/js/widgets.dev.js',
WP_ADMIN_DIR_NAME.'/js/wp-fullscreen.dev.js',
WP_ADMIN_DIR_NAME.'/js/nav-menu.dev.js',
WP_ADMIN_DIR_NAME.'/js/dashboard.dev.js',
WP_ADMIN_DIR_NAME.'/js/link.dev.js',
WP_ADMIN_DIR_NAME.'/js/user-suggest.dev.js',
WP_ADMIN_DIR_NAME.'/js/postbox.dev.js',
WP_ADMIN_DIR_NAME.'/js/tags.dev.js',
WP_ADMIN_DIR_NAME.'/js/image-edit.dev.js',
WP_ADMIN_DIR_NAME.'/js/media.dev.js',
WP_ADMIN_DIR_NAME.'/js/customize-controls.dev.js',
WP_ADMIN_DIR_NAME.'/js/inline-edit-post.dev.js',
WP_ADMIN_DIR_NAME.'/js/categories.dev.js',
WP_ADMIN_DIR_NAME.'/js/editor.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/handlers.dev.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/wp-plupload.dev.js',
WP_INCLUDE_DIR_NAME.'/js/swfupload/handlers.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jcrop/jquery.Jcrop.dev.js',
WP_INCLUDE_DIR_NAME.'/js/jcrop/jquery.Jcrop.js',
WP_INCLUDE_DIR_NAME.'/js/jcrop/jquery.Jcrop.css',
WP_INCLUDE_DIR_NAME.'/js/imgareaselect/jquery.imgareaselect.dev.js',
WP_INCLUDE_DIR_NAME.'/css/wp-pointer.dev.css',
WP_INCLUDE_DIR_NAME.'/css/editor.dev.css',
WP_INCLUDE_DIR_NAME.'/css/jquery-ui-dialog.dev.css',
WP_INCLUDE_DIR_NAME.'/css/admin-bar-rtl.dev.css',
WP_INCLUDE_DIR_NAME.'/css/admin-bar.dev.css',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.clip.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.scale.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.blind.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.core.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.shake.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.fade.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.explode.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.slide.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.drop.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.highlight.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.bounce.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.pulsate.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.transfer.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.effects.fold.min.js',
WP_ADMIN_DIR_NAME.'/images/screenshots/captions-1.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/captions-2.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/flex-header-1.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/flex-header-2.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/flex-header-3.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/flex-header-media-library.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/theme-customizer.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/twitter-embed-1.png',
WP_ADMIN_DIR_NAME.'/images/screenshots/twitter-embed-2.png',
WP_ADMIN_DIR_NAME.'/js/utils.js',
WP_ADMIN_DIR_NAME.'/options-privacy.php',
'wp-app.php',
WP_INCLUDE_DIR_NAME.'/class-wp-atom-server.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
// 3.5.2
WP_INCLUDE_DIR_NAME.'/js/swfupload/swfupload-all.js',
// 3.6
WP_ADMIN_DIR_NAME.'/js/revisions-js.php',
WP_ADMIN_DIR_NAME.'/images/screenshots',
WP_ADMIN_DIR_NAME.'/js/categories.js',
WP_ADMIN_DIR_NAME.'/js/categories.min.js',
WP_ADMIN_DIR_NAME.'/js/custom-fields.js',
WP_ADMIN_DIR_NAME.'/js/custom-fields.min.js',
// 3.7
WP_ADMIN_DIR_NAME.'/js/cat.js',
WP_ADMIN_DIR_NAME.'/js/cat.min.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
// 3.8
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
WP_INCLUDE_DIR_NAME.'/js/thickbox/tb-close-2x.png',
WP_INCLUDE_DIR_NAME.'/js/thickbox/tb-close.png',
WP_INCLUDE_DIR_NAME.'/images/wpmini-blue-2x.png',
WP_INCLUDE_DIR_NAME.'/images/wpmini-blue.png',
WP_ADMIN_DIR_NAME.'/css/colors-fresh.css',
WP_ADMIN_DIR_NAME.'/css/colors-classic.css',
WP_ADMIN_DIR_NAME.'/css/colors-fresh.min.css',
WP_ADMIN_DIR_NAME.'/css/colors-classic.min.css',
WP_ADMIN_DIR_NAME.'/js/about.min.js',
WP_ADMIN_DIR_NAME.'/js/about.js',
WP_ADMIN_DIR_NAME.'/images/arrows-dark-vs-2x.png',
WP_ADMIN_DIR_NAME.'/images/wp-logo-vs.png',
WP_ADMIN_DIR_NAME.'/images/arrows-dark-vs.png',
WP_ADMIN_DIR_NAME.'/images/wp-logo.png',
WP_ADMIN_DIR_NAME.'/images/arrows-pr.png',
WP_ADMIN_DIR_NAME.'/images/arrows-dark.png',
WP_ADMIN_DIR_NAME.'/images/press-this.png',
WP_ADMIN_DIR_NAME.'/images/press-this-2x.png',
WP_ADMIN_DIR_NAME.'/images/arrows-vs-2x.png',
WP_ADMIN_DIR_NAME.'/images/welcome-icons.png',
WP_ADMIN_DIR_NAME.'/images/wp-logo-2x.png',
WP_ADMIN_DIR_NAME.'/images/stars-rtl-2x.png',
WP_ADMIN_DIR_NAME.'/images/arrows-dark-2x.png',
WP_ADMIN_DIR_NAME.'/images/arrows-pr-2x.png',
WP_ADMIN_DIR_NAME.'/images/menu-shadow-rtl.png',
WP_ADMIN_DIR_NAME.'/images/arrows-vs.png',
WP_ADMIN_DIR_NAME.'/images/about-search-2x.png',
WP_ADMIN_DIR_NAME.'/images/bubble_bg-rtl-2x.gif',
WP_ADMIN_DIR_NAME.'/images/wp-badge-2x.png',
WP_ADMIN_DIR_NAME.'/images/wordpress-logo-2x.png',
WP_ADMIN_DIR_NAME.'/images/bubble_bg-rtl.gif',
WP_ADMIN_DIR_NAME.'/images/wp-badge.png',
WP_ADMIN_DIR_NAME.'/images/menu-shadow.png',
WP_ADMIN_DIR_NAME.'/images/about-globe-2x.png',
WP_ADMIN_DIR_NAME.'/images/welcome-icons-2x.png',
WP_ADMIN_DIR_NAME.'/images/stars-rtl.png',
WP_ADMIN_DIR_NAME.'/images/wp-logo-vs-2x.png',
WP_ADMIN_DIR_NAME.'/images/about-updates-2x.png',
// 3.9
WP_ADMIN_DIR_NAME.'/css/colors.css',
WP_ADMIN_DIR_NAME.'/css/colors.min.css',
WP_ADMIN_DIR_NAME.'/css/colors-rtl.css',
WP_ADMIN_DIR_NAME.'/css/colors-rtl.min.css',
// Following files added back in 4.5 see #36083
// 'wp-admin/css/media-rtl.min.css',
// 'wp-admin/css/media.min.css',
// 'wp-admin/css/farbtastic-rtl.min.css',
WP_ADMIN_DIR_NAME.'/images/lock-2x.png',
WP_ADMIN_DIR_NAME.'/images/lock.png',
WP_ADMIN_DIR_NAME.'/js/theme-preview.js',
WP_ADMIN_DIR_NAME.'/js/theme-install.min.js',
WP_ADMIN_DIR_NAME.'/js/theme-install.js',
WP_ADMIN_DIR_NAME.'/js/theme-preview.min.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/plupload.html4.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/plupload.html5.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/changelog.txt',
WP_INCLUDE_DIR_NAME.'/js/plupload/plupload.silverlight.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/plupload.flash.js',
WP_INCLUDE_DIR_NAME.'/js/plupload/plupload.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/spellchecker',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/inlinepopups',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/img',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/img',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpgallery/img',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpfullscreen/css',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/themes/advanced',
WP_INCLUDE_DIR_NAME.'/js/tinymce/tiny_mce.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/mark_loaded_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/wp-tinymce-schema.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/media.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpview/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpview/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/directionality/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/directionality/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wordpress/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpdialogs/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/editimage.html',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/fullscreen/fullscreen.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/fullscreen/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wplink/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpgallery/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/tabfocus/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/editor_plugin.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/pasteword.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/editor_plugin_src.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/paste/pastetext.htm',
WP_INCLUDE_DIR_NAME.'/js/tinymce/langs/wp-langs.php',
// 4.1
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.accordion.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.autocomplete.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.button.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.core.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.datepicker.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.dialog.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.draggable.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.droppable.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-blind.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-bounce.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-clip.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-drop.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-explode.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-fade.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-fold.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-highlight.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-scale.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-shake.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-slide.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect-transfer.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.effect.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.menu.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.mouse.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.position.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.progressbar.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.resizable.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.selectable.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.slider.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.sortable.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.spinner.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.tabs.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.tooltip.min.js',
WP_INCLUDE_DIR_NAME.'/js/jquery/ui/jquery.ui.widget.min.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
// 4.3
WP_ADMIN_DIR_NAME.'/js/wp-fullscreen.js',
WP_ADMIN_DIR_NAME.'/js/wp-fullscreen.min.js',
WP_INCLUDE_DIR_NAME.'/js/tinymce/wp-mce-help.php',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpfullscreen',
// 4.5
WP_INCLUDE_DIR_NAME.'/theme-compat/comments-popup.php',
// 4.6
WP_ADMIN_DIR_NAME.'/includes/class-wp-automatic-upgrader.php', // Wrong file name, see #37628.
// 4.8
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/wpembed',
WP_INCLUDE_DIR_NAME.'/js/tinymce/plugins/media/moxieplayer.swf',
WP_INCLUDE_DIR_NAME.'/js/tinymce/skins/lightgray/fonts/readme.md',
WP_INCLUDE_DIR_NAME.'/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
WP_INCLUDE_DIR_NAME.'/js/tinymce/skins/lightgray/fonts/tinymce.json',
WP_INCLUDE_DIR_NAME.'/js/tinymce/skins/lightgray/skin.ie7.min.css',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as false.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'        => '2.0',
	'themes/twentyten/'       => '3.0',
	'themes/twentyeleven/'    => '3.2',
	'themes/twentytwelve/'    => '3.5',
	'themes/twentythirteen/'  => '3.6',
	'themes/twentyfourteen/'  => '3.8',
	'themes/twentyfifteen/'   => '4.1',
	'themes/twentysixteen/'   => '4.4',
	'themes/twentyseventeen/' => '4.7',
);

/**
 * Upgrades the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . WP_INCLUDE_DIR_NAME.'/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}


	/*
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalise any variables imported from `version-current.php` in this function. 
	 *
	 * BC Note: $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	 */
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . WP_INCLUDE_DIR_NAME.'/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), WP_INCLUDE_DIR_NAME.'/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy wp-content, we'll deal with that below
	// We also copy version.php last so failed updates report their old version
	$skip = array( WP_CONTENT_DIR_NAME, WP_INCLUDE_DIR_NAME.'/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) )
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2
		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( WP_CONTENT_DIR_NAME == substr( $file, 0, 10 ) )
					continue;
				if ( ! file_exists( ABSPATH . $file ) )
					continue;
				if ( ! file_exists( $working_dir_local . $file ) )
					continue;
				if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ) ) )
					continue;
				if ( md5_file( ABSPATH . $file ) === $checksum )
					$skip[] = $file;
				else
					$check_is_writable[ $file ] = ABSPATH . $file;
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) )
					unset( $files_not_writable[ $relative_file_not_writable ] );
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable )
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
		}
	}

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) )
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );

	// Since we know the core files have copied over, we can now copy the version file
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . WP_INCLUDE_DIR_NAME.'/version.php', $to . WP_INCLUDE_DIR_NAME.'/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), WP_INCLUDE_DIR_NAME.'/version.php' );
		}
		$wp_filesystem->chmod( $to . WP_INCLUDE_DIR_NAME.'/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of wp-content
	$skip = array( WP_CONTENT_DIR_NAME );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( WP_CONTENT_DIR_NAME == substr( $file, 0, 10 ) )
				continue;
			if ( ! file_exists( $working_dir_local . $file ) )
				continue;
			if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ) ) ) {
				$skip[] = $file;
				continue;
			}
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum )
				$skip[] = $file;
			else
				$failed[] = $file;
		}
	}

	// Some files didn't copy properly
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) )
				$total_size += filesize( $working_dir_local . $file );
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) )
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
		}
	}

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . WP_CONTENT_DIR_NAME.'/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir ) {
				$result = copy_dir($from . $distro . WP_CONTENT_DIR_NAME.'/languages/', $wp_lang_dir);
				if ( is_wp_error( $result ) )
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
			}
		}
	}

	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . WP_CONTENT_DIR_NAME.'/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . WP_CONTENT_DIR_NAME.'/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . WP_CONTENT_DIR_NAME.'/' . $file, $dest . $filename);

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) )
							$result = new WP_Error;
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;
		$wp_filesystem->delete($old_file, true);
	}

	// Remove any Genericons example.html's from the filesystem
	_upgrade_422_remove_genericons();

	// Remove the REST API plugin if its version is Beta 4 or lower
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Upgrade DB with separate request
	/** This filter is documented in wp-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache
	wp_cache_flush();
	// (Not all cache back ends listen to 'flush')
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) )
		delete_site_option( 'auto_core_update_failed' );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade, as well as for those upgrading to
 * 3.7+
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list
 * @see copy_dir()
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param string $from     source directory
 * @param string $to       destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list ) )
			continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) )
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
			}

			$result = _copy_dir($from . $filename, $to . $filename, $sub_skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing install is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('WordPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	include(ABSPATH . WP_ADMIN_DIR_NAME.'/admin-footer.php');
	exit();
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );
		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" ) && false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' ) ) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}
