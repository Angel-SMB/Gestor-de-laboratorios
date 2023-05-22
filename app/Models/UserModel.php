<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['matricula','nombre_usuario','apellidos_usuario','correo_usuario','telefono_usuario','password_usuario','nss_usuario','id_carrera','rol'];

    public function datos_carr(){
        $builder = $this->db->table('usuario');
        $builder->select('usuario.*, carrera.nombre_carrera');
        $builder->join('carrera', 'usuario.id_carrera = carrera.id_carrera');
        $query = $builder->get();

        return $query->getResult();
    }

    public function datos_capacitacion(){
        $session = session();   
        $matri = $session->get("matricula");
        $builder = $this->db->table('usuario');
        $builder->select('usuario.*, usuario.matricula, usuario_capacitacion.fecha_fin_capacitacion, usuario_capacitacion.tiempo_valido_capacitacion, 
        capacitacion.nombre_capacitacion, capacitacion.duracion_capacitacion, capacitacion.nombre_instructor');
        $builder->join('usuario_capacitacion', 'usuario.id_usuario = usuario_capacitacion.id_usuario');
        $builder->join('capacitacion', 'usuario_capacitacion.id_capacitacion = capacitacion.id_capacitacion');
        $builder->where('matricula', $matri);

        $query = $builder->get();

        return $query->getResult();
    }

    public function capacitaciones_usuario(){
        $session = session();
        $matri = $session->get("matricula");
        $builder = $this->db->table('usuario');
        $builder->select('equipo.id_equipo, capacitacion.nombre_capacitacion');
        $builder->join('usuario_capacitacion', 'usuario.id_usuario = usuario_capacitacion.id_usuario');
        $builder->join('capacitacion', 'usuario_capacitacion.id_capacitacion = capacitacion.id_capacitacion');
        $builder->join('equipo_capacitacion', 'capacitacion.id_capacitacion = equipo_capacitacion.id_capacitacion');
        $builder->join('equipo', 'equipo_capacitacion.id_equipo = equipo.id_equipo');
        $builder->where('matricula', $matri);

        $query = $builder->get();

        return $query->getResultArray();
    }

}