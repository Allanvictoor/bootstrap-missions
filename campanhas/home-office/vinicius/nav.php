<nav class="navbar navbar-expand-lg sticky-top altura-nav">
    <img src="https://www.codefest.co.uk/demo/codelander/assets/images/logo.png" height="75%" class="img-nav" alt="">
    <div class="d-flex">
        <a href="#" class="list-nav"><b>Home</b></a>
        <a href="#" class="list-nav"><b>Services</b></a>
        <a href="#" class="list-nav"><b>Pricing</b></a>
        <a href="#" class="list-nav"><b>Clients</b></a>
        <a href="#" class="list-nav"><b>News</b></a>
        <a href="#" class="list-nav"><b>Contact</b></a>
        <div class="btn-nav"><b>SignUp</b></div>
</nav>
<script>
    $(window).on("scroll", function(){
        if($(window).scrollTop()) {
            $('nav').addClass('corNav');
        }
        else {
            $('nav').removeClass('corNav');
        }
    });
</script>