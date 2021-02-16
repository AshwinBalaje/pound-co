wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'poundco-button1',
        label: 'PoundCo Button 1'
    }
);

wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'poundco-button2',
        label: 'PoundCo Button 2'
    }
);

wp.blocks.registerBlockStyle( 
    'core/cover', 
    {
        name: 'blur',
        label: 'Blur'
    }
);



//Text
wp.blocks.registerBlockStyle( 
    'core/paragraph', 
    {
        name: 'bahnschrift',
        label: 'Bahnschrift'
    }
);

wp.blocks.registerBlockStyle( 
    'core/paragraph', 
    {
        name: 'lemon-bold',
        label: 'Lemon Milk Bold'
    }
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'lemon-medium',
        label: 'Lemon Milk Medium'
    }
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'lemon-medium-italic',
        label: 'Lemon Milk Medium Italic'
    }
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'lemon-bold',
        label: 'Lemon Milk Bold'
    }
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'lemon-bold-italic',
        label: 'Lemon Milk Bold Italic'
    }
);


wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
});