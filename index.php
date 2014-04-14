<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
Sridhar Vemula
</title>
<link href="./css/main_page.css" type="text/css" rel="stylesheet" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>   
    $(document).ready(function(){
        var width=$(window).width();
        $("#page").css("{width:"+width+"px}");
        $(window).resize(function(){
           var wid=$(window).width();
           if(wid<800){
              // $("#basic_profile").hide('slide',{direction:'left'},300);
              // $("#menu").hide('slide',{direction:'left'},300);
              $("#basic_profile").fadeOut(300);
              $("#menu").fadeOut(300);
              
               
           }
           if(wid>800){
            //   $("#basic_profile").show('slide',{direction:'right'},300);
            //   $("#menu").show('slide',{direction:'right'},300);
                $("#basic_profile").fadeIn(300);
              $("#menu").fadeIn(300);
              
            }
        });
    });
</script>
</head>
<body>
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
            HEllOOO WORLD
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br />flaksjflkasjfrl<br /><br />
	</div>
</div>

</body>
</html>