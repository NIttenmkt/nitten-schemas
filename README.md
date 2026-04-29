# nitten-schemas

**Nitten Marketing SpA** — Snippets de Schema Markup y Documentación SAGEO

Repositorio público de los schemas JSON-LD, snippets de implementación y documentación técnica que Nitten Marketing SpA usa en sus proyectos y en su propio ecosistema digital.

---

## ¿Qué es esto?

Este repositorio contiene los snippets de datos estructurados (Schema.org / JSON-LD) que Nitten implementa para optimizar la presencia de marcas en motores de búsqueda y motores de respuesta de IA, bajo la metodología SAGEO (Search AI & Generative Engine Optimization).

Todos los snippets están implementados como tipo **PHP en WPCode** para evitar conflictos de parsing con el cierre de etiquetas `</script>` en WordPress. Son reutilizables y adaptables a cualquier proyecto.

---

## Metodología SAGEO

SAGEO es el sistema integrado de tres capas que Nitten implementa:

- **AEO (Answer Engine Optimization)** — optimizar para ser citado por modelos de IA
- **GEO (Generative Engine Optimization)** — optimizar cómo la IA construye la respuesta
- **ASO (Agentic Search Optimization)** — optimizar para ser elegido y accionado por agentes de IA

Documentación completa: https://nittenmkt.cl/aeo/sageo.md

---

## Archivos del repositorio

| Archivo | Descripción |
|---------|-------------|
| `organization.php` | Schema Organization + WebPage base para cualquier empresa |
| `faqpage.php` | Schema FAQPage reutilizable con múltiples Q&A |
| `service.php` | Schema Service para páginas de servicio profesional |
| `protocolo-crisis.php` | Schema FAQPage + Service para protocolo de crisis reputacional |
| `sageo-methodology.md` | Documento técnico sobre la metodología SAGEO |

---

## Implementación en WordPress

Todos los snippets se implementan con **WPCode Lite** (gratuito):

1. WP Admin → Code Snippets → Add New
2. Pegar el código PHP
3. Tipo: **PHP** (no HTML)
4. Condición: Page → URL contains → `[slug-de-la-pagina]`
5. Activar

---

## Sobre Nitten Marketing SpA

Agencia boutique de marketing digital y BTL en Santiago, Chile. Especializada en SAGEO, performance marketing, activaciones BTL y compliance digital bajo Ley 21.719.

- Web: https://nittenmkt.cl
- Contacto: agencia@nittenmkt.cl
- LinkedIn: https://www.linkedin.com/company/nittenmkt

---

*Algoritmos que atraen. Activaciones que venden.*
