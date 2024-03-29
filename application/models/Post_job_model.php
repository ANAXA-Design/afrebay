<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_job_model extends My_Model {
var $column_order = array(null,null,'postjob.post_title','postjob.status',null); //set column field database for datatable orderable

    var $order = array('postjob.id' => 'DESC');

    function __construct()
    {
        parent::__construct();
    }

	private function _get_datatables_query()
	{
		$this->db->select('postjob.*,category.category_name,CONCAT(users.firstname,"",users.lastname) as fullname,sub_category.sub_category_name' );
        $this->db->from('postjob');
        $this->db->join('category','category.id=postjob.category_id');
        $this->db->join('users','users.userId=postjob.user_id');
        $this->db->join('sub_category','sub_category.id=category.id');
      // $this->db->where($cond);
		$i = 0;

        if($_POST['search']['value']) // if datatable send POST for search
            {
                $explode_string = explode(' ', $_POST['search']['value']);
                foreach ($explode_string as $show_string)
                {
                    $cond  = " ";
                    $cond.=" (  postjob.post_title LIKE '%".trim($show_string)."%' ";
                    $cond.=" OR  postjob.status LIKE '%".trim($show_string)."%') ";
                    $this->db->where($cond);
                }
            }
        $i++;

        if(isset($_POST['order'])) // here order processing
        {
            //print_r($this->column_order);exit;
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

	function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
       // $this->db->where();
        return $query->result();
    }

	 public function count_all()
    {
        $this->_get_datatables_query();
        return $this->db->count_all_results();
    }


	function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function viewdata($con)
    {
        $this->db->select('postjob.*,category.category_name,CONCAT(users.firstname," ",users.lastname) as fullname,users.username,users.address as user_address,sub_category.sub_category_name' );
        $this->db->from('postjob');
        $this->db->join('category','category.id=postjob.category_id');
        $this->db->join('users','users.userId=postjob.user_id');
        $this->db->join('sub_category','sub_category.id=category.id');
        $this->db->where($con);
         $query = $this->db->get();
        return $query->row();
    }
    function postjobdata($con)
    {
        $this->db->select('postjob.*,category.category_name,users.profilePic,sub_category.sub_category_name' );
        $this->db->from('postjob');
        $this->db->join('category','category.id=postjob.category_id','left');
        $this->db->join('users','users.userId=postjob.user_id','left');
        $this->db->join('sub_category','sub_category.id=postjob.subcategory_id','left');
        $this->db->where($con);
        $this->db->order_by('postjob.id','desc');
         $query = $this->db->get();
        return $query->result();
    }

    // function postjob_bid($cond)
    // {
    //     $this->db->select('postjob.*,job_bid.duration as job_duration,job_bid.bid_amount,job_bid.phone,job_bid.description as job_description,
    //     job_bid.created_date as job_date,CONCAT(users.firstname,"",users.lastname) as fullname,users.username,job_bid.bidding_status,job_bid.id as jobbid_id');
    //     $this->db->from('postjob');
    //     $this->db->join('job_bid','job_bid.postjob_id=postjob.id','left');
    //       $this->db->join('users','users.userId=job_bid.user_id','left');
    //     $this->db->where($cond);
    //      $query = $this->db->get();
    //     return $query->result();
    // }

    function postjob_bid($cond)
    {
        $this->db->select('job_bid.*,job_bid.user_id as userid,postjob.user_id ,postjob.post_title,CONCAT(users.firstname,"",users.lastname) as fullname,users.username');
        $this->db->from('job_bid');
        $this->db->join('postjob','job_bid.postjob_id=postjob.id','left');
          $this->db->join('users','users.userId=job_bid.user_id','left');
        $this->db->where($cond);
        $this->db->order_by('id','desc');
         $query = $this->db->get();
        return $query->result();
    }

  function getcount()
{
  $this->db->select('postjob.*,category.category_name,users.profilePic,sub_category.sub_category_name');
  $this->db->from('postjob');
  $this->db->join('category','category.id=postjob.category_id','left');
  $this->db->join('users','users.userId=postjob.user_id','left');
  $this->db->join('sub_category','sub_category.id=postjob.subcategory_id','left');
  $this->db->where('postjob.is_delete','0');
  $this->db->order_by('postjob.id','desc');
   $query = $this->db->get();
  return $query->result();
}
  function fetchdata($limit, $start)
{

  $this->db->select('postjob.*,category.category_name,users.profilePic,sub_category.sub_category_name');
  $this->db->from('postjob');
  $this->db->join('category','category.id=postjob.category_id','left');
  $this->db->join('users','users.userId=postjob.user_id','left');
  $this->db->join('sub_category','sub_category.id=postjob.subcategory_id','left');
  $this->db->where('postjob.is_delete','0');
   $this->db->limit($limit, $start);
  $this->db->order_by('postjob.id','desc');
   $data = $this->db->get();

 $output = '';
 if(!empty($data))
 {
  foreach($data->result_array() as $row)
  {
    if(strlen($row['description'])>100){
    $desc= substr($row['description'], 0,100).'...';}
    else {
      $desc= $row['description'];
    }
   $output .= '
   <div class="emply-resume-list">

      <div class="emply-resume-info">
      <h3><a href="#" title="">'.$row["post_title"].'</a></h3>
                                               <span>'.$row['category_name'].'</span>
                                               <span>'.$row['sub_category_name'].' </span>
                                               <p><i class="la la-map-marker"></i>'. $row['location'].'</p>
                                               <p>'.$desc.'</p>
                                           </div>

                                 <div class="shortlists" style="width:50px;">
                <a href="'.base_url('postdetail/'.base64_encode($row['id'])).'" title="">Bid Now <i class="la la-plus"></i></a>
                                    </div>
                                </div>';
  }
 }
 else
 {
  $output .= ' <div class="emply-resume-list">
                   <div class="emply-resume-thumb">
                  <h2>No Data Found</h2>
                    </div>
                    </div>';
 }
 return $output;
}

// pagination subcategory start

function make_query($title, $location,$days,$category_id,$subcategory_id,$search_title,$search_location)
{
if(isset($title) || isset($location) || isset($days) || isset($category_id)|| isset($subcategory_id) || isset($search_title) || isset($search_location))
{
$query = "SELECT * FROM postjob WHERE is_delete = '0'";

if(isset($title) && !empty($title))
{

$query .= " AND post_title like '%".$title."%'";

}
if(isset($location) && !empty($location))
{

$query .= "
AND location like '%".$location."%'";

}
if(isset($category_id) && !empty($category_id))
{

$query .= "
AND category_id='".$category_id."'";

}

if(isset($subcategory_id) && !empty($subcategory_id))
{

     $query.=" and (";

     foreach ($subcategory_id as $key => $value) {
       if($key==0){
       $query.="  subcategory_id ='".$value."'";
     }
     else
     {
       $query.="or  subcategory_id ='".$value."'";
     }

     }
     $query.=")";
}

if(isset($days)&& !empty($days))
    {

       if($days=='one')
      {
        $query.="
        AND created_date>=NOW()-INTERVAL 1 HOUR";
      }
      else{
      $current_date=date('Y-m-d');
  $dates=date('Y-m-d', strtotime($current_date.'-'.$days.'days'));
  $query.="
  AND created_date>='".$dates."'";
}
    }
      if(isset($search_title)&& !empty($search_title))
{
  $query .= " AND post_title like '%".$search_title."%'";
}
if(isset($search_location) && !empty($search_location))
{

$query .= "
AND location like '%".$search_location."%'";

}

return $query;
}
// print_r($this->db->last_query()); exit;
}
function subcategory_getcount($title, $location,$days,$category_id,$subcategory_id,$search_title,$search_location)
{
$query = $this->make_query($title, $location,$days,$category_id,$subcategory_id,$search_title,$search_location);
$data = $this->db->query($query);
return $data->num_rows();
}
function subcategory_fetchdata($limit, $start, $title, $location,$days,$category_id,$subcategory_id,$post_id,$search_title,$search_location)
{
if(isset($title) || isset($location) || isset($days) || isset($category_id)|| isset($subcategory_id)|| isset($search_title)|| isset($search_location)){
$query = $this->make_query($title, $location,$days,$category_id,$subcategory_id,$search_title,$search_location);

$query .= ' LIMIT '.$start.', ' . $limit;

$data = $this->db->query($query);
//print_r($this->db->last_query()); exit;
}
else{
$query = "SELECT * FROM postjob WHERE is_delete = '0' AND subcategory_id='".$post_id."'";

$query .= ' LIMIT '.$start.', ' . $limit;

$data = $this->db->query($query);
//print_r($this->db->last_query()); exit;
}

$output = '';
if($data->num_rows() > 0)
{
foreach($data->result_array() as $row)
{
$get_users=$this->Crud_model->get_single('users',"userId='".$row['user_id']."'");
$get_category=$this->Crud_model->get_single('category',"id='".$row['category_id']."'");
$get_subcategory=$this->Crud_model->get_single('sub_category',"id='".$row['subcategory_id']."'");

if(!empty($get_users->profilePic) && file_exists('uploads/users/'.$get_users->profilePic)){
 $profile_pic= '<img src="'.base_url('uploads/users/'.$get_users->profilePic).'" alt="" />';
}
else{
  $profile_pic= '<img src="'.base_url('uploads/users/user.png').'" alt="" />';
}


$output .= '
<div class="emply-resume-list">
<div class="emply-resume-thumb">'.$profile_pic.'</div>
<div class="emply-resume-info">
       <h3><a href="#" title="">'.$row['post_title'].'</a></h3>
           <span>'.$get_category->category_name.'</span>
         <span>'.$get_subcategory->sub_category_name.' </span>
       <p><i class="la la-map-marker"></i>'.$row['location'].'</p>
       <div class="Employee-Details">
          <p class="MoreDetailsTxt_'.$row['id'].'">
              In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
          </p>
          <a class="btn btn-info More" onclick="MoreDetailsTxt('.$row['id'].')">View Details</a>
       </div>
               </div>
               <div class="shortlists">
               <a class="Emp_Comp"><i class="fa fa-briefcase" aria-hidden="true"></i> Thebigword Genaral Information</a>
         <a href="'.base_url('postdetail/'.base64_encode($row['id'])).'" title="">Bid Now <i class="la la-plus"></i></a>
           </div>
         </div> ';
}
}
else
{
$output .= '<div class="emply-resume-list">
             <div class="emply-resume-thumb">
                       <h2>No Data Found</h2>
                        </div>
                       </div>';
}
return $output;
}

// end pagination subcategory




}