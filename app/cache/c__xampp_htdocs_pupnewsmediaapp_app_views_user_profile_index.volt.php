
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
                        </li>
                           <li role="presentation">
                            <a href="#NEWS" data-toggle="tab">
                                <i class="material-icons">face</i>MY NEWS
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#MAGAZINE" data-toggle="tab">
                                <i class="material-icons">face</i>MY MAGAZINE
                            </a>
                        </li>

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

                                                       <?= $this->tag->image(['uploads/userss/s.jpg', 'width' => '59%', 'heigth' => '60%']) ?>

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
                                                            <h1>
                                                                <input type="text" class="form-control date" value="KEVIN PAUL A. LAMADRID">
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                     <span class="input-group-addon">
                                                         <i class="material-icons">accessibility</i>
                                                     </span>
                                                     <div class="form-line">
                                                        <input type="text" class="form-control date" value="2015-11275-MN">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                 <span class="input-group-addon">
                                                     <i class="material-icons">perm_contact_calendar</i>
                                                 </span>
                                                 <div class="form-line">
                                                    <input type="text" class="form-control date" value="05/14/1999">
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
                                             <div role="tabpanel" class="tab-pane fade in active" id="postnews">
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
                                                                <div class="form-group">
                                                                    <button type="file" class="btn btn-danger waves-effect">
                                                                     <i class="material-icons">camera_enhance</i>
                                                                 </button>   
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <div class="form-line">
                                                                 <textarea rows="10" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                             </div>
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
                                                        <button type="button" class="btn bg-red btn-block btn-lg waves-effect">PUBLISH</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
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
                                Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.<br>
                                Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.<br>
                                Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
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
                                        <form action="user/profile/update" id="form"  enctype="multipart/form-data" >
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">

                                                           <?= $this->tag->image(['uploads/userss/s.jpg', 'width' => '59%', 'heigth' => '60%']) ?>
                                                           <input type="file" class="form-control date" value="">
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
                                                                        <h1>
                                                                            <input type="text" class="form-control date" value="KEVIN PAUL A. LAMADRID" name=''>
                                                                        </h1>
                                                                    </div>
                                                                </div>
                                                        <div class="input-group">
                                                                     <span class="input-group-addon">
                                                                         <i class="material-icons">accessibility</i>
                                                                     </span>
                                                                     <div class="form-line">
                                                                        <input type="text" class="form-control date" value="2015-11275-MN">
                                                                    </div>
                                                            </div>
                                                            <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="material-icons">perm_contact_calendar</i>
                                                             </span>
                                                             <div class="form-line">
                                                                <input type="text" class="form-control date" value="05/14/1999">
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
                                                            <h1>
                                                                ABOUT
                                                            </h1>
                                                        </div>
                                                        <div class="body">
                                                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                        <div class="header bg-red">
                                                            <h1>
                                                               GOALSSSSSS
                                                           </h1>
                                                       </div>
                                                       <div class="body">
                                                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.<br>
                                                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.<br>
                                                        Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8"> 
                                                <LABEL></LABEL>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> 
                                                <button type="button" class="btn btn-primary waves-effect">UPDATE</button>
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


                            <div role="tabpanel" class="tab-pane fade" id="NEWS">
                                 <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="card">
                                                                <div class="header bg-red">
                                                                    <h1>
                                                                        NEWS
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
<!-- //////////////////////////////////////////////////////////////// -->
                
   
                            <div role="tabpanel" class="tab-pane fade" id="MAGAZINE">
                                 <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="card">
                                                                <div class="header bg-red">
                                                                    <h1>
                                                                        MAGAZINE
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
</section>
