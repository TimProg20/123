@section('aside')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	<li class="nav-item">
            <a href="registration" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Регистрация</p>
            </a>
         </li>
	<li class="nav-item">
            <a href="login" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Логин</p>
            </a>
         </li>
	<li class="nav-item">
            <a href="/" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Главная</p>
            </a>
         </li>
	<li class="nav-item">
            <a href="{{route('create')}}" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Создать</p>
            </a>
         </li>
         <li class="nav-item">
            <a href="index" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Пример</p>
            </a>
         </li>
         <li class="nav-item">
            <a href="logout" class="nav-link">
        	<i class="nav-icon fas fa-file"></i>
            	    <p>Выйти</p>
            </a>
         </li>
    
    </ul>
</aside>