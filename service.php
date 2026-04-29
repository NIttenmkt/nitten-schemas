<?php
/**
 * Schema: Service + WebPage + FAQPage
 * Nitten Marketing SpA — github.com/nittenmkt/nitten-schemas
 *
 * Implementar con WPCode Lite, tipo PHP.
 * Condición: Page → URL contains → [slug-de-la-pagina]
 *
 * Adaptar: nombre del servicio, descripción, URL, área de servicio y FAQ.
 */

function nitten_schema_service_page() {
    if ( ! is_page( 'REEMPLAZAR-CON-SLUG' ) ) return;

    $schema = [
        "@context" => "https://schema.org",
        "@graph"   => [

            // Service
            [
                "@type"         => "Service",
                "@id"           => "https://DOMINIO.cl/SLUG/#service",
                "name"          => "Nombre del Servicio",
                "alternateName" => [ "Nombre alternativo 1", "Nombre alternativo 2" ],
                "description"   => "Descripción precisa del servicio. Qué resuelve, para quién y en qué condiciones.",
                "url"           => "https://DOMINIO.cl/SLUG/",
                "serviceType"   => "Tipo de servicio",
                "category"      => [ "Categoría 1", "Categoría 2" ],
                "areaServed"    => [
                    "@type" => "City",
                    "name"  => "Santiago",
                    "containedInPlace" => [
                        "@type" => "AdministrativeArea",
                        "name"  => "Región Metropolitana"
                    ]
                ],
                "provider"      => [
                    "@type" => "Organization",
                    "@id"   => "https://DOMINIO.cl/#organization"
                ],
                "offers"        => [
                    "@type"       => "Offer",
                    "price"       => "PRECIO",
                    "priceCurrency" => "CLP",
                    "description" => "Descripción de la oferta"
                ]
            ],

            // WebPage
            [
                "@type"       => "WebPage",
                "@id"         => "https://DOMINIO.cl/SLUG/#webpage",
                "url"         => "https://DOMINIO.cl/SLUG/",
                "name"        => "Título de la página | Nombre del sitio",
                "description" => "Meta description de la página.",
                "isPartOf"    => [ "@id" => "https://DOMINIO.cl/#website" ],
                "about"       => [ "@id" => "https://DOMINIO.cl/SLUG/#service" ],
                "inLanguage"  => "es-CL",
                "speakable"   => [
                    "@type"       => "SpeakableSpecification",
                    "cssSelector" => [ ".entry-title", ".page-intro", ".faq-section" ]
                ]
            ],

            // FAQPage
            [
                "@type"      => "FAQPage",
                "@id"        => "https://DOMINIO.cl/SLUG/#faq",
                "mainEntity" => [
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta frecuente 1 sobre el servicio?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta frecuente 2 sobre el servicio?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta frecuente 3 sobre el servicio?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa."
                        ]
                    ],
                ]
            ]
        ]
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
        . '</script>';
}
add_action( 'wp_head', 'nitten_schema_service_page' );
