
<?php
class graduandos extends Controller
{
    private $datos = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
      
    }

    
    public function getGraduandos()
    {

       $d         = $this->model->getGraduandos();
     
       $this->data['code']   = 200;
       $this->data['data']   = $d;
       $this->view->datos = json_encode($this->data);
       $this->view->render("graduandos/index");

    }

    public function getBuscarGraduandos()
    {
       $bus = "%".$_POST['bus']."%"; 
       $d         = $this->model->getBuscarGraduandos($bus);
     
       $this->data['code']   = 200;
       $this->data['data']   = $d;
       $this->view->datos = json_encode($this->data);
       $this->view->render("graduandos/index");

    }

    public function UpdateGraduandos()
    {
        $id = $_POST['id'];
           
        $d         = $this->model->UpdateGraduandos($id);
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("graduandos/index");


    }


    public function getGraduandosPresentes()
    {
           
        $d         = $this->model->getGraduandosPresentes();
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("graduandos/index");


    }

    public function getBuscarGraduandosPresentes()
    {
        $bus = "%".$_POST['bus']."%";
           
        $d         = $this->model->getBuscarGraduandosPresentes($bus);
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("graduandos/index");


    }

    
    public function getGraduandosidOcupacion()
    {
        $id = $_POST['id'];
           
        $d         = $this->model->getGraduandosidOcupacion($id);
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("graduandos/index");


    }
    public function getGraduandosidFamilia()
    {
        $id = $_POST['id'];
           
        $d         = $this->model->getGraduandosidFamilia($id);
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("graduandos/index");


    }


    
    
    


}