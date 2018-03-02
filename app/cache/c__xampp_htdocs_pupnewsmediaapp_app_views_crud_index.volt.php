

<?= $this->getContent() ?>


<section class="content">
    <div class="container-fluid">
       <div class="block-header">
            <h2>EMPLOYEE</h2>
            </div>
            <!-- Input -->
			 <div class="row clearfix">
				
				 <button class="btn btn-success" onclick="add_emp()"><i class="glyphicon glyphicon-plus"></i> Add</button>
				<hr>

				<table class="table table-hover">
					<tr>
						<th>Id</th>
						<th>Firstname</th> 
						<th>Lastname</th>
						<th>Age</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				<?php foreach ($emps->items as $data) { ?>
					<tr>
						<td><?= $data->id ?></td>
						<td><?= ucwords($this->escaper->escapeHtml($data->firstname)) ?></td>
						<td><?= ucwords($this->escaper->escapeHtml($data->lastname)) ?></td>
						<td><?= $this->escaper->escapeHtml($data->age) ?></td>
						<td><?= ucwords($this->escaper->escapeHtml($data->address)) ?></td>
						<td>
         <!-- <button class="btn btn-success" onclick="delete(<?= $data->id ?>)"><i class="glyphicon glyphicon-trash"></i> DELETE</button> -->

                        <!-- <button class="btn btn-warning" onclick="edit_student(<?php echo $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button> -->
                  <button class="btn btn-danger" onclick="detail(<?= $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-danger" onclick="deleteEmp(<?= $data->id ?>)"><i class="glyphicon glyphicon-remove"></i></button>

			
						</td>
					</tr>
					<?php } ?>
				</table>

					<ul class="pagination pull-right">
						<li><?= $this->tag->linkTo(['crud', 'First']) ?></li>
						<li><?= $this->tag->linkTo(['crud?page=' . $emps->before, 'Previous']) ?></li>
						<li><?= $this->tag->linkTo(['crud?page=' . $emps->next, 'Next']) ?></li>
						<li><?= $this->tag->linkTo(['crud?page=' . $emps->last, 'Last']) ?></li>
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
    function deleteEmp(id){

            if(confirm('Are you sure delete this data?'))
            {
                  $.ajax({
                    url : "<?= $this->url->get('crud/deleteEmp') ?>/" + id,         
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

            // if(response.success){
            //       $('#deleteModal').modal('hide');
            //       $('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                  
            //     }else{
            //       alert('Error');
            //     }
        }
    function add_emp()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

     function detail(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "<?= $this->url->get('crud/detail') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="firstname"]').val(data.firstname);
            $('[name="lastname"]').val(data.lastname);
            $('[name="age"]').val(data.age);
            $('[name="address"]').val(data.address);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

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
      if(save_method == 'add')
      {
          url = "<?= $this->url->get('crud/create') ?>";

      }
      else
      {
          url = "<?= $this->url->get('crud/edit') ?>";
      }

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



    

</script>

   <div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Person</h4>
                        </div>
                        <div class="modal-body">
                               <form action="#" id="form" class="form-horizontal">
					              <!-- <input type="hidden" value="" name="id"/> -->
					              <div class="form-body">

                              <input name="id" class="form-control" type="hidden">
					               
					                <div class="form-group">
					                  <label class="control-label col-md-3">Firstname</label>
					                  <div class="col-md-9">
					                    <input name="firstname" placeholder="Firstname" class="form-control" type="text">
					                  </div>
					                </div>
					                <div class="form-group">
					                  <label class="control-label col-md-3">Lastname</label>
					                  <div class="col-md-9">
					                    <input name="lastname" placeholder="Lastname" class="form-control" type="text">
					                  </div>
					                </div>
					                <div class="form-group">
					                  <label class="control-label col-md-3">Age</label>
					                  <div class="col-md-9">
					                    <input name="age" placeholder="Age" class="form-control" type="text">

					                  </div>
					                </div>
					                <div class="form-group">
					                  <label class="control-label col-md-3">Address</label>
					                  <div class="col-md-9">
					                    <input name="address" placeholder="Address" class="form-control" type="text">

					                  </div>
					                </div>

					              </div>
					           </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id ="btnSave" onclick="save()"class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
