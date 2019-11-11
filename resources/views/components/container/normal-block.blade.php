<div class="normal__block">{{ $slot }}</div>

@pushonce('css')
    <style>
        .normal__block{
            padding:1rem;
            display: flex;
            justify-content: space-evenly;
            /* flex-flow: row wrap; */
            /* align-content: space-around; */
        }
    </style>
@endpushonce
