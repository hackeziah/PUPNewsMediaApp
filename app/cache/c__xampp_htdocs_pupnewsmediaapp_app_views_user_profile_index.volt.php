
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
            MY PROFILE
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
            <li role="presentation">
              <a href="#profile_with_edit" data-toggle="tab">
                <i class="material-icons">mode_edit</i>EDIT PROFILE
              </a>
            </li>
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
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <i class="material-icons">group</i>Followers</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                          <i class="material-icons">group</i>Following</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3">

                </div>

              </div>
              <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                 <div class="header bg-red">
                  <h2>
                   POST   
                 </h2>
                 <ul class="header-dropdown m-r--5">
                 </ul>
               </div>
               <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                 <li role="presentation" class="active"><a href="#postnews" data-toggle="tab">POST NEWS</a></li>
                 <li role="presentation"><a href="#createmagazine" data-toggle="tab">CREATE MAGAZINE</a></li>           
               </ul>
               <div class="tab-content">
                <!-- NEWS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                <div role="tabpanel" class="tab-pane fade in active" id="postnews">
                  <form action="profile/createnews" method="POST" id="news"  enctype="multipart/form-data" >
                    <div class="row clearfix">
                      <div class="row clearfix">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <div class="form-line">
                           <input type="text" class="form-control date" placeholder="Title" name = 'title'>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-5 col-md-3 col-sm-2 col-xs-1">
                      <label></label>
                    </div>
                    <!-- <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2"> -->
                      <div>
                        <div class="form-line">
                      <!-- <button type="file" class="btn btn-danger waves-effect">
                       <i class="material-icons">camera_enhance</i>
                     </button> -->
                     <label for="file">Choose Image For your News</label>
                     <input type="file" id="file" name="file" >
                   </div>
                 </div>
               </div>
               <div class="col-sm-12">
                 <div class="form-group">
                   <div class="form-line">
                     <textarea rows="10" class="form-control no-resize" placeholder="Please type what you want..." name="content"></textarea>
                   </div>
                 </div>
               </div>
               <div class="row clearfix">
                 <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">                        
                  <select class="form-control show-tick" name = 'category'>
                    <?php foreach ($category as $categories) { ?>
                    <option value= <?= $categories->category_id ?> ><?= $categories->category_name ?></option>
                    <?php } ?>
                    <option vaue= 'none'><b>Select Category</b></option>
                  </select>

                </div>
                <div class="col-lg-3 col-md-10 col-sm-10 col-xs-9">                        
                 <label></label>
               </div>
               <div class="col-lg-2 col-md-10 col-sm-10 col-xs-9">
                <div class="switch">
                 <label>Public<input type="checkbox" name='status' value="private"><span class="lever switch-col-red"></span>Private</label>
               </div>
             </div>

             <div class="col-lg-3 col-md-2 col-sm-2 col-xs-3">
               <div class="form-group">
                <button type="submit" class="btn bg-red btn-block btn-lg waves-effect">PUBLISH</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="createmagazine">
     <div class="row clearfix">
      <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <div class="form-line">
              <input type="text" class="form-control date" placeholder="Title">
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-3 col-sm-2 col-xs-1">
          <label></label>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-2">
         <label></label>
       </div>
     </div>
     <div class="row clearfix">

      <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">                        
        <select class="form-control show-tick">
          <option><b>Select Category</b></option>
          <option>Politics</option>
          <option>Etertainment</option>
          <option>Sports</option>
        </select>

      </div>
      <div class="col-lg-3 col-md-10 col-sm-10 col-xs-9">                        
        <label></label>
      </div>
      <div class="col-lg-2 col-md-10 col-sm-10 col-xs-9">
       <div class="switch">
        <label>Public<input type="checkbox" checked=""><span class="lever switch-col-red"></span>Private</label>
      </div>
    </div>

    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-3">
      <div class="form-group">
        <button type="button" class="btn bg-red btn-block btn-lg waves-effect">CREATE MAGAZINE</button>
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
<div role="tabpanel" class="tab-pane fade" id="profile_with_edit">
 <div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <!-- start edit here -->
        <form action="profile/update" method="POST" id="form"  enctype="multipart/form-data" >
          <div class="row clearfix">
            <div class="col-sm-4">
              <div class="form-group">

               <?= $this->tag->image(['uploads/userss/' . $profile->profilepic, 'width' => '59%', 'heigth' => '60%']) ?>
               <input type="file" class="form-control date" value="" name='file'>
             </div>
           </div>
           <div class="col-sm-5">
            <div class="form-group">
              <div class="row clearfix">
                <div class="input-group">
                 <!-- <div class="form-line"> -->
                  <?= $profileForm->render('profile_id', ['class' => 'form-control']) ?>
                  <!-- </div> -->
                  <div class = 'form-line'>
                    <?= $profileForm->label('firstname') ?>
                    <?= $profileForm->render('firstname', ['class' => 'form-control']) ?>
                  </div>
                  <div class = 'form-line'>
                    <?= $profileForm->label('lastname') ?>
                    <?= $profileForm->render('lastname', ['class' => 'form-control']) ?>
                  </div>
                  <div class = 'form-line'>
                    <?= $profileForm->label('middlename') ?>
                    <?= $profileForm->render('middlename', ['class' => 'form-control']) ?>
                  </div>
                  <div class="input-group">
                   <span class="input-group-addon">
                     <i class="material-icons">accessibility</i>
                   </span>
                   <div class="form-line">
                     <?= $profileForm->render('email') ?>
                   </div>
                 </div>
                 <div class="input-group">
                   <span class="input-group-addon">
                     <i class="material-icons">perm_contact_calendar</i>
                   </span>
                   <div class="form-line">
                     <?= $profileForm->render('birthdate') ?>
                   </div>
                   <b><u>YYYY-MM-DD</u></b>
                 </div>
               </div>
             </div>
           </div>

           <div class="col-sm-3">

           </div>

         </div>

         <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
              <div class="header bg-red">
                <h1>
                  ABOUT
                </h1>
              </div>
              <div class="body">

               <div class="form-line">
                 <?= $profileForm->render('about') ?>
               </div>
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

             <div class="form-line">
               <?= $profileForm->render('goals') ?>
             </div>        </div>
           </div>
         </div>
       </div>

       <div class="row clearfix">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8"> 
          <LABEL></LABEL>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> 
          <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">UPDATE ME</button>
        </div>



      </div>
    </div>
  </form>
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
