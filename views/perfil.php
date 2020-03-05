
	<div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Pedidos</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Seus dados</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Endereço</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

      	<div class="jumbotron">
  <h1 class="display-4"><?php echo $perfil['name']; ?> - ID: <?php echo $perfil['id']; ?>!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        class="form-control" 
        pedidos

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
   Todas as informações são obrigatórias.
</div>
        <form method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome completo</label>
      <input type="text" class="form-control" id="validationDefault01" value="<?php echo $perfil['name']; ?>" placeholder="Nome completo" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Data de nascimento</label>
      <input type="date" class="form-control" id="validationDefault02" value="<?php echo $perfil['data']; ?>" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">CPF</label>
      <input type="number" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" value="<?php echo $perfil['cpf']; ?>" placeholder="000-000-000-00" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Sexo</label>
      <select class="custom-select" id="validationDefault04" required>
      <option<?php if( $perfil['sexo'] === "Masculino" ){ echo ' selected'; } ?>>Masculino</option>
      <option<?php if( $perfil['sexo'] === "Feminino" ){ echo ' selected'; } ?>>Feminino</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">E-mail</label>
      <input type="email" class="form-control" id="validationDefault03" value="<?php echo $perfil['email']; ?>" required disabled>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editaremail">ALTERAR E-MAIL</button>
    </div>

 </div>
  <div class="form-row">
   <div class="col-md-3 mb-3">
      <label for="validationDefault05">Senha</label>
      <input type="password" class="form-control" id="validationDefault03" value="<?php echo $perfil['password']; ?>" required disabled>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarsenha">ALTERAR SENHA</button>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Salvar</button>
</form>

      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
<div class="form-row">
        <?php foreach($address as $adr): ?>
    <div class="col-md-5 mb-3">
        <div class="card">
          <div class="card-body">
            <?php if ($adr['nome'] == "Principal") { ?>
            <button type="button" class="ml-2 mb-1 close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php } else { ?>
            <button type="button" class="ml-2 mb-1 close" aria-label="Close">
              <span aria-hidden="true"><a href="<?php echo BASE_URL ?>perfil/del/<?php echo $adr['id']; ?>">&times;</a></span>
            </button>
            <?php } ?>
            <h5 class="card-title"><?php echo $adr['nome']; ?></h5>
            <p class="card-text">
              <?php echo $adr['rua']; ?>, <?php echo $adr['numero']; ?><br>
              <?php echo $adr['bairro']; ?>, <?php echo $adr['cidade']; ?> -
              <?php echo $adr['uf']; ?><br>
              CEP: <?php echo $adr['cep']; ?>
            </p>
            <a href="<?php echo BASE_URL ?>perfil/edit/<?php echo $adr['id']; ?>" class="card-link"><i class="far fa-edit"></i>Alterar</a>
          </div>
        </div>
    </div>
        <?php endforeach; ?>
</div>
      </div>
    </div>
  </div>
<div class="modal fade" id="editaremail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ALTERAR E-MAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $this->loadViewInTemplate('alteraremail', $viewData); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <button type="button" class="btn btn-primary">SALVAR ALTERAÇÕES</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editarsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ALTERAR SENHA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $this->loadViewInTemplate('alterarsenha', $viewData); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <button type="button" class="btn btn-primary">SALVAR ALTERAÇÕES</button>
      </div>
    </div>
  </div>
</div>

