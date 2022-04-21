<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/config.php');
?>





<!-- $host="localhost";
$user="root";
$password="";
$dbname="status_carregamento";


$conection = mysqli_connect($host,$user,$password,$dbname);

mysqli_set_charset($conection, "utf-8");


try{
    $sql = "SELECT * FROM processos"
    $execute = $conection->query($sql);

    if($execute->rowCont()>0){
        while($row = $execute->fetch()){
            $dateArray[] = $row["hora_chegada"];
            $qtArray[] = $row["quantidade"]
        }
        unset($execute);
    }else{
        echo 'sem resultado';
    
}catch(PDOException $e){
    die("error");
} -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                </div>

                <!-- /.container-fluid -->
                <div class="card shadow mb-4" >
                        <div class="card-body">
                        
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Graficos de produção</h1>
<p class="mb-4"></p>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-8 col-lg-7">

        <!-- Bar Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Produção</h6>
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
                <h6 class="m-0 font-weight-bold text-primary">Meta x Executado Mensal</h6>
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
                <h6 class="m-0 font-weight-bold text-primary">Grafico</h6>
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
                    <td>Total de meta programada</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Total de meta executada em big bag</td>
                    <td id="Metaexecutada"></td>
                </tr>
                
                <tr>
                    <td>Total de meta executada em granel</td>
                    <td></td>
                </tr>



                <tr>
                    <td>Meta diaria</td>
                    <td id="MetaDiaria"></td>
                </tr>

                <tr>
                    <td>Total de veiculos já carregados</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Necessidade de veiculos p/ dia para objetivo</td>
                    <td></td>
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
