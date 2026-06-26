LP Image Review Process
This document covers the process for reviewing and fixing image slots on category landing pages (LPs), and records each LP review instance.

Review Process
Step 1 — Audit all image slots
Extract every image reference from the blade file (excluding og-tags). Map each one to a numbered slot with its component, file path, and current status.

Step 2 — Check LP Rules
Apply the four LP rules from docs/new-images.md:

#	Rule
1	Images always reference sub-category image dirs. No dedicated LP-level dir is created.
2	Cross-category referencing is allowed (e.g. an LP can reference both custom-shaped-stickers-decals/ and standard-stickers-decals/).
3	Never modify an image filename. Only reference existing files as-is.
4	Use distinct images. Each image file should appear no more than once per page across all slots. Repeats are a last resort only.
5	Each LP category banner image must be the hero image of the sub-category page it links to. For example, the "DTF Transfers" banner on /custom-apparel links to /custom-apparel/printing-options/dtf-printing, so its image must be dtf-transfers/top5pct-dtf-t-shirt-printing.jpg — the exact category-hero image on that sub-page. A visually matching fallback is only acceptable when the sub-category has no dedicated dir yet, and must be replaced once that sub-page migration is complete.
6	All non-banner image slots on an LP must use images from an import round — meaning any file that exists in a sub-category dir under public/images/. R1 and R2 files (the most recent import rounds, confirmed by their presence in public/new-images/) are preferred where available. R1/R2/R3 refers to Round 1, Round 2, Round 3 of image importing — not to rules. LP category banners are exempt (Rule 5).
Step 3 — Identify violations
For each rule, list the exact slots and filenames that violate it. Group repeats by filename and list every slot where the repeat occurs.

Repeat violation priority:

Highest: same image used for two different sub-category banners in the lp-category-banners block (different categories sharing one image gives no visual differentiation)
Medium: LP banner image reused in a carousel or card slot elsewhere on the same page
Lower: carousel-to-carousel or carousel-to-card-text repeats
Step 4 — Identify alternatives
For each violation, check:

Does a dedicated sub-category dir exist for the banner's target page? (e.g. public/images/puff-shirts/)
If not, does the staging area (public/new-images/) have files for that sub-category?
If staging files exist, do their prefixed basenames already exist in custom-shirts/ or another dir?
What puff/category-specific images are already available in the current dir without needing a new migration pass?
Step 5 — Fix plan
Document the recommended fix for each violation in two tiers:

Short-term: a fix using files that already exist, requiring no new dir creation or file migration
Long-term: the correct fix once the sub-page has its own dedicated image dir from its full migration pass
Step 6 — Apply fixes
Fix violations in order of priority. For LP banners, the fix should always use a file that visually represents the sub-category it links to. Cross-promo slide-ins are excluded from all LP rules (they are intentionally shared).

Step 7 — Document the instance
Add an entry to this file under "Review Instances" with the full slot table, violations found, and fixes applied.

Review Instances