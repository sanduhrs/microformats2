(function ($) {

    Drupal.behaviors.microformats2 = {
        attach: function (context, settings) {
            var items;
            var content = $('#block-microformats2-mf2 .content');

            items = microformats.getItems();
            var i = items.items.length;
            var x = 0;

            content.append('<div>');
            $.each(items.items, function( index, value ) {
                content.append('<div>');

                content.append('<h3>Format: <strong>'+value.type+'</strong></h3>');
                content.append('<dl>');

                $.each(value.properties, function( index, property ) {
                    content.append('<dt>'+index+'</dt><dd><strong>'+property+'</strong></dd>');
                });

                content.append('</dl>');
                content.append('</div>');
            });
            content.append('</div>');
        }
    };

})(jQuery);
