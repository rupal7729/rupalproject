<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
  {

      $wh=["Girls","Unisex"];
      $wh1=["Boy","Unisex"];
      $data["brand"]=$this->User_model->select("tblBrand");
      $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$wh);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$wh1);
      $data['product']=$this->User_model->select_desc("tblProduct",'productid','DESC',8);

     # $w=array("tblReview"=>'tblReview.productid=tblProduct.productid');
      #$data["rate"]=$this->User_model->count_total_rating_groupby('tblProduct','tblReview.rating',$w);

     //  $data['product']=$this->User_model->select("tblproduct");
         // $d=$data['product'];
         # print_r($data['rate']);
           //foreach ($d as $key) {
             //print_r($key->ImageLogo);
           //}
     //echo $data['product']."<br/>";
     //print_r($data["girlcat"]);
      $this->load->view('index_main',$data);
  }
//SELECT round(avg(r.rating),2) AS `average_rate` FROM tblReview r join tblProduct p on r.productid=p.productid ORDER BY p.productid DESC
//SELECT round(avg(r.rating),2) AS `average_rate` FROM tblReview r join tblProduct p on r.productid=p.productid GROUP BY p.productid DESC

  public function login()
  {
    $this->load->view('login');

    if($this->input->post('login'))
    {
      $em=$this->input->post('email');
      $ps=$this->input->post('password');
      $this->session->email=$em;
      $wh=array("email"=>$em,"password"=>$ps);
      $check=$this->User_model->select_wh("tblUser",$wh);

        $this->session->user=$check;
      $ses=$this->session->user;
              // print_r($ses);
                $c=count($this->session->user);
                if($c==1)
                {
                    redirect('User/index');
                }
    }
  }


public function logout()
{

    $user_data = $this->session->all_userdata();
    foreach ($user_data as $key) {
        if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
    }
    $this->session->sess_destroy();
    redirect('User/index');
   // print_r($user_data);
}

  public function registration()
  {
    $this->load->view('user_reg');
     if($this->input->post("reg"))
                {
                       $fnm=$this->input->post('fname');
                       $lnm=$this->input->post('lname');
                       $email=$this->input->post('email');
                       $mobile=$this->input->post('mobile');
                       $ps=$this->input->post('password');
                       $profile="default.jpg";
                       $occupasion="Gaurdian";


                       $ins=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$email,"mobile"=>$mobile,"password"=>$ps,"profile"=>$profile,"occupasion"=>$occupasion);

                         $this->User_model->insert('tblUser',$ins);

                         if($this->db->affected_rows()==1)
                         {

                          $this->email($email);

                         }
        }
  }




  public function email($email)
   {

     $subject = 'Thanks for registration On thebabybasket.com';

       $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://localhost/xampp/CodeIgniter-3.1.11R/assets/image/demo/logos/logo1.png" width="300px" vspace=10 /></td></tr>';
         $emailContent .='<tr><td style="height:20px"></td></tr>';

         $emailContent .='thank you for registering in thebabybasket.com';

       $emailContent .='<tr><td style="height:20px"></td></tr>';
       $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://localhost/xampp/CodeIgniter-3.1.11R/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.thebabybasket.com</a></p></td></tr></table></body></html>";


      $this->email->from('trainee7.dynamicdreamz@gmail.com','ThebabyBasket');
      $this->email->to($email);
      $this->email->subject($subject);
      $this->email->message($emailContent);
      if(! $this->email->send())
      {
         show_error($this->email->print_debugger());
         echo "email not send";
      }
      else
      {
            redirect('User/login');
      }
     }



     public function myaccount()
     {

      $user['statedata']=$this->User_model->select("tblState");
      $user['citydata']=$this->User_model->select("tblCity");
      $id= $this->session->user;
      $uid= $id[0]->userid;
     // print_r($uid);
      $wh=array("tblUser.userid"=>$uid);


       $arr=array("tblAddress"=>'tblAddress.userid=tblUser.userid',"tblState"=>'tblState.stateid=tblAddress.state',"tblCity"=>'tblCity.cityid=tblAddress.city',"tblChild"=>'tblChild.userid=tblUser.userid');
      $user['adata']=$this->User_model->select_join_wh('tblUser',$arr,$wh);


      $arr1=array("tblChild"=>'tblChild.userid=tblUser.userid');
       $user['cdata']=$this->User_model->select_join_wh('tblUser',$arr1,$wh);

      //print_r($user['cdata']);
      //print_r($user[1]->city);
       $this->load->view('myaccount',$user);



     }


    public function getcity()
    {
      $id=$this->uri->segment(3);
      $wh=array("stateid"=>$id);
      $rw=$this->User_model->select_wh('tblCity',$wh);
      foreach ($rw as $key) {
        ?>
           <option value="<?php echo $key->cityid ?>"><?php echo $key->cityname; ?></option>

        <?php
      }
    }




     public function uploadpic()
     {

     }

     public function saveaddress()
     {
       if($this->input->post("btnsaveaddress"))
            {
              $data="";
               $userid=$this->session->user;
               $uid= $userid[0]->userid;
               $nm=$this->input->post('name');
               $houseno=$this->input->post('houseno');
               $street=$this->input->post('street');
               $landmark=$this->input->post('landmark');
               $pincode=$this->input->post('pincode');
               $country=$this->input->post('country');
               $mobile=$this->input->post('mobile');
               $stateid=$this->input->post('stateid');
               $cityid=$this->input->post('cityid');


               $ins=array("userid"=>$uid,"username"=>$nm,"houseNo"=>$houseno,"streetAddress"=>$street,"landmark"=>$landmark,"pincode"=>$pincode,"state"=>$stateid,"city"=>$cityid,"country"=>$country,"mobile"=>$mobile);
             //  print_r($ins);
                 $this->User_model->insert('tblAddress',$ins);

                 if($this->db->affected_rows()==1)
                 {
                    // $data="New Address Successfully Added....";
                     redirect('myaccount');


                 }
                 else
                 {
                  echo "Your profilr is updated...";
                 }
            }
     }


     public function update_personal_details()
     {
        $id= $this->session->user;
        $uid= $id[0]->userid;
       // print_r($uid);
        $wh=array("userid"=>$uid);


        if($this->input->post("updatedetails"))
        {
                       $fnm=$this->input->post('firstname');
                       $lnm=$this->input->post('lastname');
                       $email=$this->input->post('email');
                       $mobile=$this->input->post('telephone');
                       $occupasion=$this->input->post('occupasion');

                        $fn=$_FILES['imgnm1']['name'];
                        $tmp=$_FILES['imgnm1']['tmp_name'];
                        $size=$_FILES['imgnm1']['size'];
                        $type=$_FILES['imgnm1']['type'];
                        move_uploaded_file($tmp,"upload/".$fn);

                       $ins=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$email,"mobile"=>$mobile,"occupasion"=>$occupasion,"profile"=>$fn);
                     // print_r($ins);

                        $this->User_model->update('tblUser',$ins,$wh);
                        if($this->db->affected_rows()==1)
                         {

                          redirect('User/myaccount');
                        }


        }
     }

     public function update_address()
     {
       if($this->input->post("btnupdateaddress"))
            {
              $id= $this->session->user;
              $uid= $id[0]->userid;
             // print_r($uid);
              $wh=array("userid"=>$uid);


               $nm=$this->input->post('name');
               $houseno=$this->input->post('houseno');
               $street=$this->input->post('street');
               $landmark=$this->input->post('landmark');
               $pincode=$this->input->post('pincode');
               $country=$this->input->post('country');
               $mobile=$this->input->post('mobile');
               $stateid=$this->input->post('stateid');
               $cityid=$this->input->post('cityid');


               $ins=array("userid"=>$uid,"username"=>$nm,"houseNo"=>$houseno,"streetAddress"=>$street,"landmark"=>$landmark,"pincode"=>$pincode,"state"=>$stateid,"city"=>$cityid,"country"=>$country,"mobile"=>$mobile);
               // print_r($ins);
                 $this->User_model->update('tblAddress',$ins,$wh);

                 if($this->db->affected_rows()==1)
                 {
                    // $data="New Address Successfully Added....";
                     redirect('User/myaccount');
                 }

            }

  }



      public function updatepass()
      {
            $id= $this->session->user;
             $uid= $id[0]->userid;
          if($this->input->post("savepassword"))
          {
             $old=$this->input->post('old');
             $new=$this->input->post('new');
             $cpass=$this->input->post('cpass');
               $wh=array("userid"=>$uid);

              if((!strcmp($old, $new))&& (!strcmp($new, $cpass)))
              {
                echo "success";
                redirect('User/myaccount');
              }
              else
              {
                echo "invalid";
              }

           }
      }


      public function  addchild()
     {

        if($this->input->post("btnaddchild"))
          {
             $id= $this->session->user;
             $uid= $id[0]->userid;
             $cname=$this->input->post('childname');
             $dob=$this->input->post('dob');
             $gender=$this->input->post('gender');
             $date= date('Y-m-d',strtotime($dob));

              $fn=$_FILES['imgnm']['name'];
              $tmp=$_FILES['imgnm']['tmp_name'];
              $size=$_FILES['imgnm']['size'];
              $type=$_FILES['imgnm']['type'];
              move_uploaded_file($tmp,"upload/".$fn);

             $ins=array("userid"=>$uid,"childName"=>$cname,"gender"=>$gender,"dob"=>$date,"photo"=>$fn);
             //print_r($ins);
             $this->User_model->insert('tblChild',$ins);

              if($this->db->affected_rows()==1)
                 {
                    // $data="New Address Successfully Added....";
                     redirect('User/myaccount');
                 }
          }


     }
//SELECT * FROM tblProduct WHERE productFor IN('Boy','Unisex')
//SELECT * FROM `tblProduct` WHERE productFor IN ('Boy','Unisex') AND categoryid=1
     //SELECT * FROM `tblProduct` p join tblBrand b on b.brandid=p.brandid WHERE b.brandid=1 AND p.productFor IN ('Boy','Unisex')
     //SELECT * FROM `tblReview` WHERE productid=15 ORDER by reviewDate DESC
     //SELECT AVG(rating) AS myAvg FROM tblReview GROUP BY productid
     // /$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from rating_data where status=1");
//$row = mysqli_fetch_array($query);
//$AVGRATE=$row['AVGRATE'];

     public function productlist()
     {

        $w=["Girls","Unisex"];
        $w1=["Boy","Unisex"];
        $data["brand"]=$this->User_model->select("tblBrand");
        $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
        $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

        if(isset($_GET['gender1'])){ $gen1=$_GET['gender1'];}else{$gen1=NULL;}
        if(isset($_GET['gender2'])){ $gen2=$_GET['gender2'];}else{$gen2=NULL;}
        if(isset($_GET['gender3'])){ $gen3=$_GET['gender3'];}else{$gen3=NULL;}
        if(isset($_GET['catid'])){ $catid=$_GET['catid'];}else{$catid=NULL;}
        if(isset($_GET['brid'])){ $brid=$_GET['brid'];}else{$brid=NULL;}
        if(isset($_GET['cid'])){$c=$_GET['cid'];}else{$c=NULL;}
        if(isset($_GET['sale'])){$sale=$_GET['sale'];}else{$sale=NULL;}




   //    print_r($sale);
      //  $wh = [$gen1,$gen2,$gen3];
         if(!empty($catid))
             {
                 $wh = [$gen1,$gen2,$gen3];
                 $wh1=array('categoryid'=>$catid);
                 $data["bproduct"]=$this->User_model->select_wh_wh_in('tblProduct','productFor',$wh,$wh1);
                 $data["genders"]=array("gender1"=>$gen1,"gender2"=>$gen2,"catid"=>$catid);
               //  print_r($data["genders"]);
             }
          else if(!empty($gen1) && !empty($gen2))
             {
                 $wh = [$gen1,$gen2];
                 $data["bproduct"]=$this->User_model->select_wh_in('tblProduct','productFor',$wh);
                   $data["genders"]=array("gender1"=>$gen1,"gender2"=>$gen2);
                 //  print_r($data["genders"]);

             }

          else if(!empty($brid))
           {
               $wh = [$gen1,$gen2,$gen3];
                 $wh1=array('tblBrand.brandid'=>$brid);
                 $arr=array("tblBrand"=>'tblProduct.brandid=tblBrand.brandid',"tblCategory"=>'tblCategory.categoryid=tblProduct.categoryid');
                 $data['bproduct']=$this->User_model->select_join_wh('tblProduct',$arr,$wh1);
                 $data["genders"]=array("gender1"=>$gen1,"gender2"=>$gen2);

            }

          else if(!empty($c))
           {
                 $wh = [$gen1,$gen2,$gen3];
                 $wh1=array('tblCategory.categoryid'=>$c);
                 $arr=array("tblBrand"=>'tblProduct.brandid=tblBrand.brandid',"tblCategory"=>'tblCategory.categoryid=tblProduct.categoryid');
                 $data['bproduct']=$this->User_model->select_join_wh('tblProduct',$arr,$wh1);
                 $data["genders"]=array("gender1"=>$gen1,"gender2"=>$gen2);


            }
          else if(!empty($sale))
          {

                  $wh = [$gen1,$gen2,$gen3];
                 $wh1="((price-salePrice)*100/price)>='".$sale."'";
                 $data["bproduct"]=$this->User_model->select_wh('tblProduct',$wh1);
                 $data["genders"]=array("gender1"=>$gen1,"gender2"=>$gen2);


          }

          $data["brand"]=$this->User_model->select("tblBrand");
         //  $data["bproduct"]=$this->User_model->select_flow_wh("tblProduct",$field,$flow,$limit,$wh);


        $this->load->view('productlist',$data);
     }


     public function addproduct()
     {
         $data["brand"]=$this->User_model->select("tblBrand");
          $data["category"]=$this->User_model->select("tblCategory");
          $this->load->view('addproduct',$data);

          if($this->input->post('add'))
          {
               $ptitle=$this->input->post('ptitle');
               $pname=$this->input->post('pname');
               $pdesc=$this->input->post('pdesc');
               $psize=$this->input->post('psize');
               $pcolor=$this->input->post('pcolor');

               $pfor=$this->input->post('pfor');
               $org_price=$this->input->post('page');
               $pquan=$this->input->post('pquan');
               $psale=$this->input->post('psale');
               $pstock=$this->input->post('pstock');
               $pbid=$this->input->post('pbid');
               $pcid=$this->input->post('pcid');
               $pdate=date('Y-m-d');



                $ins=array("productTitle"=>$ptitle,"productName"=>$pname,"productDesc"=>$pdesc,
                  "size"=>$psize,"color"=>$pcolor,"productFor"=>$pfor,
                  "price"=>$org_price,"quantity"=>$pquan,"salePrice"=>$psale,"stock"=>$pstock,
                  "brandid"=>$pbid,"categoryid"=>$pcid,"createdDate"=>$pdate);
               // print_r($ins);
                 $this->User_model->insert('tblProduct',$ins);
                 $id=$this->db->insert_id();


            // If file upload form submitted
            if(!empty($_FILES['files']['name']) AND !empty($id)){
                $filesCount = count($_FILES['files']['name']);
                   // print_r($filesCount);
                 for($i = 0; $i < $filesCount; $i++){
                   $filename = $_FILES['files']['name'][$i];


            // Upload file
            move_uploaded_file($_FILES['files']['tmp_name'][$i],'upload/products/'.$filename);
            $ins1=array("imageName"=>$filename,"productid"=>$id);
             print_r($ins1);
             $this->User_model->insert('tblImage',$ins1);

          }
        }



       }
     }

     //$sql = "SELECT * FROM tblproduct ORDER BY productid DESC LIMIT 3";
     public function viewproductdetailpopup($uid)
     {
        $w=["Girls","Unisex"];
      $w1=["Boy","Unisex"];

     $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

        $data["brand"]=$this->User_model->select("tblBrand");
        $data["category"]=$this->User_model->select("tblCategory");
        $wh=array("productid"=>$uid);
       // $data["productdetail"]=$this->User_model->select_wh("tblProduct",$wh);
        $data["images"]=$this->User_model->select_wh("tblImage",$wh);
       // print_r( $data["images"]);
        $arr=array("tblBrand"=>'tblProduct.brandid=tblBrand.brandid',"tblCategory"=>'tblCategory.categoryid=tblProduct.categoryid');

      $data['productdetail']=$this->User_model->select_join_wh('tblProduct',$arr,$wh);
      // print_r( $data['productdetail']);
        $this->load->view('productdetailpopup',$data);
     }

//SELECT round(avg(`rating`),2) AS `average_rate`, count(`rating`) AS `num_of_rating` FROM tblReview WHERE productid=15


      public function productdetail($uid)
     {
        $w=["Girls","Unisex"];
        $w1=["Boy","Unisex"];

        $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
        $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

         $wh=array("productid"=>$uid);
         $data["ratings"]=$this->User_model->select_desc_wh("tblReview",$wh,'reviewDate','DESC',3);



         $data["rate"]=$this->User_model->count_total_rating('tblReview','rating',$wh);


        $data["images"]=$this->User_model->select_wh("tblImage",$wh);
        $arr=array("tblBrand"=>'tblProduct.brandid=tblBrand.brandid',"tblCategory"=>'tblCategory.categoryid=tblProduct.categoryid');
        $data['productdetail']=$this->User_model->select_join_wh('tblProduct',$arr,$wh);
       //  print_r( $data['ratings']);
        $this->load->view('productdetail',$data);
     }

     public function rating()
     {
         if(isset($_GET['pid']))
         {
          $productid=$_GET['pid'];
          $uname=$this->input->post('username');
          $rdesc=$this->input->post('reviewdesc');
          $rating=$this->input->post('rating');
          $date= date('Y-m-d');
          $ins=array("productid"=>$productid,"username"=>$uname,"reviewDesc"=>$rdesc,"reviewdate"=>$date,"rating"=>$rating);
          $this->User_model->insert('tblReview',$ins);
          $this->load->view('star');
           // print_r($ins);
          }
          redirect('User/productdetail/'.$productid);

     }

     public function shoppingcart()
     {
       $id= $this->session->user;
      $uid= $id[0]->userid;
      $w=["Girls","Unisex"];
      $w1=["Boy","Unisex"];

     $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

        $data["brand"]=$this->User_model->select("tblBrand");
        $wh=array("userid"=>$uid);
        $data["mycart"]=$this->User_model->select_wh("tblCart",$wh);
      /* foreach ($data["mycart"] as $mkey) {
                   $items = (unserialize($mkey->data));
               //    print_r($items);
                   $data["cart"]=$items;
                   print_r($mkey->productName);
                 }*/


      $this->load->view('shoppingcart',$data);
     }


     public function wishlist()
     {
      $w=["Girls","Unisex"];
      $w1=["Boy","Unisex"];

      $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

      $data["brand"]=$this->User_model->select("tblBrand");


      $this->load->view('wishlist',$data);
     }

      public function placeorder()
     {
      $w=["Girls","Unisex"];
      $w1=["Boy","Unisex"];

     $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

        $data["brand"]=$this->User_model->select("tblBrand");

      $this->load->view('placeorder',$data);
     }

      public function returnorder()
     {
      $w=["Girls","Unisex"];
      $w1=["Boy","Unisex"];

     $data["girlcat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w);
      $data["boycat"]=$this->User_model->select_wh_in("tblCategory",'categoryFor',$w1);

        $data["brand"]=$this->User_model->select("tblBrand");

      $this->load->view('return',$data);
     }


//SELECT * FROM `tblProduct` where price BETWEEN '100' and '300' ORDER by productTitle DESC LIMIT 9
     //SELECT * FROM `tblProduct` where salePrice BETWEEN '300' and '500' AND productTitle like '%baby%' ORDER by productTitle DESC LIMIT 9
     public function filterdata()
     {


        if(isset($_POST['action']))
        {
          if (isset($_POST['gen1']) && isset($_POST['gen2'])) {
             $gen1=$_POST['gen1'];
             $gen2=$_POST['gen2'];
             if(!empty($gen1) || !empty($gen2))
             {
             $wh="productFor IN('".$gen1."','".$gen2."')";
            }
          }

           if (isset($_POST['catid'])) {
             $category=$_POST['catid'];

             if(!empty($category))
             {
             $wh.="AND categoryid='".$category."'";
            }
          }
        // print_r($wh);

        if(isset($_POST["color"]))
        {
          //$c=$_POST["color"];
          $c = implode("','", $_POST["color"]);
          if(!empty($c))
          {
             $wh.=" AND color LIKE '%".$c."'";
          }
        }
       // print_r($c);

        if(isset($_POST["age"]))
        {
          //$c=$_POST["color"];
          $a = implode("','", $_POST["age"]);
          if(!empty($a))
          {
             $wh.=" AND size LIKE '%".$a."%'";
          }
        }
//print_r($a);

          if(isset($_POST["maximum_price"]) && isset($_POST['minimum_price']))
         {
          $max=$_POST["maximum_price"];
          $min=$_POST["minimum_price"];
           if(!empty($max) || !empty($min))
             {
                 $wh .=" AND salePrice BETWEEN '".$min."' AND '".$max."' ";
            }


          }


        if(isset($_POST["discount"]))
        {
          //$c=$_POST["color"];
          $d = implode("','", $_POST["discount"]);
          if(!empty($d))
          {
             $wh.=" AND ((price-salePrice)*100/price)>='".$d."'";
          }
        }




//SELECT * FROM tblProduct WHERE color LIKE '%Blue'
     // print_r($wh);

        if (isset($_POST["sortingwise"]))
       {

           $sort=$_POST["sortingwise"];
       }
       else
       {
          $sort=NULL;

       }
       if (isset($_POST["sortinglimit"]))
       {

          $limit=$_POST["sortinglimit"];
       }
       else
       {

           $limit=NULL;
       }

       //$wh="";

     // print_r($wh);

          if($sort=='AtoZ')
          {
             $field="productTitle";
             $flow="ASC";
          }
          if($sort=='ZtoA')
          {
             $field="productTitle";
             $flow="DESC";
          }
          if($sort=='HightoLow')
          {
             $field="salePrice";
             $flow="DESC";
          }
            if($sort=='LowtoHigh')
          {
             $field="salePrice";
             $flow="ASC";
          }

            $data["product"]=$this->User_model->select_flow_wh("tblProduct",$field,$flow,$limit,$wh);


          //  print_r($data["product"]);

        $c=count($data["product"]);
       // print_r($c);

        $i=0;
        foreach ($data["product"] as $bkey) {

             if($i==3)  {

                $cls="product-layout col-md-4 col-sm-6 col-xs-12 clear";
                $i=0;

            }
            else
            {
               $cls="product-layout col-md-4 col-sm-6 col-xs-12";

            }
            $i++;
          //  print_r($i);

            ?>

              <div class="<?php echo $cls; ?>">


              <div class="product-item-container">
                <div class="left-block">
                  <div class="product-image-container lazy second_img ">
                    <img src='<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo;?>' class="img-responsive" />
                    <img src='<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo;?>' class="img_0 img-responsive" />
                  </div>
                  <!--Sale Label-->
                  <?php
                    $p1=$bkey->price;
                      $p2=$bkey->salePrice;
                       $per=($p1-$p2)*100/$p1;
                       if($per !=0)
                      {
                   ?>
                  <span class="label label-sale">Sale</span>
                  <!--countdown box-->
                  <?php  } ?>
                  <!--end countdown box-->

                  <!--full quick view block-->
                <a class="quickview" href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'>  Quickview</a>
                  <!--end full quick view block-->
                </div>


                <div class="right-block">
                  <div class="caption">
                    <div class="col-md-12">

                      <h4><a href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'><?php echo $bkey->productTitle; ?></a></h4>
                    </div>

                    <div class="ratings col-md-12">
                      <div class="rating-box">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                      </div>
                    </div>

                    <div class="price col-md-12">
                      <span class="price-new"><i class="fa fa-rupee"></i><?php echo $bkey->salePrice; ?>.00</span>
                      <span class="price-old"><i class="fa fa-rupee"></i><?php echo $bkey->price; ?>.00</span>
                      <span class="label label-percent">
                      -<?php
                       $p1=$bkey->price;
                         $p2=$bkey->salePrice;
                         $per=($p1-$p2)*100/$p1;
                         echo round($per,2);
                        ?>%
                       </span>
                    </div>
                    <div class="description item-desc hidden">
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                    </div>
                  </div>

                    <div class="button-group">
                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
                    <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                    </div>
                </div><!-- right block -->

              </div>
              </div>


         <?php

      // }

       }
     }
   }


   public function addwishlist()
   {
       $id= $this->session->user;
       $uid= $id[0]->userid;
      if(isset($_POST["action"]))
      {
         if(isset($_POST["productid"]))
         {
             $p=$_POST["productid"];
           if(!empty($uid) && !empty($p))
           {
               $ins=array("userid"=>$uid,"productid"=>$p);
              // print_r($ins);
             $this->User_model->insert('tblWishlist',$ins);
           }
          // print_r($ins);
         }
      }
          $this->load->view('index_main');
   }



   public function addtocart()
   {
       $id= $this->session->user;
       $uid= $id[0]->userid;
      if(isset($_POST["action"]))
      {
         if(isset($_POST["productid"]))
         {
             $p=$_POST["productid"];
           if(!empty($uid) && !empty($p))
           {
              $wh=array("productid"=>$p);
              $data["cart"]=$this->User_model->select_wh("tblProduct",$wh);
              //print_r($data["cart"]);


      $cart_data = array();

      // $price = 10;
      $cart_data[$_POST['productid']] = array(
                        'product_id' => $p,
                        'productTitle' => $data["cart"][0]->productTitle,
                        'productName' => $data["cart"][0]->productName,
                        'productDesc' => $data["cart"][0]->productDesc,
                        'size' =>  $data["cart"][0]->size,
                        'color' =>  $data["cart"][0]->color,
                        'productFor' =>  $data["cart"][0]->productFor,
                        'price' =>  $data["cart"][0]->price,
                        'quantity' =>  $_POST["quantity"],
                        'itemInclude' =>  $data["cart"][0]->itemInclude,
                        'stock' => $data["cart"][0]->stock,
                        'salePrice' =>  $data["cart"][0]->salePrice,
                        'brandid' =>  $data["cart"][0]->brandid,
                        'categoryid' =>  $data["cart"][0]->categoryid,
                        'ImageLogo' =>  $data["cart"][0]->ImageLogo );




      $amt =$data["cart"][0]->salePrice;
      $sa  = serialize($cart_data);
      // print_r($sa);

         $ins=array("userid"=>$uid,"productid"=>$p,"amount"=>$amt,"data"=>$sa);
             // print_r($ins);
             $this->User_model->insert('tblCart',$ins);


           }

         }
      }
          $this->load->view('index_main');
   }

}
//select *,((price-salePrice)*100/price) as percent from tblProduct
//select * from tblProduct WHERE ((price-salePrice)*100/price)>40
//select * from tblProduct WHERE ((price-salePrice)*100/price) BETWEEN '20' AND '40' and productFor in('Boy','Unisex')
//SELECT DISTINCT productid,userid FROM `tblWishlist` WHERE productid=1 AND userid=1
//  $items = (unserialize($row->cartdata));