<script type="text/javascript" defer>
    $(document).ready(function() {           
        document.title = '{!! $titlePageNavigator !!}'
        $("#body").append('{!! $postagem->body !!}')
    });

    function irPraHome() {
        window.location.href = '/';
    }
    
</script>