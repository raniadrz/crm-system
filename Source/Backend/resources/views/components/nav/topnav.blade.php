<nav class="navbar-custom navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="navbar-custom-brand" >CRM</div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill me-2"></i>{{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="{{ route('users.show', auth()->user()) }}">Profile</a></li>
                <li>
                    <form id="logout-form-custom" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Sign out</button>
                    </form>
                </li>
            </ul>
        </div>

</nav>

@section('script')
    @parent
    document.getElementById('logout-form-custom').addEventListener("submit", function(event) {
        event.preventDefault();
        this.submit();
    });
@endsection
