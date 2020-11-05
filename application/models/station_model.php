<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Station_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
     function insert_station($data)
    {
        $this->db->insert('station', $data);
    }
      function insert_departure($data1)
    {
        $this->db->insert('departure', $data1); 
    }
      function insert_break($data2)
    {
        $this->db->insert('break', $data2); 
    }
      function insert_destination($data3)
    {
        $this->db->insert('destination', $data3); 
    }
  function show()
    {
       $query =$this->db->select('*')
			->from('station')
            ->join('departure','departure.id = station.id')
            ->join('break','break.id = station.id')
            ->join('destination','destination.id = station.id')
            ->where('station.id=departure.id')
            ->order_by('`departure`.`d_time` ASC')
			->get();
			return $query;	
    }

}