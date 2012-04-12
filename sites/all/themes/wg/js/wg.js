function getStatistics() {
    var url = 'http://' + document.domain + '/ml_orchestrator.php?action=getStatistics';

    var stats;
    $.ajax({
        url: url,
        type: 'GET',
        async: false,
        cache: false,
        timeout: 30000,
        dataType: 'text',
        error: function(){
            return true;
        },
        success: function(data, msg){
            if (parseFloat(msg)){
                return false;
            } else {
                stats = eval('(' + data + ')');
                return true;
            }
        }
    });

    return stats;
}

function getStatisticsHTML() {
        
    var titles = {layer_count:'<span class="stats_normal">Number of</span><br><span class="stats_big">MAP</span> <span class="stats_big_bold">LAYERS</span>',
                checklist_count:'<span class="stats_normal">Number of</span><br><span class="stats_big_bold">CHECKLISTS</span>',
                species_page_count:'<span class="stats_normal">Number of</span><br><span class="stats_big_bold">SPECIES</span> <span class="stats_big">PAGES</span>',
                occurrence_count:'<span class="stats_normal">Number of</span><br><span class="stats_big_bold">OCCURRENCE</span> <span class="stats_big">RECORDS</span>',
                species_occurrence_count:'<span class="stats_normal">Number of</span><br><span class="stats_big_bold">SPECIES</span> <span class="stats_big">WITH</span> <span class="stats_big_bold">OCCURRENCE</span> <span class="stats_big">RECORDS</span>' }

    var stats = getStatistics();

    var html = '';

    for (var key in stats){
        html = html + titles[key] + "<div class='stats_number'>" + stats[key] + '</div>';
    }

    return html;
}


jQuery(document).ready(function(){
	if ($("#statistics_box").length > 0){
		$("#statistics_box").html(getStatisticsHTML());
	}

        $("#secondary_content").load("/augmentedmaps/sites/default/files/static/wg.html");

        $("#western_ghats_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/wg.html");
        });

        $("#hotspots_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/hotspots.html");
        });

        $("#project_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/project.html");
        });

        $("#timeline_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/timeline.html");
        });

        $("#data_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/data_sharing.html");
        });

        $("#about_link").click(function(){
            $("#secondary_content").load("/augmentedmaps/sites/default/files/static/aboutus.html");
        });

        $("#secondary_content_close").click(function(){
            $("#secondary_content").html("");
            $("#secondary_content_close").hide();
        });

	$("#collaborate").hover(function(){
 $("#collaborate-links").html("<ul><li><a href='/cepf_grantee_database'>Western Ghats CEPF Projects</a></li><br/> <li><a href='/collaborate/partners'>Project Partners</a> </li><br/><li><a href='/about/volunteers'>Volunteers</a></li></ul>");
       },
	function(){
		$("#collaborate-links").html("");
       });
});

function show_login_dialog(destination){

    if (destination === undefined) {
        destination = encodeURIComponent(window.location.pathname+window.location.search);
    }

    var login_form_html = '<form id="user-login" method="post" accept-charset="UTF-8" action="/user/login?destination=' + destination + '"><div><div id="edit-name-wrapper" class="form-item"> <label for="edit-name">Username: <span title="This field is required." class="form-required">*</span></label> <input type="text" class="form-text required" value="" size="60" id="edit-name" name="name" maxlength="60"> </div><div id="edit-pass-wrapper" class="form-item"> <label for="edit-pass">Password: <span title="This field is required." class="form-required">*</span></label> <input type="password" class="form-text required" size="60" maxlength="128" id="edit-pass" name="pass"></div><input type="hidden" value="user_login" id="edit-user-login" name="form_id"><input type="submit" class="form-submit" value="Log in" id="edit-submit" name="op"> <a href="user/password" style="padding-left:10px;padding-right:10px">Forgot password?</a></div><div style="width:100%; text-align:center"><a href="user/register" style="position:relative;top:30px; font-size:1.2em; font-weight: bold; text-decoration:underline">CREATE AN ACCOUNT</a></div></form>';

    $(login_form_html).dialog({show: "fade", hide: "fade", title:'Login', maxWidth:670,  height: 340, modal:true, zIndex: 3999});
}

