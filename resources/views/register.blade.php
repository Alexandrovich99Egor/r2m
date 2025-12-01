<div>

    <form method="POST" action="{{route('register')}}">
        @csrf
        <label for="author">
            Name</label>
        <input type="text" name="name" required>
        <label for="author">
            Email</label>
        <input type="email" name="email" required>
        <label for="password">
            Password
        </label>
        <input type="password" name="password" required>
        <input type="submit" value="save">
    </form>
</div>
