<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @fluxStyles
</head>

<body>
<flux:select variant="listbox" multiple placeholder="Choose industries...">
    <flux:option>Photography</flux:option>
    <flux:option>Design services</flux:option>
    <flux:option>Web development</flux:option>
    <flux:option>Accounting</flux:option>
    <flux:option>Legal services</flux:option>
    <flux:option>Consulting</flux:option>
    <flux:option>Other</flux:option>
</flux:select>

<flux:button href="{{ route('pages.test') }}" wire:navigate>
    Click me!
</flux:button>
</body>

@livewireScripts
@fluxScripts
</html>
