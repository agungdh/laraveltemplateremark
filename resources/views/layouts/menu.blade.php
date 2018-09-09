<li class="site-menu-category">Main Menu</li>

<li class="site-menu-item">
  <a class="animsition-link" href="{{ url('/') }}">
    <i class="site-menu-icon wb-dashboard"></i>
    <span class="site-menu-title">Dashboard</span>
  </a>
</li>

<li class="site-menu-item has-sub">
<a href="javascript:void(0)">
    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
    <span class="site-menu-title">Forms</span>
    <span class="site-menu-arrow"></span>
</a>
<ul class="site-menu-sub">
  <li class="site-menu-item">
    <a class="animsition-link" href="{{ url('/table') }}">
      <span class="site-menu-title">Table</span>
    </a>
  </li>
  <li class="site-menu-item">
    <a class="animsition-link" href="{{ url('/form') }}">
      <span class="site-menu-title">Form</span>
    </a>
  </li>
</ul>
</li>

<li class="site-menu-item">
  <a class="animsition-link" href="{{ route('user.create') }}">
    <i class="site-menu-icon wb-user"></i>
    <span class="site-menu-title">User</span>
  </a>
</li>