
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
