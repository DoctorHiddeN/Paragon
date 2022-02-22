<div class="nav-bar-container">
    <form method="post" action="{{route('logout')}}">
    @csrf
        <button class="btn btn-danger" type="submit" name="logout">Logout</button>
    </form>
    <a class="btn btn-danger" href="{{route('ad-home')}}">Home</a></li>   
</div>