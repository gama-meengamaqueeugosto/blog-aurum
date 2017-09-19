<!DOCTYPE html>
<html lang="en">

@include("paginas.head")

<body id="page-top">

    @include("paginas.menu")

    <div class="container">
        @yield("content")
    </div>

    @include("paginas.footer")


    <?php
    Carbon\Carbon::setLocale('pt-BR');
    ?>

    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('js/advogadomoderno.js') }}"></script>

</body>

<script>
    $(document).ready(function(){
        $("#nome").on('blur', function() {
            $words = $("#nome").val().trim().split(' ');
            if($words.length < 2){
                $("#error-name").text("É necessário seu nome completo");
            }else {
                $("#error-name").text("");
            }
        });
    });
</script>

@yield('scripts')

</html>
