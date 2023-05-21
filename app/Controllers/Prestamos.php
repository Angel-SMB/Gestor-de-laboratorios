<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PrestamoModel;
use App\Models\UserModel;
use App\Models\LaboratorioModel;
use App\Models\EquiposModel;
use App\Models\Cap_equiposModel;

class Prestamos extends Controller{
    public function index(){
        $prest = new PrestamoModel();
        $datos_gen=$prest->orderBy('id_prestamo','ASC')->datos_gen();
        $datos_prestamo=$prest->orderBy('id_prestamo','ASC')->findAll();
        $user = new UserModel();
        $lab = new LaboratorioModel();
        $equ = new EquiposModel();
        $datos_user=$user->orderBy('id_usuario','ASC')->findAll();
        $datos_lab=$lab->orderBy('id_laboratorio','ASC')->findAll();
        $datos_equ=$equ->orderBy('id_equipo','ASC')->findAll();
        return view('prestamos',['prestamo'=>$datos_prestamo, 'general'=>$datos_gen, 'usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);
    }

    public function registro(){
        
        $user =new UserModel();
        $lab = new LaboratorioModel();
        $equ = new EquiposModel();
        $datos_user=$user->orderBy('id_usuario','ASC')->findAll();
        $datos_lab=$lab->orderBy('id_laboratorio','ASC')->findAll();
        $datos_equ=$equ->orderBy('id_equipo','ASC')->findAll();
        return view('registro_prestamo',['usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);    
    }


    public function alta_prestamo(){
        $sessions = session();
        $user =new PrestamoModel();
        $equipo = $this->request->getPost('presIdEquipo');
        if($sessions->get('rol') == 2 || $sessions->get('rol') == 3){
            $datos=[
                'fecha_prestamo' =>$this->request->getPost('presFecha'),
                'hora_inicio_prestamo' =>$this->request->getPost('presHoraInicio'),
                'hora_fin_prestamo' =>$this->request->getPost('presHoraFin'),
                'observacion_prestamo' =>$this->request->getPost('presObservacion'),
                'id_laboratorio' =>$this->request->getPost('presIdLaboratorio'),
                'id_usuario' =>$sessions->get('id_usuario'),
                'id_equipo' =>$this->request->getPost('presIdEquipo'),
                ];
        }else{
            $datos=[
                'fecha_prestamo' =>$this->request->getPost('presFecha'),
                'hora_inicio_prestamo' =>$this->request->getPost('presHoraInicio'),
                'hora_fin_prestamo' =>$this->request->getPost('presHoraFin'),
                'observacion_prestamo' =>$this->request->getPost('presObservacion'),
                'id_laboratorio' =>$this->request->getPost('presIdLaboratorio'),
                'id_usuario' =>$this->request->getPost('presIdUsuario'),
                'id_equipo' => $this->request->getPost('presIdEquipo'),
                ];
        }
        ///CONFIRMACION DE LAS CAPACITACIONES
        $cap_equipos = new Cap_equiposModel();
        $cap_usuario =new UserModel();

        $datos_cap=$cap_usuario->capacitaciones_usuario();

        $nombres = $cap_equipos->table('equipo_capacitacion')
        ->select('capacitacion.id_capacitacion, capacitacion.nombre_capacitacion')
        ->join('capacitacion', 'capacitacion.id_capacitacion = equipo_capacitacion.id_capacitacion')
        ->where('equipo_capacitacion.id_equipo', $datos['id_equipo'])
        ->get()
        ->getResultArray();
    
        //Contador de las capacitaciones que necesita el equipo en cuestión
        $conteo = $cap_equipos->table('equipo_capacitacion')
            ->where('equipo_capacitacion.id_equipo', $datos['id_equipo'])
            ->countAllResults();

            //Contador de las capacitaciones que tiene el usuario en cuestión
            $conteo_usuario = $cap_usuario->join('usuario_capacitacion', 'usuario.id_usuario = usuario_capacitacion.id_usuario')
            ->join('capacitacion', 'usuario_capacitacion.id_capacitacion = capacitacion.id_capacitacion')
            ->join('equipo_capacitacion', 'capacitacion.id_capacitacion = equipo_capacitacion.id_capacitacion')
            ->join('equipo', 'equipo_capacitacion.id_equipo = equipo.id_equipo')
            ->where('usuario.id_usuario', $datos['id_usuario'])
            ->where('equipo.id_equipo', $datos['id_equipo'])
            ->countAllResults();


        if($conteo == $conteo_usuario && $datos_cap[0]->id_equipo == $datos['id_equipo']){
        $respuesta=$user->insert($datos);
        $session = session();
        $session->setFlashdata('success', 'El préstamo ha sido creado con éxito.');
        if($sessions->get('rol')==0 || $sessions->get('rol')==1){
            return redirect()->to(base_url('prestamos'));
        }else{
            if($sessions->get('rol') == null || $sessions->get('rol')!=0 || $sessions->get('rol')!=1){
                return redirect()->to(base_url('alumno'));
            }
        }
        echo "Es posible realizar el prestamo";
    }else{
        return view('error_capacitaciones',['nombres'=>$nombres, 'datos_cap'=>$datos_cap]);
        echo "No es posible realizar el préstamo, el equipo solicitado requiere las siguientes capacitaciones: <br>";
        foreach ($nombres as $nombre) {
            $nombreCapacitacion = $nombre['nombre_capacitacion'];
            $capacitacionEncontrada = false;
        
            foreach ($datos_cap as $caps) {
                if ($nombreCapacitacion === $caps->nombre_capacitacion) {
                    $capacitacionEncontrada = true;
                    break;
                }
            }
        
            if (!$capacitacionEncontrada) {
                echo $nombreCapacitacion . "<br>";
            }
        }
        
        
        

    }}

    public function eliminar($id){
        $modelo = new PrestamoModel();
        $modelo->where('id_prestamo', $id)->delete($id);
        return redirect()->to(base_url('prestamos'))->with('status', 'préstamo eliminado correctamente');
    }

    public function editar($id){
        $datos_user=$this->UserModel->findAll();
        $datos_lab=$this->LaboratorioModel->findAll();
        $datos_equ=$this->EquiposModel->findAll();
        return view('mod_prestamo',['usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);
    }

    public function modificar($id){
        $user =new PrestamoModel();
        $datos=[
        'fecha_prestamo' =>$this->request->getPost('EpresFecha'),
        'hora_inicio_prestamo' =>$this->request->getPost('EpresHoraInicio'),
        'hora_fin_prestamo' =>$this->request->getPost('EpresHoraFin'),
        'observacion_prestamo' =>$this->request->getPost('EpresObservacion'),
        'id_laboratorio' =>$this->request->getPost('EpresIdLaboratorio'),
        'id_usuario' =>$this->request->getPost('EpresIdUsuario'),
        'id_equipo' =>$this->request->getPost('EpresIdEquipo'),
        ];
        $user->update($id, $datos);
        $session = session();
        $session->setFlashdata('success', 'El préstamo fue actualizado con éxito.');
        return redirect()->to(base_url('prestamos'));
        }
    


}