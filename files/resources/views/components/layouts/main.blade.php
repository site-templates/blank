@props(['title' => 'Home', 'description' => ''])
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The title below is set per page via the layout component's title attribute -->
    <title>{{ $title }}</title>

    <!-- Fonts: Inter for text, Playfair Display for the display headline. -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <!-- The line below loads Tailwind and inlines your resources/css/site.css -->
    @vite('resources/css/site.css')
</head>
<body class="flex min-h-dvh flex-col bg-canvas font-sans text-ink antialiased">

    <!--
        The nav and the page share this wrapper so that a section can paint a
        background *behind the nav* — the hero's photo does exactly that. This
        is the positioned, isolated ancestor those absolute layers resolve
        against, which is how they cover the header without living inside it.
    -->
    <div class="relative isolate flex flex-1 flex-col overflow-hidden">

        <!-- Components live in resources/views/components/. Edit nav once, it updates everywhere. -->
        <x-nav/>

        <!-- $slot is where each page's content is placed -->
        <main class="flex flex-1 flex-col">
            {{ $slot }}
        </main>

    </div>

    <x-footer/>

</body>
</html>
