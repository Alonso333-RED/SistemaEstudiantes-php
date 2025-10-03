<?php
require_once("./src/config/Config.php");
require_once("./src/clases/Estudiante.php");
class EstudianteModel{
    function obtenerEstudiantes(){
        $sql = "SELECT * FROM estudiantes";
        $stm = Config::conectar()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_CLASS,"Estudiante");
    }

    function registrarEstudiante(Estudiante $estudiante){
        $sql = "INSERT INTO estudiantes(nombre,apellido1,apellido2,run,curso)
                VALUES(:nombre,:apellido1,:apellido2,:run,:curso)";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindValue(":nombre",$estudiante->nombre,PDO::PARAM_STR);
        $stm->bindValue(":apellido1",$estudiante->apellido1,PDO::PARAM_STR);
        $stm->bindValue(":apellido2",$estudiante->apellido2,PDO::PARAM_STR);
        $stm->bindValue(":run",$estudiante->run,PDO::PARAM_STR);
        $stm->bindValue(":curso",$estudiante->curso,PDO::PARAM_STR);
        return $stm->execute();
    }

    function buscarEstudiantePorId($id){
        $sql = "SELECT * FROM estudiantes WHERE estudiante_id = :estudiante_id";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindValue(':estudiante_id',$id,PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_OBJ);
    }

    function editarEstudiantePorId(Estudiante $estudiante,$id){
        $sql = "UPDATE estudiantes SET nombre=:nombre,apellido1=:apellido1,apellido2=:apellido2,run=:run,curso=:curso
                WHERE estudiante_id=:estudiante_id";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindValue(":nombre",$estudiante->nombre,PDO::PARAM_STR);
        $stm->bindValue(":apellido1",$estudiante->apellido1,PDO::PARAM_STR);
        $stm->bindValue(":apellido2",$estudiante->apellido2,PDO::PARAM_STR);
        $stm->bindValue(":run",$estudiante->run,PDO::PARAM_STR);
        $stm->bindValue(":curso",$estudiante->curso,PDO::PARAM_STR);
        $stm->bindValue(":estudiante_id",$id,PDO::PARAM_INT);
        $stm->execute();
        return $stm->rowCount();
    }

    function eliminarEstudiantePorId($id){
        $sql = "DELETE FROM estudiantes WHERE estudiante_id = :estudiante_id";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindValue(":estudiante_id",$id,PDO::PARAM_INT);
        $stm->execute();
        return $stm->rowCount();
    }

    function buscarEstudiantePorRun($run){
        $sql = "SELECT * FROM estudiantes WHERE run = :run";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindValue(":run",$run,PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_OBJ);
    }
}