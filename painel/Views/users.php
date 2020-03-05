<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Filtro</h3>
    </div>
    <div class="box-body">
      <form method="GET">
        <div class="row">
          <div class="col-sm-5">
            <label for="form_user">Nome ou E-mail</label><br/>
            <input type="text" name="name" value="<?php echo $filter['name']; ?>" id="form_user" class="form-control" />
          </div>
          <div class="col-sm-5">
            <label for="form_permission">Nível de Permissão</label><br/>
            <select name="permission" class="form-control" id="form_permission">
              <option></option>
              <?php foreach($permission_list as $item): ?>
                <option <?php echo ($filter['permission']==$item['id'])?'selected':''; ?> value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-sm-2">
            <label>&nbsp;</label><br/>
            <input type="submit" value="Filtrar" class="btn btn-primary" />
          </div>
        </div>
      </form>
    </div>
  </div>




  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Usuários</h3>
      <div class="box-tools">
        <a href="<?php echo BASE_URL.'users/add'; ?>" class="btn btn-success">Adicionar</a>
      </div>
    </div><br>
    <div class="box-body" style="display: flow-root;">


        <?php foreach($list as $item): ?>
            <div class="card card-primary card-outline" style="width: 22%;float: left;margin: 10px">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo BASE_URL; ?>assets/images/perfil/<?php echo $item['perfil']; ?>"
                       alt="User profile picture">
                </div>

                <?php if($item['admin'] === '1'): ?>
              <h3 class="profile-username text-center"><?php echo $item['name']; ?></h3>
            <?php else: ?>
              <h3 class="profile-username text-center"><?php echo $item['name']; ?></h3>
            <?php endif; ?>

                <p class="text-muted text-center"><?php echo $item['permission_name']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b><?php echo $item['email']; ?></td></b></a>
                  </li>
                </ul>
                <center>
                <a href="<?php echo BASE_URL.'users/edit/'.$item['id']; ?>" class="btn btn-xs btn-primary">Editar</a>
            <a href="<?php echo BASE_URL.'users/del/'.$item['id']; ?>" class="btn btn-xs btn-danger">Excluir</a>
                </center>
              </div>
              <!-- /.card-body -->
            </div>
        <?php endforeach; ?>

    </div>
    <br>
    <div class="box-body" style="text-align: center;">
      <?php
      $total_pages = ceil($pag['total'] / $pag['per_page']);
      ?>
      <?php for($q=0;$q<$total_pages;$q++): ?>
        <a href="<?php
        $items = $_GET;
        unset($items['url']);
        $items['p'] = ($q+1);

        echo BASE_URL.'users?'.http_build_query($items);
        ?>">
          <?php echo ($q==$pag['currentpage'])?'<strong>[ '.($q+1).' ]</strong>':'[ '.($q+1).' ]'; ?>
        </a>
      <?php endfor; ?>
</div><br>
  </div>

</section>
<!-- /.content -->