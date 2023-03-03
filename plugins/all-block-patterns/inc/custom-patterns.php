<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Custom Patterns',
    array(
        'label'     => __( 'Custom Patterns', 'perfection-portfolio' )
    )
);
function custom_block_patterns() {
    register_block_pattern(
        'perfection-portfolio/pattern-one',
        array(
            'title'       => __( 'Project Section', 'perfection-portfolio' ),
            'description' => _x( 'Display your favorite works here. Dupliate a column to add more projects into this section', 'perfection-portfolio' ),
            'content'     => "<!-- wp:group {\"style\":{\"color\":{\"gradient\":\"linear-gradient(0deg,rgb(125,79,80) 0%,rgb(249,234,225) 32%,rgba(250,234,225,0.16) 69%)\"}},\"className\":\"projects-pattern\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group projects-pattern has-background\" style=\"background:linear-gradient(0deg,rgb(125,79,80) 0%,rgb(249,234,225) 32%,rgba(250,234,225,0.16) 69%)\"><!-- wp:spacer -->\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"56px\",\"textTransform\":\"uppercase\"}}} -->\n<h2 class=\"has-text-align-center\" style=\"font-size:56px;text-transform:uppercase\">Featured Projects</h2>\n<!-- /wp:heading -->\n\n<!-- wp:spacer {\"height\":\"60px\"} -->\n<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\"}},\"textColor\":\"black\"} -->\n<h2 class=\"has-text-align-center has-black-color has-text-color\" style=\"text-transform:uppercase\">Project Title</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">some subtext or subtitle</h5>\n<!-- /wp:heading -->\n\n<!-- wp:image {\"align\":\"center\",\"id\":32,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"http://perfection-portfolio.local/wp-content/uploads/2023/02/pankaj-patel-Ylk5n_nd9dA-unsplash-1024x683.jpg\" alt=\"  Website photo\" class=\"wp-image-32\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100,\"style\":{\"border\":{\"radius\":\"5px\"},\"color\":{\"background\":\"#f9eae1\",\"text\":\"#7d4f50\"}},\"className\":\"is-style-fill\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-small-font-size\"><a class=\"wp-block-button__link has-text-color has-background wp-element-button\" style=\"border-radius:5px;color:#7d4f50;background-color:#f9eae1\">link button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\"} -->\n<p class=\"has-text-align-center has-black-color has-text-color\" style=\"font-size:15px\">Duis ac neque sed felis tincidunt ornare sagittis eu mi. Mauris nec eleifend tortor, eu placerat arcu. Suspendisse interdum sit amet diam condimentum vestibulum. Nam et iaculis mi. Ut luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\"}},\"textColor\":\"black\"} -->\n<h2 class=\"has-text-align-center has-black-color has-text-color\" style=\"text-transform:uppercase\">Project Title</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">some subtext or subtitle</h5>\n<!-- /wp:heading -->\n\n<!-- wp:image {\"align\":\"center\",\"id\":32,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"http://perfection-portfolio.local/wp-content/uploads/2023/02/pankaj-patel-Ylk5n_nd9dA-unsplash-1024x683.jpg\" alt=\"Website photo\" class=\"wp-image-32\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100,\"style\":{\"border\":{\"radius\":\"5px\"},\"color\":{\"background\":\"#f9eae1\",\"text\":\"#7d4f50\"}},\"className\":\"is-style-fill\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-small-font-size\"><a class=\"wp-block-button__link has-text-color has-background wp-element-button\" style=\"border-radius:5px;color:#7d4f50;background-color:#f9eae1\">link button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\"} -->\n<p class=\"has-text-align-center has-black-color has-text-color\" style=\"font-size:15px\">Duis ac neque sed felis tincidunt ornare sagittis eu mi. Mauris nec eleifend tortor, eu placerat arcu. Suspendisse interdum sit amet diam condimentum vestibulum. Nam et iaculis mi. Ut luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\"}},\"textColor\":\"black\"} -->\n<h2 class=\"has-text-align-center has-black-color has-text-color\" style=\"text-transform:uppercase\">Project Title</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">some subtext or subtitle</h5>\n<!-- /wp:heading -->\n\n<!-- wp:image {\"align\":\"center\",\"id\":32,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"http://perfection-portfolio.local/wp-content/uploads/2023/02/pankaj-patel-Ylk5n_nd9dA-unsplash-1024x683.jpg\" alt=\"Website photo\" class=\"wp-image-32\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100,\"style\":{\"border\":{\"radius\":\"5px\"},\"color\":{\"background\":\"#f9eae1\",\"text\":\"#7d4f50\"}},\"className\":\"is-style-fill\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-small-font-size\"><a class=\"wp-block-button__link has-text-color has-background wp-element-button\" style=\"border-radius:5px;color:#7d4f50;background-color:#f9eae1\">link button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"textColor\":\"black\"} -->\n<p class=\"has-text-align-center has-black-color has-text-color\" style=\"font-size:15px\">Duis ac neque sed felis tincidunt ornare sagittis eu mi. Mauris nec eleifend tortor, eu placerat arcu. Suspendisse interdum sit amet diam condimentum vestibulum. Nam et iaculis mi. Ut luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"150px\"} -->\n<div style=\"height:150px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:group -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'perfection-portfolio/pattern-two',
        array(
            'title'       => __( 'Excerpt Section', 'perfection-portfolio' ),
            'description' => _x( 'Add your blog, art, any external link to showcase', 'perfection-portfolio' ),
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"style\":{\"color\":{\"background\":\"#f9eae1\"}},\"className\":\"small-excerpt\"} -->\n<div class=\"wp-block-column small-excerpt has-background\" style=\"background-color:#f9eae1\"><!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading -->\n<h2>An external blog or subscription</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Some text about your blog or newsletter</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"verticalAlignment\":\"top\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"black\",\"width\":50,\"style\":{\"color\":{\"background\":\"#cc8b86\"},\"border\":{\"radius\":\"5px\"},\"typography\":{\"textTransform\":\"uppercase\",\"letterSpacing\":\"0.8px\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size has-small-font-size\" style=\"letter-spacing:0.8px;text-transform:uppercase\"><a class=\"wp-block-button__link has-black-color has-text-color has-background wp-element-button\" style=\"border-radius:5px;background-color:#cc8b86\">button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'perfection-portfolio/pattern-three',
        array(
            'title'       => __( 'Footer Block', 'perfection-portfolio' ),
            'description' => _x( 'Add all your contact info here and some sites if wanted' , 'perfection-portfolio'),
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"style\":{\"color\":{\"background\":\"#f9eae1\",\"text\":\"#7d4f50\"}}} -->\n<div class=\"wp-block-column has-text-color has-background\" style=\"color:#7d4f50;background-color:#f9eae1\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"letterSpacing\":\"0.8px\"},\"color\":{\"text\":\"#7d4f50\"}},\"fontSize\":\"x-large\"} -->\n<h2 class=\"has-text-align-center has-text-color has-x-large-font-size\" style=\"color:#7d4f50;letter-spacing:0.8px;text-transform:uppercase\">Contact and connect</h2>\n<!-- /wp:heading -->\n\n<!-- wp:site-tagline {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d4f50\"}}} /-->\n\n<!-- wp:quote {\"align\":\"center\",\"style\":{\"color\":{\"text\":\"#633a3a\"}},\"fontSize\":\"small\"} -->\n<blockquote class=\"wp-block-quote has-text-align-center has-text-color has-small-font-size\" style=\"color:#633a3a\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#7d4f50\"}}} -->\n<p class=\"has-text-color\" style=\"color:#7d4f50\">\"t luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.\"</p>\n<!-- /wp:paragraph --><cite>Who said quote here</cite></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:spacer {\"height\":\"20px\"} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:social-links {\"iconColor\":\"white\",\"iconColorValue\":\"#ffffff\",\"customIconBackgroundColor\":\"#7d4f50\",\"iconBackgroundColorValue\":\"#7d4f50\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<ul class=\"wp-block-social-links has-icon-color has-icon-background-color\"><!-- wp:social-link {\"url\":\"https://codepen.io/Grxcelyn-mx/pen/YzjGdEj\",\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://codepen.io/Grxcelyn-mx/pen/YzjGdEj\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://codepen.io/Grxcelyn-mx/pen/YzjGdEj\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://codepen.io/Grxcelyn-mx/pen/YzjGdEj\",\"service\":\"mail\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://codepen.io/Grxcelyn-mx/pen/YzjGdEj\",\"service\":\"instagram\"} /--></ul>\n<!-- /wp:social-links -->\n\n<!-- wp:spacer {\"height\":\"40px\"} -->\n<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"5px\"},\"color\":{\"background\":\"#7d4f50\"},\"typography\":{\"letterSpacing\":\"0.8px\",\"textTransform\":\"uppercase\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size has-small-font-size\" style=\"letter-spacing:0.8px;text-transform:uppercase\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:5px;background-color:#7d4f50\">button</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"style\":{\"border\":{\"radius\":\"5px\"},\"color\":{\"background\":\"#7d4f50\"},\"typography\":{\"textTransform\":\"uppercase\",\"letterSpacing\":\"0.8px\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size has-small-font-size\" style=\"letter-spacing:0.8px;text-transform:uppercase\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:5px;background-color:#7d4f50\">button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:site-title {\"level\":2,\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\"},\"color\":{\"text\":\"#7d4f50\"}}} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'perfection-portfolio/pattern-four',
        array(
            'title'       => __( 'About Block', 'perfection-portfolio' ),
            'description' => _x( 'Add a little about you' , 'perfection-portfolio'),
            'content'     => "<!-- wp:columns {\"align\":\"full\",\"className\":\"about-section\"} -->\n<div class=\"wp-block-columns alignfull about-section\"><!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:cover {\"customOverlayColor\":\"#f6f6f6\",\"minHeight\":600,\"isDark\":false} -->\n<div class=\"wp-block-cover is-light\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-100 has-background-dim\" style=\"background-color:#f6f6f6\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:image {\"align\":\"center\",\"id\":86,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"http://perfection-portfolio.local/wp-content/uploads/2023/02/jason-moyer-A73ah5JKtVA-unsplash-819x1024.jpg\" alt=\"headshot of a woman in a pink blazer looking off to the distance with glasses and hair buns.\" class=\"wp-image-86\"/></figure>\n<!-- /wp:image --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"1em\",\"right\":\"1em\",\"bottom\":\"1em\",\"left\":\"1em\"}}}} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"320px\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:320px\"><!-- wp:paragraph {\"style\":{\"typography\":{\"lineHeight\":\"1.6\"}},\"fontSize\":\"small\"} -->\n<p class=\"has-small-font-size\" style=\"line-height:1.6\"><strong>An About Section</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"lineHeight\":\"1.6\"}},\"fontSize\":\"small\"} -->\n<p class=\"has-small-font-size\" style=\"line-height:1.6\">Duis ac neque sed felis tincidunt ornare sagittis eu mi. Mauris nec eleifend tortor, eu placerat arcu. Suspendisse interdum sit amet diam condimentum vestibulum. Nam et iaculis mi. Ut luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.Duis ac neque sed felis tincidunt ornare sagittis eu mi. Mauris nec eleifend tortor, eu placerat arcu. Suspendisse interdum sit amet diam condimentum vestibulum. Nam et iaculis mi. Ut luctus faucibus odio, vitae scelerisque purus elementum vel. Vivamus aliquet condimentum porttitor. Integer vel ullamcorper metus.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

}
add_action( 'init', 'custom_block_patterns' );
