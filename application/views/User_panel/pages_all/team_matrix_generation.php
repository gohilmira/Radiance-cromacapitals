<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
            @media only screen and (max-width: 600px) {
                .flex > .flex-item{
                         width : var(--item-width);
                         font-size:8px;
                     } 
                     .flex-item > span > .user {
                            width:25px;        
                        }
            }
            @media only screen and (min-width: 601px) {
                .flex >  .flex-item{
                         width : var(--item-width);
                         font-size:16px;
                     } 
                .flex-item > span > .user {
                    width:50px;        
                }  
            }

            .flex{
                    display: flex;
                    flex-wrap: nowrap;                
                                 
                }
       </style>
    <div class="container pages">   
    <br>
<div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $panel_path.'dashboard';?>">home</a></li>            
            <li class="breadcrumb-item"><a href="">Team</a></li>            
            <li class="breadcrumb-item active" aria-current="page"> Matrix</li>
         </ol>
	   </div>
	    
</div>
 
 <?php 
$userid = $this->session->userdata('user_id');


                        $success['param']='success';
                        $success['alert_class']='alert-success';
                        $success['type']='success';
                        $this->show->show_alert($success);
                        ?>
                   <?php 
                        $erroralert['param']='error';
                        $erroralert['alert_class']='alert-danger';
                        $erroralert['type']='error';
                        $this->show->show_alert($erroralert);
                    ?>
                   
           <center>
               <div class="bg-white">    
            <div class="form-inline1 col-xl-7">  
               <!--navbar-light bg-light-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto" style="padding-left:60px;">

                <form action="<?= $panel_path.'team/team-matrix-generation';?>" class="form-inline my-2 my-lg-0" method="post">
                    <input type="text" Placeholder="Enter Username" name="username" class="form-control mr-sm-2" value='<?= isset($_POST['username']) && $_POST['username']!='' ? $_POST['username']:'';?>' required/>                      
    
    
                    <input type="submit" name="search" class="btn btn-secondary my-2 my-sm-0" value="Filter" />&nbsp;
                    <a href="<?= $panel_path.'team/team-matrix-generation';?>" class="btn btn-secondary my-2 my-sm-0">Reset</a>
                    </ul>
                    </div>
                </form>
 
                </nav>
                
                
                
                
            </div>
             
    <?php
            if($node_id){
                $u_id=$this->team->pool_node($node_id);
                $_user_profile = $this->profile->profile_info($u_id);
                $sponsor_details = $this->profile->profile_info($_user_profile->u_sponsor);
            }
    ?>
           <div class="flex">
                <div class="flex-item" style="--item-width:100%">
                    <span <?php if($node_id){ ?> data-toggle="popover1" data-trigger="hover" data-html="true" data-content="Full NAME :<?= $_user_profile->name;?><br>SPONCER NAME: <?= ($sponsor_details ? $sponsor_details->name:'null');?>  <br>JOINING DATE : <?= $_user_profile->added_on;?><br>ACTIVATION DATE: <?= $_user_profile->updated_on;?>" <?php } ?> >
                        <img class="user" src="<?= base_url('images/users/tree_user.png');?>">  
                    </span>
                    
                    </br>
                    <?= $_user_profile->name;?>
                    </br>
                    <p >
                     <?= $this->team->pool_status($u_id);?>
                    </p>
                </div>
            </div>
            <?php
               
                $this->team->matrix_pool(1,$node_id);
            ?>
       
           
   
        </center>
                

</div>
</div>