<?php echo $this->extend('Layout/principal') ?>

<?php echo $this->section('titulo') ?>
<?php echo $titulo ?>
<?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?>

<!-- Aqui coloco os estilos da view-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css" />



<?php echo $this->endSection() ?>

<?php echo $this->section('conteudo') ?>

<!-- Aqui coloco o conteudo da view-->
<div class="col-lg-12">
  <div class="block">
    <div class="table-responsive">
      <table id='ajaxTable' class="table table-striped table-sm" style='width:100%'>
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Situação</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>


<?php echo $this->endSection() ?>

<?php echo $this->section('scripts') ?>

<!-- Aqui coloco o scripts da view-->
<script>
  $(document).ready(function() {
    $('#ajaxTable').DataTable({
      ajax: "<?php echo site_url('usuarios/recuperausuarios'); ?>",
      columns: [{
          data: 'imagem'
        },
        {
          data: 'nome'
        },
        {
          data: 'email'
        },
        {
          data: 'ativo'
        }
      ],
    });
  });
</script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<?php echo $this->endSection() ?>