<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <div class="row bg0">
            <!-- Menu -->
            <div class="wrap_menu p-l-45 p-l-0-xl">
                <nav class="menu">
                    <ul class="main_menu">

                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalPushAlbum">Añadir album</button>
                        </li>

                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalPush">Borrar album</button>
                        </li>

                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalPushPicture">Subir Fotos</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($album  as $albumes)
        <!-- Card -->
        <div class="card" style="width: 15%;">

            <!-- Card image -->
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>{{$albumes->nombreAlbum}}</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>

            </div>

        </div>
        <!-- Card -->
        @endforeach
    </div>

</section>
