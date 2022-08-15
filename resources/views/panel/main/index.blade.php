<!DOCTYPE html>
<html lang="pt-br">

@include('panel.template.head')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('panel.template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('panel.template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  @include('panel.template.conteudo')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    @include('panel.template.footer')
</div>
@include('panel.template.scripts')
</body>
</html>
