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

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="postnews">
                        <form action="home/createnews" method="POST" id="news"  enctype="multipart/form-data" >
                          <div class="row clearfix">
                            <div class="row clearfix">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                  <div class="form-line">
                                    <input type="text" class="form-control date" placeholder="Title" name = 'title'><input type="hidden" class="form-control date" placeholder="Title" name = 'profile_id' value={{ prof.profile_id }}>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-3 col-sm-2 col-xs-1">
                                <label></label>
                              </div>
                              <!-- <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2"> -->
                                <div>
                                  <div class="form-line">

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
                                <div class="col-lg-3 col-md-10 col-sm-10 col-xs-9">                        
                                  <select class="form-control show-tick" name = 'category'>
                                    <option vaue= 'none' selected="selected"><b>Select Category</b></option>
                                    {% for  categories in category%}
                                    <option value= {{ categories.category_id }} >{{ categories.category_name  }}</option>
                                    {% endfor %}

                                  </select>

                                </div>
                                <div class="col-lg-2 col-md-10 col-sm-10 col-xs-9">                        
                                  <label></label>
                                </div>
                                <div class="col-lg-4 col-md-10 col-sm-10 col-xs-6">
                                  <div class="switch">
                                    <label>Public<input type="checkbox" name='status' value="private"><span class="lever switch-col-red"></span>Private</label>
                                  </div>
                                </div>

                                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                                  <div class="form-group">
                                    <button type="submit" class="btn bg-red btn-block btn-lg waves-effect">PUBLISH</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>



                        <!-- end here -->
                        <div role="tabpanel" class="tab-pane fade" id="createmagazine">
                          <form action="home/createmagazine" method="POST" id="news"  enctype="multipart/form-data" >
                           <div class="row clearfix">
                            <div class="row clearfix">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                  <div class="form-line">
                                    <input type="text" class="form-control date"  name ="title"placeholder="Title">
                                    <input type="hidden" class="form-control date"  name = 'profile_id' value={{prof.profile_id}}>
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
                                {% for  categories in category%}
                                <option value= {{ categories.category_id }} >{{ categories.category_name  }}</option>
                                {% endfor %}
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
                              <button type="submit" class="btn bg-red btn-block btn-lg waves-effect">CREATE MAGAZINE</button>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            {% for  newsinfo in news%}

            <div class="card">
              <div class="header bg-red">
                <h2> <b>{{ newsinfo.title }}</b> By: {{newsinfo.profile.firstname}} {{newsinfo.profile.middlename}} {{newsinfo.profile.lastname}}<small>-Journalist </small><small>{{ newsinfo.timestamp }}</small></h2>                                      
              </div>

              <div class="body">
                <div class="row clearfix">
                  <div class="row clearfix">
                    <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">
                      <div class="form-group">
                        {{ image("uploads/News/"~newsinfo.file,'width' : '79%', 'heigth' : '60%') }}
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-10 col-sm-10 col-xs-9">
                      <div class="form-group">

                        <div class="card">
                          <div class="header bg-red">
                            Category:{{ newsinfo.categories.category_name }}
                          </div>
                          <div class="body">
                            {{ newsinfo.content }}
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
                      <button onclick="newsadd({{ newsinfo.news_id }})" type="button"class="btn bg-red btn-block btn-sm waves-effect"><i class="material-icons">add_box</i>ADD TO MY MAGAZINE</a></button>
                    </div>
                  </div>
                </div>
              </div>

            </div><!--card-->

            {% endfor %}

          </div>
        </div><!--card-->


      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
          <div class="header bg-red">
            <h2>Updated News <small>Recent News</small></h2>
          </div>
          {% for  newsinfo in news%}
          <div class="body">
            <div class="bs-example" data-example-id="media-alignment">

              <div class="media">
                <div class="media-left media-bottom">
                  <a href="javascript:void(0);">     
                    <!-- {{ image("uploads/News/"~newsinfo.file,'width' : '79%', 'heigth' : '60%') }} -->
                  </a>
                </div>
                <div class="media-body">
                 <a href = '#' data-toggle="modal" data-target="#{{ newsinfo.news_id }}"  >
                  <h4 class="media-heading">{{ newsinfo.title }}</h4><h5><b>By:</b> {{ newsinfo.profile.firstname }}&nbsp;{{ newsinfo.profile.middlename }}&nbsp;{{ newsinfo.profile.lastname }}  <small>({{ newsinfo.timestamp }})</small>  </h5> 


                </a>
              </div>
            </div>



          </div>
        </div>

        <div class="modal fade" id="{{ newsinfo.news_id }}" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ newsinfo.timestamp }}</u></h4>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="header bg-red">
                    <h2> <b>{{ newsinfo.title }}</b> By: {{newsinfo.profile.firstname}} {{newsinfo.profile.middlename}} {{newsinfo.profile.lastname}}<small>-Journalist </small><small>{{ newsinfo.timestamp }}</small></h2>                                      
                  </div>

                  <div class="body">
                    <div class="row clearfix">
                      <div class="row clearfix">
                        <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">
                            {{ image("uploads/News/"~newsinfo.file,'width' : '79%', 'heigth' : '60%') }}
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-10 col-xs-9">
                          <div class="form-group">

                            <div class="card">
                              <div class="header bg-red">
                                Category:{{ newsinfo.categories.category_name }}
                              </div>
                              <div class="body">
                                {{ newsinfo.content }}
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
        {% endfor %}
      </div><!--card-->
    </div>

    <!-- ?//////////////////// -->



    <!-- #END# Input -->
  </div>
</section>


