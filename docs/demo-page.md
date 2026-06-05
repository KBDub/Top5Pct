# Demo Page Architecture

## What is the demo page?

The demo page (`/demo`) is a living style guide and design system reference. It is not a customer-facing page. Its job is to show every reusable component, link class, button style, modal variant, and responsive pattern in one place, with inline documentation blocks showing the component name, file path, and usage example.

---

## How it differs from real pages

| | Real pages (e.g. `/`, `/custom-apparel`) | Demo page (`/demo`) |
|---|---|---|
| File location | `resources/views/pages/` | `resources/views/pages/demo.blade.php` |
| Layout wrapper | `<x-layouts.page ...>` | Raw `<!DOCTYPE html>` + manual `<head>` |
| Nav, footer, FAB | Provided automatically by `x-layouts.page` | Manually placed tag by tag |
| CSS / JS loading | Handled inside `x-layouts.page` | Reads `public/build/manifest.json` directly |
| Purpose | Customer-facing production page | Internal design system reference |

---

## Shared components, different assembly

**There are no components local to the demo page.** Every `x-ui.*`, `x-sections.*`, and `x-layout.*` tag on the demo page resolves to the exact same Blade file as on any production page. A change to `resources/views/components/layout/navigation-bar.blade.php` updates both the demo and every real page at the same time.

The only difference is assembly method:

- **Real pages** use `x-layouts.page`, which wraps everything and injects the notification bar, nav bar, banners, footer, cart drawer Livewire component, and the global `x-ui.contact-modal` FAB automatically.
- **The demo page** manually places those pieces one by one so it can control exactly what appears on screen, add inline documentation blocks, and display component internals without `x-layouts.page` getting in the way.

---

## Why the demo is a raw HTML file

`x-layouts.page` makes assumptions: it sets the page `<title>`, injects SEO meta tags, includes the cart drawer, and always renders the FAB. For a style guide, those assumptions are a problem. The demo needs to:

- Override the title freely ("Brand Style Guide, Golden Optimism")
- Show or hide layout pieces selectively
- Insert documentation blocks (component names, file paths, usage code) between live component previews
- Avoid polluting production layout logic with demo-only content

Keeping the demo as a standalone raw HTML file achieves all of this cleanly.

---

## Mandatory rules for the demo page

- **Every section must show the component name, file path, and a full usage example** in an info block. This is a user preference and is non-negotiable.
- Info blocks must include the aspect ratio for any image-displaying component (default: `600×450px`, 4:3).
- The demo page itself must never use `x-layouts.page`.
- Any new reusable component added to the system must get a matching demo section.
- The `/demo/premium` route is the second demo variant and follows the same rules.

---

## File reference

| File | Purpose |
|---|---|
| `resources/views/pages/demo.blade.php` | Main demo page (`/demo`) |
| `resources/views/pages/demo-premium.blade.php` | Premium variant (`/demo/premium`) |
| `resources/views/components/ui/` | All `x-ui.*` components shown on the demo |
| `resources/views/components/sections/` | All `x-sections.*` components shown on the demo |
| `resources/views/components/layout/` | Layout components (`navigation-bar`, `top-notification-bar`, etc.) |
| `routes/web.php` | Demo routes registered here |
