<?php
/**
 * Schema: FAQPage
 * Nitten Marketing SpA — github.com/nittenmkt/nitten-schemas
 *
 * Implementar con WPCode Lite, tipo PHP.
 * Condición: Page → URL contains → [slug-de-la-pagina]
 *
 * Adaptar: URL @id, preguntas y respuestas según la página.
 * Mínimo recomendado: 5 preguntas. Óptimo: 8-12.
 */

function nitten_schema_faqpage() {
    if ( ! is_page( 'REEMPLAZAR-CON-SLUG' ) ) return;

    $schema = [
        "@context" => "https://schema.org",
        "@graph"   => [
            [
                "@type"      => "FAQPage",
                "@id"        => "https://DOMINIO.cl/SLUG/#faq",
                "mainEntity" => [
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta número 1?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa a la pregunta 1. Sin evasivas, sin relleno."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta número 2?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa a la pregunta 2."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta número 3?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa a la pregunta 3."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta número 4?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa a la pregunta 4."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Pregunta número 5?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Respuesta directa y completa a la pregunta 5."
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
add_action( 'wp_head', 'nitten_schema_faqpage' );
