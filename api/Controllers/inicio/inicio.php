<?php
class inicio extends Controller
{
    private $datos = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
      
    }

    public function getOcupacion()
    {
       $d         = $this->model->getOcupacion();
     
       $this->data['code']   = 200;
       $this->data['data']   = $d;
       $this->view->datos = json_encode($this->data);
       $this->view->render("inicio/index");

    }

    public function getFamilia()
    {
           
        $d         = $this->model->getFamilia();
      
        $this->data['code']   = 200;
        $this->data['data']   = $d;
        $this->view->datos = json_encode($this->data);
        $this->view->render("inicio/index");


    }

    

}
