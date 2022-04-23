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
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar processo..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                        <!-- Nav Item - User Information -->
                          <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 d-none d-lg-inline text-gray-600 small">Nome do usuario</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> 
                             </a> 
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuração
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Encerrar
                                </a>
                            </div>
                        </li>

                    </ul>








                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Produção</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Gerar relatorio</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        

                    </div>
                </div>

                <!-- /.container-fluid -->
                <div class="card shadow mb-4" >
 
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">

                        <h6 class="m-0 font-weight-bold text-primary">Status de carregamento</h6>
                                                        <!-- Botão para acionar modal -->
                            <button type="button" class="d-none d-sm-inline-block btn btn btn-primary shadow" data-toggle="modal" data-target="#CadModal">
                            Adicinonar novo processo
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
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr class="text-center">
                                        <!-- <th>Ordem</th> -->
                                        <th>Data</th>
                                        <th>Placa</th>
                                        <th>Transportadora</th>
                                        <th>Ordem</th>
                                        <th>Produto</th>
                                        <th>Especie</th>
                                        <th>Quantidade</th>
                                         <!-- <th>CIF/FOB</th>
                                        <th>Pedido</th>
                                        <th>Produtor</th> -->
                                        <th>Status Carregamento</th>
                                        <!-- <th>Data Inicio</th>
                                        <th>Hora Inicio</th>
                                        <th>Data fim</th>
                                        <th>Hora fim</th>
                                        <th>Tempo de Carregamento</th>
                                        <th>NF INTER</th>
                                        <th>Ordem de produção</th>
                                        <th>Ticket</th>
                                        <th>NF venda</th>
                                        <th>Status viagem</th>
                                        <th>Data de Liberação</th>  -->
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                        </tr>
                                        
                                    </thead>
                                    <div>
                                    <tbody class="sortable" id="results">

<?php



while($retorno = mysqli_fetch_object($execute)){ ?>

    <?php $dataAmericana = $retorno->data_chegada;
    
    $dataTimesTamp = strtotime($dataAmericana);

     $dataBrasileira = date("d/m/Y", $dataTimesTamp);
    
    ?> 
    
    <tr class="" id="<?php echo $retorno->id;?>">
    <!-- <td><?php echo $retorno->idOrdem;?>ª</td> -->
    <td><?php echo $dataBrasileira ;?></td>
    <td><?php echo $retorno->placa ;?></td>
    <td><?php echo $retorno->transportadora ;?></td>
    <td><?php echo $retorno->ordem ;?></td>
    <td><?php echo $retorno->produto ;?></td>
    <td><?php echo $retorno->especie ;?></td>
    <td><?php echo $retorno->quantidade ;?></td>
    <td><?php echo $retorno->status_carregamento;?></td>


<td class="text-center">
 <form action="edit.php" method="post">
<input type="hidden" name="edit-id" value="<?php echo $retorno->id;?>">
<button type='submit' name="edit-btn"  id='edite'  class='btn btn-success btn-sm ' >Editar</button>
</form>
</td>

<td class="text-center">
    <form action="code.php" method="POST">
        <input type="hidden" name="delete_id" value="<?php  echo $retorno->id;  ?>">
<button type='submit' name="btndelete" id="delete" value="excluir" class='btn btn-danger btn-sm' >Excluir</button>
    </form>
</td>


</tr>

<?php  } ?>

                                        


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

include('includes/script.php');
include('includes/modal.php');
include('includes/footer.php');


?>



