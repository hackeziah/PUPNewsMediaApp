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
                      Announcements
                    </h1>
                  </div>
                  <div class="body">
                   {% for data in annouces.items %}


                   <div class="list-group" >
                    <a href="javascript:void(0);" class="list-group-item active" {{ data.announce_id }}  onclick="detailAnnounce({{ data.announce_id }})">
                      <h4 class="list-group-item-heading">{{ data.title|capitalize }} BY : {{ data.profile.firstname|e|capitalize }} {{ data.profile.middlename|e|capitalize }} {{ data.profile.lastname|e|capitalize }} At {{ data.timestamp|e|capitalize }}</h4>
                      <p class="list-group-item-text">
                       {{ data.content|e|capitalize }}
                     </p>
                     <!-- <button class="btn btn-danger" onclick="detailAnnounce({{ data.announce_id }})"><i class="glyphicon glyphicon-pencil"></i></button> -->


                   </a>

                 </div>

                 {% endfor %}


               </div>


               <ul class="pagination pull-right">
                <li>{{ link_to('admin/manageannouncements/announcements', 'First') }}</li>
                <li>{{ link_to('admin/manageannouncements/announcements?page=' ~ annouces.before, 'Previous') }}</li>
                <li>{{ link_to('admin/manageannouncements/announcements?page=' ~ annouces.next, 'Next') }}</li>
                <li>{{ link_to('admin/manageannouncements/announcements?page=' ~ annouces.last, 'Last') }}</li>
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



  function detailAnnounce(announce_id)
  {
   // save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "{{ url('admin/manageannouncements/detailAnnounce') }}/" + announce_id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {



          $('[name="announce_id"]').val(data.announce_id);
          $('[name="profile_id"]').val(data.profile_id);
          $('[value="title"]').val(data.title);
          $('[value="content"]').val(data.content);
          $('[name="timestamp"]').val(data.timestamp);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Announcement'); // Set title to Bootstrap modal title

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
           alert('Error get data from ajax');
         }
       });
    }




    </script>




<!-- 



  <div class="modal fade in" id="modal_form" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="defaultModalLabel"></h4>
            </div> 
            <div class="modal-body">

                  {{ data.content|e|capitalize }}

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
  </div> -->


<!-- <div class="modal-content modal-col-red">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                  -->


                  <div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                      <div class="modal-footer modal-col-blue">
                        <h2>Announcement</h2>
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
<!-- 

                     <div class="body">
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                            </p>
                            <p>
                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                            </p>
                            <p>
                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                            </p>
                        </div>

                      -->


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
