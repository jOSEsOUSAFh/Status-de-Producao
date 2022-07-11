<?php 
// include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
?>




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <!-- navbar fixed-top navbar-light bg-light -->
                <!-- Topbar -->
                <?php 
                include('includes/topbar.php');
                ?>


                <!-- End of Topbar -->

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     <div class="d-sm-flex align-items-center justify-content-between mb-1">
                        <h1 class="h3 mb-3 text-gray-800">Indicadores</h1>
                        <a href="relatorioPDF.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i>Gerar ordem</a>
                    </div> 

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card Example -->
                          <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" >
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Carros carregados(24h)</div>
                                            <div id="qtdCarrosCarregados" class="h2 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-truck fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   -->

                        

                    </div>
                </div>
                            
                <?php 
                include('includes/modal.php');
                ?>
                <!-- /.container-fluid -->
                <div class="card shadow mb-4" >
 
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">

                        <h6 class="m-0 font-weight-bold text-primary">Status de carregamento</h6>
                                                        <!-- Botão para acionar modal -->
                            <button type="button" class="d-none d-sm-inline-block  btn btn-primary shadow" data-toggle="modal" data-target="#CadModal">
                            Novo carregamento
                            </button>

                        </div>
                        <div class="card-body">
                            <?php 
                            
                            if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
                                echo '<h2 class="bg-primary">' .$_SESSION['success'] . '</h2> ';
                                unset($_SESSION['success']);
                            }

                            
                            if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
                                echo '<h2 class="bg-info">' .$_SESSION['status'] . '</h2> ';
                                unset($_SESSION['status']);
                            }
                            
                            ?>



                            <div class="table-responsive card shadow border-left-success">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr class="text-center text-dark" >
                                        <!-- <th>Ordem</th> -->
                                        <th>Data Chegada</th>
                                        <th>Placa</th>
                                        <th>Transportadora</th>
                                        <th>OC</th>
                                        <th>Produto</th>
                                        <th>Especie</th>
                                        <th>Quantidade</th>
                                        <th>Status Carregamento</th>
                                        <th>CIF/FOB</th>
                                        <th>Pedido</th>
                                        <th>Produtor</th>
                                        <th>Data Inicio</th>
                                        <th>Hora Inicio</th>
                                        <th>Data fim</th>
                                        <th>Hora fim</th>
                                        <th>Tempo de Carregamento</th>
                                       <th>NF INTER</th>
                                       <!-- <th>NF INTER HORA ENVIO</th> -->                                       
                                        <th>Ticket</th>
                                        <th>NF venda</th>
                                       <!--  <th>NF venda Hora recebimento</th>
                                        <th>Tempo de recebimento</th>
                                        <th>Status viagem</th>
                                        <th>Data de Liberação</th>  -->
                                        <th>Ações</th>
                                        
                                        </tr>
                                        
                                    </thead>
                                    <div>
                                    <tbody class="sortable" id="results">

                                  

                     
                                    











                                    </tbody>
                                    </div>
                                </table>




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

include('includes/footer.php');

?>



