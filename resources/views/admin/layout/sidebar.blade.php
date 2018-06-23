  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard('admin')->user()->username }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Countries & Cities</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">{{ App\Country::count()  }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('country.create') }}"><i class="fa fa-circle-o"></i> Add Country</a></li>
            <li><a href="{{ route('city.create') }}"><i class="fa fa-circle-o"></i> Add Cities</a></li>
            <li><a href="{{ route('country.index') }}"><i class="fa fa-circle-o"></i> Show All Countries & Cities </a></li>
          </ul>
        </li>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin/home"><i class="fa fa-circle-o"></i>Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Client Chats</span>
            <span class="pull-right-container">
              @php
                  $count = App\Mail::distinct('sender_id')->count('sender_id');
              @endphp
              <span class="label label-primary pull-right">{{ $count }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/message"><i class="fa fa-circle-o"></i> All Clients Messages</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Clients</span>
            <span class="pull-right-container">
              @php
                $count = App\Client::count();
              @endphp
              <span class="label label-primary pull-right">{{ $count }}</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/users"><i class="fa fa-circle-o"></i> Show Clients</a></li>
            <li><a href="/admin/fakeData"><i class="fa fa-circle-o"></i> Add Fake 10 Users</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Site Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/site_info"><i class="fa fa-circle-o"></i> View Information</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Other Sections In Site</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/about-us"><i class="fa fa-circle-o"></i> About Us</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> FAQ
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/faqs"><i class="fa fa-circle-o"></i> Show FAQ</a></li>
                <li><a href="/admin/createFaqs"><i class="fa fa-circle-o"></i> Add FAQs</a></li>
              </ul>
            </li>
            <li><a href="/admin/contact_us"><i class="fa fa-circle-o"></i> Contact Us</a></li>
          </ul>
        </li>
        @php
        $seen_count = App\AdminToClientMessages::where('is_admin', 'no')->where('is_read', 'seen')->count();

        $message_count = App\AdminToClientMessages::where('is_admin', 'no')->where('is_read', 'unseen')->count();

        $total_count = App\AdminToClientMessages::count();

        @endphp
        <li>
          <a href="/admin/mailbox">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">{{ $seen_count }}</small>
              <small class="label pull-right bg-green">{{ $total_count }}</small>
              <small class="label pull-right bg-red">{{ $message_count }}</small>
            </span>
          </a>
        </li>
        
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">

