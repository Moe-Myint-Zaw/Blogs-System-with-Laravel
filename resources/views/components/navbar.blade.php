
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a
            class="navbar-brand"
            href="/"
        >Creative Coder</a>
        <div class="d-flex">
            <a
                href="/#blogs"
                class="nav-link"
            >Blogs</a>
        @can('admin')
        <a 
                href="/admin/blogs"
                class="nav-link"
                >Dashboard</a>
        @endcan
        @auth
            <img
                src="{{auth()->user()->avatar}}"
                width="50"
                height="50"
                class="rounded-circle"
            >
        @endauth
        @guest
            <a
                href="/register"
                class="nav-link"
            >Register</a>
            <a
                href="/login"
                class="nav-link"
            >Login</a>
        @else
            <a
                href=""
                class="nav-link"
            >Welcome {{auth()->user()->name}}</a>
        @endguest
        @auth
        <form 
            action="/logout"
            method="POST">
            @csrf
            <button 
                type="submit"
                class="nav-link btn btn-link"
            >Logout</button>
        </form>
        @endauth 
        </div>
    </div>
</nav>
