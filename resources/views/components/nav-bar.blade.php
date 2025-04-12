<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <x-nav-bar href="/" :active="request()->is('/')">Home</x-nav-bar>
        </li>
        <li class="nav-item">
        <x-nav-bar href="/products" :active="request()->is('products')">Products</x-nav-bar>
        </li>
        <li class="nav-item">
        <x-nav-bar href="/users" :active="request()->is('users')">Users</x-nav-bar>
        </li>
      </ul>
    </div>
  </div>
</nav>