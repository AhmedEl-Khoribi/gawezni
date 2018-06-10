@include('admin.layout.navbar')
@include('admin.layout.sidebar')

    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">      
          <span>Ahmed</span>
        </div>        
@include('admin.layout.footer')