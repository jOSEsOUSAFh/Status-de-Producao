<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/config.php');
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
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                </div>

                <!-- /.container-fluid -->
                <div class="card shadow mb-4" >
                        <div class="card-body">
                        
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Graficos de produção</h1>
<p class="mb-4"></p> -->

<!-- Content Row -->
<div class="row">

    <div class="col-xl-8 col-lg-7">

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

    <!-- Donut Chart -->
    <div class="col-xl-4 col-lg-5" style="width: 30rem;">
        <div class="card shadow mb-4" style="height: 30rem;">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Status da meta mensal</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-1">

                <div class="container">
       <table class="table table-sm table-hover">
            
                <tr>    
                    <td>Total de meta para expedição</td>
                    <td id="totalMeta"></td>
                </tr>

                <tr>
                    <td>Saldo a ser expedido</td>
                    <td id="saldoPendente"></td>
                </tr>


                <tr>
                    <td>Meta a executar</td>
                    <td id="metaProgramadaNaoExecutada"></td>
                </tr>

                <tr>
                    <td>Total de meta executada em big bag</td>
                    <td id="carregadoEmBigbag"></td>
                </tr>
                
                <tr>
                    <td>Total de meta executada em granel</td>
                    <td id="carregadoEmGranel"></td>
                </tr>



                <tr>
                    <td>Meta diaria</td>
                    <td id="MetaDiaria"></td>
                </tr>

                <tr>
                    <td>Total de veiculos já carregados</td>
                    <td id="totalVeiculosCarregados"></td>
                </tr>
          
        </table>
    </div>

                </div>
            
            </div>
            <hr>
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

include('includes/script.php');
include('includes/modal.php');
include('includes/footer.php');


?>


<script src="js/graficos.js" defer></script>
