 <?php
    require_once '../server/db-config.php';
    $sql = $conn->prepare('SELECT * FROM visitorStats');
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    $visitorCount = count($data);
?>
 <!-- Information Boxes -->

 <div id="information-container" class="container-fluid">
     <div class="row h-100">
         <div class="col-lg-3 col-md-6  p-6">
             <div id="viewers-box" class="box-styling shadow p-3 bg-white rounded">
                 <span class="iconify mb-3 mt-2" data-icon="fluent:people-team-16-filled" style="color: black;"></span>
                 <h4>Visitors</h4>
                 <h5><?php echo $visitorCount  ?></h5>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 p-6">
             <div id="sale-box" class="box-styling shadow p-3 bg-white rounded">
                 <span class="iconify  mb-3 mt-2" data-icon="icomoon-free:stats-bars" style="color: black;"></span>
                 <h4>Reserved</h4>
                 <h5>0</h5>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 p-6">
             <div id="order-box" class="box-styling shadow p-3 bg-white rounded">
                 <span class="iconify  mb-3 mt-2" data-icon="zmdi:balance" style="color: black;"></span>
                 <h4>Reserved</h4>
                 <h5>0</h5>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 p-6">
             <div id="order-box" class="box-styling shadow p-3 bg-white rounded">
                 <span class="iconify  mb-3 mt-2" data-icon="fa-solid:user-friends" style="color: black;"></span>
                 <h4>Reserved</h4>
                 <h5>0</h5>
             </div>
         </div>
     </div>
 </div>

 <div id="dash-content" class="container-fluid mt-5">
     <!-- Second Row Layout  -->
     <div class="row">
         <div class="col-md-8">
             <!-- Graph Content -->
             <div id="graph-container" class="container-fluid shadow">


             </div>
         </div>
         <div class="col-md-4">
             <!-- Weather Content -->
             <div id="weather-container" class="container-fluid shadow">
                 <div class="loader-circle"></div>
                 <h3 id="tempCel"></h3>
                 <div id="weather-icon">
                     <!-- <img src="" alt="weather-icon" srcset=""> -->
                 </div>
                 <h3 id="tempCity"></h3>
                 <p id="tempDesc" style="font-size: 89%;"></p>
             </div>
         </div>
     </div>

 </div>