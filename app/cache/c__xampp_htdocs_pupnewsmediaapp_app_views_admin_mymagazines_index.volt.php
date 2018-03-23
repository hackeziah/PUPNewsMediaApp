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
                      My Magazines
                  </h1>
              </div>
              <div class="body">
                <div class="row">
                  <?php foreach ($magazine as $maginfo) { ?>
                  <div class="col-sm-3 col-md-3">
                    <div class="thumbnail">
                      <div class="caption">
                        <h3><?= $maginfo->title ?></h3>
                        <p>
                           <?= $maginfo->content ?>
                       </p>
                       <p>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button" data-toggle="modal" data-target="#<?= $maginfo->magazine_id ?>">EDIT</a>
                        <?= $this->tag->linkTo(['admin/mymagazines/delete/' . $maginfo->magazine_id, 'Delete', 'class' => 'btn btn-danger waves-effect']) ?>
                        <div class="modal fade" id="<?= $maginfo->magazine_id ?>" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->   <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h1 class="modal-title">EDIT</h1>
                            </div>


                            
                            <div class="modal-body">
                                <form action="mymagazines/update" method="POST" id="news"  enctype="multipart/form-data" >
                                  <div class="row clearfix">
                                    <div class="row clearfix">
                                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                      <div class="form-group">
                                        <div class="form-line">
                                          <input type="text" class="form-control date" placeholder="Title" name = 'title' value = <?= $maginfo->title ?>>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                  <label></label>
                              </div>
                          </div>
                          <div class="row clearfix">
                              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div class="form-line">


                               </div>
                           </div>

                           <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <!--   <input type="file" id="file" name="file" > -->
                        </div>
                    </div>
                    <div class="col-sm-12">
                     <div class="form-group">
                       <div class="form-line">
                        <input type="hidden" class="form-control date" name = 'profile_id' value=<?= $maginfo->profile->profile_id ?>>
                        <input type="hidden" class="form-control date"  name = 'magazine_id' value=<?= $maginfo->magazine_id ?>>
                        <textarea rows="10" class="form-control no-resize"  name="content" > <?= $maginfo->content ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
               <div class="col-lg-4 col-md-10 col-sm-10 col-xs-9">                        
                <select class="form-control show-tick" name = 'category'>
                 <option vaue= 'none' selected="selected"><b>Select Category</b></option>
                 <?php foreach ($category as $categories) { ?>
                 <option value= <?= $categories->category_id ?> ><?= $categories->category_name ?></option>
                 <?php } ?>

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
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>


</div>
</div>
</p>
</div>
</div>
</div>
<?php } ?>
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



