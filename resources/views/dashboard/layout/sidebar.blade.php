<!-- .aside-menu -->
          <section class="aside-menu has-scrollable">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item {{Request::is('dashboard') ? 'has-active' : 'has-child'}}">
                  <a href="/dashboard" class="menu-link">
                    <span class="menu-icon oi oi-home"></span>
                    <span class="menu-text">Dashboard</span>
                  </a>
                </li>
                @if (auth()->user()->level == 'admin')
                <li class="menu-header">Menu - Kendaraan</li>
                <li class="menu-item {{Request::is('kendaraan') ? 'has-active' : 'has-child'}}">
                  <a href="/kendaraan" class="menu-link">
                    <span class="menu-icon oi oi-vertical-align-top"></span>
                    <span class="menu-text">Kendaraan</span>
                  </a>
                </li>
                <li class="menu-item {{Request::is('rekap') ? 'has-active' : 'has-child'}}">
                  <a href="/rekap" class="menu-link">
                    <span class="menu-icon oi oi-browser"></span>
                    <span class="menu-text">Rekap Kendaraan</span>
                  </a>
                </li>
                <li class="menu-header">Menu - Driver</li>
                <li class="menu-item {{Request::is('driver') ? 'has-active' : 'has-child'}}">
                  <a href="/driver" class="menu-link">
                    <span class="menu-icon oi oi-cloudy"></span>
                    <span class="menu-text">Driver</span>
                  </a>
                </li>
                @endif
                <li class="menu-header">Menu - Pesanan</li>
                <!-- /.menu-item -->
                @if (auth()->user()->level == 'admin')
                <li class="menu-item {{Request::is('pesanan/create') ? 'has-active' : 'has-child'}}">
                  <a href="/pesanan/create" class="menu-link">
                    <span class="menu-icon oi oi-plus"></span>
                    <span class="menu-text">Buat Pesanan</span>
                  </a>
                </li>
                @endif
                <li class="menu-item {{Request::is('pesanan') ? 'has-active' : 'has-child'}}">
                  <a href="/pesanan" class="menu-link">
                    <span class="menu-icon oi oi-terminal"></span>
                    <span class="menu-text">Pesanan</span>
                    @if (auth()->user()->level == 'petugas')
                    <span class="badge badge-warning">need approval</span>
                    @endif
                    @if (auth()->user()->level == 'akomodasi')
                    <span class="badge badge-warning">need approval</span>
                    @endif
                  </a>
                </li>
                <li class="menu-header">Menu - Pemesan</li>
                <li class="menu-item {{Request::is('pemesan') ? 'has-active' : 'has-child'}}">
                  <a href="/pemesan" class="menu-link">
                    <span class="menu-icon oi oi-book"></span>
                    <span class="menu-text">List Pemesan</span>
                  </a>
                </li>
              </ul>
              <!-- /.menu -->
            </nav>
            <!-- /.stacked-menu -->
          </section>
          <!-- /.aside-menu -->