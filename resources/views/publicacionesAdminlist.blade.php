<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
     <link href="css/app.css" rel="stylesheet">
    <link href="css/publicacionesAdminlist.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  </head>

  <body>
    <div class="container">
      <div class="row">
        <h4 class="pull-left">Bootstrap Snipp for Datatable</h4>
          <a class="btn icon-btn btn-success pull-right" href="#" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Nuevo</a>
        <div class="col-md-12">
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
              <thead>
                <th>ID</th>
                <th>Referencia</th>
                <th>Publicidad</th>
                <th>Categoría</th>
                <th>Título</th>
                <th>País</th>
                <th>Ciudad</th>
                <th>Fecha de inicio</th>
                <th>Fechad de fin</th>
                <th>Activo/Inactivo</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>  
                <tr>
                  <td>1</td>
                  <td>ES54892</td>
                  <td>Más vistos</td>
                  <td>Escort</td>
                  <td>Sabina</td>
                  <td>Panamá</td>
                  <td>Ciudad de panamá</td>
                  <td>26/08/2018</td>
                  <td>26/09/2018</td>
                  <td class="text-center" style="color: green">
                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                      <span class="glyphicon glyphicon-ok"></span>
                    </p>
                  </td>
                  <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                      <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                        <span class="glyphicon glyphicon-pencil"></span>
                      </button>
                    </p>
                  </td>
                  <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                      <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>MA54892</td>
                  <td>Novedades</td>
                  <td>Masajes</td>
                  <td>Masajes Lupi</td>
                  <td>Panamá</td>
                  <td>Ciudad de panamá</td>
                  <td>26/05/2018</td>
                  <td>26/07/2018</td>
                  <td class="text-center" style="color: red">
                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                      <span class="glyphicon glyphicon-remove"></span>
                    </p>
                  </td>
                  <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                      <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                        <span class="glyphicon glyphicon-pencil"></span>
                      </button>
                    </p>
                  </td>
                  <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                      <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
          </div>
          <form action="">
            <div class="modal-body">
              <div class="form-group col-lg-4">
                <label for="Usuario">Usuario</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="guillermo morillo" id="1">Guillermo Morillo</option>
                  <option value="Gabriel Suarez" id="2">Gabriel Suarez</option>
                  <option value="Sabina Cartes" id="3">Sabina Cartes</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="tipo_publicacion">Tipo de publicación</label>
                <select class="form-control" id="tipo_publicacion" name="tipo_publicacion">
                  <option value="">-- Seleccionar --</option>
                  <option value="Slider">Slider</option>
                  <option value="Más vistos">Más vistos</option>
                  <option value="Novedades">Novedades</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">Escort</option>
                  <option value="Masajes">Masajes</option>
                  <option value="Club">Club</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="titulo">Título de la publicación <span class="small"><strong>(Suele ser el nombre artístico)</strong></span></label>
                <input class="form-control " type="text" placeholder="Título de la publicación" id="titulo">
              </div>
              <div class="form-group col-lg-4">
                <label for="telefono">Teléfono</label>
                <input class="form-control " type="text" placeholder="teléfono móvil" id="telefono">
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Edad</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">18</option>
                  <option value="Masajes">19</option>
                  <option value="Club">20</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Nacionalidad</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">Panamá</option>
                  <option value="Masajes">Venezuela</option>
                  <option value="Club">Colombia</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Precio</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">0 - 100</option>
                  <option value="Masajes">100 - 200</option>
                  <option value="Club">200 - 300</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">País</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">Panamá</option>
                  <option value="Masajes">Venezuela</option>
                  <option value="Club">Colombia</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Ciudad</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">Ciudad de panama</option>
                  <option value="Masajes">Coclé</option>
                  <option value="Club">Chamberí</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="categoria">Etnicidad</label>
                <select class="form-control" id="categoria" name="categoria">
                  <option value="">-- Seleccionar --</option>
                  <option value="Escort">Option 1</option>
                  <option value="Masajes">Option 2</option>
                  <option value="Club">Option 3</option>
                </select>
              </div>

              <div class="form-group col-lg-12">
                <label for="categoria">Servicios</label><br>
                  <div class="col-lg-3">
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  </div>
                  <div class="col-lg-3">
                     <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  </div>
                  <div class="col-lg-3">
                     <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  </div>
                  <div class="col-lg-3">
                     <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  </div>
                  
              </div>
              <div class="col-lg-6 ">
                <div class="form-group pull-right">
                  <div><label for="categoria">Activo/Inactivo</label></div>
                  <label class="radio-inline"><input type="radio" name="optradio">Option 1</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Option 2</label>
                </div>
                <div class="form-group pull-left">
                  <div><label for="categoria">Atiende a</label></div>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                  <br>
                  <div><label for="categoria">Idiomas</label></div>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                </div>
              </div>
              <div class="form-group col-lg-12">
                <label for="categoria">Descripción</label>
                <textarea rows="8" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <div class="row">
                  <h4 class="info-text"> Drop us a small description.</h4>
                  <fieldset class="form-group">
                      <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                      <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                  </fieldset>
                  <div class="preview-images-zone"></div>
                </div>
              </div>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
        </div> 
      </div>
    </div>
  </body>
  <script src="/js/app.js"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="/js/publicacionesAdminlist.js"></script>
  <script type="text/javascript">
var nextinput = 0;
function AgregarCampos(){
nextinput++;
campo = '<li id="rut'+nextinput+'">Campo:<input type="file" size="20" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /></li>';
$("#campos").append(campo);
}
</script>
</html>