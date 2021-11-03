<footer class="rodape-blog">
    <center>
        <p class="texto-rodape">Chegue mais perto</p>
        <div class="row">
            <div class="col-3"></div>

            <div class="col-2 justify-content-center">
                <a class="link-icone-rodape" href="#"><img class="icone-rodape"
                        src="{{ asset('assets/images/instagram.webp') }}"></a>
            </div>
            <div class="col-2 justify-content-center">
                <a class="link-icone-rodape" href="#"><img class="icone-rodape"
                        src="{{ asset('assets/images/facebook.webp') }}"></a>
            </div>
            <div class="col-2 justify-content-center">
                <a class="link-icone-rodape" href="#"><img class="icone-rodape"
                        src="{{ asset('assets/images/email.webp') }}"></a>
            </div>

            <div class="col-3"></div>
        </div>
        <div class="row" id="desenvolvido-por">
            <div class="col-12 texto-rodape">
                Desenvolvido por
                <a class="link-icone-rodape" href="https://www.instagram.com/moonlander.mkt/"><img
                        class="icone-moonlander" src="{{ asset('assets/images/logo-moonlander.webp') }}"></a>
            </div>
        </div>
    </center>
</footer>

@stack('scripts-js')
</body>

</html>