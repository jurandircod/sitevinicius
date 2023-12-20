<section class="content">
    <h1 class="text-center mb-4">Cadastrar setores</h1>
    <form action="../../sitevinicius/app/model/setor/cadastrar.php" class="form">
        <div class="row">
            <div class="form-group">
                <input type="text" class="form-control " id="inputName" name="nomeSetor" placeholder="cadastrar setores">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger ml-3">Enviar</button>
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-3" class="sec">
                <select name="secretaria" required minlength="3" class="form-control">
                    <option value="" selected>Selecione a secretaria*</option>
                    <option value="RH">Secrtária de saúde</option>
                    <option value="RH">Secretária dos conselhos</option>
                    <option value="RH">RH</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-landmark">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<style>
    .content {
        width: 100%;


    }

    .form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .input-group {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>