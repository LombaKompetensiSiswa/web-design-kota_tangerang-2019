(function() {
    tinymce.PluginManager.add('crp_tc_buttons', function( editor, url ) {
        var menuItems = new Array();
        for (var i = 0; i < crp_shortcodes.length; i++){
            var shortcode = crp_shortcodes[i];

            item = {
               text: shortcode.title,
               value: shortcode.shortcode,
               onclick: function() {
                   editor.insertContent(this.value());
               }
            };
            menuItems.push(item);
        }

        editor.addButton( 'crp_insert_tc_button', {
            text: 'GridKit',
            icon: 'icon dashicons-before dashicons-portfolio',
            type: 'menubutton',
            menu: menuItems
        });
    });
})();