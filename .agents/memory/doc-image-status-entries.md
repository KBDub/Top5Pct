---
name: page.image.status.md entry policy
description: All page entries already exist in docs/page.image.status.md — never create new ones, even if a page appears uncatalogued at first glance.
---

Every page in the site already has an entry in `docs/page.image.status.md`. Do NOT create new `####` section entries.

If an entry appears missing, search the full doc using `grep -n "^####"` to get all section headings, then read the specific line range. The entry will be there.

**Why:** Some pages are filed under incorrect nav headings in the doc (e.g. `/custom-apparel/` pages correctly use their real URL as the heading, but earlier they were searched under `/signs/business-signs/`). The user confirmed all sections exist — the doc is comprehensive.

**How to apply:** Before ever writing a new `####` section to the doc, run the grep for all headings first. Only create a new entry if it is genuinely absent after that check.

**Nav categorization note:** The site navigation incorrectly places `/custom-apparel/`, and other top-level categories, under the `/signs/business-signs` nav section. This is a known issue, left as-is intentionally. Note it in the doc for any affected page but do not fix it in the blade.
