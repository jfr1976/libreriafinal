<?php
class Libros_Controller
{
   function __construct()
   {
      //Creamos una instancia de nuestro mini motor de plantillas
      $this->view = new View();
   }

   public function mostrarIndice()
   {
      //Incluye el modelo que corresponde
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pedimos al modelo todos los libros
      $libros = $Libros_model->getLibros();
      

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libros'] = $libros;
      $config2 = Config::getInstance();
      $variables['ruta'] = $config2->get('IMAGES_FOLDER');

      //Finalmente presentamos nuestra plantilla
      $this->view->show("main.html", $variables);
   }

   public function listar()
   {
      //Incluye el modelo que corresponde
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pedimos al modelo todos los libros
      $libros = $Libros_model->getLibros();
      

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libros'] = $libros;
      $config2 = Config::getInstance();
      $variables['ruta'] = $config2->get('IMAGES_FOLDER');

      //Finalmente presentamos nuestra plantilla
      $this->view->show("libros_listar.php", $variables);
   }

   public function listarEditoriales()
   {
      //Incluye el modelo que corresponde
      require 'models/Editoriales_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Editoriales_model = new Editoriales_Model();

      //Le pedimos al modelo todos los libros
      $editoriales = $Editoriales_model->listEditoriales();

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['editoriales'] = $editoriales;
      $config2 = Config::getInstance();
      $variables['ruta'] = $config2->get('IMAGES_FOLDER');

      //Finalmente presentamos nuestra plantilla
      $this->view->show("editoriales_listar.php", $variables);
   }

   public function ver ()
   {
      if ( !isset ( $_GET [ 'id' ] ) )
         die("No has especificado un identificador de libro.");

      $id = $_GET [ 'id' ];

      //Incluimos el modelo correspondiente
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pide al modelo el libro con id = $id
      $libro = $libros = $Libros_model->getLibro($id);

      if ($libro === null)
         die("Identificador de libro incorrecto");

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libro'] = $libro;
      $config2 = Config::getInstance();
      $variables['ruta'] = $config2->get('IMAGES_FOLDER');

      //Pasamos a la vista toda la información que se desea representar
      $this->view->show('libros_ver.php', $variables);
   }


}
?>