<nav class="header header--blue">
        <div class="header-main">
          <div class="header__logobox header__logobox--white"></div>
          <div class="header-main__items">
            <a href="/utrance-railway/home" class="header-main__item">
              <svg class="header__icon">
                <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-home"></use>
              </svg>
              <span class="margin-l-xxs">Home</span>
            </a>
            <a href="/utrance-railway/news" class="header-main__item">
              <svg class="header__icon">
                <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-news"></use>
              </svg>
              <span class="margin-l-xxs">News</span>
            </a>
            
            <a href="/utrance-railway/ticket-prices" class="header-main__item">
              <svg class="header__icon">
                <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-ticket"></use>
              </svg>
              <span class="margin-l-xxs">Ticket Prices</span>
            </a>
           
            <a href="/utrance-railway/freight-search" class="header-main__item">
              <svg class="header__icon">
                <use xlink:href="/utrance-railway/public/img/svg/sprite2.svg#icon-local_shipping"></use>
              </svg>
              <span class="margin-l-xxs">Freight Booking</span>
            </a>
            <a href="/utrance-railway/view-train" class="header-main__item">
              <svg class="header__icon">
                <use xlink:href="/utrance-railway/public/img/svg/sprite2.svg#icon-train"></use>
              </svg>
              <span class="margin-l-xxs">Trains</span>
            </a>
          </div>
        </div>
        <div class="header-user">
          <?php if(App::$APP->activeUser()['role'] === 'admin') : ?>
          <div class="header-user__notifications">
            <svg class="header__icon">
              <use xlink:href="../../../../utrance-railway/public/img/svg/sprite.svg#icon-chat"></use>
            </svg>
            <span class="header-user__notification-number">13</span>
          </div>
          <?php endif; ?>
          <div class="header-user__details">
             <?php if(App::$APP->user) : ?>
              <a href="#">
                <img
                  src="../../../../utrance-railway/public/img/uploads/<?php echo App::$APP->activeUser()['user_image'];?>.jpg"
                  alt="profile picture"
                  class="header-user__img"
                />
              </a>
              <a href="#" class="margin-l-xs"><?php echo App::$APP->activeUser()['first_name'];?></a>
              <div class="header-user__dropdown">
               <ul>
                 <li>
                   <a href="/utrance-railway/dashboard">
                    <svg class="header-user__dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-gauge"></use>
                    </svg>
                    <span>Dashboard</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/myBookings">
                    <svg class="header-user__dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-suitcase"></use>
                    </svg>
                    <span>My Bookings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/settings">
                    <svg class="header-user__dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-cog"></use>
                    </svg>
                    <span>Settings</span>
                   </a>
                 </li>
                 <li>
                   <a href="/utrance-railway/logout">
                    <svg class="header-user__dropdown-icon">
                      <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-log-out"></use>
                    </svg>
                    <span>Logout</span>
                   </a>
                 </li>
               </ul>
             </div>
             <?php else: ?>
              <svg class="gheader-user__img header-user__img--guest margin-r-xs">
                <use xlink:href="/utrance-railway/public/img/svg/sprite.svg#icon-user"></use>
              </svg>
              <a href="/utrance-railway/login" class="user-name">Login</a>
             <?php endif; ?>  
          </div>
        </div>
    </nav>

      
