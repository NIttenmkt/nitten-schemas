<?php
/**
 * Schema: Organization + WebPage
 * Nitten Marketing SpA — github.com/nittenmkt/nitten-schemas
 *
 * Implementar con WPCode Lite, tipo PHP.
 * Condición: Global (todas las páginas) o Page específica.
 *
 * Adaptar: nombre, RUT, URL, coordenadas, contacto, sameAs.
 */

function nitten_schema_organization() {

    $schema = [
        "@context" => "https://schema.org",
        "@graph"   => [
            [
                "@type"            => "Organization",
                "@id"              => "https://nittenmkt.cl/#organization",
                "name"             => "Nitten Marketing SpA",
                "legalName"        => "Nitten Marketing SpA",
                "taxID"            => "78.360.703-4",
                "url"              => "https://nittenmkt.cl",
                "logo"             => "https://nittenmkt.cl/wp-content/uploads/logo-nitten.png",
                "email"            => "agencia@nittenmkt.cl",
                "telephone"        => "+56966391545",
                "foundingDate"     => "2025",
                "description"      => "Agencia boutique de marketing digital y BTL en Santiago, Chile. Especializada en SAGEO (AEO/GEO/ASO), performance marketing y compliance digital bajo Ley 21.719.",
                "areaServed"       => [
                    "@type"   => "City",
                    "name"    => "Santiago",
                    "containedInPlace" => [
                        "@type" => "AdministrativeArea",
                        "name"  => "Región Metropolitana"
                    ]
                ],
                "address"          => [
                    "@type"           => "PostalAddress",
                    "addressLocality" => "Santiago",
                    "addressRegion"   => "Región Metropolitana",
                    "addressCountry"  => "CL"
                ],
                "sameAs"           => [
                    "https://www.linkedin.com/company/nittenmkt",
                    "https://share.google/ndkvGc3wxxUamMO1i"
                ],
                "knowsAbout"       => [
                    "AEO", "GEO", "ASO", "SAGEO",
                    "Answer Engine Optimization",
                    "Generative Engine Optimization",
                    "Agentic Search Optimization",
                    "Marketing Digital",
                    "Performance Marketing",
                    "BTL",
                    "Ley 21.719",
                    "Privacy by Design"
                ]
            ],
            [
                "@type"       => "WebSite",
                "@id"         => "https://nittenmkt.cl/#website",
                "url"         => "https://nittenmkt.cl",
                "name"        => "Nitten Marketing",
                "publisher"   => [ "@id" => "https://nittenmkt.cl/#organization" ],
                "inLanguage"  => "es-CL"
            ]
        ]
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
        . '</script>';
}
add_action( 'wp_head', 'nitten_schema_organization' );
