@php
    $_title = $title ?? '';
    $_href = $href ?? '';
@endphp

<a href="{{ $_href }}">
    <div class="header-logo">
    @component('components.atoms.title', ['text'=>$_title])
    @endcomponent
    </div>
</a>

@pushonce('css')
<style>
    .header-logo{
        margin: 0;
    	width: 100px;
	    height: 22px;
        /* background-image: url(../images/logo.png);
    	background-size: 100px 22px;
	    background-repeat: no-repeat;
	    text-indent: -9999px; */
    }
    @media screen and (min-width: 768px) {
        /* ヘッダー */
        .header-logo {
            width: 200px;
            height: 44px;
            background-size: 200px 44px;
        }
    }
</style>
@endpushonce
