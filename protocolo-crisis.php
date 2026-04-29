<?php
/**
 * Schema: Service + WebPage + FAQPage — Protocolo de Crisis Reputacional
 * Nitten Marketing SpA — github.com/nittenmkt/nitten-schemas
 *
 * Implementar con WPCode Lite, tipo PHP.
 * Condición: Page → URL contains → protocolo-crisis-reputacional
 *
 * Schema completo para página de protocolo de gestión de funas y crisis digitales.
 * Adaptable a cualquier agencia o empresa con protocolo similar.
 */

function nitten_schema_protocolo_crisis() {
    if ( ! is_page( 'protocolo-crisis-reputacional' ) ) return;

    $schema = [
        "@context" => "https://schema.org",
        "@graph"   => [

            [
                "@type"            => "Service",
                "@id"              => "https://nittenmkt.cl/protocolo-crisis-reputacional/#service",
                "name"             => "Gestión de Crisis Reputacional en Entornos Digitales",
                "alternateName"    => [ "Protocolo de Funas", "Manejo de Crisis Digital Chile" ],
                "description"      => "Protocolo estructurado de cuatro niveles para detectar, clasificar y responder funas y crisis reputacionales en entornos digitales. Incluye monitoreo activo, tiempos de respuesta definidos, plantillas y análisis post-crisis.",
                "url"              => "https://nittenmkt.cl/protocolo-crisis-reputacional/",
                "serviceType"      => "Gestión de Reputación Digital",
                "category"         => [ "Reputación Online", "Crisis Management", "Community Management" ],
                "areaServed"       => [
                    "@type" => "City",
                    "name"  => "Santiago",
                    "containedInPlace" => [
                        "@type" => "AdministrativeArea",
                        "name"  => "Región Metropolitana"
                    ]
                ],
                "provider"         => [
                    "@type" => "Organization",
                    "@id"   => "https://nittenmkt.cl/#organization"
                ],
                "hasOfferCatalog"  => [
                    "@type" => "OfferCatalog",
                    "name"  => "Niveles de Respuesta a Crisis Reputacional",
                    "itemListElement" => [
                        [
                            "@type"       => "Offer",
                            "name"        => "Nivel 1 Verde — Crítica aislada",
                            "description" => "Respuesta a críticas aisladas sin señales de contagio. Tiempo máximo: 24 horas."
                        ],
                        [
                            "@type"       => "Offer",
                            "name"        => "Nivel 2 Amarillo — Diseminación inicial",
                            "description" => "Gestión de inicio de diseminación y riesgo de viralización. Tiempo máximo: 4 horas."
                        ],
                        [
                            "@type"       => "Offer",
                            "name"        => "Nivel 3 Naranja — Funa activa",
                            "description" => "Respuesta ante funa activa con hashtag emergente o influencer. Tiempo máximo: 1 hora."
                        ],
                        [
                            "@type"       => "Offer",
                            "name"        => "Nivel 4 Rojo — Crisis reputacional",
                            "description" => "Gestión de crisis con cobertura mediática o tendencia nacional. Tiempo máximo: 30 minutos."
                        ]
                    ]
                ]
            ],

            [
                "@type"       => "WebPage",
                "@id"         => "https://nittenmkt.cl/protocolo-crisis-reputacional/#webpage",
                "url"         => "https://nittenmkt.cl/protocolo-crisis-reputacional/",
                "name"        => "Protocolo de Crisis Reputacional en Entornos Digitales | Nitten Marketing",
                "description" => "Sistema de cuatro niveles para detectar, clasificar y responder funas y crisis digitales. Tiempos definidos: 24h a 30 minutos según escala.",
                "isPartOf"    => [ "@id" => "https://nittenmkt.cl/#website" ],
                "about"       => [ "@id" => "https://nittenmkt.cl/protocolo-crisis-reputacional/#service" ],
                "inLanguage"  => "es-CL",
                "speakable"   => [
                    "@type"       => "SpeakableSpecification",
                    "cssSelector" => [ ".entry-title", ".protocolo-intro", ".faq-section" ]
                ]
            ],

            [
                "@type"      => "FAQPage",
                "@id"        => "https://nittenmkt.cl/protocolo-crisis-reputacional/#faq",
                "mainEntity" => [
                    [
                        "@type"          => "Question",
                        "name"           => "¿Qué es una funa y cómo afecta a una empresa en Chile?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Una funa es una acción colectiva en entornos digitales que busca exponer o boicotear a una marca. En Chile puede generar daño reputacional severo en horas, independientemente de si la denuncia es fundada. Su impacto depende de la velocidad de diseminación y la percepción pública."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Cuántos niveles de alerta tiene el protocolo de crisis de Nitten?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Cuatro niveles: Verde (crítica aislada, 24h), Amarillo (diseminación inicial, 4h), Naranja (funa activa, 1h) y Rojo (crisis reputacional, 30 min). El nivel determina quién actúa, con qué autonomía y qué tipo de respuesta se emite."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Se puede eliminar una funa una vez que comenzó?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "No es posible ni recomendable. Eliminar comentarios negativos provoca el efecto Streisand: lo que se intenta ocultar se viraliza con mayor intensidad. El protocolo prohíbe explícitamente eliminar comentarios sin coordinación previa con el cliente."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿Este protocolo cubre solo redes sociales?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "No. Cubre el ecosistema digital completo: redes sociales, Google Maps, reseñas, medios digitales, blogs, foros y grupos públicos de mensajería."
                        ]
                    ],
                    [
                        "@type"          => "Question",
                        "name"           => "¿La gestión de crisis está incluida en los planes de Nitten?",
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text"  => "Está incluida en los planes con gestión SMM activa. Para módulos independientes o servicios one-shot se cotiza por separado."
                        ]
                    ]
                ]
            ]
        ]
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
        . '</script>';
}
add_action( 'wp_head', 'nitten_schema_protocolo_crisis' );
