<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <!-- <h1>NEWS FEED</h1> -->
    </div>
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="body">
            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header bg-red">
                    <h1>
                      Events
                    </h1>
                  </div>
                  <div class="body">
                    {% for data in events.items %}


                    <div class="list-group" >
                      <a href="javascript:void(0);" class="list-group-item active" {{ data.event_id }}  onclick="detailevents({{ data.event_id }})">
                        <h4 class="list-group-item-heading">{{ data.title|capitalize }} BY : {{ data.profile.firstname|e|capitalize }} {{ data.profile.middlename|e|capitalize }} {{ data.profile.lastname|e|capitalize }} At {{ data.timestamp|e|capitalize }}</h4>
                        <p class="list-group-item-text">
                         {{ data.content|e|capitalize }}
                       </p>
                     </a>

                   </div>

                   {% endfor %}


                 </div>


                 <ul class="pagination pull-right">
                  <li>{{ link_to('admin/manageevents/events', 'First') }}</li>
                  <li>{{ link_to('admin/manageevents/events?page=' ~ events.before, 'Previous') }}</li>
                  <li>{{ link_to('admin/manageevents/events?page=' ~ events.next, 'Next') }}</li>
                  <li>{{ link_to('admin/manageevents/events?page=' ~ events.last, 'Last') }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>                  
  </div>   
</div>
</section>




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



  function detailevents(event_id)
  {
   // save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "{{ url('admin/manageevents/detailevents') }}/" + event_id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {



          $('[name="event_id"]').val(data.event_id);
          $('[name="profile_id"]').val(data.profile_id);
          $('[value="title"]').val(data.title);
          $('[value="content"]').val(data.content);
          $('[name="timestamp"]').val(data.timestamp);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Event'); // Set title to Bootstrap modal title

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
           alert('Error get data from ajax');
         }
       });
    }




    </script>



    <div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
        <div class="modal-footer modal-col-blue">
          <h2>Events</h2>
        </div>


        <div class="modal-body">
         <form action="#" id="form" class="form-horizontal">
          <!-- <input type="hidden" value="" name="id"/> -->
          <div class="form-body">



           <div class="form-group">
            <label class="control-label col-md-3">Title</label>
            <div class="col-md-9">
              <div class="form-line">
               <input value="title" placeholder="Title" class="form-control" disabled>
             </div>
           </div>
         </div>

         <div class="form-group">
          <label class="control-label col-md-3">Content</label>
          <div class="col-md-9">

           <div class="form-line">
            <textarea  value="content" rows="8" class="form-control no-resize" disabled>
            </textarea>
          </div>
        </div>
      </div>



      <div class="form-group">
        <label class="control-label col-md-3">Date</label>
        <div class="col-md-9">
          <div class="form-line">
           <input name="timestamp"  placeholder="Date" class="form-control" disabled="true">
         </div>
       </div>
     </div>

   </div>
 </form>
</div>
<div class="modal-footer modal-col-blue">

 <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>

