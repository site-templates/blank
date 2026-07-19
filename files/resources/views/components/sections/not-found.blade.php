@props([
    'code' => '404',
    'heading' => 'This page is still blank.',
    'body' => "There's nothing at this address yet. The page may have moved, or it may never have existed — either way, the homepage is one click away.",
    'buttonText' => 'Back to the homepage',
    'buttonLink' => '/',
])
<!--
    The not-found message — shown when a visitor reaches an address that
    doesn't exist. Like the hero, it fills the space between nav and footer.
-->
<section id="not-found" class="flex flex-1 items-center py-16">
    <div class="mx-auto w-full max-w-7xl px-6 text-center lg:px-8">
        <p class="text-sm font-medium tracking-widest text-muted">{{ $code }}</p>

        <h1 class="mx-auto mt-4 max-w-[17ch] font-display text-5xl tracking-tight text-balance sm:text-6xl">
            {{ $heading }}
        </h1>

        <p class="mx-auto mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted sm:text-base/8">
            {{ $body }}
        </p>

        <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <a
                href="{{ $buttonLink }}"
                class="flex items-center gap-2 rounded-lg bg-ink py-3 pr-3 pl-5 text-base font-medium text-white hover:bg-ink/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
                {{ $buttonText }}
                <svg viewBox="0 0 20 20" class="size-5 shrink-0 fill-current" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </div>
</section>
