@props(['copyright' => '© 2026 My Site. Built with DevDojo Sites.'])
<!--
    Global footer component. Edit once, updates on every page. The copyright
    prop comes from footer.yml (editable in Visual mode's Layout tab).

    The dot-grid class is defined in resources/css/site.css.
-->
<footer class="dot-grid border-t border-ink/10">
    <div class="mx-auto flex w-full max-w-7xl flex-wrap items-center justify-between gap-x-6 gap-y-2 px-6 py-8 text-base text-muted sm:text-sm lg:px-8">
        <p>{{ $copyright }}</p>
        <a href="#" class="hover:text-ink">Back to top</a>
    </div>
</footer>
