<?php

require_once("./src/models/EstudianteModel.php");
require_once("./src/clases/Estudiante.php");
require_once("src/utils/Validador.php");
class EstudianteController{
    function viewListaEstudiantes(){
        $estudiante = new EstudianteModel();
        $estudiantes = $estudiante->obtenerEstudiantes();
        include("./src/views/estudiantes/viewListaEstudiantes.php");
    }

    function viewNuevoEstudiante(){
        include("./src/views/estudiantes/viewNuevoEstudiante.php");
    }

    function postNuevoEstudiante(){
        $is_name = Validador::validar_string($_POST["nombre"]);
        $is_surname1 = Validador::validar_string($_POST["apellido1"]);
        $is_surname2 = Validador::validar_string($_POST["apellido2"]);
        $is_run = Validador::validar_string($_POST["run"]);
        $is_grade = Validador::validar_string($_POST["curso"]);

        if($is_name && $is_surname1 && $is_surname2 && $is_run && $is_grade){
            $estudiante = new Estudiante();
            $estudiante->nombre=$_POST["nombre"];
            $estudiante->apellido1=$_POST["apellido1"];
            $estudiante->apellido2=$_POST["apellido2"];
            $estudiante->run=$_POST["run"];
            $estudiante->curso=$_POST["curso"];
            $model = new EstudianteModel();
            echo $model->registrarEstudiante($estudiante);
        } else {
            echo "Un atributo esta vacio";
        }
    }

    function viewEditarEstudiante(){
        $id = $_GET["id"];
        $estudiante = new EstudianteModel();
        $data = $estudiante->buscarEstudiantePorId($id);
        include("./src/views/estudiantes/viewEditarEstudiante.php");
    }

    function editarEstudiante(){
        $id=$_POST["estudiante_id"];
        $estudiante = new Estudiante();
        $estudiante->nombre=$_POST["nombre"];
        $estudiante->apellido1=$_POST["apellido1"];
        $estudiante->apellido2=$_POST["apellido2"];
        $estudiante->run=$_POST["run"];
        $estudiante->curso=$_POST["curso"];
        $model = new EstudianteModel();
        echo $model->editarEstudiantePorId($estudiante,$id);
    }

    function eliminarEstudiante(){
        $id=$_GET["id"];
        $model = new EstudianteModel();
        echo $model->eliminarEstudiantePorId($id);
    }

    function viewRun(){
        include("./src/views/estudiantes/viewRun.php");
    }

    function postRun(){
        $run = $_POST["run"];
        $model = new EstudianteModel();
        $data = $model->buscarEstudiantePorRun($run);
        include("./src/views/estudiantes/viewPostRun.php");
        // print_r($data);
    }
}