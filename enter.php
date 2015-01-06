<html>
<link rel="icon" href="images/favi.png" type="image/png" sizes="16x16">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">

    <head>
        <title>
            K!15 | i Desk Enter
        </title>
<script type="text/javascript">
    
    function loadcontent()
    {
        var ajaxRequest;  
        try{
            ajaxRequest = new XMLHttpRequest();
          } catch (e){
                     try{
                         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                         } catch (e) {
                                     try{
                                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                                        } catch (e){
                                                    alert("Your browser broke!");
                                                   return false;
                                                    }
                                     }
                    }
  
        ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4){
            document.getElementById("event_details").innerHTML = ajaxRequest.responseText;
          }
          }
        var event_name=document.getElementById('event_name').value;
        document.getElementById('event_name_hidden').value=event_name;
        var sub_cat=document.getElementById('sub_cat').value;
        document.getElementById('sub_cat_hidden').value=sub_cat;
        ajaxRequest.open("GET", "ajax/user_check.php?event_name="+event_name+"&sub_cat="+sub_cat, true);
       ajaxRequest.send(null);
    }
    </script>
    </head>
    <body>
        <div class="container header-color ">
            <div class="row-fluid">
                <div class="col-md-4">
                    <img src="images/3.png" width="200" height="60">
                </div>
                <div class="col-md-4">
                    <img style="float:right" src="images/1.png" width="300" height="80">
                </div>
                <div class="col-md-4">
                    <img style="float:right" src="images/2.png" width="200" height="80">
                </div>
            </div>
        </div>
<body>
	<div class="row-fluid">
        <center>
        <form name="entry" class="form-signin" action="enter_process.php" method="GET" role="form">
        <select class="form-control" name="event_name" id="event_name">
			<option value="tcs_innovate">TCS Innovate</option>
			  <option value="circuit_craze">Circuit Craze</option>
			  <option value="contraptions">Contraption</option>
			  <option value="e-zone">e-Zone</option>
			  <option value="paper_presentation">Paper Presentation</option>
			  <option value="bim">BIM</option>
			  <option value="sherlock">Sherlock</option>
			  <option value="online_programming_contest">Online Programming Contest</option>
			  <option value="dalal_bull">Dalal Bull</option>
			  <option value="cerebra">Cerebra</option>
			  <option value="athena">Athena</option>
			  <option value="riddles_of_the_sphinx">Riddles of the Sphinx</option>
			  <option value="onsite_programming_contest">Onsite Programming Contest</option>
			  <option value="microsofts_tame_the_code">Microsoft's Tame the Code</option>
			  <option value="onsite_debugging">Onsite Debugging</option>
			  <option value="heptathlon">Heptathlon</option>
			  <option value="chaos_theory">Chaos Theory</option>
			  <option value="k_idol">K! Idol</option>
			  <option value="marketing_madness">Marketing Madness</option>
			  <option value="robowars">Robowars</option>
			  <option value="kronicles_o_mfars">K!ronicles of Mars</option>
			  <option value="to_the_arK">To the ArK!</option>
			  <option value="hawker_bot">Hawker Bot</option>
			  <option value="alcatraz">Alcatraz</option>
			  <option value="the_fourth_estate">The Fourth Estate</option>
			  <option value="math_modelling">Math Modelling</option>
			  <option value="sci_tech_quiz">Sci-Tech Quiz</option>
			  <option value="school_quiz">School Quiz</option>
			  <option value="k_open_quiz">K! Open Quiz</option>
			  <option value="biz_quiz">Biz Quiz</option>
			  <option value="digital_freeze">Digital Freeze</option>
			  <option value="krack_it">K!rack it</option>
			  <option value="protection_relays_in_power_systems">Protection Relays in Power Systems</option>
			  <option value="eZsystems">eZsystems</option>
			  <option value="internet_of_things">Internet of Things</option>
			  <option value="biomimicry">Biomimicry</option>
			  <option value="reverse_engineering">Reverse Engineering</option>
			  <option value="ibms_security_intelligence_with_penetration_testing">IBM's Security Intelligence with Penetration testing</option>
			  <option value="smart_cap_wearable_electronics">Smart Cap - Wearable Electronics</option>
			  <option value="sustainability_solutions">Sustainability Solutions</option>
			  <option value="brainwave_controlled_robots">Brainwave controlled Robots</option>
			  <option value="robot_operating_system">Robot Operating System</option>
			  <option value="follow_your_passion">Follow your Passion</option>
			  <option value="krithi">krithi</option>
        </select>
        <input type="hidden" name="event_name_hidden" id="event_name_hidden">
        <select class="form-control" name="sub_cat" onchange="loadcontent()" id="sub_cat">
                  <option value="" selected="selected">Select Category</option>
                  <option value="Introduction">Introduction</option>
                  <option value="Format ">Format</option>
                  <option value="contact">Contact</option>
        </select>
        <input type="hidden" name="sub_cat_hidden" id="sub_cat_hidden">
        <input type="hidden" name="flag" id="flag">
        <div id="event_details">
        </div>
        <button class="btn btn-lg btn-primary btn-block"  type="submit" value="Login" name="Submit">Entry</button>
        </form>
        </center>
        </div>  
</body>
</html>