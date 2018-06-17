<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      View Librarian
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()."Admin";?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>View</li>
      <li class="active">Librarian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List of Librarian</h3>
                	<div class="box-tools">
                  </div>
                </div>
                <div class="box-body">
                  <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <tr>
              						<th>ID</th>
              						<th nowrap>School Id</th>
              						<th nowrap>First Name</th>
              						<th nowrap>Middle Name</th>
              						<th nowrap>Last Name</th>
              						<th nowrap>Status</th>
                        </tr>
                        <?php foreach($users as $u){ ?>
                        <tr>
              						<td><?php echo $u['id']; ?></td>
              						<td><?php echo $u['schoolId']; ?></td>
              						<td nowrap><?php echo $u['firstName']; ?></td>
              						<td nowrap><?php echo $u['middleName']; ?></td>
              						<td nowrap><?php echo $u['lastName']; ?></td>
              						<td nowrap><?php echo $u['status']; ?></td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                    <div class="pull-right">
                        <?php print_r( $this->pagination->create_links()); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>