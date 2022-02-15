           <div class="app-sidebar-wrapper">
               <div class="app-sidebar sidebar-shadow">
                   <div class="app-header__logo">
                       <a href="{{ route('home') }}" data-toggle="tooltip" data-placement="bottom"
                           title="Contact Office System">
                           {{-- <img width="42" class="rounded" src="http://127.0.0.1:8000/assets/images/avatars/3.jpg" alt=""> --}}
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="lnr-laptop-phone text-dark opacity-8"></i>
                           </div>
                       </a>
                       <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                           <span class="hamburger-box">
                               <span class="hamburger-inner"></span>
                           </span>
                       </button>
                   </div>
                   <div class="scrollbar-sidebar scrollbar-container">
                       <div class="app-sidebar__inner">
                           <ul class="vertical-nav-menu">
                               <li class="app-sidebar__heading">Menu</li>
                               <li class="mm-{{ request()->segment(1) == 'contact' ? 'active' : request()->segment(1)=='filterIndex'?'active':'' }}">
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-rocket"></i>
                                       Contact
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li><a class="mm-{{ request()->segment(2)=='create' ? 'active' : '' }}"
                                               href="{{ route('contact.create') }}">Add Contact</a></li>

                                       <li><a class="mm-{{ request()->segment(2)=='' && request()->segment(1) != 'filterIndex'   ? 'active' : '' }}"
                                              href="{{ route('contact.index') }}">Contact List</a></li>
                                   </ul>
                               </li>

                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="app-sidebar-overlay d-none animated fadeIn"></div>
