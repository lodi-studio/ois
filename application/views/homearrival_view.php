
<div class="container">
</center>
    <div class="btn-group">
      <a href="<?php echo site_url('Home/create'); ?>" class="btn btn-primary"><i class="fa fa-play" aria-hidden="true"></i> Dispatch</a>
      <a href="<?php echo site_url('Home/arrival'); ?>" class="btn btn-danger"><i class="fa fa-stop" aria-hidden="true"></i> Arrival</a>

    </div>
    <div class="float-right">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo site_url('Home/index'); ?>">Dispatch</a>
          <a class="dropdown-item" href="<?php echo site_url('Home/arrival_post'); ?>">Arrival</a>
        </div>
      </div>
    <br><br/>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="thead-dark">
        <tr>
            <th>BUS NO.</th>
            <th>TIME</th>
            <th>ROUTE</th>
            <th>DRIVER</th>
            <th>CONDUCTOR</th>
            <th>O.R. NO.</th>
            <th>NO. OF PASS.</th>
            <th>ACTION </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data['arrival']->result() as $row) : ?>
            <tr>
                <td><?php echo $row->bus_no; ?></td>
                <td><?php echo $row->dispatch_time; ?></td>
                <td><?php echo $row->bus_route; ?></td>
                <td><?php echo $row->bus_driver; ?></td>
                <td><?php echo $row->bus_conductor; ?></td>
                <td><?php echo $row->or_no; ?></td>
                <td><?php echo $row->no_of_pass; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>

  <script src="<?php echo base_url('assests/<a href="https://www.phpcodify.com/category/jquery/">jquery</a>/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


 

