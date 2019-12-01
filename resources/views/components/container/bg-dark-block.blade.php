<div class="bg__dark__block">{{ $slot }}</div>

@pushonce('css')
    <style>
        .bg__dark__block{
            max-width: 90%;
            background: dimgray;
            padding:1rem;
            display: flex;
            justify-content: space-evenly;
            /* flex-flow: row wrap; */
            /* align-content: space-around; */
        }
    </style>
@endpushonce
