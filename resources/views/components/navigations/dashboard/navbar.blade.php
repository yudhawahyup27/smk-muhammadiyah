<header class="pc-header">
  <div class="header-wrapper d-flex justify-content-end align-items-center">
    <ul class="list-unstyled d-flex align-items-center mb-0">
      <!-- User Info Dropdown -->
      <li class="dropdown pc-h-item header-user-profile">
        <a
          class="pc-head-link dropdown-toggle arrow-none d-flex align-items-center bg-primary "
          data-bs-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="false"
          aria-expanded="false"

        >
          <!-- Foto dari Auth::user()->photo atau fallback -->

          <?php
          $nama = Auth::user();

          $charName = substr($nama->name,0,3);
          ?>
          <!-- Nama dari Auth -->
          <span>{{ $charName }}</span>
        </a>
        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <div>
              <h6 class="mb-0">{{ Auth::user()->name }}</h6>
              <small class="text-muted">{{ Auth::user()->email }}</small>
            </div>
            <!-- Tombol Logout -->
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="pc-head-link bg-transparent border-0 ms-3">
                <i class="ti ti-power text-danger"></i>
              </button>
            </form>
          </div>
        </div>
      </li>
    </ul>
  </div>
</header>
