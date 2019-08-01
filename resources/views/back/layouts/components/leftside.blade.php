<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/back/img/avatar3.png') }}" class="img-circle" alt="Jurnal Task Adder" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Auth::user()->name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="{{ url('/aadmin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>Menu</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/aadmin/journals/create') }}"><i class="fa fa-angle-double-right"></i> Jurnal yarat</a></li>
                    <li><a href="{{ url('/aadmin/grades/select') }}"><i class="fa fa-angle-double-right"></i> Jurnal yaz</a></li>
                    <li><a href="{{ url('/aadmin/grades/list') }}"><i class="fa fa-angle-double-right"></i> Hesabat</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>