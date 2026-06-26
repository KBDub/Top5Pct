LP Image Review Process
This document covers the process for reviewing and fixing image slots on category landing pages (LPs), and records each LP review instance.

Review Process
Step 1 — Audit all image slots
Extract every image reference from the blade file (excluding og-tags). Map each one to a numbered slot with its component, file path, and current status.

Step 2 — Check LP Rules
Apply the four LP rules from docs/new-images.md:

#       Rule
1       Images always reference sub-category image dirs. No dedicated LP-level dir is created.
2       Cross-category referencing is allowed (e.g. an LP can reference both custom-shaped-stickers-decals/ and standard-stickers-decals/).
3       Never modify an image filename. Only reference existing files as-is.
4       Use distinct images. Each image file should appear no more than once per page across all slots. Repeats are a last resort only.
5       Each LP category banner image must be the hero image of the sub-category page it links to. For example, the "DTF Transfers" banner on /custom-apparel links to /custom-apparel/printing-options/dtf-printing, so its image must be dtf-transfers/top5pct-dtf-t-shirt-printing.jpg — the exact category-hero image on that sub-page. A visually matching fallback is only acceptable when the sub-category has no dedicated dir yet, and must be replaced once that sub-page migration is complete.
6       All non-banner image slots on an LP must use images from an import round — meaning any file that exists in a sub-category dir under public/images/. R1 and R2 files (the most recent import rounds, confirmed by their presence in public/new-images/) are preferred where available. R1/R2/R3 refers to Round 1, Round 2, Round 3 of image importing — not to rules. LP category banners are exempt (Rule 5).
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

---

### `/custom-apparel` LP

**File:** `resources/views/pages/custom-apparel/index.blade.php`
**Reviewed:** Jun 26, 2026
**Status:** Complete. All 29 slots clean. Rules 1–6 satisfied. All 29 files distinct. All 16 LP banners use the correct sub-page hero image.

**Context:** This LP was previously audited in `lp.image.review.md` (v1) and passed at that time. Four Rule 5 violations were introduced between v1 and this review because four sub-pages received dedicated image dirs after the v1 audit ran. The banners still pointed to `custom-shirts/` — the filenames were correct but the dirs were stale. Fixed Jun 26.

#### Final slot map (all 29 slots)

| # | Component | File | Dir | Rule 5 | R1/R2/R3 |
|---|---|---|---|---|---|
| 1 | category-hero | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | n/a | R1 |
| 2 | C1 slot 1 | top5pct-dye-sublimation-shirts.jpg | sublimation/ | n/a | R1 |
| 3 | C1 slot 2 | top5pct-brick-vinyl-cresthill.jpg | brick-shirts/ | n/a | R1 |
| 4 | C1 slot 3 | top5pct-spirit-wear-clothing.jpg | spirit-wear/ | n/a | R1 |
| 5 | C1 slot 4 | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | n/a | R1 |
| 6 | C1 slot 5 | top5pct-custom-company-apparel.jpg | corporate-wear/ | n/a | R1 |
| 7 | LP banner "DTF Transfers" | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | sub-page hero | exempt |
| 8 | LP banner "Dye Sublimation" | top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | sub-page hero | exempt |
| 9 | LP banner "Screen Printing" | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | sub-page hero | exempt |
| 10 | LP banner "Embroidery" | top5pct-stitched-embroidered-shirts.jpg | embroidery/ | sub-page hero | exempt |
| 11 | LP banner "Rhinestone Shirts" | top5pct-rhinestone-hoodies-joliet.jpg | rhinestone-apparel/ | sub-page hero, fixed Jun 26 | exempt |
| 12 | LP banner "Glitter Shirts" | top5pct-glitter-t-shirts.jpg | glitter-shirts/ | sub-page hero | exempt |
| 13 | LP banner "Puff Print Shirts" | top5pct-custom-puff-shirts.jpg | puff-shirts/ | sub-page hero, fixed Jun 26 | exempt |
| 14 | LP banner "Glow In The Dark" | top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | sub-page hero | exempt |
| 15 | LP banner "Flock Shirts" | top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | sub-page hero | exempt |
| 16 | LP banner "Brick Shirts" | top5pct-brick-vinyl-hoodies.jpg | brick-shirts/ | sub-page hero, fixed Jun 26 | exempt |
| 17 | LP banner "Holographic Shirts" | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | sub-page hero | exempt |
| 18 | LP banner "Foil Shirts" | top5pct-foil-gold-t-shirt.jpg | foil-shirts/ | sub-page hero, fixed Jun 26 | exempt |
| 19 | LP banner "Reflective Shirts" | top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | sub-page hero | exempt |
| 20 | LP banner "Reunion Shirts" | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | sub-page hero | exempt |
| 21 | LP banner "Spirit Wear" | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | sub-page hero | exempt |
| 22 | LP banner "Corporate Wear" | top5pct-custom-business-shirts.jpg | corporate-wear/ | sub-page hero | exempt |
| 23 | card-image-with-text | top5pct-embroidered-caps.jpg | embroidery/ | n/a | R1 |
| 24 | C2 slot 1 | top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | n/a | R1 |
| 25 | C2 slot 2 | top5pct-flock-hoodie-printing.jpg | flock-shirts/ | n/a | R1 |
| 26 | C2 slot 3 | top5pct-rhinestone-bling-joliet.jpg | rhinestone-apparel/ | n/a | R1 |
| 27 | C2 slot 4 | top5pct-reflective-shirts.jpg | reflective-shirts/ | n/a | R1 |
| 28 | slide-in left | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | n/a | R1 |
| 29 | slide-in right | top5pct-embroidery-beanies.jpg | embroidery/ | n/a | R1 |

*All 29 files distinct. All 13 non-banner slots use R1 import-round sub-category images. All 16 LP banners use the correct sub-page hero including exact dir.*

#### Violations found and fixed

| Banner | Was | Now | Reason |
|---|---|---|---|
| Rhinestone Shirts | custom-shirts/ | rhinestone-apparel/ | Sub-page got dedicated dir after v1 audit |
| Puff Print Shirts | custom-shirts/ | puff-shirts/ | Sub-page got dedicated dir after v1 audit |
| Brick Shirts | custom-shirts/ | brick-shirts/ | Sub-page got dedicated dir after v1 audit |
| Foil Shirts | custom-shirts/ | foil-shirts/ | Sub-page got dedicated dir after v1 audit |

All four filenames were already correct. Only the directory prefix needed updating.

#### Carousel broken images — found and fixed post-audit

Two carousel slots were also broken — same cause (files migrated to dedicated dirs after v1):

| Carousel | Slot | Was | Now |
|---|---|---|---|
| C1 slot 2 | Brick vinyl | custom-shirts/ | brick-shirts/ |
| C2 slot 3 | Rhinestone | custom-shirts/ | rhinestone-apparel/ |

#### Notes

- Six total fixes on this LP — 4 LP banners, 2 carousel slots. All were dir-prefix-only changes; no filenames changed.
- Rules 1, 2, 3, 4, 6 were all clean at time of review. No duplicates.
- The v1 "Puff Print Shirts fallback" note is now resolved — puff-shirts/ dir exists and is in use.
- Pattern to watch: any slot that previously used custom-shirts/ as a catch-all may be broken if that file has since moved to a dedicated dir.

---

### `/signs` LP

**File:** `resources/views/pages/signs/index.blade.php`
**Reviewed:** Jun 26, 2026
**Status:** Complete. All 24 slots clean. Rules 1–6 satisfied. All 24 files distinct. 0 broken images. 9 of 11 LP banners were already correct; 2 fixed Jun 26.

#### Final slot map (all 24 slots)

| # | Component | File | Dir | Rule 5 | R-round |
|---|---|---|---|---|---|
| 1 | category-hero | top5pct-outdoor-sign-joliet.jpg | outdoor-signs/ | n/a | import-round |
| 2 | C1 slot 1 | top5pct-banners-for-trade-shows.jpg | banners/ | n/a | R1 |
| 3 | C1 slot 2 | top5pct-yard-sign-joliet.jpg | yard-signs/ | n/a | import-round |
| 4 | C1 slot 3 | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | n/a | R1 |
| 5 | C1 slot 4 | top5pct-business-signs-joliet-plainfield-romeoville.jpg | business-signs/ | n/a | import-round |
| 6 | C1 slot 5 | top5pct-custom-posters.jpg | posters/ | n/a | import-round |
| 7 | LP banner "Yard Signs" | top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | sub-page hero | exempt |
| 8 | LP banner "Sidewalk Signs" | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | sub-page hero | exempt |
| 9 | LP banner "Banners" | top5pct-sports-banners.jpg | banners/ | sub-page hero | exempt |
| 10 | LP banner "Posters" | top5pct-posters-printed-joliet.jpg | posters/ | sub-page hero | exempt |
| 11 | LP banner "Table Runners" | top5pct-custom-table-cloth-business.jpg | table-runners/ | sub-page hero, fixed Jun 26 | exempt |
| 12 | LP banner "Window Signs" | top5pct-window-signs-rockdale.jpg | window-signs/ | sub-page hero, fixed Jun 26 | exempt |
| 13 | LP banner "Wall Signs" | top5pct-wall-signs.jpg | wall-signs/ | sub-page hero | exempt |
| 14 | LP banner "Floor Signs" | top5pct-wall-signs-for-businesses.jpg | wall-signs/ | sub-page hero | exempt |
| 15 | LP banner "Door Signs" | top5pct-door-signage.jpg | door-signs/ | sub-page hero | exempt |
| 16 | LP banner "Table Cloths" | top5pct-custom-table-cloth.jpg | table-cloths/ | sub-page hero | exempt |
| 17 | LP banner "Parking Signs" | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | sub-page hero | exempt |
| 18 | card-image-with-text | top5pct-backlit-display-signs-joliet.jpg | backlit-signs/ | n/a | import-round |
| 19 | C2 slot 1 | top5pct-banners-near-me.jpg | banners/ | n/a | import-round |
| 20 | C2 slot 2 | top5pct-custom-table-runners.jpg | table-runners/ | n/a | import-round |
| 21 | C2 slot 3 | top5pct-business-signs-joliet-shorewood-channahon.jpg | business-signs/ | n/a | import-round |
| 22 | C2 slot 4 | top5pct-poster-board-joliet.jpg | posters/ | n/a | import-round |
| 23 | slide-in right | top5pct-backlit-company-signs.jpg | backlit-signs/ | n/a | import-round |
| 24 | slide-in left | top5pct-outdoor-banner-signs-joliet.jpg | outdoor-signs/ | n/a | R1 |

*All 24 files distinct. 0 broken images. All 13 non-banner slots use valid sub-category dirs.*

#### Violations found and fixed

| Banner | Was | Now | Reason |
|---|---|---|---|
| Table Runners | top5pct-table-runner-joliet.jpg | top5pct-custom-table-cloth-business.jpg | Sub-page hero had changed |
| Window Signs | top5pct-window-signage.jpg | top5pct-window-signs-rockdale.jpg | Sub-page hero updated during R4 work |

#### Notes

- "business-signs" sub-page exists but has no LP banner on this page — not a violation.
- Floor Signs LP banner correctly uses wall-signs/ dir (floor-signs sub-page has no dedicated dir; it shares wall-signs/).
- Window Signs mismatch introduced by R4 sub-page hero update. Pattern: any sub-page hero update must be followed by an LP banner check.

---

### `/vehicle-graphics` LP

**File:** `resources/views/pages/vehicle-graphics/index.blade.php`
**Reviewed:** Jun 26, 2026
**Status:** Pass. All 15 slots clean. Rules 1–6 satisfied. All 15 files distinct. 0 broken images. All 3 LP banners match sub-page heroes exactly. No fixes needed.

#### Final slot map (all 15 slots)

| # | Component | File | Dir | Rule 5 | R-round |
|---|---|---|---|---|---|
| 1 | category-hero | top5pct-vehicle-graphics.jpg | automobile-graphics/ | n/a | import-round |
| 2 | C1 slot 1 | top5pct-joliet-car-magnets.jpg | vehicle-magnets/ | n/a | R1 |
| 3 | C1 slot 2 | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | dot-decals/ | n/a | R1 |
| 4 | C1 slot 3 | top5pct-dot-decals-semi-truck.jpg | dot-decals/ | n/a | R1 |
| 5 | C1 slot 4 | top5pct-car-decals-white-oaks-library.jpg | vehicle-magnets/ | n/a | R1 |
| 6 | LP banner "Automobile Graphics" | top5pct-auto-window-wraps.jpg | automobile-graphics/ | sub-page hero | exempt |
| 7 | LP banner "Vehicle Magnets" | top5pct-magnet-vehicle-signs-joliet.jpg | vehicle-magnets/ | sub-page hero | exempt |
| 8 | LP banner "DOT Decals" | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | dot-decals/ | sub-page hero | exempt |
| 9 | card-image-with-text | top5pct-vehicle-window-graphics-in-joliet.jpg | automobile-graphics/ | n/a | import-round |
| 10 | C2 slot 1 | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | n/a | import-round |
| 11 | C2 slot 2 | top5pct-dot-truck-decals-joliet.jpg | dot-decals/ | n/a | import-round |
| 12 | C2 slot 3 | top5pct-vehicle-window-graphics-joliet.jpg | automobile-graphics/ | n/a | import-round |
| 13 | C2 slot 4 | top5pct-vehicle-magnets-joliet.jpg | vehicle-magnets/ | n/a | import-round |
| 14 | slide-in left | top5pct-trucking-dot-decals-in-joliet.jpg | dot-decals/ | n/a | R1 |
| 15 | slide-in right | top5pct-vehicle-magnets.jpg | vehicle-magnets/ | n/a | import-round |

*All 15 files distinct. 0 broken images. All 3 LP banners use exact sub-page hero including dir. No fixes needed.*

#### Notes

- No violations found. This LP was clean from the v1 audit and remains clean.
- All three sub-category dirs (automobile-graphics/, vehicle-magnets/, dot-decals/) are well represented across all slot types.

---

### `/promotional-items` LP

**File:** `resources/views/pages/promotional-items.blade.php`
**Reviewed:** Jun 26, 2026
**Status:** 6 fixes applied. 2 Rule 5 violations corrected. 4 broken images fixed (1 gone file replaced, 3 dir path updates custom-shirts/ → flock-shirts/). 4 unfixable Rule 5 deviations noted (sub-pages have no hero image set).

#### Fixes applied

| Slot | Component | Old | New | Reason |
|---|---|---|---|---|
| 6 | LP banner "Custom Mugs" | mugs/top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/top5pct-mugs-custom-plainfield.jpg | Rule 5: sub-page hero is plainfield file |
| 7 | LP banner "Can Koozies" | can-koozies/top5pct-can-koozies.jpg | can-koozies/top5pct-koozie-can-joliet.jpg | Rule 5: sub-page hero is joliet file |
| 13 | C2 slot 1 | mugs/top5pct-printed-mugs-old.jpg | mugs/top5pct-printed-mugs-and-tees.jpg | Broken: file gone from disk, replaced with unused mugs/ file |
| 15 | C2 slot 3 | custom-shirts/top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/top5pct-custom-flock-t-shirt-printing.jpg | Broken: file migrated to flock-shirts/ dir |
| 16 | C2 slot 4 | custom-shirts/top5pct-flock-hoodie-printing.jpg | flock-shirts/top5pct-flock-hoodie-printing.jpg | Broken: file migrated to flock-shirts/ dir |
| 17 | slide-in left | custom-shirts/top5pct-flock-shirt-vinyl.jpg | flock-shirts/top5pct-flock-shirt-vinyl.jpg | Broken: file migrated to flock-shirts/ dir |

#### Final slot map (all 18 slots, post-fix)

| # | Component | File | Dir | Rule 5 | On disk |
|---|---|---|---|---|---|
| 1 | category-hero | top5pct-custom-mugs.jpg | mugs/ | n/a | ✓ |
| 2 | C1 slot 1 | top5pct-koozies-joliet.jpg | can-koozies/ | n/a | ✓ |
| 3 | C1 slot 2 | top5pct-custom-printed-mugs.jpg | mugs/ | n/a | ✓ |
| 4 | C1 slot 3 | top5pct-personalized-koozies-joliet.jpg | can-koozies/ | n/a | ✓ |
| 5 | C1 slot 4 | top5pct-picture-on-mugs.jpg | mugs/ | n/a | ✓ |
| 6 | LP banner "Custom Mugs" | top5pct-mugs-custom-plainfield.jpg | mugs/ | sub-page hero | ✓ |
| 7 | LP banner "Can Koozies" | top5pct-koozie-can-joliet.jpg | can-koozies/ | sub-page hero | ✓ |
| 8 | LP banner "Custom Towels" | top5pct-custom-coffee-mugs.jpg | mugs/ | deviation — no sub-page hero set | ✓ |
| 9 | LP banner "Drink Coasters" | top5pct-custom-koozies.jpg | can-koozies/ | deviation — no sub-page hero set | ✓ |
| 10 | LP banner "Tote Bags" | top5pct-custom-mugs-near-me.jpg | mugs/ | deviation — no sub-page hero set | ✓ |
| 11 | LP banner "Mouse Pads" | top5pct-custom-can-koozies.jpg | can-koozies/ | deviation — no sub-page hero set | ✓ |
| 12 | card-image-with-text | top5pct-printed-mugs.jpg | mugs/ | n/a | ✓ |
| 13 | C2 slot 1 | top5pct-printed-mugs-and-tees.jpg | mugs/ | n/a | ✓ |
| 14 | C2 slot 2 | top5pct-long-lasting-graphic-shirts.jpg | custom-shirts/ | n/a | ✓ |
| 15 | C2 slot 3 | top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | n/a | ✓ |
| 16 | C2 slot 4 | top5pct-flock-hoodie-printing.jpg | flock-shirts/ | n/a | ✓ |
| 17 | slide-in left | top5pct-flock-shirt-vinyl.jpg | flock-shirts/ | n/a | ✓ |
| 18 | slide-in right | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | n/a | ✓ |

*All 18 files distinct. 0 broken images post-fix. Rules 1–4 satisfied. Rule 5 satisfied for 2 of 6 LP banners (mugs, can-koozies). 4 LP banners (towels, drink-coasters, tote-bags, mouse-pads) remain as acceptable deviations pending sub-page hero image setup.*

#### Notes

- Flock migration pattern (established in custom-apparel audit) hit here too — 3 flock files that once lived in custom-shirts/ are now in flock-shirts/. Any future blade referencing custom-shirts/ for flock content is likely broken.
- Towels, Drink Coasters, Tote Bags, Mouse Pads sub-pages exist as blades but have no hero image set on their category-hero component. Their LP banners use mugs/koozies placeholders, which is the best available option until dedicated promo-items imagery is imported for those categories.
- C2 slots 14–18 (cross-category flock/apparel) are Rule 2 exempt as cross-sell content.