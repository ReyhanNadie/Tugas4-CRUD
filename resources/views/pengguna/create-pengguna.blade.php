
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Tambah Member</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="[[route('beranda')]]">Home</a></li>
              <li class="breadcrumb-item active">Data Member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        
  <div class="card-body">
    <div>
      Masukkan data member
    </div>
    <form action="{{route('simpan-pengguna')}}"  method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" id="nama" name="nama"class="form-control" placeholder="Nama Member">
 

      </div>
      <div class="form-group">
        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
      </div>
      <div class="form-group">
        <input type="date" id="tgllhr" name="tgllhr" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
    </form>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>
