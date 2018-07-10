
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- CSRF Token -->
<!--        <meta name="csrf-token" content="{{ csrf_token() }}">-->

        <title>Beerly Beloved</title>

        <!-- Styles -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/spinners.css" rel="stylesheet">
        <style>
        #img_container {
   width: 180px;
   height: 80px;
   margin-bottom: 80px;
}

#img_container img {
   width: 100%;
}
</style>

<script type="text/javascript">
(function() {

var img = document.getElementById('img_container').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());
</script>
    </head>
    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
<!--   <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>  -->
<!--     Main wrapper-->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                 <div id="img_container" >
                                     <img src="images/bblogo.png" alt="logo" />
                                </div>
                  <div class="row justify-content-center">
                        <div class="align-self-center col-md-8 text-white">
                               
                               
                                <h1 class="text-center text-md-left display-3">What type of user are you?</h1>
                                 <p class="lead">please select a category</p>
                            </div>

                   </div> 
                <div class="row justify-content-center">
                    <div class="card-deck">
                      <div class="card">
                        <img class="card-img-top" src="images/cesto.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Establishment Owner</h5>
                          <p class="card-text">By establishment we mean pub &amp; grub, bar, bistro, night club, tavern etc, brief if you sell alcohol and do frequent specials this is for you.</p>
                          <p class="card-text">
                         <button type="button" class="btn btn-primary btn-block btn-md m-b-10 m-l-5">Select</button>

                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="images/cevenp.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Event Promoter</h5>
                          <p class="card-text">Any event that you want to make visible, as long as there is music and beer this is the place for you.</p>
                          <p class="card-text"><small class="text-muted"></small></p>
                        <button type="button" class="btn btn-primary btn-block btn-md m-b-10 m-l-5">Select</button>

                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="images/cdj.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Artist</h5>
                          <p class="card-text">DJ, Band, Poet, have fans and want to let them know where to catch your next gig? click here. </p>
                          <p class="card-text"><small class="text-muted"></small></p>

                           <button type="button" class="btn btn-primary btn-block btn-md m-b-10 m-l-5">Select</button>

                        </div>
                      </div>
                    </div>

                    
                </div>
            </div>
        </div>

    </div><br><br>
<!--     footer -->
            <footer class="footerlogin">© 2018 All rights reserved. <a href="https://beerlybeloved.co.za">Beerly Beloved</a></footer>
<!--             End footer -->
<!--     End Wrapper 
     All Jquery -->
    <script src="jsjquery.min.js"></script>
<!--     Bootstrap tether Core JavaScript -->
    <script src="jspopper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--     slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
<!--    Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
<!--    stickey kit -->
    <script src="js/sticky-kit.min.js"></script>
<!--    Custom JavaScript -->
    <script src="js/scripts.js"></script>
    </body>
</html>


