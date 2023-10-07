<nav>
    <div class="top">
        <a href="" class="box">
            RBS <i class="fa-solid fa-circle-arrow-right arrow"></i>
        </a>
        <a href="" class="box">
            <i class="fa-solid fa-plus"></i> <span>New app</span>
        </a>
        <a href="" class="box">
            <i class="fa-solid fa-chart-column"></i> <span>Charts</span>
        </a>
    </div>
    <div class="bottom">
        <a href="" class="box">
            <i class="fa-solid fa-user"></i> <span>User</span>
        </a>
        <a href="" class="box">
            <i class="fa-solid fa-info"></i> <span>Information</span>
        </a>
        <div class="box">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a  :href="route('logout')" 
                onclick="event.preventDefault();
                this.closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
            </form>
        </div>
    </div>
</nav>