jQuery(function( $ ) {


    // изменяем текст в футере
    wp.customize( 'true_footer_copyright_address', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });
    wp.customize( 'true_footer_copyright_tel', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });

    wp.customize( 'true_footer_copyright_tel_mob', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });

    wp.customize( 'true_footer_copyright_email', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });
    wp.customize( 'true_footer_copyright_g', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });
    wp.customize( 'true_footer_copyright_instagram', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });
    wp.customize( 'true_footer_copyright_fb', function( value ) {
        value.bind( function( to ) {
            $( '#copyright' ).text( to ); // в элемент #copyright помещаем текст
        });
    });

    // фон сайта
})( jQuery );
