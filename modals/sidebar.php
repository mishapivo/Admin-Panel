<!--  Overview Content Modal	-->
<div class="modal fade" id="update_sidebar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div id="sidebarmessage" style="float:left;"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="form-horizontal" action="" method="post" id="update_sidebar_form">
                <input type="hidden" name="sidebar_id" value="" id="sidebar_id">
                <div class="form-top">
                    <div class="form-group">
                        <label for="overview-bg" class="col-sm-3 control-label">Upload background Image</label>
                        <div class="col-sm-8">
                            <div class="file-wrapper">
                               upload
                               <input type="file" name="sidebar_bg" id="sidebar-bg" class="smart-file" data-field-type="bootstrap-file-filed" data-preview="on">
                           </div>
                           <div id="image"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="overview-bg" class="col-sm-3 control-label">Upload logo</label>
                        <div class="col-sm-8">
                            <div class="file-wrapper">
                               upload
                               <input type="file" name="sidebar_logo" id="sidebar-logo" class="smart-file" data-field-type="bootstrap-file-filed" data-preview="on">
                           </div>
                           <div id="logo"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" id="phone" placeholder="+88017777777" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" id="email" placeholder="example@domain.com" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="web" class="col-sm-3 control-label">Web Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="web" id="web" placeholder="yourdomain.com" class="form-control">
                        </div>
                    </div>

                </div>
                     
                  <div id="progress-wrp-sidebar" class="progress-wrp" style=
"display: none;"><div class="progress-bar"></div ><div class="status">0%</div></div>
                <center><input type="submit" value="UPDATE" name="" class="btn btn-default update" ></center>

            </form>
        </div>
    </div>
</div>	