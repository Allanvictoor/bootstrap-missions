<div class="container-fluid border-bottom-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-2 col-sm-12">
                        <div class="row">
                            <div class="img-nav">
                                <img src="https://www.vivaintra.com/media/images/v2/logo-2017.png" width="95%"
                                     class="py-3"
                                     alt="">
                            </div>
                            <div class="hamburg">
                                <i class="fas fa-bars" id="icon-hamburg"></i>
                                <i class="fas fa-times" id="icon2-hamburg"></i>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('#icon-hamburg').click(function () {
                                $('.menu-hamburg').show();
                                $('#icon-hamburg').hide().delay(5000);
                                $('#icon2-hamburg').show();
                            });
                            $('#icon2-hamburg').click(function () {
                                $('.menu-hamburg').hide();
                                $('#icon2-hamburg').hide().delay(5000);
                                $('#icon-hamburg').show();
                            });
                        });
                    
                    </script>
                    <div class="col-lg-8 menu-hamburg">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Starter</b></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Enterprise</b></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Preços</b></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Blog</b></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Parceiros</b></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <a class="w-100 color-center">
                                        <h5 class="d-flex justify-content-center py-4"><b>Contato</b></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 menu-hamburg">
                        <div class="row">
                            <div class="btn-group ml-auto mr-2 my-3">
                                <button type="button" class="btn btn-login dropdown" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Login
                                </button>
                                <div class="dropdown-menu">
                                
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn dropdown-toggle border border-dark my-3"
                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <img src="https://www.vivaintra.com/media/images/br.png" width="50%" alt="">
                                    |
                                </button>
                                <div class="dropdown-menu">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
