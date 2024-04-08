<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | Set some default values. It is possible to add all defines that can be set
    | in dompdf_config.inc.php. You can also override the entire config file.
    |
    */
    'show_warnings' => false,   // Throw an Exception on warnings from dompdf

    'public_path' => null,  // Override the public path if needed

    /*
     * Dejavu Sans font is missing glyphs for converted entities, turn it off if you need to show € and £.
     */
    'convert_entities' => true,

    'options' => [
        // Other options...

        /**
         * The location of the DOMPDF font directory
         */
        'font_dir' => null, // advised by dompdf (https://github.com/dompdf/dompdf/pull/782)

        /**
         * The location of the DOMPDF font cache directory
         */
        'font_cache' => storage_path('fonts/'),

        'default_font' => 'Old Standard TT',

        'font_families' => [
            'Old Standard TT' => [
                'normal' => 'https://fonts.gstatic.com/s/oldstandardtt/v14/MwQubh3o1vLImiwAVvYawgcf2eVXLPcOJKvRPA.woff2',
                'bold' => 'https://fonts.gstatic.com/s/oldstandardtt/v14/MwQubh3o1vLImiwAVvYawgcf2eVXLPcOJKvRPA.woff2', // Assuming there's no separate bold font, use the same URL
                'italic' => 'https://fonts.gstatic.com/s/oldstandardtt/v14/MwQubh3o1vLImiwAVvYawgcf2eVXLPcOJKvRPA.woff2',
                'bold_italic' => 'https://fonts.gstatic.com/s/oldstandardtt/v14/MwQubh3o1vLImiwAVvYawgcf2eVXLPcOJKvRPA.woff2', // Assuming there's no separate bold italic font, use the same URL
            ],
            // Add other font families if needed
        ],

        // Set paper size to A4
        'isPhpEnabled' => true,
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
        'defaultPaperSize' => 'legal',

        // Enable Bootstrap CSS
        'isHtml5ParserEnabled' => true,
        'isPhpEnabled' => true,
        'isJavascriptEnabled' => true,
        'isCssFloatEnabled' => true,
        'isHtml5ParserEnabled' => true,

        // Other options...
    ],
];

