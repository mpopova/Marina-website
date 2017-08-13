jQuery(document).ready(function() {
    alert('yes');
    
        // Service image switcher
    var osrc = $('#service-img').attr('src');
    $('.service-button').hover(
        function(){
            var src = $(this).find('img').attr('src');
            $('#service-img').attr('src',src);
            $('#service-img').attr('src',src);
        },
        function(){
            $('#service-img').attr('src',osrc);
        }
    );
    
});