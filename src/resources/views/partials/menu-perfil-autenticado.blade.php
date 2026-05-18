<div class="flex-shrink-0 dropdown ms-lg-2 mt-2 mt-lg-0">
    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
        aria-expanded="false">
        <img src="https://plus.unsplash.com/premium_photo-1689530775582-83b8abdb5020?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGVzc29hJTIwYWxlYXQlQzMlQjNyaWF8ZW58MHx8MHx8fDA%3D"
            alt="mdo" width="32" height="32" class="rounded-circle" />
    </a>
    <ul class="dropdown-menu dropdown-menu-end text-small shadow">
        <li>
            <p class="mx-1">{{ auth()->user()->name }}</p>
        </li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Sair</button>
            </form>
        </li>
    </ul>
</div>
