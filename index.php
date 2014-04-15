<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
Sridhar Vemula
</title>
<link href="./css/main_page.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.6.2.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js" type="text/javascript"></script>
<script>   
    $(document).ready(function(){
        var width=$(window).width();
        $("#page").css("{width:"+width+"px}");
        $(window).resize(function(){
           var wid=$(window).width();
           if(wid<800){
               $("#basic_profile").hide('slide',{to:{width:0}},400);
               $("#menu").hide('slide',{to:{width:300}},400);
              // $("#content").animate({left:0},300);
             //  $("#top_menu_bar").fadeIn(400);   
           }
           if(wid>800){
              $("#basic_profile").show('slide',{to:{width:300}},400);
              $("#menu").show('slide',{to:{width:100}},400);
             // $("#content").animate({left:400},300);
           //   $("#top_menu_bar").fadeOut(400);
          }
        });
    });
</script>
</head>
<body>
<div id="top_menu_bar">
    Menu
</div>
<div id="page">
        
	<div id="basic_profile" class="page_class">
		<div id="profile_image"></div>
                HELLOW
	</div>
	<div id="menu" class="page_class">
            <div id="menu_items_list">
            <div id="menu_item1" class="menu_items">Hello</div>
            <div id="menu_item2" class="menu_items">World</div>
	</div>
	</div>
	<div id="content" class="page_class">    
            <div id="side_menu">
            </div>
            <div id="content_page">
            HEllOOO WORLD
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br />flaksjflkasjfrl<br /><br />
            </div>
        </div>
           
</div>

</body>
</html>