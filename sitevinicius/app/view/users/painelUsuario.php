<?php $nome =  $_SESSION['nome']; ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Perfil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Ínicio</a></li>
                    <li class="breadcrumb-item active">Usúario</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_640.png" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?php echo $nome ?></h3>

                        <p class="text-muted text-center">telefone: (44) 999542331</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Agendamentos feitos</b> <a class="float-right">5</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-warning btn-block"><b>Alterar</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sobre mim</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Escolaridade</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Endereço</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#user" data-toggle="tab">Usuário</a></li>

                            <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Alterar dados</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Agendamentos</a></li>

                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="settings">
                                <!-- Post -->
                                <div class="tab-content">
                                    <div class="tab-empty">
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                                    <div class="card bg-light d-flex flex-fill">
                                                        <div class="card-header text-muted border-bottom-0">
                                                            Eventos
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <h2 class="lead"><b>Anfiteatro</b></h2>
                                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Data agendada: 11/11/23 </li>
                                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Horario: 10:20 - 15:20 </li>
                                                                    </ul>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-5 text-center">
                                                                    <img src="https://umuarama.pr.gov.br/files/Noticias/capa/070619000-1575058681.jpg" alt="user-avatar" class=" img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="text-right row">
                                                                <div class="col">
                                                                    <a href="#" class="btn bg-danger">
                                                                        <i class="fas fa-comments"></i>Excluir
                                                                    </a>
                                                                </div>
                                                                <div class="col">
                                                                    <a href="#" class="btn bg-warning">
                                                                        <i class="fas fa-user"></i> Alterar
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->

                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="activity">
                                <h1 class="text-center mb-4"> Alterar dados</h1>
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="<?php echo $nome ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="active tab-pane" id="user">
                                <h1 class="text-center mb-4"> Usuário </h1>
                                <p>Nome:</p>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>