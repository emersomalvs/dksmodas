<div class="col-6">
    <div class="tab-content" id="nav-tabContent">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Todas as informações são obrigatórias.
      </div>

    <form method="post" action="<?php echo BASE_URL; ?>perfil/edit_action/<?php echo $info['id']; ?>">
    <div class="form-row">
    <div class="col-md-12 mb-3">
    <label for="validationDefault01">Nome :</label>
    <input name="nome" class="form-control"  type="text" id="nome" value="<?php echo $info['nome']; ?>" required/>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-12 mb-3">
      <label>CEP :</label>
    <input name="cep" class="form-control" type="text" id="cep" value="<?php echo $info['cep']; ?>" required/>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-12 mb-3">
      <label>Rua :</label>
    <input name="rua" class="form-control" type="text" id="rua" value="<?php echo $info['rua']; ?>" required/>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Número :</label>
    <input name="numero" class="form-control" type="text" id="numero" value="<?php echo $info['numero']; ?>" required/>
    </div>
    <div class="col-md-6 mb-3">
      <label>Complemto :</label>
    <input name="complemento" class="form-control" type="text" id="complemento" value="<?php echo $info['complemento']; ?>"/>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-12 mb-3">
      <label>Bairro :</label>
    <input name="bairro" class="form-control" type="text" id="bairro" value="<?php echo $info['bairro']; ?>" required/>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Estado :</label>
    <input name="uf" class="form-control" type="text" id="uf" value="<?php echo $info['uf']; ?>" required/>
    </div>
    <div class="col-md-6 mb-3">
      <label>Cidade :</label>
    <input name="cidade" class="form-control" type="text" id="cidade" value="<?php echo $info['cidade']; ?>" required/>
    </div>
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Alterar">

    </form>
    </div>
</div>