         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="<?= BASE_URL ?>" class="nav-link">Website</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="#" class="nav-link">Contact</a>
                 </li>
             </ul>

             <!-- Right navbar links -->
             <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                         <i class="fas fa-expand-arrows-alt"></i>
                     </a>
                     </li>
                     <li class="nav-item"></li>
                     <a class="nav-link" href="<?='?act=logout-admin'?>" onclick="return confirm('Bạn muốn đăng xuất tài khoản')">
                         <i class="fas fa-sign-out-alt"></i>
                     </a>
                    </li>

             </ul>
         </nav>