<!-- Login Modal Window-->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 login-btn">
                    <a class="btn btn-large" href="https://www.facebook.com/v2.9/dialog/oauth?client_id=<?=$siteSettings->socialAcc->fbId?>&redirect_uri=<?=$siteSettings->socialAcc->fbUrl?>&response_type=code&scope=public_profile,email,user_location">
                        <span>Sign In</span> 
                        Facebook
                    </a>
                </div>
                <div class="col m12 login-btn">
                    <a class="btn btn-large" href="https://oauth.vk.com/authorize?client_id=<?=$siteSettings->socialAcc->vcId?>&display=page&redirect_uri=<?=$siteSettings->socialAcc->vcUrl?>&response_type=code">
                        <span>Sign In</span> 
                        VContacte
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>