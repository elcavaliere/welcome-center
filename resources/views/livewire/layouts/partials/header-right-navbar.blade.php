 <nav class="app-right-nav ">
     <div class="cursor-pointer item notifications">
         <span class="icon">
             <i class="far fa-bell"></i>
             <span class="count">
                 12
             </span>
         </span>
     </div>
     <div class="item user-nav">
         <div class="w-8 h-8 bg-gray-300 rounded-full user-avatar">

         </div>
         <div class="menu">
             <div class="item">
                 <a href="">My profile</a>
                 <span class="icon">
                     <i class="fas fa-user"></i>
                 </span>
             </div>
             <div class="item">
                 <a href="">
                     Edit profile
                 </a>
                 <span class="icon">
                     <i class="fas fa-user-cog"></i>
                 </span>
             </div>
             @if (Auth::user()->hasRole('admin'))
                 <div class="item">
                     <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                     <span class="icon">
                         <i class="fas fa-tachometer-alt"></i>
                     </span>
                 </div>
             @endif
             <div class="item logout-btn">
                 <span class="text">
                     Log Out
                 </span>
                 <span class="icon">
                     <i class="fas fa-sign-out-alt"></i>
                 </span>
             </div>
         </div>
     </div>
     <div class="item toggle-menu">
         <span class="icon">
             <i class="fas fa-bars"></i>
         </span>
         <div class="menu">
             <div class="item">
                 <a href="{{ route('trainees.index') }}">Trainees</a>
                 <span class="icon">
                     <i class="fas fa-user-cog"></i>
                 </span>
             </div>
             @if (Auth::user()->hasRole('admin'))
                 <div class="item">
                     <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                     <span class="icon">
                         <i class="fas fa-tachometer-alt"></i>
                     </span>
                 </div>
             @endif
         </div>
     </div>
 </nav>
