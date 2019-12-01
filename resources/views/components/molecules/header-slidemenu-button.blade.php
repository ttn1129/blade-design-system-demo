@php
    $_href = $href ?? '';
@endphp

<a href="#" id='slidemenu-btn'>
<div class="header--navbtn">三</div>
</a>

{{-- @push('js')
<script>
        /**
         * dropdownコントロール
         */
         (function($){
            /* humburger menu */
            function removeMenu($shade){
                $shade
                .remove();
                $('#js-slidemenu').slideUp('fast');
            }
            $('#slidemenu-btn').on('click', function(e){
                e.preventDefault();
                var $shade = $('.js-slidemenu-effect')[0];
                if($shade === undefined) {
                    $('<div>')
                    .addClass('js-slidemenu-effect')
                    .on('click', function(){
                        removeMenu(this);
                    })
                    .appendTo($('body'));
                    $('#js-slidemenu').slideDown('fast');
                } else {
                    removeMenu($shade);
                }
            });
        })(jQuery);
        </script>
@endpush --}}

@pushonce('css')
<style>
.header--navbtn {
	display: block;
	position: absolute;
	top: 0;
	right: 0;
	z-index: 30;
	width: 62px;
	height: 62px;
	/* background-image: url(../images/navbtn.png); */
	/* background-size: 62px 62px; */
}
.header--navbtn:hover, .header--navbtn:active {
	background-color: #8bb15a;
}
@media screen and (min-width: 768px) {
	.header--navbtn {
		display: none;
	}
}


</style>
@endpushonce
