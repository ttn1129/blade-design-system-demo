<div class="bg__plain__block">{{ $slot }}</div>

@pushonce('css')
    <style>
        .bg__plain__block{
            max-width: 90%;
            padding:1rem;
            display: flex;
            justify-content: space-evenly;
            /* flex-flow: row wrap; */
            /* align-content: space-around; */
        }
    </style>
@endpushonce
