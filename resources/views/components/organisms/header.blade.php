@php
    $_title = $title ?? '';
    $_subtitle = $subtitle ?? '';
@endphp

<header>
@component('components.molecules.header-logo', ['href'=>'#', 'title'=>'header-logo']);
@endcomponent
@component('components.molecules.header-slidemenu-button', ['href'=>'#'])
@endcomponent
</header>
