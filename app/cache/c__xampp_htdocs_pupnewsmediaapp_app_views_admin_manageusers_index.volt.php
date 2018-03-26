

<?= $this->getContent() ?>


<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Manage Users</h2>
		</div>
		<!-- Input -->
		<div class="row clearfix">


			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>username</th>

					<th>USER LEVEL</th>
					<!-- <th>Date and Time</th> -->
				</tr>


				<?php foreach ($users->items as $data) { ?>
				<tr>
					<td><?= $data->id ?></td>
					<td><?= $data->username ?></td>

					<td><?= ucwords($this->escaper->escapeHtml($data->access)) ?></td>
					<td>
						<button class="btn btn-danger"  onclick="detailuser(<?= $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
            <!-- <button class="btn btn-danger" onclick="deleteuser(<?= $data->id ?>)"><i class="glyphicon glyphicon-remove"></i></button> -->






            <button class="btn btn-danger" onclick="deleteuser(<?= $data->id ?>)"><i class="glyphicon glyphicon-remove"></i></button>
          </td>
        </tr>

        <?php } ?>




      </table>
      <ul class="pagination pull-right">
        <li><?= $this->tag->linkTo(['admin/manageusers', 'First']) ?></li>
        <li><?= $this->tag->linkTo(['admin/manageusers?page=' . $users->before, 'Previous']) ?></li>
        <li><?= $this->tag->linkTo(['admin/manageusers?page=' . $users->next, 'Next']) ?></li>
        <li><?= $this->tag->linkTo(['admin/manageusers?page=' . $users->last, 'Last']) ?></li>
      </ul>
    </div>
  </div>
</div>
</section> 
<?= $this->tag->javascriptInclude('plugins/jquery/jquery.min.js') ?>
<?= $this->tag->javascriptInclude('plugins/bootstrap/js/bootstrap.js') ?>
<?= $this->tag->javascriptInclude('plugins/bootstrap-select/js/bootstrap-select.js') ?>
<?= $this->tag->javascriptInclude('plugins/jquery-slimscroll/jquery.slimscroll.js') ?>
<?= $this->tag->javascriptInclude('plugins/bootstrap-notify/bootstrap-notify.js') ?>
<?= $this->tag->javascriptInclude('plugins/node-waves/waves.js') ?>
<?= $this->tag->javascriptInclude('js/admin.js') ?>
<?= $this->tag->javascriptInclude('js/pages/ui/modals.js') ?>
<?= $this->tag->javascriptInclude('plugins/jquery/jquery.min.js') ?>
<?= $this->tag->javascriptInclude('plugins/bootstrap/js/bootstrap.js') ?>
<?= $this->tag->javascriptInclude('js/demo.js') ?>



<script type="text/javascript">
var save_method;
var table;

function add_announce()
{
	save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
      // $('.modal-title').text('Add Announcement'); // Set title to Bootstrap modal title

    }



    function detailuser(id)
    {
     save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

      	url : "<?= $this->url->get('admin/manageusers/detailuser') ?>/" + id,
      	type: "GET",
      	dataType: "JSON",
      	success: function(data)
      	{



          $('[name="id"]').val(data.id);
          $('[name="username"]').val(data.username);
          $('[name="access"]').val(data.access);


          
              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              // $('.modal-title').text('CHANGE'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
             alert('Error get data from ajax');
           }
         });
    }

    function save()
    {
     var url;

      url = "<?= $this->url->get('admin/manageusers/editusers') ?>";

       // ajax adding data to database
       $.ajax({
       	url : url,
       	type: "POST",
       	data: $('#form').serialize(),
       	dataType: "JSON",
       	success: function(data)
       	{
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
             alert('Error adding / update data');
           }
         });
     }


     function deleteuser(id){

      if(confirm('Are you sure delete this data?'))
      {

       $.ajax({
        url : "<?= $this->url->get('admin/manageusers/deleteuser') ?>/" + id,         
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {   
         location.reload();
       },
       error: function (jqXHR, textStatus, errorThrown)
       {
         alert('Error deleting data');
       }
     });
     }


   }



   </script>





<div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
 <div class="modal-dialog">

  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">CHOOSE ACCESS LEVEL</h4>
    </div>
    <form action="#" id="form" class="form-horizontal">
      <div class="modal-body">
       <select class="form-control show-tick"  name="access" value= <?= $data->access ?>>

        <option value= "admin">Admin</option>
        <option value= "student">Student</option>
        <option value= "user">Journalist</option>
      </select>

      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
          <input type="hidden" name="id" value= <?= $data->id ?>> 

        </div>

        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
          <input type="button" value ="CHANGE"id ="btnSave" onclick="save()"class="btn bg-red btn-block btn-sm waves-effect">

        
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
        </div>
      </div>


    </div>

  </form>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>





<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

<?= $this->tag->javascriptInclude('plugins/ckeditor/ckeditor.js') ?>