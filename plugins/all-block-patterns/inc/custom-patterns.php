<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Custom Patterns',
    array(
        'label'     => __( 'Custom Patterns', 'perfection_portfolio' )
    )
);
function custom_block_patterns() {
    register_block_pattern(
        'perfection_portfoliofolio/pattern-one',
        array(
            'title'       => __( 'Pattern One', 'perfection_portfolio' ),
            'description' => _x( 'Description here', 'perfection_portfolio' ),
            'content'     => "",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

}
add_action( 'init', 'custom_block_patterns' );
