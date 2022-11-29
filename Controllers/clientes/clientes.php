<?php
class clientes extends Controller
{
    private $datos = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
      
    }

    public function getClientesPrestamos()
    {
       $d         = $this->model->getClientesPrestamos();
     
       $this->data['code']   = 200;
       $this->data['data']   = $d;
       $this->view->datos = json_encode($this->data);
       $this->view->render("clientes/index");

    }

    public function getBuscarClientesPrestamos()
    {
           
        $bus = "%".$_POST['bus']."%";

        $d         = $this->model->getBuscarClientesPrestamos($bus);
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("clientes/index");


    }

    

}
