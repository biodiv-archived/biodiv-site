function show_login_dialog(destination){

    if (destination === undefined) {
        destination = encodeURIComponent(window.location.pathname+window.location.search);
    }

    var login_form_html = '<form id="user-login" method="post" accept-charset="UTF-8" action="/user/login?destination=' + destination + '"><div><div id="edit-name-wrapper" class="form-item"> <label for="edit-name">Username: <span title="This field is required." class="form-required">*</span></label> <input type="text" class="form-text required" value="" size="60" id="edit-name" name="name" maxlength="60"> </div><div id="edit-pass-wrapper" class="form-item"> <label for="edit-pass">Password: <span title="This field is required." class="form-required">*</span></label> <input type="password" class="form-text required" size="60" maxlength="128" id="edit-pass" name="pass"></div><input type="hidden" value="user_login" id="edit-user-login" name="form_id"><input type="submit" class="form-submit" value="Log in" id="edit-submit" name="op"> <a href="user/password" style="padding-left:10px;padding-right:10px">Forgot password?</a></div><div style="width:100%; text-align:center"><a href="user/register" style="position:relative;top:30px; font-size:1.2em; font-weight: bold; text-decoration:underline">CREATE AN ACCOUNT</a></div></form>';

    $(login_form_html).dialog({show: "fade", hide: "fade", title:'Login', maxWidth:670,  height: 300, modal:true, zIndex: 3999});
}

