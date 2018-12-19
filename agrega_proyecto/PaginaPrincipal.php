<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi unidad- Google Drive</title>
    <link rel="shortcut icon" href="img/1200px-Google_Drive_logo.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <link rel="stylesheet" href="fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body style="display: line; position: absolute !important">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="padding: 8px;">
        
        <a class="drive"><img src="img/1200px-Google_Drive_logo.svg.png" style="width: 40px; " >
            <span class="letraDrive">Drive</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="padding: 8px;">

           
            <form class="" style="background-color: rgba(0,0,0,0.04); border: 1px solid rgba(0,0,0,0); width: 100%; display: flex; align-items: center;">
                <div class="btn-group " style="width: 100%;"> 
                <button class="btn" style="border: none; background-color: transparent;position: absolute; margin: 4 !important; padding: 7 !important; height: 100%;">
                    <i class="fas fa-search" style="color: rgba(0,0,0,.5);"></i>
                </button>
                    <div style="width: 100%;">
                        <input type="text" class="inputSearch dropdown-toggle" style="background-color: transparent;" placeholder="Buscar en Drive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu" style="width: 100%;">
                            <button class="dropdown-item" id="btn_image"><img style="width:30px" src="img/pdf_image.png"><span style="padding: 20px">Archivos PDF</span></button>
                            <button class="dropdown-item" id="btn_word"><img style="width:30px" src="img/logo-word.png"><span style="padding: 20px">Documento de Texto</span></button>
                            <button class="dropdown-item" id="btn_excel"><img style="width:30px" src="img/iconoexcel.png"><span style="padding: 20px">Hojas de Calculo</span></button>
                            <button class="dropdown-item" id="btn_PowerPoint"><img style="width:30px" src="img/PowerPoint_logo.svg.png"><span style="padding: 20px">Presentaciones</span></button>
                            <button class="dropdown-item" id="btn_Camera"><img style="width:30px" src="img/Camera.png"><span style="padding: 20px">Fotos e Imagenes</span></button>
                            <button class="dropdown-item" id="btn_video"><img style="width:30px" src="img/video_logo.png"><span style="padding: 20px">videos</span></button>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Más herramientas de búsqueda</a>
                        </div>
                    </div>
                <button class="btn" style="border: none; background-color: transparent; position: absolute; position: unset;  margin: 4  !important; padding: 7 !important;">
                    <i class="fas fa-angle-down" style="color: rgba(0,0,0,.5);"></i>
                </button>
            </div>
            </form>

            <div style="display:flex; padding-left: 4px">
                <button type="button" class="btn btn-light icono">
                    <i class="fas fa-question-circle" style="color: rgba(0,0,0,.5);"></i>
                </button>
    
                <div class="btn-group ">
                    <button type="button" class="btn btn-light icono dropdown-toggle" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="fas fa-cog" style="color: rgba(0,0,0,.5);"></i>
                    </button>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <a class="dropdown-item" href="#">Descarga y Copia de Seguridad y Sincronización para Windows</a>
                        <a class="dropdown-item" href="#">convinaciones de teclas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
            
            <div style="display:flex; padding-left: 32px; padding-right: 4px">
                <button type="button" class="btn btn-light icono">
                    <i class="fas fa-th" style="color: rgba(0,0,0,.5);"></i>
                </button>

                <button type="button" class="btn btn-light" style="border-radius: 100%;" >
                    <i class="fas fa-bell" style="color: rgba(0,0,0,.5);"></i>
                </button>
                
                <button type="button" class="btn btn-light" style="border-radius: 100%; box-sizing: border-box; padding: 6px;" >
                    <img class="rounded-circle img-thumbnail" src="#" >  
                </button>
            </div>
        </div>
    </nav>
    
    <div style="padding-left: 260px; padding-top: 67px; width: 100%; position: absolute !important; display: flex">
        <div style="display: flex; height: 25px;">
            
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn-light" style="border-radius: 15%; padding: 6px; height: 36px; " id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span style="color: black;">Mi Unidad</span>
                    <i class="fas fa-angle-down" style="color: rgba(0,0,0,.5);"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div style="position: absolute; right: 10px;">
                <button type="button" class="btn btn-light icono">
                        <i class="fas fa-th-list" style="color: rgba(0,0,0,.5);"></i>
                </button>

                <button type="button" class="btn btn-light" style="border-radius: 100%;" >
                        <i class="fas fa-info-circle" style="color: rgba(0,0,0,.5);"></i>
                </button>
            </div>
        </div>
        <hr>
    </div>

    <div style="height: 100%; padding-top: 90px; padding-left: 5px; display: block; max-width: 260px;">

        <div class="btn-group">
        
            <button type="button" class=" btn btn-nuevo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="padding-left: 28px; font-weight: bold;"><i class="fas fa-plus"></i>Nuevo</span> 
            </button>
            <div class="dropdown-menu" style="position:absolute">
            <a class="dropdown-item" href="#"><i class="fas fa-folder-plus"></i><span style="padding: 20px">Carpeta</span></a>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" id="SubArchivo" type="button" ><i class="fas fa-file-upload"></i><span style="padding: 20px">Subir Archivo</span></button>
            <button class="dropdown-item" id="SubCarpeta" type="button" ><i class="fas fa-folder"></i><span style="padding: 20px">Subir Carpeta</span></button>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><img style="width:30px" src="img/logo-word.png"><span style="padding: 20px">Documento de Texto</span></a>
            <a class="dropdown-item" href="#"><img style="width:30px" src="img/iconoexcel.png"><span style="padding: 20px">Hojas de Calculo</span></a>
            <a class="dropdown-item" href="#"><img style="width:30px" src="img/PowerPoint_logo.svg.png"><span style="padding: 20px">Presentaciones</span></a>
            <a class="dropdown-item" href="#"><img style="width:30px" src="img/Camera.png"><span style="padding: 20px">Fotos e Imagenes</span></a>
            </div>
            <form style="display:none">
            <input type="file" id="fileElem" name="fileElem" style="display:none" >
            </form>

        </div>

        <div class="btn-group-vertical" style="padding-top: 10px; box-sizing: border-box; width: 100%;">
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 6px;">
                <i class="fas fa-caret-right"></i>
                <i class="fas fa-laptop"></i>
                <span style="font-size: 13px; font-weight: bold;">Mi unidad</span> 
            </button>
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 6px;">
                <i class="fas fa-caret-right"></i>
                <i class="fas fa-desktop"></i>
                <span style="font-size: 13px; font-weight: bold;">Ordenadores</span> 
            </button>
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 24px;">
                <i class="fas fa-user-friends"></i>
                <span style="font-size: 13px; font-weight: bold;">Compartido conmigo</span>
            </button>
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 24px;">
                <i class="far fa-clock"></i>
                <span style="font-size: 13px; font-weight: bold;"> Reciente</span>
            </button>
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 24px;">
                <i class="fas fa-star"></i>
                <span style="font-size: 13px; font-weight: bold;">Destacado</span> 
            </button>
            <button type="button" class="btn btn-light" style="text-align: left; padding-left: 24px;">
                <i class="fas fa-trash"></i>
                <span style="font-size: 13px; font-weight: bold;">Papelera</span> 
            </button>
        </div>
        <hr>
        <button type="button" class="btn btn-light" style="width: 100%;">
            <i class="fas fa-cloud"></i>
            <span style="font-size: 13px; font-weight: bold;">Copias de Seguridad</span> 
        </button>
        <hr>
        <div style="width: 100%; text-align:left; padding-left: 20px;">
            <i class="fas fa-cloud-upload-alt"></i>
            <span style="font-size: 13px; font-weight: bold; color: black">Almacenamiento</span> 
            <button type="button" class="btn btn-link">ADQUIRIR MÁS 
                ALMACENAMIENTO</button>
        </div>

    </div>

    <div class="columna" style="padding-left: 270px; width: 100%; position: relative !important; display:block" id="contenido_archivos">  
    <?php

        //conexion

        $conexion = oci_connect("DRIVE","oracle",'XE');

        /*if(!$conexion){
        $m = oci_error();
        echo $m['message'],"n";
        exit;
        }else{
        echo "Conexion con Exito a Oracle!";
        }*/

        $stid = oci_parse($conexion, 'SELECT codigo_tipo_arhivo,nombre,ubicacion,descripcion FROM tbl_archivo');
        oci_execute($stid);


        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {

            $cssIcono="";
                switch($row[0]){
                case "1":
                    $cssIcono = "logo-word.png";
                break;
                case "2":
                    $cssIcono = "pdf_image.png";
                break;
                case "3":
                    $cssIcono = "iconoexcel.png";
                break;
                case "4":
                    $cssIcono = "PowerPoint_logo.svg.png";
                break;
                default:
                    $cssIcono = "arch.png";
                break;
            } 

            echo '<div class="card" style="padding:8px; margin:3px; display:block; position:relative;">';
            echo '<img style="width:70px" class="card-img-top" src="img/'.$cssIcono.'" alt="Card image cap">';
            echo '<div class="card-body row">';
            echo '<h5 class="card-title">'.$row[1].'</h5>';
            echo '<p class="card-text">'.$row[3].'</p>';
            echo '<a href="#" class="btn btn-primary">'.$row[1].'</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    
    </div>

    <div class="modal fade" id="modal-SubirArch" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subir Archivo</h5>
                <button type="button" class="close btn-light rounded-circle" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-AgregarPin">Crear Pin</button>
            </div>
            </div>
        </div>
    </div>

    <script src="js/lena.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/ControladorInicio.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>