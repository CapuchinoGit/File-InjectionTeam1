<!doctype html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>
.navbar {
	position: relative;
	min-height: 50px;
	margin-bottom: 5px;
}
</style>
</head>
<body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header" >
      <button  data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="#" class="navbar-brand">Login</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
      </ul>
    </div>
  </div>
</div>

<div   class="container">
  <div class="row">
    <h4>Ingresa los datos para iniciar sesión</h4>
    <hr style="margin-top:5px;margin-bottom: 5px;">
    <div class="content"> </div>
    <div class="panel panel-primary">
      <div align="center" class="panel-heading">
        <h3 class="panel-title"></h3>
      </div>
      <div class="panel-body">
        <div align="center" class="col-lg-6">
        <img src="icon.png" width="200" height="200">

<div class="form-group">
                <br/>
              <label>Escriba el nombre de usuario: </label>
                </br>
              <input required="" type="text">
              </br>
              </br>
              <label>Escriba la contraseña: </label>
              </br>
              <input required="" type="Password">
              </br>


</div>
          <button class="btn btn-primary" type="submit">Iniciar sesión</button>
          </form>
          <div align="right" class="conatiner" ><br/><button onclick = "location='/Team1/Boton.php'" class="btn btn-primary"  type="submit">Regresar</button></div>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  


  </tbody>
</table>
</div>
</div>
  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
</html>
