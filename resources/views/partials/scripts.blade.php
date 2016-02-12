<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.4/vue.min.js"></script>
<script src="/js/all.js"></script>
<script>
    (function(){
        $(".button-collapse").sideNav();

        $(".dropdown-button").dropdown();

        $('.tooltipped').tooltip({delay: 50});

        $('.materialboxed').materialbox();

        $('.carousel.carousel-slider').carousel({full_width: true});
        
        $('.carousel').carousel();
        
        $('.parallax').parallax();
        
        $('.modal-trigger').leanModal();
        
        $('.scrollspy').scrollSpy();
                
        $('.datepicker').pickadate({selectYears: 20});
        
        $('select').not('.disabled').material_select();

    })();
</script>

@yield('scripts')