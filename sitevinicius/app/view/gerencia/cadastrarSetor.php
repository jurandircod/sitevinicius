<?php
include('app/config/config.php');
$sqlSetor = "SELECT * FROM tbsecretaria";
$resultSetor = $conn->query($sqlSetor);

$sqlSec = "SELECT * FROM tbsetor";
$resultSec = $conn->query($sqlSec);

?>

<section class="content mt-3">
    <h1 class="text-center mb-4">Cadastrar setores</h1>
    <form action="app/model/setor/cadastrar.php">
        <div class="row form">
            <div class="form-group">
                <label class="form-label" for="">Nome do setor</label>
                <input type="text" class="form-control " id="inputName" name="nomeSetor" placeholder="cadastrar setores">
            </div>
            <div class="form-group ml-3" class="sec">
                <label class="form-label" for="">Selecione a secretaria</label>
                <select name="secretaria" required minlength="3" class="form-control">
                    <option value="" placeholder="sadasd" selected></option>
                    <?php while ($seclist = $resultSetor->fetch_assoc()) : ?>
                        <option value="<?php echo $seclist['codigo']; ?>"><?php echo $seclist['nome']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>

        <div class="form">
            <button type="submit" class="btn btn-danger ml-3">Cadastrar setor</button>
        </div>
    </form>
</section>




<section class="content mt-3">
    <!-- Default box -->
    <div class="card card-solid">
        <h1 class='text-center'>setores </h1>
        <div class="card-body pb-0">
            <div class="row">
                <?php while ($setores = $resultSec->fetch_assoc()) : ?>
                    <!-- cards-->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">

                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b><?php echo $setores['nome']; ?></b></h2>
                                        <p class="text-muted text-sm"><b>Sobre: </b></p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                Phone #: + 800 - 12 12 23 52</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="index.php?page=alterarPerfil" class="btn btn-sm btn-warning">
                                        <i class="fas fa-comments"></i>Alterar perfil
                                    </a>
                                    <a class="btn btn-sm btn-danger">
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
<!-- /.post -->
<style>
    .content {
        width: 100%;


    }

    .form {
        display: flex;
        justify-content: center;

    }
</style>