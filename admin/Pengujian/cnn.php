   <!-- page content -->
   <div class="right_col" role="main">
       <div class="">
           <div class="page-title">
               <div class="title_left">
                   <h3>Pengujian </h3>
               </div>

               <div class="title_right">
                   <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search for...">
                           <span class="input-group-btn">
                               <button class="btn btn-secondary" type="button">Go!</button>
                           </span>
                       </div>
                   </div>
               </div>
           </div>



           <div class="clearfix"></div>

           <div class="row">
               <div class="col-md-12 col-sm-12 ">
                   <div class="x_panel">
                       <div class="x_title">
                           <h2<small>CNN</small></h2>
                               <ul class="nav navbar-right panel_toolbox">
                                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                   </li>
                                   <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                           <a class="dropdown-item" href="#">Settings 1</a>
                                           <a class="dropdown-item" href="#">Settings 2</a>
                                       </div>
                                   </li>
                                   <li><a class="close-link"><i class="fa fa-close"></i></a>
                                   </li>
                               </ul>
                               <div class="clearfix"></div>
                       </div>
                       <div class="x_content">
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="card-box table-responsive">
                                       <p class="text-muted font-13 m-b-30">
                                           <!-- <a id="add" class="btn btn-success text-light"><i class="fa fa-plus"></i> Add New</a> -->
                                       </p>
                                       <div class="row">

                                           <div class="col-md-8">

                                           </div>
                                       </div>
                                       <br>

                                       <section>
                                           <h3>Rice Leaf Diseases</h3>
                                           <p>
                                           
                                           </p>
                                           <br>

                                           <div class="row">


                                               <!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content. -->
                                               <div class="w3-content" style="max-width:960px">



                                                   <!-- 1. HOME PAGE -->
                                                   <div class="tabbed w3-animate-opacity w3-white" id="home">



                                                       <!-- Front page image -->
                                                       <!-- This image will be replaced once the js code runs. -->

                                                       <div class="w3-center topp-padding w3-padding-bottom">
                                                           <img id="selected-image" class="w3-round adjust-image" src="" height="250" alt="Image for analysis">

                                                       </div>



                                                       <!-- Button -->
                                                       <div id="btnn" class="w3-center">

                                                           <!-- <button class="w3-btn w3-deep-orange w3-hover-blue w3-round w3-margin-bottom adjust-spacing btn-font w3-padding w3-space-letters" onclick="setTimeout(simulateClick.bind(null, 'image-selector'), 200)"><i class='fas fa-camera w3-padding-right' style='font-size:15px'></i>
                                                               <b>Rice Leaf Disease</b></button> -->
                                                           <p class="w3-text-teal">
                                                               <p class="w3-text-teal">
                                                                   Untuk mendapatkan hasil prediksi yang memuaskan silahkan gunakan background putih pada gambar padi. 
                                                               </p>
                                                           </p>

                                                       </div>
                                                       <div class="w3-center">
                                                           <div class="progress-bar w3-text-teal space-letters">
                                                               <p>Tunggu sebentar ..</p>
                                                           </div>
                                                       </div>
                                                       <!-- Progress Bar -->
                                                       <div class="w3-light-grey side-margin w3-opacity">
                                                           <div id="myBar" class="w3-container w3-blue" style="height:5px;width:0%"></div>
                                                       </div>

                                                       <div class="w3-center w3-border add-margin side-margin w3-round w3-sand
text-color space-letters bottom-margin">
                                                        <br>
                                                           <p id="status"  style="margin-bottom:20px"></p>
                                                           <ol class='w3-left-align text-color' id='prediction-list'></ol>

                                                       </div>
                                                       <div class='w3-padding'>
                                                           <p class='w3-round w3-margin w3-margin-bottom w3-text-teal w3-small space-letters'>
                                                            
                                                       </div>
                                                   </div>
                            
                                                   <!-- We simulate clicks on these two. -->
                                                   <div class="hide">
                                                       <button id='predict-button'>Predict</button>
                                                   </div>

                                                   <div class="hide">
                                                       <input id="image-selector" type="file">
                                                   </div>
                                        
                                               </div>

                                        
                                           </div>
                                           <br>

                                       </section>
                                   </div>
                               </div>
                           </div>
                       </div>


                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">

                   <h4 class="modal-title" id="myModalLabel">Form User</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body">
                   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                       <input type="hidden" id="id" />
                       <div class="item form-group">
                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Username <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 ">
                               <input type="text" id="username" required="required" name="username" placeholder="Enter username" class="form-control ">
                           </div>
                       </div>
                       <div class="item form-group">
                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 ">
                               <input type="email" id="email" name="email" required="required" class="form-control" placeholder="Enter email">
                           </div>
                       </div>
                       <div class="item form-group">
                           <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Password</label>
                           <div class="col-md-6 col-sm-6 ">
                               <input id="password" class="form-control" type="password" name="password" placeholder="Enter password">
                           </div>
                       </div>

                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" id="submit">Save changes</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>