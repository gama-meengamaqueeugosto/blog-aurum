<!DOCTYPE html>
<html lang="en">

@include("paginas.head")

<body id="page-top">

<!-- Navigation -->
@include("paginas.menu")


<!-- Page Content -->
<div class="container">
    @yield("content")
</div>
<!-- /.container -->
<?php
	Carbon\Carbon::setLocale('pt-BR');
 ?>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/advogadomoderno.js') }}"></script>

</body>

</html>
