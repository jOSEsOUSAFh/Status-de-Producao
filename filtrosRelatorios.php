<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>





        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                include('includes/topbar.php');
                ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> 

                        <!-- <div id="teste"></div> -->

                        <?php
                        
                        
                        
                        ?>


                         <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>  -->
                    </div>

                </div>

                <!-- /.container-fluid -->
                <div class="card shadow mb-4" >
                        <div class="card-body">
                        
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Filters -->
<form action="gerarExcel.php" method="POST">
    <div class="row">
     <div class="col-md-3">
       <input type="date" name="data_inicio" id="data_inicio" class="form-control" />
      </div>
      <div class="col-md-3">
       <input type="date" name="data_final" id="data_final" class="form-control" />
      </div>      
      
     <div class="col-md-2">
      <input type="button" name="search" id="search" value="Gerar Graficos" class="btn btn-info" />
     </div>

     <div class="col-md-2">
        <input type="submit" value="Gerar Excel" class="btn btn-info">
         
     </div>

    </div>
    
    </form>



<!-- Content Row -->
<div class="card border shadow mb-4 align-items-center " id="order_data">

    <div class="col-xl-9 col-lg-2">

        <!-- Bar Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Produzido x Programado</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">

                     <canvas id="myBarChart"></canvas>

                </div>
                <hr>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Indice alcançado da meta mensal</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">

                    <canvas id="myPieChart"></canvas>

                </div>
                <hr>
            </div>
        </div>

        

    </div>

                        
                        </div>


                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            </div>
            <!-- End of Main Content -->


           




            
<?php 
include('includes/modal.php');
include('includes/footer.php');
?>


<script src="js/filtros.js" defer></script>
