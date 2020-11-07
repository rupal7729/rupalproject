<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function insert($tbl,$data)
	{
		$this->db->insert($tbl,$data);
	}

	public function select($tbl)
	{
		$qry=$this->db->get($tbl);
		return $qry->result();
	}
	/*public function select_per($tbl)
	{
		$this->db->select('*,((price-salePrice)*100/price) as percent');
        $this->db->from($tbl);
		$qry=$this->db->get();
		return $qry->result();
	}*/

	public function select_flow($tbl,$field,$flow,$lmt)
	{

		//$this->db->where($wh);
		$this->db->order_by($field,$flow);
		$this->db->limit($lmt);
		$qry=$this->db->get($tbl);
		return $qry->result();

	}
    public function select_flow_wh($tbl,$field,$flow,$lmt,$wh)
	{

		$this->db->where($wh);
		$this->db->order_by($field,$flow);
		$this->db->limit($lmt);
		$qry=$this->db->get($tbl);
		return $qry->result();

	}


	public function select_desc($tbl,$field,$flow,$lmt)
	{
	    $this->db->limit($lmt);
		$this->db->order_by($field,$flow);
		$query = $this->db->get($tbl);
		return $query->result();
	}

	public function select_desc_wh($tbl,$wh,$field,$flow,$lmt)
	{
		$this->db->where($wh);
	    $this->db->limit($lmt);
		$this->db->order_by($field,$flow);
		$query = $this->db->get($tbl);
		return $query->result();
	}

public function count_total_rating($tbl,$field,$wh)
{
    $this->db->select('AVG('.$field.') as avarage,COUNT('.$field.') as count');
    $this->db->where($wh);
    $this->db->from($tbl);
    return $query = $this->db->get()->result_array();
}

public function count_total_rating_groupby($tbl,$field,$arr)
{
    $this->db->select('AVG('.$field.') as avarage');
    $this->db->from($tbl);
    $c=count($arr);
	 	$key=array_keys($arr);
	 	$val=array_values($arr);
	 	for($i=0;$i<$c;$i++)
	 	{
	 		$this->db->join($key[$i],$val[$i]);

	 	}
	 	$q=$this->db->get();
  	 return $q->result();
}

//SELECT round(avg(r.rating),2) AS `average_rate` FROM tblReview r join tblProduct p on r.productid=p.productid GROUP BY p.productid DESC



	public function select_wh_wh_in($tbl,$field,$wh,$wh1)
	{
		$this->db->where($wh1);
		$this->db->where_in($field,$wh);
		$qry=$this->db->get($tbl);
		return $qry->result();
	}


	public function select_wh_in($tbl,$field,$wh)
	{

		$this->db->where_in($field,$wh);
		$qry=$this->db->get($tbl);
		return $qry->result();
	}

    public function select_wh($tbl,$wh)
	{
	 	$qry=$this->db->get_where($tbl,$wh);
	 	return $qry->result();
	}

	public function update($tbl,$data,$wh)
	{
  		$this->db->where($wh);
  		$this->db->update($tbl,$data);
    }
    public function select_join($tbl,$arr)
	{
	 	$this->db->select('*');
	 	$this->db->from($tbl);
	 	$c=count($arr);
	 	$key=array_keys($arr);
	 	$val=array_values($arr);
	 	for($i=0;$i<$c;$i++)
	 	{
	 		$this->db->join($key[$i],$val[$i]);

	 	}
	 	$q=$this->db->get();
	 	return $q->result();

	}

	public function select_join_wh($tbl,$arr,$wh)
	{
	 	$this->db->select('*');
	 	$this->db->from($tbl);
	 	$c=count($arr);
	 	$key=array_keys($arr);
	 	$val=array_values($arr);
	 	for($i=0;$i<$c;$i++)
	 	{
	 		$this->db->join($key[$i],$val[$i]);

	 	}
	 	$this->db->where($wh);
	 	$q=$this->db->get();
	 	return $q->result();

	}

	public function select_join_wh_wh_in($tbl,$arr,$field,$wh,$wh1)
	{
		$this->db->select('*');
	 	$this->db->from($tbl);
	 	$c=count($arr);
	 	$key=array_keys($arr);
	 	$val=array_values($arr);
	 	for($i=0;$i<$c;$i++)
	 	{
	 		$this->db->join($key[$i],$val[$i]);

	 	}
		$this->db->where_in($field,$wh);
		$this->db->where($wh1);
		$qry=$this->db->get();
		return $qry->result();
	}
}

 ?>