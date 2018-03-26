    <section class="content">
      <div class="container-fluid">
        <div class="block-header">
          <h1>NEWS FEED</h1>
        </div>
        <!-- Input -->
        <div class="row clearfix">
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
              <div class="header bg-red">             
              </div>
              <div class="body">
                <?php foreach ($news as $newsinfo) { ?>

                <div class="card">
                  <div class="header bg-red">
                    <h2> <b><?= $newsinfo->title ?></b> By: <?= $newsinfo->profile->firstname ?> <?= $newsinfo->profile->middlename ?> <?= $newsinfo->profile->lastname ?><small>-Journalist </small><small><?= $newsinfo->timestamp ?></small></h2>                                      
                  </div>

                  <div class="body">
                    <div class="row clearfix">
                      <div class="row clearfix">
                        <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">
                            <?= $this->tag->image(['uploads/News/' . $newsinfo->file, 'width' => '79%', 'heigth' => '60%']) ?>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">

                            <div class="card">
                              <div class="header bg-red">
                                Category:<?= $newsinfo->categories->category_name ?>
                              </div>
                              <div class="body">
                                <?= $newsinfo->content ?>
                              </div>

                            </div><!--card-->

                          </div>
                        </div>
                      </div>
                      <div class="row clearfix">
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                          <button type="button"class="btn bg-red btn-block btn-sm waves-effect"><i class="material-icons">report</i>REPORT</a></button>
                        </div>
                      </div>
                      <div class="row clearfix">
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                       


                    </div>
                  </div>

                </div>
              </div>

            </div><!--card-->

            <?php } ?>

          </div>
        </div><!--card-->


      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
          <div class="header bg-red">
            <h2>Updated News <small>Recent News</small></h2>
          </div>
          <?php foreach ($news as $newsinfo) { ?>
          <div class="body">
            <div class="bs-example" data-example-id="media-alignment">

              <div class="media">
                <div class="media-left media-bottom">
                  <a href="javascript:void(0);">     
                    <!-- <?= $this->tag->image(['uploads/News/' . $newsinfo->file, 'width' => '79%', 'heigth' => '60%']) ?> -->
                  </a>
                </div>
                <div class="media-body">
                 <a href = '#' data-toggle="modal" data-target="#<?= $newsinfo->news_id ?>"  >
                  <h4 class="media-heading"><?= $newsinfo->title ?></h4><h5><b>By:</b> <?= $newsinfo->profile->firstname ?>&nbsp;<?= $newsinfo->profile->middlename ?>&nbsp;<?= $newsinfo->profile->lastname ?>  <small>(<?= $newsinfo->timestamp ?>)</small>  </h5> 


                </a>
              </div>
            </div>



          </div>
        </div>

        <div class="modal fade" id="<?= $newsinfo->news_id ?>" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $newsinfo->timestamp ?></u></h4>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="header bg-red">
                    <h2> <b><?= $newsinfo->title ?></b> By: <?= $newsinfo->profile->firstname ?> <?= $newsinfo->profile->middlename ?> <?= $newsinfo->profile->lastname ?><small>-Journalist </small><small><?= $newsinfo->timestamp ?></small></h2>                                      
                  </div>

                  <div class="body">
                    <div class="row clearfix">
                      <div class="row clearfix">
                        <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">
                            <?= $this->tag->image(['uploads/News/' . $newsinfo->file, 'width' => '79%', 'heigth' => '60%']) ?>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">

                            <div class="card">
                              <div class="header bg-red">
                                Category:<?= $newsinfo->categories->category_name ?>
                              </div>
                              <div class="body">
                                <?= $newsinfo->content ?>
                              </div>

                            </div><!--card-->

                          </div>
                        </div>
                      </div>
                      <div class="row clearfix">
                        <div class="col-lg-9 col-md-10 col-sm-10 col-xs-9">

                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-2 col-xs-3">
                          <div class="form-group">
                            <!-- <button type="button" class="btn bg-red btn-block btn-lg waves-effect">PUBLISH</button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div><!--card-->
    </div>

    <!-- ?//////////////////// -->



    <!-- #END# Input -->
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



  function newsadd(news_id)
  {
   // save_method = 'edit';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({

        url : "<?= $this->url->get('user/profile/newsadd') ?>/" + announce_id,
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




    <div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
        <div class="modal-footer modal-col-red">
          <h2>Add to Magazine</h2>
        </div>


        <div class="modal-body">
         <form action="#" id="form" class="form-horizontal">
          <!-- <input type="hidden" value="" name="id"/> -->
          <div class="form-body">

<!-- 

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
     </div> -->

   </div>
 </form>
</div>
<div class="modal-footer modal-col-blue">

 <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>
