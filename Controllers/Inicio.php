<?php
class Inicio extends Controller{
    public function index()
    {
       $this->views->getViews($this, 'index');
    }
}
?>