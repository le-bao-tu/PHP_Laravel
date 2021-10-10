<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('fonrtend')}}/images/anhtu.jpg"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li  class="active treeview menu-open">
                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Danh mục</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul  style="display:none" class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
                    <li class="active"><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Danh Mục</a></li>
                </ul>

                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Brands</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('brands.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
                    <li class="active"><a href="{{route('brands.index')}}"><i class="fa fa-circle-o"></i>Danh Sách Thương Hiệu</a></li>
                </ul>
                
                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Color</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('color.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
                    <li class="active"><a href="{{route('color.index')}}"><i class="fa fa-circle-o"></i>Danh Sách Màu</a></li>
                </ul>
                
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quản Lý Sản Phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
                    <li class="active"><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>Sản Phẩm</a></li>
                    
                </ul>

                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Phân Loại Sản Phẩm </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('classify.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
                    <li class="active"><a href="{{route('classify.index')}}"><i class="fa fa-circle-o"></i>Sản Phẩm</a></li>
                    
                </ul>
                     
                     
                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Comment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                  
                    <li class="active"><a href="{{route('comments')}}"><i class="fa fa-circle-o"></i>Danh Sách Bình Luận </a></li>
                </ul>

                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới </a></li>
                    <li class="active"><a href="{{route('blog.index')}}"><i class="fa fa-circle-o"></i>Danh Sách Blog </a></li>
                </ul>

                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Blog Cate</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li><a href="{{route('blog-cate.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới </a></li>
                    <li class="active"><a href="{{route('blog-cate.index')}}"><i class="fa fa-circle-o"></i>Danh Sách Blog Cate </a></li>
                </ul>

                <a href="#">
                    <i style="font-size:24px" class="fa">&#xf0e4;</i></i> <span>Quản Lý Phản Hồi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul style="display:none" class="treeview-menu">
                    <li class="active"><a href="{{route('admin.contact')}}"><i class="fa fa-circle-o"></i>Danh Sách Phản Hồi</a></li>
                </ul>

                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quản Lý Đơn Hàng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                    
                <ul style="display:none" class="treeview-menu">
            
                    <li class="active"><a href="{{route('order')}}"><i class="fa fa-circle-o"></i>Danh Sách Đơn Hàng</a></li>
                    
                </ul>

               
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed
                            Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>
                    </span>
                </a>
            </li>
          
           
            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

