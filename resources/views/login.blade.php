<div>
    @guest
        <form method="POST" action="{{route('register')}}">
            @csrf
            <label for="author">Author</label>
            <input type="text" name="author" required>
            <input type="submit" value="Save">
        </form>
    @endguest
    @auth
        @include('partials.dashboard')
    @endauth
</div>
