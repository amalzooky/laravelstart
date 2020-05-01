@include('backend.layout.head')
@include('backend.layout.header')




    <!-- Main content -->
     <section class="content">
     	@yield ('content');
    </section>
    <!-- /.content -->
  


@include('backend.layout.footer')
@include('backend.layout.script')