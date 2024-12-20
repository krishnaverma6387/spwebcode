<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?= base_url($this->data->controller);?>/Dashboard">
                        <img class="brand-logo img-fluid" style="height:49px;margin-top:-12px;"  src="<?=base_url($this->data->appTempletePath);?>images/logo/logo.png">
                        <h2 class="brand-text"></h2>
                    </a>
                </li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block p-0"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="bi bi-fullscreen"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="javascript:void(0);" onclick="history.back();"><i class="fa fa-arrow-circle-o-left" style="font-size:20px;margin-top:-3px;"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="javascript:void(0);"data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off" style="font-size:20px;margin-top:-2px;"></i></a></li>
                    <!--
                        <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-danger badge-up">1</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-danger float-right m-0">1 New</span></h6>
                        </li>
                        <li class="scrollable-container media-list">
                        <a href="javascript:void(0)">
                        <div class="media">
                        <div class="media-left align-self-center"><i class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                        <h6 class="media-heading">Welcome ! <?=$this->userData->name;?></h6>
                        <p class="notification-text font-small-3 text-muted">Login Successfully.</p>
                        <small>
                        <time class="media-meta text-muted" ></time></small>
                        </div>
                        </div>
                        </a>
                        </li>
                        </ul>
                    </li>-->
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                            <div class="avatar avatar-online">
                            <img src="<?=base_url();?>uploads/profile_pic/<?=$this->userData->icon;?>" alt="avatar"><i></i></div>
                            <span class="user-name"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url($this->data->controller);?>/AccountSettings"><i class="feather icon-user"></i> My Profile</a>
                            <a class="dropdown-item" href="<?= base_url($this->data->controller);?>/AccountSettings/ChangePassword"><i class="feather icon-edit"></i> Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>  
<!-- Logout Modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4><i class="fa fa-lock"></i> Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p><i class="fa fa-question-circle"></i> Are you sure you want to logout? <br /></p>
                <div class="actionsBtns">
                    <a  class="btn  btn-primary" href="<?= base_url($this->data->controller);?>/AccountSettings/Logout" >Logout</a>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>