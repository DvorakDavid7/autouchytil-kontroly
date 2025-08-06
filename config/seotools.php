<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Auto Uchytil | Kontroly vozidel', // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Profesionální kontrola ojetých vozů před koupí. Ušetřete peníze a nervy díky odborné kontrole s reportem a osobním přístupem.', // set false to total remove
            'separator'    => ' | ',
            'keywords'     => ['kontrola auta', 'kontrola ojetých vozů', 'inspekce vozidel', 'prověření auta před koupí', 'technická kontrola auta', 'Auto Uchytil'],
            'canonical'    => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index, follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Auto Uchytil | Kontroly ojetých vozů',
            'description' => 'Profesionální kontrola ojetých aut před koupí. Získejte technický posudek, odhalte skryté vady a ušetřete čas i peníze.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'Auto Uchytil',
            'images'      => [
                'https://autouchytil.cz/images/hero_image.png' // Replace with your real OG image URL
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Auto Uchytil | Kontrola ojetých vozů',
            'description' => 'Pomáháme vám prověřit ojeté vozy před koupí. Kontrola technického stavu a férovosti ceny s profesionálním přístupem.',
            'url'         => 'full',
            'type'        => 'WebPage',
            'images'      => [
                'https://autouchytil.cz/images/hero_image.png' // Same as OpenGraph image
            ],
        ],
    ],
];
