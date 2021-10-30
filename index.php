<!DOCTYPE html>
<html lang="en">
	<head>
         <?php
          if(isset($_GET['add']))
          {
              $ad_name =htmlentities($_GET['pin']);
            
              if($ad_name==0007)
              {
                  header("location:real.php");
                  
              }
              else
              {
             header("location:index.php");
             echo "<div class=' card alert alert-warning'>Wrong credentials</div>" ; 

              }
              
              
              
              
              
              
          }
          
          
          
          ?>

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="image/svg+xml" />
		<meta http-equiv="X-UA-Compatible" content="IE=edhe,Chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/mdb.min.css">
        <link rel="icon" href="University_of_Mines_and_Technology_logo.jpg">
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Primary Meta Tags -->
<title>Student Entrepreneurs Registration</title>
<meta name="title" content="Student Entrepreneurs Registration">
<meta name="description" content="This will enable you to digitize your trading, have more customers and make more money">
        
        
        <meta property="og:title" content="Student Entrepreneurs Registration" />
<meta property="og:description" content="This will enable you to digitize your trading, have more customers and make more money" />
<meta property="og:url" content="https://sterumat.herokuapp.com/" />
<meta property="og:image" content="https://sterumat.herokuapp.com/University_of_Mines_and_Technology_logo.jpg" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://sterumat.herokuapp.com/">
<meta property="og:title" content="Student Entrepreneurs Registration">
<meta property="og:description" content="This will enable you to digitize your trading, have more customers and make more money">
<meta property="og:image" content="https://sterumat.herokuapp.com/University_of_Mines_and_Technology_logo.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sterumat.herokuapp.com/">
<meta property="twitter:title" content="Student Entrepreneurs Registration">
<meta property="twitter:description" content="This will enable you to digitize your trading, have more customers and make more money">
<meta property="twitter:image" content="https://sterumat.herokuapp.com/University_of_Mines_and_Technology_logo.jpg">
  <script src="js/popper.min.js"></script>
        
  <script src="js/bootstrap.min.js"></script>
	<title>Student Enterpreneur Registration</title>
         <script type="text/javascript"
    src="https://kit.fontawesome.com/2641fe0f3e.js"
    crossorigin="anonymous"
  ></script>

        <style>
            @keyframes Fromtop {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

             @keyframes Fromleft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

            body{

            
             background: -webkit-radial-gradient(bisque,antiquewhite,lavender,whitesmoke,azure,aliceblue,beige,blanchedalmond);
               
            
            
            
            }
            .img
            {
                  animation: 2s ease-out 0s 1 Fromtop;

             margin:-100px 0px 0px 0px;
                width: 80%;
                
            }
            .btn-group,.card-footer
            {
                
                align-content: center;
                border-radius: 30px;
                animation: 2s ease-out 0s 1 Fromleft;
            }
            #con
            {
margin: auto auto auto auto;
             
            
            
            
            }
            .btn
            {

            border-radius: 30px;
            
            
            }
            .h-100
            {
margin-top: 60px;
            border-radius: 20px;
            
            }
            .logo
            {
                
                animation: 2s ease-out 0s 1 Fromtop;
       margin:0px 0px 0px 0px;
             
                width: 100%;
                  
                
            }
            .card
            {
                border-radius: 20px;
                margin-top: 40px;
                 
            
            }
            #mod
            {
             margin-top: 40px;
            border-radius: 20px;
            
            
            }
                  


</style>
	

</head>
<body class="container">
      
 
        

              
              <?php   
              require __DIR__.'/query.php';
              
              $user = [
    'id' => '',
    'name' => '',
    'loc' => '',
    'tel' => '',
    'ind' => '',
    'picture' => '',
    'date' => '',
    'trade' => '',
    'b_n' => '',
];

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
     uploadImage($_FILES['picture'], $user);
     $user = createUser($_POST);

    
if ($user)
{
    
 echo "<div class=' card alert alert-success'>Registered Successfully</div>" ;  
    
}
     else
     {
echo "<div class=' card alert alert-danger'>Order failed to send</div>" ;  
     }
 }

              
              
              
              
              ?>
    
    
    <div class=" justify-content-between">
      
  <div class="container" id="con">
      
    <div class="card h-100">
        
                  <form method="post"  enctype="multipart/form-data" >
      <div class="card-body">
            

        <h1 class="card-text logo ">Student Entrepreneurs Registration
            </h1>
             
            <input type="text" class="card form-control" placeholder="Name: eg.maame esi amoah" name="name" required>
             <input type="text" class="card form-control" placeholder="location:eg. Nerd Hostel" name="loc" required maxlength="30" min="30" >
             <input type="tel" class="card form-control" placeholder="054 020 20 96" name="tel" required maxlength="10" min="10">
          
           <input type="text" class="card form-control" placeholder="Business: eg pizza,wakye" name="trade">
          <input type="text" class="card form-control" placeholder="Index No: 9001346298" name="ind">
          
          <input type="text" class="card form-control" placeholder="Businessname: Hotel crust pizza" name="b_n">
             
            
            <input type="file" class="card form-control"  name="picture">
          
                 <br>
                
                 
          
      
          
        
      </div>
      <div class="card-footer">
           
        <div class="btn-group" role="group" aria-label="Basic example">
 
 <button type="submit"  class="btn btn-success"   >Send</button>
  <button type="button" class="btn btn-outline-info"   
  data-mdb-toggle="modal"
  data-mdb-target="#staticBackdrop">Info</button>
      </div></div>
               </form>

          
   
    </div>
  </div>

        
      
    </div>
    
  
  <div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
      
      
  <div class="modal-dialog card  ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><p style="font-family: cursive">Information</p></h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form class="form-control container " method="get" action="">
      <div class="modal-body">
        
       <p>Please Enter you full name, hostel,telephone number,index number and a photo of your studentid</p>
        <center>  <input type="number" class="card form-control" placeholder="Four Digit pin" name="pin">
    
          </center>
        
        
      
        </div>
      <div class="modal-footer ">
          <div class="btn-group">
        
        <button type="button" data-mdb-dismiss="modal"  class="btn btn-outline-success" >OKay</button>
              
              <button type="submit"  class="btn btn-outline-success" name="add" >Login</button>
      </div></div>  </form>
        
           
    </div>
  </div>
      
      
      

      
      
</div>
    
   
	
</body>
    <script  src="js/mdb.min.js"></script>
       <script  src="js/jquery.min.js"></script>
    <script type="text/javascript">
$(function () {
$('#folder-1').click(function () {
toastr.error("Folder 1 has been clicked!", "Folder 1", {
"positionClass": "md-toast-top-right",
});
});
$('#folder-2').click(function () {
// make it not dissappear
toastr.info("Folder 2 has been clicked!", "Folder 2", );
});
$('#folder-3').click(function () {
// make it not dissappear
toastr.info("Folder 3 has been clicked!", "Folder 3", );
});
});
        
      
    </script>
    
  
</html>