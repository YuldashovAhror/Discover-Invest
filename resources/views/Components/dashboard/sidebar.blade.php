<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashboard</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        <a href="/dashboard">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
        
        <li class="menu-label">Проект Элементы</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Проект</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.project')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
                <li> <a href="{{route('dashboard.project.create')}}"><i class="bx bx-right-arrow-alt"></i>Проект Создавать</a>
                </li>   
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Команда</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.team')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
                <li> <a href="{{route('dashboard.team.create')}}"><i class="bx bx-right-arrow-alt"></i>Команда Создавать</a>
                </li>

            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Новости</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.news')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
                <li> <a href="{{route('dashboard.news.create')}}"><i class="bx bx-right-arrow-alt"></i>Новости Создавать</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Вакансия</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.vacancy')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
                <li> <a href="{{route('dashboard.vacancy.create')}}"><i class="bx bx-right-arrow-alt"></i>Вакансия Создавать</a>
                </li>
            </ul>
        </li>
    
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Продолжить</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.resume')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Контакты</div>
            </a>
            <ul>
                <li> <a href="{{route('dashboard.contact')}}"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
            </ul>
        </li>	
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Словаp</div>
            </a>
            <ul>
                <li> <a href="/admin/create"><i class="bx bx-right-arrow-alt"></i>Список</a>
                </li>
            </ul>
        </li>						
    </ul>
    <!--end navigation-->
</div>