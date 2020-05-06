<!--Modal: modalPush-->
<div class="modal fade" id="modalPushAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <form id="fotoFinish" action="/album" method="POST" enctype="multipart/form-data">
            @csrf
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Suba sus Albumes</p>
                </div>

                <!--Body-->
                <div class="modal-body">

                    <div class="form-group">
                        <label>Ingrese el nombre del Album:
                            <input type="text" name="nombreAlbum" id="nombrefichero" style="border: 1px solid #ced4da !important;">
                        </label>
                    </div>

                </div>
                <!--Footer-->
                <div class="modal-footer flex-center">
                    <button type="submit" class="btn btn-info">Crear Album</button>
                    <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
                </div>
            </div>
            <!--/.Content-->
        </form>
    </div>
</div>
<!--Modal: modalPush-->
