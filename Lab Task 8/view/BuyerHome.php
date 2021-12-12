<html>
    <head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../ExternalCSS/BuyerHome.css">
    <link rel="stylesheet" href="../ExternalCSS/Header.css">
    <link rel="stylesheet" href="../ExternalCSS/Footer.css">
    </head>
<body>
<div class="nav">
<?php
session_start();
 include '../controller/Head.php'?>

</div>
<br>
<fieldset style="height:50px; margin-top: 30px;">
<center><h2>Find your future home!</h2></center>
</fieldset>
<br><br>
<div class="sidemenu">
<table>
<td>
<fieldset style="height:270px;width:300px">
<h2 style="text-align: center; margin-top:5px; text-decoration:underline">Account</h2> &nbsp &nbsp 
<hr/>
<ul style="list-style-type: none; padding-left:20px; margin-top:20px">
<li><a class="bh" href="#">Home</a></li>
<li><a class="bh" href="../view/Profile.php">View Profile</a></li>
<li><a class="bh" href="../controller/Edit.php">Edit Profile</a></li>
<li><a class="bh" href="../controller/ChangePass.php">Change Password</a></li>
<li><a class="bh" href="./logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
</table>
<br><br>
<fieldset>
<h2 style="text-align: left; margin-top:5px; text-decoration:underline">Most Viewed Apartments</h2>
                <div class="card2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-4">
                                 <img class="card-img-top mt-3 p-2" src="../images/247375047_617027926123365_3465912541445192580_n.jpg" alt="">   
                                </div>
                                <div class="col-8 ">
                                    <h4 class="mt-4">Peace Shelter✡</h4>
                                    <label>Location:Mirpur,Dohs</label> <br>
                                    <label>Square ft: 1200square ft</label> <br>
                                    <label>Description:3 Bed, Dining, Drawing, 4 Bath, Kitchen, 3 Balcony.</label> <br>
                                    <label>Asking price:3500/- per square ft.</label> <br>
                                    <label>Negotiable:No</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 

                                </div>
                                <div class="col-4">
                                    <img class="card-img-top mt-1 p-2" src="../images/247584256_356139062957072_5931969867426458258_n.jpg" alt="">   
                                </div>
                                   <div class="col-8 ">

                                    <h4 class="mt-4">Daylight✡</h4>
                                    <label>Location:Banani,Dohs</label> <br>
                                    <label>Square ft: 1500square ft</label> <br>
                                    <label>Description:4 Bed, Dining, Drawing, 5 Bath, Kitchen, 4 Balcony.</label> <br>
                                    <label>Asking price:4500/- per square ft.</label> <br>
                                    <label>Negotiable:Slightly</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 
                               </div>
                                   <div class="col-4">
                                    <img class="card-img-top mt-1 p-2 mb-3" src="../images/247584256_356139062957072_5931969867426458258_n.jpg" alt="">   
                                   </div>
                                   <div class="col-8 ">
                                    <h4 class="mt-4">Morning Bell✡</h4>
                                    <label>Location:Uttara</label> <br>
                                    <label>Square ft: 1200square ft</label> <br>
                                    <label>Description:3 Bed, Dining, Drawing, 4 Bath, Kitchen, 3 Balcony.</label> <br>
                                    <label>Asking price:4000/- per square ft.</label> <br>
                                    <label>Negotiable:Yes</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 
                            </div>
                        </div>
                    </div>
                </div>
    </div>  
</fieldset>
<br><br>
<fieldset>
<?php include '../controller/footer.php'?>
</fieldset>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   <script src="js/bootstrap.js"></script>
</body>
<html>