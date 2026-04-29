# SAGEO — Search AI & Generative Engine Optimization
## Metodología técnica — Nitten Marketing SpA

**Versión:** 1.0  
**Fecha:** abril 2026  
**Autor:** Nitten Marketing SpA  
**Web:** https://nittenmkt.cl  
**Documento completo:** https://nittenmkt.cl/aeo/sageo.md

---

## Qué es SAGEO

SAGEO (Search AI & Generative Engine Optimization) es el sistema integrado de AEO, GEO y ASO operando como ciclo adaptativo continuo.

No son tres disciplinas separadas. Son tres capas de un mismo embudo que, cuando operan en conjunto, determinan si una entidad existe para la IA, es citada por ella, y es accionada por agentes autónomos que operan en nombre del usuario.

**Principio operativo:** Medir → Ajustar → Redistribuir → Repetir

---

## Las tres capas

### AEO — Answer Engine Optimization
Construye la infraestructura técnica para ser encontrado y citado por motores de respuesta como ChatGPT, Perplexity, Gemini y Claude.

**Implementaciones clave:**
- JSON-LD con @graph completo (Organization, WebPage, Service, FAQPage)
- llms.txt en la raíz del dominio
- SpeakableSpecification en fragmentos prioritarios
- sameAs a perfiles verificados externos
- Biblioteca de documentos .md en /aeo/
- robots.txt configurado para crawlers de IA

### GEO — Generative Engine Optimization
Trabaja cómo los modelos construyen y enuncian la respuesta cuando citan una entidad. Foco en voz, autoridad y contexto.

**Implementaciones clave:**
- Contenido con densidad semántica real, sin relleno
- Citaciones cruzadas entre documentos del ecosistema
- YAML frontmatter con topics, related y actions en cada .md
- Documentación técnica profunda por dominio temático
- Presencia verificada en fuentes externas (directorios, medios)

### ASO — Agentic Search Optimization
Optimiza para ser seleccionado y accionado por agentes de IA autónomos.

**Implementaciones clave:**
- knowledge-index.json con lógica de recomendación por servicio
- Datos estructurados accionables con endpoint por servicio
- openapi.yaml con endpoints consultables
- Bloques de decisión en documentos .md (cuándo usar / cuándo no / acción sugerida)

---

## Stack técnico de implementación

```
Plataforma:     WordPress
Schema:         WPCode Lite (tipo PHP, no HTML)
SEO:            Rank Math
Cookies:        CookieYes
Archivos raíz:  llms.txt, ai-brief.md, knowledge-index.json,
                servicios-ia.json, openapi.yaml, nitten-context.xml
Biblioteca:     /aeo/*.md con YAML frontmatter
Marca:          /brand/*.md
```

---

## Por qué PHP y no HTML en WPCode

Implementar schemas como tipo HTML en WPCode genera conflictos de parsing cuando el JSON-LD contiene el cierre de etiqueta `</script>`. El tipo PHP evita este problema y permite condicionar la ejecución por URL de forma más precisa.

```php
// Correcto: tipo PHP con condición
function mi_schema() {
    if ( ! is_page( 'slug-de-pagina' ) ) return;
    $schema = [ ... ];
    echo '<script type="application/ld+json">'
        . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES )
        . '</script>';
}
add_action( 'wp_head', 'mi_schema' );
```

---

## Validación

Después de implementar cualquier schema, validar con:

1. **Google Rich Results Test:** https://search.google.com/test/rich-results
2. **Schema Markup Validator:** https://validator.schema.org
3. **Google Search Console:** Cobertura → Inspección de URL

---

## Documentación completa

- SAGEO: https://nittenmkt.cl/aeo/sageo.md
- ASO: https://nittenmkt.cl/aeo/agentic-search.md
- Metodología AEO: https://nittenmkt.cl/aeo/metodologia-aeo.md
- Arquitectura de Respuesta: https://nittenmkt.cl/aeo/arquitectura-de-respuesta.md
- Glosario: https://nittenmkt.cl/aeo/glosario.md

---

*Nitten Marketing SpA · nittenmkt.cl · Algoritmos que atraen. Activaciones que venden.*
