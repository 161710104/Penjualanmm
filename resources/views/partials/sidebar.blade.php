<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation">Admin Cars-dream</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="/home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <br>
        <li><span class="app-menu__label"><font color="white" size="2px">&nbsp&nbsp&nbsp&nbspDATA WEBSITE</font></span></li>
        <li><a class="app-menu__item" href="{{ route('mobils.index') }}"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Mobil</span></a></li>
        <li><a class="app-menu__item" href="{{ route('detail_mobil.index') }}"><i class="app-menu__icon fa fa-automobile"></i><span class="app-menu__label"> Detail Mobil</span></a></li>
        <li><a class="app-menu__item" href="{{ route('merkmobil.index') }}"><i class="app-menu__icon fa fa-tags"></i><span class="app-menu__label">Merk Mobil</span></a></li>
        <li><a class="app-menu__item" href="{{ route('beritas.index') }}"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label"> Berita</span></a></li>
        <br>
        <li><span class="app-menu__label"><font color="white" size="2px">&nbsp&nbsp&nbsp&nbspDATA REKAP</font></span></li>
        <li><a class="app-menu__item" href="/admin/mobils_terjual"><i class="app-menu__icon fa fa-book fa-lg"></i><span class="app-menu__label"> Mobil Terjual</span></a></li>
        <br>
        <li><span class="app-menu__label"><font color="white" size="2px">&nbsp&nbsp&nbsp&nbspUSER INTERFACE</font></span></li>
        <li><a class="app-menu__item" href="{{ route('contact.index') }}"><i class="app-menu__icon fa fa-phone fa-lg"></i><span class="app-menu__label"> Contact</span></a></li>
        <li><a class="app-menu__item" href="{{ route('about.index') }}"><i class="app-menu__icon fa fa-user fa-lg"></i><span class="app-menu__label"> About</span></a></li>
        <br>
        <li><span class="app-menu__label"><font color="white" size="2px">&nbsp&nbsp&nbsp&nbspPENGGUNA</font></span></li>
        <li><a class="app-menu__item" href="{{ route('user.index') }}"><i class="app-menu__icon fa fa-user fa-lg"></i><span class="app-menu__label"> User</span></a></li>
      </ul>
    </aside>
    