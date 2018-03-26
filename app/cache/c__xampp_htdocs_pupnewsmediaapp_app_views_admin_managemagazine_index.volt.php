


<?= $this->getContent() ?>


<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Manage Maganize</h2>
		</div>
		<!-- Input -->
		<div class="row clearfix">


			<table class="table table-hover">
				<tr>
					<th>MAGAZINE ID</th>
					<th>PUBLISHER</th> 
					<th>TITLE</th>
					<th>DATE & TIME</th>
					<th>Action</th>
				</tr>


				<?php foreach ($mags->items as $data) { ?>
				<tr>

					<td><?= $data->magazine_id ?></td>
          <td><?= ucwords($this->escaper->escapeHtml($data->profile->firstname)) ?> <?= ucwords($this->escaper->escapeHtml($data->profile->middlename)) ?> <?= ucwords($this->escaper->escapeHtml($data->profile->lastname)) ?></td>
					<td><?= $data->title ?></td>	
					<td><?= $data->timestamp ?></td>
				




					<td>
						<button type="button" onclick="showmag(<?= $data->magazine_id ?>)" class="btn btn-danger"><i class="material-icons">remove_red_eye</i></button>
						<!-- <button class="btn btn-danger" onclick="detailmag(<?= $data->id ?>)"><i class="glyphicon glyphicon-pencil"></i></button> -->
						<button class="btn btn-danger" onclick="deletemag(<?= $data->magazine_id ?>)"><i class="glyphicon glyphicon-remove"></i></button>
					</td>
				</tr>

				<?php } ?>




			</table>
			<ul class="pagination pull-right">
				<li><?= $this->tag->linkTo(['admin/managemagazine', 'First']) ?></li>
				<li><?= $this->tag->linkTo(['admin/managemagazine?page=' . $mags->before, 'Previous']) ?></li>
				<li><?= $this->tag->linkTo(['admin/managemagazine?page=' . $mags->next, 'Next']) ?></li>
				<li><?= $this->tag->linkTo(['admin/managemagazine?page=' . $mags->last, 'Last']) ?></li>
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


    }



    function showmag(id)
    {
     save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "<?= $this->url->get('admin/managemagazine/showmag') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {



          $('[name=" magazine_id"]').val(data.magazine_id);
          $('[name="profile_id"]').val(data.profile_id);
          $('[name="title"]').val(data.title);
          $('[name="content"]').val(data.content);
          // $('[name="file"]').val(data.file);                    
          // $('[value="timestamp"]').val(data.timestamp);

          
              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('SHOW MAGAZINE'); // Set title to Bootstrap modal title

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
      url = "<?= $this->url->get('admin/managemagazine/createannounce') ?>";

    }
    else
    {
      url = "<?= $this->url->get('admin/managemagazine/editannounce') ?>";
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


     function deletemag(id){


      if(confirm('Are you sure delete this data?'))
      {

       $.ajax({
        url : "<?= $this->url->get('admin/managemagazine/deletemag') ?>/" + id,         
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
       <h4 class="modal-title" id="defaultModalLabel"></h4>
     </div>
     <div class="modal-body">
       <form action="#" id="form" class="form-horizontal">
         <input type="hidden" value="" name="id"/>
        <div class="form-body">

         <input name="magazine_id" class="form-control" type="hidden">
         <input name="profile_id" value="<?= $profile->user_id ?>" class="form-control" type="hidden"disabled="true">
         <div class="form-group">
          <label class="control-label col-md-3">Title</label>
          <div class="col-md-9">
            <div class="form-line">
             <input name="title" placeholder="Title" class="form-control" type="text"disabled="true">
           </div>
         </div>
       </div>

       <div class="form-group">
        <label class="control-label col-md-3">Content</label>
        <div class="col-md-9">

         <div class="form-line">
          <textarea  name="content" rows="5" class="form-control no-resize" placeholder="Please type what you want..." disabled="true"></textarea>
        </div>
      </div>
    </div>


  </div>
</form>
</div>
<div class="modal-footer">
 <!-- <button type="button" id ="btnSave" onclick="save()"class="btn btn-link waves-effect">SAVE</button> -->
 <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>





<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

<?= $this->tag->javascriptInclude('plugins/ckeditor/ckeditor.js') ?>