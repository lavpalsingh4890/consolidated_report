<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- generator meta tag -->
    <!-- leave this for stats and Silex version check -->
    <meta name="generator" content="Silex v2.2.7">
    <!-- End of generator meta tag -->
    <script type="text/javascript" src="//editor.silex.me/static/2.7/jquery.js" data-silex-static=""></script>
    <script type="text/javascript" src="//editor.silex.me/static/2.7/jquery-ui.js" data-silex-static=""></script>
    <script type="text/javascript" src="//editor.silex.me/static/2.7/pageable.js" data-silex-static=""></script>
    <script type="text/javascript" src="//editor.silex.me/static/2.7/front-end.js" data-silex-static=""></script>
    <link rel="stylesheet" href="//editor.silex.me/static/2.7/normalize.css" data-silex-static="">
    <link rel="stylesheet" href="//editor.silex.me/static/2.7/front-end.css" data-silex-static="">
	    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- THIS LINE -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=5">
                        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
                        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style type="text/css" class="silex-style">
	#myProgress {
    width: 100%;
    background-color: grey;
}
#myBar {
    width: 0%;
    height: 30px;
    background-color: #4CAF50;
    text-align: center; /* To center it horizontally (if you want) */
    line-height: 30px; /* To center it vertically */
    color: white; 
}
	.redText
    {
        color:red;
    }
    .whiteText
    {
         color: white;
		    
    }
	.greenText
    {
        color:green;
    }
    .blackText
    {
         color: black;
        
    }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
	height: 100%;
    background-color: #f1f1f1;
    border: 1px solid #555;
}

li a {
    display: block;
    color: #FFF;
	height: 100%;
		 color: #FFF;
   padding: 10px 10px 8px 16px;
	 background-color: #cc1010;
    text-decoration: none;
}

li.content_list{
    text-align: left;
	height: 100%;
	 color: #000;
	  background-color: #FFF;
	    padding: 10px 10px 8px 16px;
    border-bottom: 1px solid #555;
}

li {
    text-align: left;
	height: 100%;
	 color: #FFF;
	 background-color: #cc1010;
	
	    padding: 10px 10px 8px 16px;
    border: 1px solid #555;
}

li:last-child {
    border-bottom: none;
}

li a.active {
		height: 100%;
    background-color: #cc1010;
    color: white;
}

li a:hover:not(.active) {
	
	    padding: 10px 10px 8px 16px;
    border: 1px solid #555;
		height: 100%;
    background-color: #000;
    color: white;
	 text-decoration: none;
}




        .chart {
            width: 400px;
            height: 400px;
            -webkit-box-shadow: 8px 8px 20px -3px rgba(1, 0, 0, 0.39);
            -moz-box-shadow: 8px 8px 20px -3px rgba(1, 0, 0, 0.39);
            box-shadow: 4px 4px 15px -3px rgba(1, 0, 0, 0.39);
            border-radius: 4px;
            margin: 20px;
            float: right;
            position: relative;
        }
        /* LIST #4 */
        
        #list4 {
            width: 320px;
            font-family: Georgia, Times, serif;
            font-size: 15px;
        }
        
        #list4 ul {
            list-style: none;
        }
        
        #list4 ul li {}
        
        #list4 ul li a {
            display: block;
            text-decoration: none;
            color: #000000;
            background-color: #FFFFFF;
            line-height: 30px;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom-color: #CCCCCC;
            padding-left: 10px;
            cursor: pointer;
        }
        
        #list4 ul li a:hover {
            color: #FFFFFF;
            background-image: url('../images/hover.png');
            background-repeat: repeat-x;
        }
        
        #list4 ul li a strong {
            margin-right: 10px;
        }
        
        
        /* Style the accordion panel. Note: hidden by default */
        
        div.panel {
            padding: 0 8px;
            background-color: white;
            display: none;
        }
        
        * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
            background: #FFFFFF;
			
        }
        
        nav {
            font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
            line-height: 1.5;
            /*for display only*/
            width: 200px;
            -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .menu-item {
            background: #fff;
            width: 1000px;
        }
        /*Menu Header Styles*/
        
        .menu-item h4 {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 7px 12px;
            background: #a90329;
        }
        
        .menu-item h4 a {
            color: white;
            display: block;
            text-decoration: none;
            width: 200px;
        }
        /*Menu Header Styles*/
        
        .menu-item h4 {
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 7px 12px;
            /*Gradient*/
            background: #a90329;
            /* Old browsers */
            background: -moz-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%);
            /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #a90329), color-stop(44%, #8f0222), color-stop(100%, #6d0019));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%);
            /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%);
            /* IE10+ */
            background: linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019', GradientType=0);
            /* IE6-9 */
        }
        
        .menu-item h4:hover {
            background: #cc002c;
            /* Old browsers */
            background: -moz-linear-gradient(top, #cc002c 0%, #6d0019 100%);
            /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #cc002c), color-stop(100%, #6d0019));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #cc002c 0%, #6d0019 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #cc002c 0%, #6d0019 100%);
            /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #cc002c 0%, #6d0019 100%);
            /* IE10+ */
            background: linear-gradient(top, #cc002c 0%, #6d0019 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc002c', endColorstr='#6d0019', GradientType=0);
            /* IE6-9 */
        }
        /*First Item Styles*/
        
        .alpha p {
            font-size: 13px;
            padding: 8px 12px;
            color: #aaa;
        }
        /*ul Styles*/
        
        .menu-item ul {
            background: #fff;
            font-size: 13px;
            line-height: 100px;
            list-style-type: none;
            overflow: hidden;
            padding: 0px;
        }
        
        .menu-item ul a {
            margin-left: 20px;
            text-decoration: none;
            color: #aaa;
            display: block;
            width: 200px;
        }
        /*li Styles*/
        
        .menu-item li {
            border-bottom: 1px solid #eee;
        }
        
        .menu-item li:hover {
            background: #eee;
        }
        /*ul Styles*/
        
        .menu-item ul {
            background: #fff;
            font-size: 13px;
            line-height: 100px;
            height: 0px;
            /*Collapses the menu*/
            list-style-type: none;
            overflow: hidden;
            padding: 0px;
        }
        /*ul Styles*/
        
        .menu-item ul {
            background: #fff;
            font-size: 13px;
            line-height: 100px;
            height: 0px;
            list-style-type: none;
            overflow: hidden;
            padding: 0px;
            /*Animation*/
            -webkit-transition: height 1s ease;
            -moz-transition: height 1s ease;
            -o-transition: height 1s ease;
            -ms-transition: height 1s ease;
            transition: height 1s ease;
        }
        
        .menu-item:hover ul {
            height: 500px;
        }

    </style>
    <script type="text/javascript" class="silex-script"></script>
    <style class="silex-inline-styles" type="text/css">
        .body-initial {
            background-color: rgba(255, 255, 255, 1);
        }
        
        .silex-id-1478366444112-1 {
            top: 100px;
            left: NaNpx;
            background-color: transparent;
            min-width: 1204px;
        }
        
        .silex-id-1478366444112-0 {
            min-height: 100px;
            background-color: transparent;
            width: 1204px;
            top: 15px;
            left: 98px;
        }
        
        .silex-id-1503579907557-0 {
            width: 715px;
            min-height: 40px;
            top: 4px;
            left: 263px;
        }
        
        .silex-id-1474394621033-3 {
            top: 140px;
            left: 5px;
            min-width: 1200px;
        }
        
        .silex-id-1474394621032-2 {
            min-height: 1198px;
            background-color: transparent;
            width: 1200px;
            top: 15px;
            left: 103px;
        }
        
        .silex-id-1503580064209-1 {
            width: 510px;
            background-color: rgb(255, 255, 255);
            min-height: 366px;
            top: -11px;
            left: -94px;
        }
        
        .silex-id-1503580475676-2 {
            width: 410px;
            background-color: rgb(255, 255, 255);
            min-height: 100px;
            top: -64px;
            left: -91px;
        }
        
        .silex-id-1503580871826-3 {
            width: 735px;
            background-color: rgb(255, 255, 255);
            min-height: 610px;
            top: 22px;
            left: 424px;
        }
        
        .silex-id-1503580896187-4 {
            width: 975px;
            background-color: rgb(255, 255, 255);
            min-height: 634px;
            top: 9px;
            left: 8px;
        }
        
        .silex-id-1478366450713-3 {
            top: 100px;
            left: NaNpx;
            background-color: transparent;
        }
        
        .silex-id-1478366450713-2 {
            min-height: 100px;
            background-color: transparent;
            width: 1200px;
        }
		
	
    </style>
    <title></title>
    <script type="text/javascript" class="silex-json-styles">
        [{"desktop":{"body-initial":{"background-color":"rgba(255,255,255,1)"},"silex-id-1474394621033-3":{"top":"140px","left":"5px","min-width":"1200px"},"silex-id-1474394621032-2":{"min-height":"1198px","background-color":"transparent","width":"1200px","top":"15px","left":"103px"},"silex-id-1474394605264-1":{"min-height":"100px","width":"100px","top":"100px","left":"100px"},"silex-id-1474394605263-0":{"min-height":"100px","background-color":"transparent"},"silex-id-1478366444112-0":{"min-height":"100px","background-color":"transparent","width":"1204px","top":"15px","left":"98px"},"silex-id-1478366444112-1":{"top":"100px","left":"NaNpx","background-color":"transparent","min-width":"1204px"},"silex-id-1478366450713-2":{"min-height":"100px","background-color":"transparent","width":"1200px"},"silex-id-1478366450713-3":{"top":"100px","left":"NaNpx","background-color":"transparent"},"silex-id-1503579907557-0":{"width":"715px","min-height":"40px","top":"4px","left":"263px"},"silex-id-1503580064209-1":{"width":"510px","background-color":"rgb(255, 255, 255)","min-height":"366px","top":"-11px","left":"-94px"},"silex-id-1503580475676-2":{"width":"410px","background-color":"rgb(255, 255, 255)","min-height":"100px","top":"-64px","left":"-91px"},"silex-id-1503580871826-3":{"width":"735px","background-color":"rgb(255, 255, 255)","min-height":"610px","top":"22px","left":"424px"},"silex-id-1503580896187-4":{"width":"975px","background-color":"rgb(255, 255, 255)","min-height":"634px","top":"9px","left":"8px"}},"mobile":{},"componentData":{}}]
    </script>






    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.2" data-silex-viewport="">


    <meta name="website-width" content="1200">
    <style type="text/css" class="silex-style-settings">
        .website-width {
            width: 1600px;
        }
    </style>








    <style id="current-page-style">
        .page-page-1 {
            display: inherit;
        }
    </style>

    <!-- Silex HEAD tag do not remove -->
    <!-- End of Silex HEAD tag do not remove -->
</head>

<body data-silex-id="body-initial" class="body-initial enable-mobile silex-runtime" data-silex-type="container">
    <div class="silex-pages">
        <div data-silex-type="image" class="editable-style silex-id-hamburger-menu image-element menu-button prevent-draggable prevent-resizable" data-silex-id="silex-id-hamburger-menu">
            <img alt="open mobile menu" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAoCAYAAAC8cqlMAAAB5UlEQVR42u2ZPWvCUBSGM+UfFO3e3dLu/QN+oKj4EUXRQREEJYgoiCAu6qCogyDo7iJ21UUaKqEgCC4iiEMGB3UVgsnpTWj/wfVK2nvhGbKEPJyT996TMMzPGg6H5mKx+GgkyuWyeTQasb8OTDwef4tEIp8+n+/LYIjJZJJHQiwzm81M6OLDarWqNpsNjEYgEJCy2ewT0+/3TagighElNFAnQT6ft1ARKkJFqMgfFvF4PFpuEwFtdrcRqVarIIoirFYrIiyXSxiPx+B2u/GJBINBuF6vQHopigK1Wg2fCMdxcLlciIuoqgqNRgOfiN1uB3Qwg91uB8fjkQiHwwEmkwne1qLxS0VuKKJle71eh06nQ4Rmswk8z+MVcTqdsNlsQJZlotF7Pp8hk8ngE4lGo/qN7xG/vV4Pb0Xm8zlxkdPpBGgMx/+yJxIJKBQKRMjlcuBwOGhq/Q+RcDgMsViMCFrAuFwu/CKDwQC22y1IkkSE/X4PgiDo+xc2Ea0S9zjGa/Hb7Xbxifj9fj0K7yFSqVTwtlY6nYbpdKpPiSRYLBbQarX0PYymFhWhIlSEilCRW6GdyUqlkoVZr9dsKpXiOY6TtW+7BkNBz/7ebrcf9L+6Xq+XRYPMMyrTq5EIhUIvaAjTJb4BBNQ2yhnth0wAAAAASUVORK5CYII="
                class="silex-element-content">
        </div>

        <a id="page-page-1" data-silex-type="page" class="page-element page-link-active">Page 1</a></div>









    <div data-silex-type="container" class="prevent-draggable container-element editable-style silex-id-1478366444112-1 section-element" data-silex-id="silex-id-1478366444112-1" style="">
        <div data-silex-type="container" class="editable-style silex-element-content silex-id-1478366444112-0 silex-container-content container-element prevent-draggable website-width" data-silex-id="silex-id-1478366444112-0">

            <div data-silex-type="text" class="editable-style silex-id-1503579907557-0 text-element" data-silex-id="silex-id-1503579907557-0" style="">
                <div class="silex-element-content normal"><b style="margin: 0px; padding: 0px; text-align: center;"><font size="6" color="#7f6000" style="margin: 0px; padding: 0px;">Jeevansathi JSMS Test Suite Execution Report</font></b></div>
            </div>
        </div>

    </div>
    <div data-silex-type="container" class="prevent-draggable container-element editable-style silex-id-1474394621033-3 section-element" data-silex-id="silex-id-1474394621033-3" style="">
        <div data-silex-type="container" class="editable-style silex-element-content silex-id-1474394621032-2 silex-container-content container-element prevent-draggable website-width" data-silex-id="silex-id-1474394621032-2">
            <div data-silex-type="html" class="editable-style silex-id-1503580064209-1 html-element" data-silex-id="silex-id-1503580064209-1" style="">
                <div class="silex-element-content">



                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                
                    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                    <script src="https://www.amcharts.com/lib/3/pie.js"></script>
                    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

                    <script type="text/javascript">
					
					
					
		
					var module_list;
					
        function get_modules(){
$("#list_collapse").empty(); 
             $.ajax({
        type: "GET",
        data: "{}",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        url: "fetch_module.php", 
        success: function(data) {
        module_list = data;
	 for(var i=0;i<module_list.length;i++)
    {	
	 var html4 =" <div id=\""+module_list[i].Module_Name+"\" class=\"listelement\"><li><a><span class=\"whiteText\"> "+module_list[i].Module_Name +"(Total :"+ module_list[i].Total+" Pass :"+ module_list[i].Pass+" Fail :"+module_list[i].Fail+" NA :"+module_list[i].NA+")</span></a></li> </div>";
		 $("#list_collapse").append(html4); 
		get_test_cases(module_list[i].Module_Name);	
    }
   } });
		}
	
		 function get_test_cases(module){
        
        
             $.ajax({
        type: "GET",
       
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        url: "fetch_test_cases.php?Module_Name="+module, 
        success: function(data) {
        var module_list = data;
                         
                    	 var html4 ="<div class=\"content\"><ul>";               
        	//document.getElementById("test-add").appendChild(createListView(module_list));
			//alert(data);
        			 for(var i=0;i<module_list.length;i++)
    {
		if(module_list[i].Result=='Pass')
	html4 =html4+"  <li class=\"content_list\">"+module_list[i].Method_Name+" <span class=\"greenText\">("+module_list[i].Result+")</span></li>";
else if(module_list[i].Result=='Fail')
	html4 =html4+"  <li class=\"content_list\">"+module_list[i].Method_Name+" <span class=\"redText\">("+module_list[i].Result+")</span></li>";
    else
		html4 =html4+"  <li class=\"content_list\">"+module_list[i].Method_Name+" <span class=\"blackText\">("+module_list[i].Result+")</span></li>";
	}
	html4=html4+"</ul></div>";
       $("#"+module).append(html4);    
        }
	
		
        });
		}
	 
			function removeElement(elem){
			var myNode = document.getElementById("main_container3");
			
var fc = myNode.firstChild;
while( fc ) {
    myNode.removeChild( fc );
    fc = myNode.firstChild;
		}
        }
	$(document).ready(function() {
    //window.setTimeout(callback, 100);
//removeElement("main_container");
 get_modules();
  $('.content_list').slideUp();
});
		  
			
			function createListView(spacecrafts){
    var listView=document.createElement('ol');
    for(var i=0;i<spacecrafts.length;i++)
    {
        var listViewItem=document.createElement('li');
        listViewItem.appendChild(document.createTextNode(spacecrafts[i].Module_Name +"Total :"+ spacecrafts[i].Total+" Pass :"+ spacecrafts[i].Pass+" Fail :"+spacecrafts[i].Fail+" NA :"+spacecrafts[i].NA));
        listView.appendChild(listViewItem);
    }
    return listView;
}	
          $(function(){
$('#example_tree').find('SPAN').click(function(e){
    $(this).parent().children('UL').toggle();
});
});              var chart;
            
        
                        // AmCharts.ready(function () {
                        //     // PIE CHART
                        //     chart = new AmCharts.AmPieChart();
            
                        //     // title of the chart
                        //     chart.addTitle("JSPC", 16);
            
                        //     chart.dataProvider = chartData;
                        //     chart.titleField = "status";
                        //     chart.valueField = "value";
                        //     chart.sequencedAnimation = true;
                        //     chart.startEffect = "elastic";
                        //     chart.innerRadius = "30%";
                        //     chart.startDuration = 2;
                        //     chart.labelRadius = 15;
                        //     chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                        //     // the following two lines makes the chart 3D
                        //     chart.depth3D = 10;
                        //     chart.angle = 15;
            
                        //     // WRITE
                        //     chart.write("chartdiv");
                        // });
                        
                       function previewFile() {
            	   
                          chart = new AmCharts.AmPieChart();
            
                            // title of the chart
                            chart.addTitle("JSPC", 16);
            
                            chart.dataProvider = chartData2;
                            chart.titleField = "Result";
                            chart.valueField = "count";
                            //chart.sequencedAnimation = true;
                            // chart.startEffect = "elastic";
                            chart.innerRadius = "30%";
                            //chart.startDuration = 2;
                            chart.labelRadius = 15;
                            chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                            // the following two lines makes the chart 3D
                            chart.depth3D = 10;
                            chart.angle = 15;
            
            
                            // WRITE
                            chart.write("chartdiv");
                       }
                       /**
         * Initialize a chart update queue
         */
        AmCharts.updateQueue = [];
        
        /**
         * Queues data update for the chart
         */
        AmCharts.queueDataUpdate = function(chart, data) {
        
          // chart is already in queue?
          for (var i = 0; i < AmCharts.updateQueue; i++) {
            if (AmCharts.updateQueue[i].chart = chart) {
              AmCharts.updateQueue[i].data = data
              return;
            }
          }
        
          // insert into queue
          AmCharts.updateQueue.push({
            "chart": chart,
            "data": data
          });
          
          // process next item
          AmCharts.processUpdateQueue();
        };
        
        /**
         * Updates the next chart in queue
         */
        AmCharts.processUpdateQueue = function() {
          if (AmCharts.updateQueue.length) {
            var item = AmCharts.updateQueue.shift();
            item.chart.dataProvider = item.data;
            item.chart.validateData();
          }
        };
        
        /**
         * Add handlers dataUpdated handlers for each chart
         */
        AmCharts.addInitHandler(function(chart) {
        
          chart.addListener("dataUpdated", function() {
            // process the next update in queue
            AmCharts.processUpdateQueue();
          })
        
        }, ["serial", "pie", "xy"]);
        
        /**
         * Set up interval to update charts at 2 second intervals
         */
        setInterval(function() {
          
          for(var i = 0; i < AmCharts.charts.length; i++) {
            AmCharts.queueDataUpdate(AmCharts.charts[i], generateData());
          }
          
        }, 2000);
        
        /**
         * Generates random sample data
         */
         
        
        var final;
        function get_ajax(){
        
        
             $.ajax({
        type: "GET",
        data: "{}",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        url: "fetch_data.php", 
        success: function(data) {
        final = data;
        
        }
        });
        
        
        }
           var total =0; 
		   var bar_total=0;
        function generateData() {
        get_ajax();
   
	 
          var data = [];
        if(final!=null){
        for (var i=0;i<final.length;++i)
                {
              data.push({
              "Result": final[i].Result,
              "count": final[i].count
            });
			total =total+parseInt(final[i].count);	
if(final[i].Result=='Pass'||final[i].Result=='Fail')		{
		bar_total =bar_total+parseInt(final[i].count);	
}	
                }
				var bar_width = (bar_total/total)*100;
				
				move(parseInt(bar_width));
			
        }
        
        
          return data;
        }
		
		
		
        
                       AmCharts.makeChart("chart8", {
          "type": "pie",
          "theme": "light",
          "dataProvider": generateData(),
          "titles": [{
            "text": "JSPC"
          }],
          "valueField": "count",
          "titleField": "Result",
          "pullOutRadius": 5,
          "labelRadius": -22,
          "labelText": "[[Result]]([[count]])  [[percents]]%",
          "percentPrecision": 1
        });
		
		function move(width) {
    var elem = document.getElementById("myBar"); 
   
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            elem.style.width = width + '%'; 
            elem.innerHTML = width * 1 + '%';
        }
    }
}
                    </script>




                    <div id="chart8" class="chart" style="overflow: hidden; text-align: left;">
                        <div class="amcharts-main-div" style="position: relative;">
                            <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 200px; height: 200px; padding: 0px; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 200px; height: 200px; top: -0.00390625px; left: 0px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L199.5,0.5 L199.5,199.5 L0.5,199.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g><g></g><text y="7" fill="#000000" font-family="Verdana" font-size="13px" opacity="1" font-weight="bold" text-anchor="middle" transform="translate(100,20)" style="pointer-events: none;"><tspan y="7" x="0">JSPC</tspan></text></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" target="_self" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 5px; top: 5px;">JS chart by amCharts</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
             
            <div data-silex-type="container" class="editable-style silex-id-1503580871826-3 container-element" data-silex-id="silex-id-1503580871826-3" style="">
			
                <div data-silex-type="html" class="editable-style silex-id-1503580896187-4 html-element" data-silex-id="silex-id-1503580896187-4" style="">
			   	<div id="myProgress">
  <div id="myBar">0%</div>
</div>
			
                    <div class="silex-element-content">
  	
               <input type="button" value="Refresh Page" onClick="reload();">
                        <div id="list" ">
  <ol id ="list_collapse">
    <div class="listelement">
      
    </div>
 
</ol>
                        </div>
                       
                        <script>
                            $('.radio-line').on('click', 'input[type="radio"]', changeText);
                            
                            function changeText(e) {
                                $('.manager').text($(e.currentTarget).data('text'));
								
							
                            }
							
							
		 function reload(e) {
                                get_modules();
								
							
                            }
							
						
 $(document).on('click', '.listelement', function()
{
if(!($(this).children('.content').is(':visible'))){
      $('.content').slideUp();
      $(this).children('.content').slideDown();
    } else {
      $('.content').slideUp();
    }
});
							
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div data-silex-type="container" class="prevent-draggable container-element editable-style silex-id-1478366450713-3 section-element" data-silex-id="silex-id-1478366450713-3" style="">
        <div data-silex-type="container" class="editable-style silex-element-content silex-id-1478366450713-2 silex-container-content container-element prevent-draggable website-width" data-silex-id="silex-id-1478366450713-2">


        </div>
    </div>





















</body>

</html>