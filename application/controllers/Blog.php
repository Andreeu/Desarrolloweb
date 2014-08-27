<?php

class Blog extends CI_Controller {

	public function __construct()
{
parent::__construct();
$this->load->model('Blogmodel');
}


	public function listar(){
$list = $this->Blogmodel-> get_last_ten_entries();
$this->load->view('entries',array('entries' => $list));
}

	public function update(){
$list = $this->Blogmodel-> update_entry();
$this->listar();
}

	public function loadupdate($id){
$entry= $this->Blogmodel-> getbyid($id);
$this->load->view('Update',array( 'id' => $entry->id, 'id' => $entry->title, 'id' => $entry->content, ));
}


	public function loadinsert(){
$this->load->view('insert'); 
}


	public function byid($id){
$entry= $this->Blogmodel-> getbyid($id);
$this->load->view('entry',array('singleentry' => $entry));
}

}


?>
