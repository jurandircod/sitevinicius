<?php
include(__DIR__ . '/../../config/config.php');

$sql_query = "SELECT * FROM tbusuario";
$result = $conn->query($sql_query);



?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->



<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contacts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contacts</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">


    <!-- Default box -->
    <div class="card card-solid">

        <div class="card-body pb-0">
            <div class="row">
                <?php while ($agendamentos = $result->fetch_assoc()) : ?>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                <?php if ($agendamentos['nivelPermissao'] == 1) {
                                    echo 'Usuario';
                                } elseif ($agendamentos['nivelPermissao'] == 2) {
                                    echo 'Administrador';
                                } ?>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b><?php echo $agendamentos['nome'] ?></b></h2>
                                        <p class="text-muted text-sm"><b>Sobre: </b></p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: <?php echo $agendamentos['email'] ?></li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="https://www.vhv.rs/dpng/d/15-155087_dummy-image-of-user-hd-png-download.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="index.php?page=alterarPerfil" class="btn btn-sm btn-warning">
                                        <i class="fas fa-comments"></i>Alterar perfil
                                    </a>
                                    <a onclick="confirmarExclusao(<?php echo $agendamentos['codigo']; ?>)" class="btn btn-sm btn-danger">
                                        <i class="fas fa-comments"></i>Excluir perfil
                                    </a>
                                    <a href="index.php?page=verPerfil" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Ver perfil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
            </nav>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

<script>
    function confirmarExclusao(id) {
        // Exibe um alerta de confirmação
        var confirmacao = window.confirm("Tem certeza que deseja excluir o perfil?");

        // Se o usuário clicou em "OK" (ou seja, confirmou)
        if (confirmacao) {
            // Redireciona para a página de exclusão com o ID como parâmetro
            window.location.href = "app/model/users/excluir.php?page=excluir&id=" + id;
        }
    }
</script>

<div class="card-body">
    <button type="button" class="btn btn-success swalDefaultSuccess">
        Launch Success Toast
    </button>
    <button  type="button" class="btn btn-info swalDefaultInfo">
        Launch Info Toast
    </button>
    <button id="excluir" type="button" class="btn btn-danger swalDefaultError">
        Launch Error Toast
    </button>
    <button  type="button" class="btn btn-warning swalDefaultWarning">
        Launch Warning Toast
    </button>
    <button type="button" class="btn btn-default swalDefaultQuestion">
        Launch Question Toast
    </button>
    <div class="text-muted mt-3">
        For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
    </div>
</div>









