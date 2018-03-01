

{{ content() }}


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
				{% for data in cat.items %}
					<tr>
<<<<<<< HEAD
=======


>>>>>>> 52cd25052f8b95f9d76b98aefc38676d8fc7beae
						<td>{{ data.category_id }}</td>
						<td>{{ data.category_name|e|capitalize }}</td>
					
						<td>
         <!-- <button class="btn btn-success" onclick="delete({{ data.id }})"><i class="glyphicon glyphicon-trash"></i> DELETE</button> -->

                        <!-- <button class="btn btn-warning" onclick="edit_student(<?php echo $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button> -->
                  <button class="btn btn-danger" onclick="detail({{ data.category_id }})"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-danger" onclick="deleteCat({{ data.category_id }})"><i class="glyphicon glyphicon-remove"></i></button>

			
						</td>
					</tr>
					{% endfor %}
				</table>
					<ul class="pagination pull-right">
						<li>{{ link_to('admin/managecategory', 'First') }}</li>
						<li>{{ link_to('admin/managecategory?page=' ~ cat.before, 'Previous') }}</li>
						<li>{{ link_to('admin/managecategory?page=' ~ cat.next, 'Next') }}</li>
						<li>{{ link_to('admin/managecategory?page=' ~ cat.last, 'Last') }}</li>
					</ul>
			</div>
		</div>
	</div>
</section> 
{{ javascript_include ("plugins/jquery/jquery.min.js")}}
{{ javascript_include ("plugins/bootstrap/js/bootstrap.js")}}
{{ javascript_include ("plugins/bootstrap-select/js/bootstrap-select.js")}}
{{ javascript_include ("plugins/jquery-slimscroll/jquery.slimscroll.js")}}
{{ javascript_include ("plugins/bootstrap-notify/bootstrap-notify.js")}}
{{ javascript_include ("plugins/node-waves/waves.js")}}
{{ javascript_include ("js/admin.js")}}
{{ javascript_include ("js/pages/ui/modals.js")}}
{{ javascript_include ("plugins/jquery/jquery.min.js")}}
{{ javascript_include ("plugins/bootstrap/js/bootstrap.js")}}
{{ javascript_include ("js/demo.js")}}

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

        url : "{{ url('admin/managecategory/detail') }}/" + category_id,
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
          url = "{{ url('admin/managecategory/create') }}";

      }
      else
      {
          url = "{{ url('admin/managecategory/edit') }}";
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
                    url : "{{ url('admin/managecategory/deleteCat') }}/" + category_id,         
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
