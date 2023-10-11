<?php

namespace App\Controllers;

use App\Models\MobileModel;
use CodeIgniter\Controller;

class MobileRestController extends Controller{

  public function findAll(){
    $mobileModel = new MobileModel();
    return $this->response->setStatusCode(200)->setJSON($mobileModel->findAll());
  }

  public function find($id){
    $mobileModel = new MobileModel();
    return $this->response->setStatusCode(200)->setJSON($mobileModel->find($id));
  }

  public function create(){
    $mobile = $this->request->getJSON();
    $mobileModel = new MobileModel();
    $mobileModel->insert($mobile);
    return $this->response->setStatusCode(200);
  }

  public function update(){
    $mobile = $this->request->getJSON();
    $mobileModel = new MobileModel();
    $mobileModel->update($mobile->id, $mobile);
    return $this->response->setStatusCode(200);
  }

  public function delete($id){
    $mobileModel = new MobileModel();
    $mobileModel->delete($id);
    return $this->response->setStatusCode(200);
  }

}
