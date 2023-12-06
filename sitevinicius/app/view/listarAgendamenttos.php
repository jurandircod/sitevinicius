<?php
include('../../config/config.php');


$result = $conn->query('SELECT * FROM tb_agendamentos ');

$result_cards = $conn->query("SELECT * FROM tb_locais")


?>

<div class="text-center mb-3">
    <h2><strong>Agendamentos</strong></h2>
</div>

<div class="container-cards">

    <?php while ($cards = $result_cards->fetch_assoc()) : ?>
        <div class="card">

            <div class="card-body text-center">
                <h5 class="card-title"><strong><?php echo $cards['nome_local'] ?></strong></h5>
                <p class="card-text"></p>

                <table class="table table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Dias indisponíveis</th>
                            <!--Outras colunas-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($horarios = $result->fetch_assoc()) : ?>
                            <?php
                            $data_inicio = new DateTime($horarios['date_time_inicio']);
                            $hora_inicio = $data_inicio->format('H:i');

                            $dia = $data_inicio->format('d/m/y');

                            $data_final = new DateTime($horarios['date_time_fim']);
                            $hora_fim = $data_final->format('H:i');

                            ?>
                            <tr>
                                <td><?php echo $dia ?> <br> <?php echo $hora_inicio ?> - <?php echo $hora_fim ?></td>

                            </tr>
                        <?php endwhile; ?>
                        <!-- Outras linhas... -->
                    </tbody>

                </table>


                <button type="button" name="enviar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Agendar
                </button>
            </div>
        </div>

        <div class="modal fade text-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $cards['nome_local'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <img id="imgsimbolo" src="../../../public/img/logoCidade.jpeg" alt="">

                        <form action="" method="post">
                            <div class="name mt-3">
                                <label for="inputEmail4" class="form-label">Seu nome completo:</label>
                                <input type="text" name="nameUser" class="form-control" placeholder="Digite seu nome completo" id="">
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="">Selecione seu setor</label>
                                    <select id="inputState" name="setores" class="form-select">
                                        <option selected="">Selecionar...</option>
                                        <option>DTI</option>
                                        <option>SAUDE</option>
                                        <option>JURIDICO</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="">Dia de agendamento:</label>
                                    <input class="form-control" type="date" id="data" name="dia">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="">Horário de inicio</label>
                                    <input type="time" class="form-control" name="horaInicio" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="">Horario de termino</label>
                                    <input type="time" class="form-control" name="horaFim" placeholder="Last name" aria-label="Last name">
                                </div>
                            </div>


                            <div class="mt-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

</div>