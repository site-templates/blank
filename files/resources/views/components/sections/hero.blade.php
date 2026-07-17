@props([
    'badge' => 'Welcome to your new site',
    'heading' => 'Start with a Blank Canvas.',
    'body' => 'DevDojo Sites gives you everything you need to build stunning, high-performance websites. Fully customizable. Totally yours.',
    'background' => '/hero-background.jpg',
    'buttonText' => 'Get started',
    'buttonLink' => '/',
    'secondaryText' => 'Read the docs',
    'secondaryLink' => '#',
])
<!--
    The homepage hero, as a *section component*: the props above are filled by
    the attributes on the section tag (x-sections.hero) in the page, and the
    companion hero.yml declares them as editable fields — that's what powers
    the form when you select this section in Visual mode.

    Prop names are camelCase, and the attribute that fills one is spelled the
    same way (buttonText -> $buttonText).

    The photo and the gradient over it are positioned against the layout's
    wrapper, not this section — that's what lets them run up behind the nav.
    Keep this section unpositioned (no `relative`) or they'll snap back to it.
-->
<section id="hero" class="flex flex-1 items-center py-16">
    <img
        src="{{ $background }}"
        alt=""
        class="absolute inset-0 -z-10 size-full object-cover object-right lg:object-center">

    <!-- The scrim: fades the photo into the canvas so the text stays readable. -->
    <div class="absolute inset-0 -z-10 bg-linear-to-r from-canvas from-20% to-transparent to-65% max-lg:from-canvas/95 max-lg:from-40% max-lg:to-85%"></div>

    <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
        <p class="inline-flex items-center gap-1.5 rounded-full bg-white/30 px-3 py-1.5 text-base text-muted ring-1 ring-white/90 sm:text-sm">
            <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-ink/40" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 4a.75.75 0 0 1 .738.616l.252 1.388A1.25 1.25 0 0 0 6.996 7.01l1.388.252a.75.75 0 0 1 0 1.476l-1.388.252A1.25 1.25 0 0 0 5.99 9.996l-.252 1.388a.75.75 0 0 1-1.476 0L4.01 9.996A1.25 1.25 0 0 0 3.004 8.99l-1.388-.252a.75.75 0 0 1 0-1.476l1.388-.252A1.25 1.25 0 0 0 4.01 6.004l.252-1.388A.75.75 0 0 1 5 4ZM12 1a.75.75 0 0 1 .721.544l.195.682c.118.415.443.74.858.858l.682.195a.75.75 0 0 1 0 1.442l-.682.195a1.25 1.25 0 0 0-.858.858l-.195.682a.75.75 0 0 1-1.442 0l-.195-.682a1.25 1.25 0 0 0-.858-.858l-.682-.195a.75.75 0 0 1 0-1.442l.682-.195a1.25 1.25 0 0 0 .858-.858l.195-.682A.75.75 0 0 1 12 1ZM10 11a.75.75 0 0 1 .728.568.968.968 0 0 0 .704.704.75.75 0 0 1 0 1.456.968.968 0 0 0-.704.704.75.75 0 0 1-1.456 0 .968.968 0 0 0-.704-.704.75.75 0 0 1 0-1.456.968.968 0 0 0 .704-.704A.75.75 0 0 1 10 11Z" clip-rule="evenodd"/>
            </svg>
            {{ $badge }}
        </p>

        <h1 class="mt-8 max-w-[17ch] font-display text-5xl tracking-tight text-balance sm:text-7xl">
            {{ $heading }}
        </h1>

        <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted sm:text-base/8">
            {{ $body }}
        </p>

        <div class="mt-10 flex flex-wrap items-center gap-4">
            <a
                href="{{ $buttonLink }}"
                class="flex items-center gap-2 rounded-lg bg-ink py-3 pr-3 pl-5 text-base font-medium text-white hover:bg-ink/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
                {{ $buttonText }}
                <svg viewBox="0 0 20 20" class="size-5 shrink-0 fill-current" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/>
                </svg>
            </a>
            <a
                href="{{ $secondaryLink }}"
                class="flex items-center gap-2 rounded-lg bg-white/70 py-3 pr-3 pl-5 text-base font-medium text-ink ring-1 ring-ink/10 hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
                {{ $secondaryText }}
                <svg viewBox="0 0 20 20" class="size-5 shrink-0 fill-ink/40" aria-hidden="true">
                    <path d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z"/>
                </svg>
            </a>
        </div>
    </div>
</section>
