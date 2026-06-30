@props([
    'images'   => [],
    'visible'  => 3,
    'interval' => 3500,
])

{{--
    Image display standard: aspect-ratio 4/3 for all slots.
    Center slot: width:600px, aspect-ratio:4/3, max-width:100% (or 50%-gap for vis=2).
    Side slots (vis=3): width:300px, aspect-ratio:4/3, max-width:100%.
    On mobile (< 768px): always collapses to vis=1 regardless of prop.

    All N images are rendered into the DOM on mount with static src values.
    Rotation only changes which items are visible via CSS — no src attribute
    ever changes, so the browser caches each image once and never re-fetches.
--}}

<div
    x-data="{
        images: @js($images),
        vis: {{ (int) $visible }},
        current: 0,
        fading: false,
        timer: null,

        get n()  { return this.images.length; },
        get li() { return (this.current - 1 + this.n) % this.n; },
        get ri() { return (this.current + 1) % this.n; },

        role(idx) {
            if (idx === this.current) return 'center';
            if (this.vis >= 3 && idx === this.li) return 'left';
            if (this.vis >= 2 && idx === this.ri) return 'right';
            return 'hidden';
        },

        slotStyle(idx) {
            const r = this.role(idx);
            if (r === 'center') {
                return this.vis === 2
                    ? 'order:2; width:600px; aspect-ratio:4/3; max-width:calc(50% - 6px);'
                    : 'order:2; width:600px; aspect-ratio:4/3; max-width:100%;';
            }
            if (r === 'left') {
                return 'order:1; width:300px; aspect-ratio:4/3; max-width:100%;';
            }
            if (r === 'right') {
                return this.vis === 2
                    ? 'order:3; width:600px; aspect-ratio:4/3; max-width:calc(50% - 6px);'
                    : 'order:3; width:300px; aspect-ratio:4/3; max-width:100%;';
            }
            return 'display:none;';
        },

        slotClass(idx) {
            const r = this.role(idx);
            const base = 'flex-none overflow-hidden bg-linen transition-all duration-300 ease-out relative';
            if (r === 'center') return base + (this.fading ? ' opacity-0' : ' opacity-100');
            if (r === 'left')   return base + (this.fading ? ' opacity-0' : ' opacity-60');
            if (r === 'right')  return base + (this.fading ? ' opacity-0' : (this.vis >= 3 ? ' opacity-60' : ' opacity-100'));
            return '';
        },

        go(dir) {
            if (this.fading) return;
            this.fading = true;
            setTimeout(() => {
                this.current = (this.current + dir + this.n) % this.n;
                this.fading = false;
            }, 280);
        },
        next() { this.go(1); },
        prev() { this.go(-1); },
        jumpTo(idx) {
            if (idx === this.current) return;
            this.fading = true;
            setTimeout(() => { this.current = idx; this.fading = false; }, 280);
        },
        startTimer() {
            this.stopTimer();
            this.timer = setInterval(() => this.next(), {{ (int) $interval }});
        },
        stopTimer() {
            if (this.timer) { clearInterval(this.timer); this.timer = null; }
        },
        applyResponsive() {
            this.vis = window.innerWidth < 768 ? 1 : {{ (int) $visible }};
        }
    }"
    x-init="applyResponsive(); startTimer(); window.addEventListener('resize', () => applyResponsive())"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    <template x-if="images.length > 0">
        <div>

            <div class="relative overflow-hidden">

                {{-- Image track: all images live in the DOM with fixed src values.
                     Rotation shows/hides via CSS only — no src changes, no re-fetches. --}}
                <div class="flex items-center justify-center gap-3">
                    <template x-for="(img, idx) in images" :key="img.src">
                        <div
                            :style="slotStyle(idx)"
                            :class="slotClass(idx)"
                        >
                            {{-- Sunburst ring on center slot when vis=3 --}}
                            <template x-if="vis >= 3 && idx === current">
                                <div class="absolute inset-0 ring-2 ring-sunburst shadow-gold-xl pointer-events-none z-10"></div>
                            </template>
                            <img
                                :src="img.src"
                                :alt="img.alt"
                                class="w-full h-full object-cover"
                            >
                        </div>
                    </template>
                </div>

                {{-- Prev / Next arrows --}}
                <template x-if="n > 1">
                    <div>
                        <button
                            x-on:click="prev()"
                            class="absolute left-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-charcoal/80 hover:bg-sunburst text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Previous image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            x-on:click="next()"
                            class="absolute right-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-charcoal/80 hover:bg-sunburst text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Next image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </template>

            </div>

            {{-- Dot indicators --}}
            <div class="flex justify-center gap-2 mt-4">
                <template x-for="(img, idx) in images" :key="idx">
                    <button
                        x-on:click="jumpTo(idx)"
                        class="h-1.5 transition-all duration-300"
                        :class="idx === current ? 'w-6 bg-sunburst' : 'w-1.5 bg-charcoal-lighter hover:bg-charcoal-light'"
                        :aria-label="'Go to image ' + (idx + 1)"
                    ></button>
                </template>
            </div>

        </div>
    </template>

</div>
