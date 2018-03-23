
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <!-- <h2></h2> -->
    </div>

  </div>
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h1>

          </h1>

        </div>
        <div class="body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#profile_with_icon_title" data-toggle="tab">
                <i class="material-icons">face</i> PROFILE
              </a>

            </li>
           <!--  <li role="presentation">
              <a href="#profile_with_edit" data-toggle="tab">
                <i class="material-icons">mode_edit</i>EDIT PROFILE
              </a>
            </li> -->
            <li role="presentation">
              <a href="#follow" data-toggle="tab">
                <i class="material-icons">face</i>FOLLOW
              </a>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                      <div class="body">
                        <div class="row clearfix">
                          <div class="col-sm-4">
                            <div class="form-group">

                             <?= $this->tag->image(['uploads/userss/' . $profile->profilepic, 'width' => '59%', 'heigth' => '60%']) ?>

                           </div>
                         </div>
                         <div class="col-sm-5">
                          <div class="form-group">
                            <div class="row clearfix">
                              <div class="input-group">
                               <span class="input-group-addon">
                                 <i class="material-icons">person</i>
                               </span>
                               <div class="form-line">
                                <h4>
                                  <?= $profile->firstname ?>&nbsp;<?= $profile->middlename ?>&nbsp;<?= $profile->lastname ?>
                                </h4>
                              </div>
                            </div>
                            <div class="input-group">
                             <span class="input-group-addon">
                               <i class="material-icons">accessibility</i>
                             </span>
                             <div class="form-line">
                              <?= $profile->email ?>
                            </div>
                          </div>
                          <div class="input-group">
                           <span class="input-group-addon">
                             <i class="material-icons">perm_contact_calendar</i>
                           </span>
                           <div class="form-line">
                            <?= $profile->birthdate ?>
                          </div>
                        </div>
                        <div class="row clearfix">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <button type="button" class="btn bg-light-blue waves-effect"><i class="material-icons">favorite</i>Follow</a></button>
                           
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <button type="button" class="btn bg-light-blue waves-effect"><i class="material-icons">group</i>Followers</a></button>
                          
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <button type="button" class="btn bg-light-blue waves-effect"><i class="material-icons">group</i>Following</a></button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3">

                </div>

              </div>


              <!--  -->
              <!-- #END# Example Tab -->


              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                    <div class="header bg-red">
                      <h1>
                        ABOUT
                      </h1>
                    </div>
                    <div class="body">
                      <?= nl2br($profile->about) ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                    <div class="header bg-red">
                      <h1>
                       GOALS
                     </h1>
                   </div>
                   <div class="body">
                    <?= nl2br($profile->goals) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- //////////////////////////////////////////////////////////////// -->

  <div role="tabpanel" class="tab-pane fade" id="follow">
   <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="body">
          <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                <div class="header bg-red">
                  <h1>
                    FOLLOW
                  </h1>
                </div>
                <div class="body">

                  <div class="row clearfix">
                   <div class="col-md-6">
                    <div class="card">
                      <div class="header bg-red">
                        <h1>
                          FOLLOWER
                        </h1>
                      </div>
                      <div class="body">

                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">

                    <div class="card">
                      <div class="header bg-red">
                        <h1>
                          FOLLOWING
                        </h1>
                      </div>
                      <div class="body">

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>                  
</div>      
</div>

</div>
</div>
</div>

</div>
</section>

admin/profile/follow





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

        url : "<?= $this->url->get('admin/manageannouncements/detailAnnounce') ?>/" + announce_id,
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
      url = "<?= $this->url->get('admin/manageannouncements/createannounce') ?>";

    }
    else
    {
      url = "<?= $this->url->get('admin/manageannouncements/editannounce') ?>";
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


     function deleteAnnounce(announce_id){

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
        url : "<?= $this->url->get('admin/manageannouncements/deleteAnnounce') ?>/" + announce_id,         
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


