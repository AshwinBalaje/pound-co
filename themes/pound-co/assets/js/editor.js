wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'poundco-button',
        label: 'PoundCo Button'
    }
);

wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
});