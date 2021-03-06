


{{ content() }}


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


				{% for data in mags.items %}
				<tr>

					<td>{{ data.magazine_id}}</td>
          <td>{{ data.profile.firstname|e|capitalize }} {{ data.profile.middlename|e|capitalize }} {{ data.profile.lastname|e|capitalize }}</td>
					<td>{{ data.title}}</td>	
					<td>{{ data.timestamp }}</td>
				




					<td>
						<button type="button" onclick="showmag({{ data.magazine_id }})" class="btn btn-danger"><i class="material-icons">remove_red_eye</i></button>
						<!-- <button class="btn btn-danger" onclick="detailmag({{ data.id }})"><i class="glyphicon glyphicon-pencil"></i></button> -->
						<button class="btn btn-danger" onclick="deletemag({{ data.magazine_id }})"><i class="glyphicon glyphicon-remove"></i></button>
					</td>
				</tr>

				{% endfor %}




			</table>
			<ul class="pagination pull-right">
				<li>{{ link_to('admin/managemagazine', 'First') }}</li>
				<li>{{ link_to('admin/managemagazine?page=' ~ mags.before, 'Previous') }}</li>
				<li>{{ link_to('admin/managemagazine?page=' ~ mags.next, 'Next') }}</li>
				<li>{{ link_to('admin/managemagazine?page=' ~ mags.last, 'Last') }}</li>
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

        url : "{{ url('admin/managemagazine/showmag') }}/" + id,
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
      url = "{{ url('admin/managemagazine/createannounce') }}";

    }
    else
    {
      url = "{{ url('admin/managemagazine/editannounce') }}";
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
        url : "{{ url('admin/managemagazine/deletemag') }}/" + id,         
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
         <input name="profile_id" value="{{ profile.user_id }}" class="form-control" type="hidden"disabled="true">
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

{{ javascript_include("plugins/ckeditor/ckeditor.js") }}