


<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <form id="fotoFinish" action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <!--Content-->
        <div class="modal-content text-center">
        <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Suba sus fotos</p>
            </div>

        <!--Body-->
            <div class="modal-body">

                <div class="form-group">
                    <label>Ingrese el nombre de la foto:
                        <input type="text" name="nombre" id="nombrefichero">
                    </label>
                </div>

                <div class="form-group">
                            <label>Seleciona la foto:
                                <input type="file" name="avatar" file="true">
                            </label>
                </div>

                <div>
                    <label for="name">Carpeta donde quieres meter la foto:</label>
                        <select id="albumes" name="nombreAlbum">
                            @foreach ($departamentos as $departamento)
                                <option value=""></option>
                            @endforeach
                        </select>
                </div>
            </div>
        <!--Footer-->
            <div class="modal-footer flex-center">
                <button type="submit"  class="btn btn-info">Subir Foto</button>
                <a type="button"  class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </form>
  </div>
</div>
<!--Modal: modalPush-->
