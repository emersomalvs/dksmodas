<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Páginas</h3>
      <div class="box-tools">
        <a href="<?php echo BASE_URL.'pages/add'; ?>" class="btn btn-success">Adicionar</a><br>
        <br>
      </div>
    </div>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Páginas</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
              <thead>
                        <tr>
                            <th style="width: 5%">
                                Ordem
                            </th>
                            <th>
                                Nome da página
                            </th>
                            <th  class="text-center" style="width: 30%">
                                Ações
                            </th>
                        </tr>
                    </thead>

              <?php foreach($list as $item): ?>
                <tbody>
                <tr>
                            <td>
                                <?php echo $item['id']; ?>
                            </td>
                            <td>
                                <a>
                                    <?php echo $item['title']; ?>
                                </a>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo BASE_URL_SITE.'pages/'.$item['id']; ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="<?php echo BASE_URL.'pages/edit/'.$item['id']; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?php echo BASE_URL.'pages/del/'.$item['id']; ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                </tbody>
              <?php endforeach; ?>

            </table>
        </div>
    </div>
  </div>

</section>
<!-- /.content -->