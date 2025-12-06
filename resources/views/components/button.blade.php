@props(['type','route','text'])


<button type="button"
        class="w-full rounded-xl cursor-pointer text-white bg-gradient-to-br from-purple-600 to-blue-500
                    hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300
                     dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5
                      text-center leading-5">
    <a href="{{route($route)}}">
        {{$text}}
    </a>
</button>
