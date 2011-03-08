<script type="text/javascript">
		<!--
			var browser_y = document.body.clientHeight;
			var browser_x = document.body.clientWidth
			
			var czas;
			
			var obrazek = "Trollface.gif";
			
			var liczba_platkow = 50;
			
			var obj_x = new Array();
			var obj_y = new Array();
			var obj_speed_x = new Array();
			var obj_speed_y = new Array();
			var obj_amplitude = new Array();
			var obj_diff = new Array();
			
			
			for (i =0;i<liczba_platkow;i++)
			{
				obj_x[i] = Math.random()*(browser_x - 50);
				obj_y[i] = Math.random()*browser_y;
				obj_amplitude[i] = Math.random()*38;
				obj_speed_x[i] = 0.02 + Math.random()/10;
				obj_speed_y[i] = 0.7 + Math.random();
				obj_diff[i] = 0;
				
				document.write("<div id=\"s"+i+"\" style=\"background-image:url('"+obrazek+"'); width:40px; height:33px; top:"+obj_y[i]+"px; left:"+obj_x[i]+"px; position:absolute; z-index: 5;\"><\/div>");
				
			}
			
			function pada_snieg()
			{
				for (i=0;i<liczba_platkow;i++)
				{
					obj_y[i] = obj_y[i] + obj_speed_y[i];
					
					if (obj_y[i] > browser_y - 50)
					{
						obj_x[i] = Math.random()*(browser_x - obj_amplitude[i] - 30);
						obj_y[i] = 0;
						obj_speed_x[i] = 0.02 + Math.random()/10;
						obj_speed_y[i] = 0.07 + Math.random();
					}
					
					obj_diff[i] = obj_diff[i] + obj_speed_x[i];
					
					document.getElementById("s"+i).style.top=obj_y[i]+"px";
					document.getElementById("s"+i).style.left=obj_x[i] + obj_amplitude[i]*Math.sin(obj_diff[i])+"px";
					
				}
				
				czas = setTimeout("pada_snieg()",10);
				
			}
			
			pada_snieg();
	
		-->
		</script>