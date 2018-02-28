

<?= $this->getContent() ?>


<section class="content">
    <div class="container-fluid">
       <div class="block-header">
            <h2>Category</h2>
            </div>
            <!-- Input -->
			 <div class="row clearfix">
				
				 <button class="btn btn-success" onclick="add_cat()"><i class="glyphicon glyphicon-plus"></i> Add</button>
				<hr>

				<table class="table table-hover">
					<tr>
						<th>Category Id</th>
						<th>Category Name</th> 
						
					</tr>
				<?php foreach ($cat->items as $data) { ?>
					<tr>


						<td><?= $data->category_id ?></td>
						<td><?= ucwords($this->escaper->escapeHtml($data->category_name)) ?></td>
					
						<td>
         <!-- <button class="btn btn-success" onclick="delete(<?= $data->id ?>)"><i class="glyphicon glyphicon-trash"></i> DELETE</button> -->

                        <!-- <button class="btn btn-warning" onclick="edit_student(<?php echo $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button> -->
                  <button class="btn btn-danger" onclick="detail(<?= $data->category_id ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-danger" onclick="deleteCat(<?= $data->category_id ?>)"><i class="glyphicon glyphicon-remove"></i></button>

			
						</td>
					</tr>
					<?php } ?>
				</table>
					<ul class="pagination pull-right">
						<li><?= $this->tag->linkTo(['admin/managecategory', 'First']) ?></li>
						<li><?= $this->tag->linkTo(['admin/managecategory?page=' . $cat->before, 'Previous']) ?></li>
						<li><?= $this->tag->linkTo(['admin/managecategory?page=' . $cat->next, 'Next']) ?></li>
						<li><?= $this->tag->linkTo(['admin/managecategory?page=' . $cat->last, 'Last']) ?></li>
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
      function add_cat()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }



     function detail(category_id)
    {
      save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "<?= $this->url->get('admin/managecategory/detail') ?>/" + category_id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="category_id"]').val(data.category_id);
            $('[name="category_name"]').val(data.category_name);
          

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
          url = "<?= $this->url->get('admin/managecategory/create') ?>";

      }
      else
      {
          url = "<?= $this->url->get('admin/managecategory/edit') ?>";
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


    function deleteCat(category_id){

            if(confirm('Are you sure delete this data?'))
            {
                  $.ajax({
                    url : "<?= $this->url->get('admin/managecategory/deleteCat') ?>/" + category_id,         
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
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Category</h4>
                        </div>
                        <div class="modal-body">
                               <form action="#" id="form" class="form-horizontal">
					              <!-- <input type="hidden" value="" name="id"/> -->
					              <div class="form-body">

                              <input name="category_id" class="form-control" type="hidden">
					               
					                <div class="form-group">
					                  <label class="control-label col-md-3">Category Name</label>
					                  <div class="col-md-9">
					                    <input name="category_name" placeholder="Category Name" class="form-control" type="text">
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
