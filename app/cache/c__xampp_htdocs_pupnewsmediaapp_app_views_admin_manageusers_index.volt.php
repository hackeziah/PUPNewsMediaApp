

<?= $this->getContent() ?>


<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Manage Announcements</h2>
		</div>
		<!-- Input -->
		<div class="row clearfix">


			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>username</th>

					<th>Profile Name</th>
					<!-- <th>Date and Time</th> -->
				</tr>


				<?php foreach ($users->items as $data) { ?>
				<tr>
					<td><?= $data->id ?></td>
					<td><?= $data->username ?></td>
					<td><?= ucwords($this->escaper->escapeHtml($data->profile->firstname)) ?> <?= ucwords($this->escaper->escapeHtml($data->profile->middlename)) ?> <?= ucwords($this->escaper->escapeHtml($data->profile->lastname)) ?></td>
					<td><?= ucwords($this->escaper->escapeHtml($data->access)) ?></td>
					<td>
						<button class="btn btn-danger" onclick="detailUsers(<?= $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
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
      $('.modal-title').text('Add Announcement'); // Set title to Bootstrap modal title

    }



    function detailAnnounce(announce_id)
    {
     save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

      	url : "<?= $this->url->get('admin/manageusers/detailAnnounce') ?>/" + announce_id,
      	type: "GET",
      	dataType: "JSON",
      	success: function(data)
      	{



          $('[name="announce_id"]').val(data.announce_id);
          $('[name="profile_id"]').val(data.profile_id);
          $('[name="title"]').val(data.title);
          $('[name="content"]').val(data.content);
          $('[value="timestamp"]').val(data.timestamp);

          
              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('Edit Announcement'); // Set title to Bootstrap modal title

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
      url = "<?= $this->url->get('admin/manageusers/createannounce') ?>";

    }
    else
    {
      url = "<?= $this->url->get('admin/manageusers/editannounce') ?>";
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


     function deleteuser(id){

      // swal({
      //   title: "Are you sure?",
      //   text: "Your will not be able to recover this imaginary file!",
      //   type: "warning",
      //   showCancelButton: true,
      //   confirmButtonClass: "btn-danger",
      //   confirmButtonText: "Yes, delete it!",
      //   closeOnConfirm: false
      // },
      // function(){
      //   swal("Deleted!", "Your imaginary file has been deleted.", "success");
      // });
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
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="defaultModalLabel">Add User</h4>
     </div>
     <div class="modal-body">
       <form action="#" id="form" class="form-horizontal">
       	 <input type="hidden" value="" name="id"/>
        <div class="form-body">

         <input name="announce_id" class="form-control" type="hidden">
         <input name="profile" value="<?= $profile->user_id ?>" class="form-control" type="hidden">
         <div class="form-group">
          <label class="control-label col-md-3">Title</label>
          <div class="col-md-9">
            <div class="form-line">
             <input name="title" placeholder="Title" class="form-control" type="text">
           </div>
         </div>
       </div>

       <div class="form-group">
        <label class="control-label col-md-3">Content</label>
        <div class="col-md-9">

         <div class="form-line">
          <textarea  name="content" rows="5" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
        </div>
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





<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

<?= $this->tag->javascriptInclude('plugins/ckeditor/ckeditor.js') ?>