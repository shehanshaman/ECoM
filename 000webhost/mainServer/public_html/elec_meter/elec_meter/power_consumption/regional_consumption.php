<?php 
	$connect = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');

	$lightBlue = '#D6EAF8';
	$Blue = '#85C1E9';
	$brightBlue = '#1A5276';
	$verybrightBlue = '#2E4053';

 ?>


	<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

<style type="text/css">
	#mataraANDhambantota{

		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 1";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;

					     $unit["1"] = $row["unit"];

		 	?>
	}	
	#gallANDkaluthara{

		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 2";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["2"] = $row["unit"];

		 	?>

	}

	#colombo{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 3";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["3"] = $row["unit"];
		 	?>
	}

	#gampaha{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 4";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["4"] = $row["unit"];

		 	?>
	}

	#amparaAbatticaloaApolonnaruwa{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 5";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["5"] = $row["unit"];

		 	?>
	}

	#kurunagallaAmatale{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 6";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["16"] = $row["unit"];

		 	?>
	}

	#anuradaATricoAvavniya{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 7";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["7"] = $row["unit"];

		 	?>
	}

	#mulathiAkilinochchiAjafna{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 8";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["8"] = $row["unit"];

		 	?>
	}

	#puttalamAmannar{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 9";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["9"] = $row["unit"];

		 	?>
	}

	#badullaANDmonaragala{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 10";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["10"] = $row["unit"];

		 	?>
	}

	#kegalleANDRathnapura{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 11";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["11"] = $row["unit"];

		 	?>
	}

	#kandyANDnuwaraeliya{
		fill:

			<?php 

				$query = "select unit from region_unit where province_id = 12";
				$result = mysqli_query($connect, $query);

				     $row = mysqli_fetch_array($result);

					     if ($row["unit"] > 3000) {
					     	echo $verybrightBlue ;
					     }
					     elseif($row["unit"] > 2000){
					     	echo $brightBlue ;
					     }
					     elseif ($row["unit"] > 1000) {
					     	echo $Blue ;
					     }
					     else{
					     	echo $lightBlue ;	
					     }
					     ;
					     $unit["12"] = $row["unit"];

		 	?>
	}

	#legend{
		margin-left: 200px;
		float: left;
		background: #9b90a7;
		width: 951px;
		height: 47px;
		padding: 0px;
		border-right: solid 1px white;
		border-bottom: solid 1px white;
	}

	#mapwrap{
		margin-left: 200px;
		float: left;
		background: #9b90a7;
		width: 500px;
		height: 570px;
		padding: 75px;
		border-right: solid 1px white;
	}

	#regionalDetails{
		width: 300px;
		height: 720px;
		float: left;
		background:#9b90a7;
	}

	#mataraANDhambantota:hover{
		fill: black;
	}
	#kandyANDnuwaraeliya:hover{
		fill: black;
	}
	#badullaANDmonaragala:hover{
		fill: black;
	}
	#gallANDkaluthara:hover{
		fill: black;
	}
	#colombo:hover{
		fill: black;
	}
	#gampaha:hover{
		fill: black;
	}
	#amparaAbatticaloaApolonnaruwa:hover{
		fill: black;
	}
	#kurunagallaAmatale:hover{
		fill: black;
	}
	#anuradaATricoAvavniya:hover{
		fill: black;
	}
	#mulathiAkilinochchiAjafna:hover{
		fill: black;
	}
	#puttalamAmannar:hover{
		fill: black;
	}
	#kegalleANDRathnapura:hover{
		fill: black;
	}

		/* basic positioning */
	.legend { list-style: none; }
	.legend li { float: left; margin-right: 5px; }
	.legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }
	/* your colors */
	.legend .superawesome { background-color: #D6EAF8; }
	.legend .awesome { background-color: #85C1E9; }
	.legend .kindaawesome { background-color: #1A5276; }
	.legend .notawesome { background-color: #2E4053; }

</style>

<div id="legend">
	<ul class="legend">
    <li><span class="superawesome"></span>Unit < 1000</li>
    <li><span class="awesome"></span>1000 < Unit < 2000</li>
    <li><span class="kindaawesome"></span>2000 < Unit < 3000</li>
    <li><span class="notawesome"></span>Unit > 3000</li>
</ul>
</div>

<div id="mapwrap">

	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792" enable-background="new 0 0 612 792" xml:space="preserve">
		<g id="map">
			<g id="mataraANDhambantota" mytitle = "Matara and Hambantota" myId="1">
				<path stroke="#000000" d="M465.607,622.889c-4.983-2.077,6.229,3.737,9.137,4.568s3.737,2.908,2.907,4.569
					s-1.661,5.398-4.983,5.398s-3.848,3.323-4.416,5.399s-3.475,3.737-5.552,3.737s-4.153,4.984-4.153,4.984l-7.891,2.907v2.492h-5.814
					l-3.323,2.907v4.983l-4.152,3.321h-3.738l-6.229,4.985c0,0-3.738,4.153-3.738,5.814s-6.645,2.491-6.645,2.491l-7.061,4.569
					l-4.153,2.491l-5.814,3.738h-7.061l-5.399,2.491l-7.06,1.662l-4.569,2.076h-3.322v4.153v1.661h-5.029h-4.522h-3.323h-6.229
					l-5.172,3.322l-2.719,2.907h-5.814h-5.399l-3.738,2.077h-4.983l-2.492,4.153h-4.152l-4.153,2.491l-2.077,2.077h-2.907L306,724.227
					v2.907l-5.273,2.076h-6.645l-3.738,2.492h-7.061l-2.907,3.322l-4.568,1.661h-3.738h-3.323l-5.399-2.491h-6.645h-6.645l-2.492-2.907
					l-2.492-2.077h-4.984v-4.568v-3.737l4.984-2.077v-5.399h-4.984l4.984-4.983v-3.322c0,0-0.416-3.322-2.492-4.153
					s-1.246-0.83-2.492-2.076s0-7.892,0-7.892l-0.554-5.399v-2.076l9.275,0.415l0.831-3.322l-2.077-6.229c0,0-0.415-1.247-2.492-2.077
					s-2.492-4.986-3.738-4.154s-1.8-1.244-1.8-1.244l2.215-4.153l6.23,5.397l5.399,1.663l3.323,0.83l0.831-2.493l-2.907-5.813
					l1.661-4.152l0.06-4.036l13.23-12.992L306,632.856l49.133-7.061l69.358-9.969C480.359,623.533,475.176,626.876,465.607,622.889z"/>
			</g>
			<g id="gallANDkaluthara" mytitle = "Galle and Kaluthara" myId="2">
				<path stroke="#000000" d="M158.273,585.511h7.061l3.322-2.52l2.077-2.464l2.077-1.662l2.077-2.491l4.153,2.491
					l3.738-0.415l2.907-2.076l2.907,4.568h2.492v-4.568h5.437h4.531l11.629,4.568l10.383,12.044l10.383,18.689l19.935,22.843
					l8.447,14.256l3.616,19.383v26.582c0,0-5.418,19.52-6.249,21.181s-14.121,13.29-14.121,13.29l-5.538,1.662h-6.922l-6.23-3.738
					l-7.061-1.661l-4.983-1.661l-4.975-1.661v-4.569l-5.409-1.661l-7.438-5.398c0,0-2.114-2.907-3.775-3.738s-4.153-2.907-4.153-2.907
					l-5.814-7.061l-1.661-4.983l-4.153-7.061l-4.153-8.308l-0.416-3.321l0.831-4.985l-1.661-4.567l-2.077-4.983l-0.831-4.983
					l-3.322-4.153l0.415-4.153l-1.661-3.322l-2.077-2.492v-4.983l2.077-3.738v-4.983l-1.661-4.569l-2.492-5.4l-2.907-4.151
					l-1.246-4.984l-2.492-5.814v-5.813v-4.153L158.273,585.511z"/>
			</g>
			<g id="colombo" mytitle = "Colombo" myId="3">
				<path  stroke="#000000" d="M145.398,549.26l7.891,2.193h3.738l5.399,1.662h3.322h6.23l4.153,2.491v2.907h3.738
					l4.984-2.076l1.246-2.551l2.077-4.627h3.738l4.606-1.959h3.285l3.26-2.109h8.369l6.645,6.661l-2.492,6.661
					c0,0-0.83,3.322-1.246,5.814s-0.831,5.399-0.831,5.399l-1.246,3.721l-2.898,9.543c0,0-4.578,6.257-6.239,6.672
					s-5.814,2.907-8.306,3.322s-3.322-1.246-9.552,0s-13.705-1.109-15.367,0.068s-9.968,0.308-9.968,0.308l-6.645,6.269l-0.416-7.06
					l2.077-2.907l-1.661-0.831v-2.907l-3.738-0.831l-2.907-2.103l0.416-3.296v-3.321l2.076-2.926l-3.322-1.038l-4.153-2.683v-4.153
					v-2.076l-2.077-2.077v-4.153v-4.568v-1.661L145.398,549.26z"/>
			</g>
			<g id="gampaha" mytitle = "Gampaha" myId="4">
				<path  stroke="#000000" d="M139.583,492.894h5.399h4.153h2.492h1.661l4.153-2.907h3.738l2.907-2.491v-1.662h5.814
					l4.153,1.662l2.492,1.868h2.284h4.361l2.077-3.53h2.077h3.322h4.153l1.699,3.53l2.039,3.53l3.738,2.907l7.07,3.323l8.712,12.459
					v11.629c0,0-0.831,7.891-1.662,10.798s-1.246,11.182-1.246,11.182l-2.077,7.508l-3.729,5.814c0,0-17.868,2.493-19.114,3.323
					s-10.383,4.982-13.291,5.813s-7.89,0.83-11.628,0s-16.613-5.398-16.613-5.398l-5.399-8.307l-1.986-3.443l2.402-5.311v-3.705v-4.153
					l-0.416-2.907l-1.246-3.323l-2.492-4.05v-3.841v-5.038h-2.492v-6.591v-1.661l-2.492-2.907l1.662-1.661l3.322,1.246v2.907
					l1.247,2.804l0.415,0.934l1.246-4.568l-2.907-3.322v-2.907v-4.153"/>
			</g>
			<g id="amparaAbatticaloaApolonnaruwa" mytitle = "Ampara , Batticaloa and Polonnaruwa" myId="5">
				<path  stroke="#000000" d="M423.66,326.766v4.568l4.984,2.077v5.399v2.907h-3.53l-3.53-3.738v-3.738l-3.322-2.284
					v2.7v2.492l-3.323,0.831v3.738h2.907h3.945l2.285,2.077l1.245,6.229l3.323,3.323v-6.645v-2.077h2.491v4.153v4.569l3.738,2.907
					v3.738l4.153,2.492l4.568,2.492h2.492h1.661v3.322l-2.907,3.738h2.907l3.737,3.323v4.568v7.476l4.984,2.598v1.971h4.983V396
					l2.492,6.769h6.229l3.738,2.077v3.737v3.322c0,0,1.662,2.077-2.907,2.077s-11.722-9.137-11.722-9.137s-0.737-2.907-4.476-1.246
					s-4.153,3.737-4.153,3.737l2.491,3.738h3.738l10.383,6.645l1.246,4.153h2.907l4.568,2.492v-5.399l1.211-2.814l0.755-1.754
					l5.925,4.153l2.077,5.814l2.076,2.907l3.738,7.891v9.138l3.737,7.06v6.646l4.153,7.476v6.646l3.323,6.229v7.477v7.475
					c0,0,1.246,1.661,0,4.153s0.554,7.061,0.554,7.061s0.139,3.321,0,3.737s-1.799,2.077-3.461,2.492s-2.907,2.907-2.907,2.907
					l1.245,4.516l5.185-2.854c0,0,1.446,3.738,0,4.984s-1.861,4.983-1.861,4.983l-4.153,1.766l2.907,4.88l3.75,3.737v4.568
					c0,0,2.089,1.661,0,2.492s-2.505,0.769-3.335,2.461s2.077,4.068,2.077,4.068l-4.569,6.346l0.416,8.722c0,0-0.001,1.663-0.831,3.946
					s-2.492,8.101-2.492,8.101v2.904l0.416,7.476c0,0,1.245,4.983-0.416,5.814s-1.246-0.415-3.322,3.738s-0.83,2.077-2.076,4.153
					s-2.492,5.398-2.492,5.398l-1.661,4.984c0,0-0.415,4.57-1.661,4.984s-3.323,5.398-3.323,5.398l-3.018,3.322v3.322l-5.704,4.569
					l-7.891,2.491c0,0-7.062-2.907-8.307-2.907s-24.919-12.875-24.919-12.875s-26.58-18.273-27.826-23.673
					s-17.027-36.548-21.181-44.023s-14.122-29.072-19.521-36.133s-16.612-17.028-21.181-24.504s-29.072-39.87-19.193-31.927
					c11.353,9.128,31.689-36.883,22.931-30.785v-5.399l0.416-6.229c0,0,3.737-1.662-0.831-1.662s-7.891,0.416-7.891,0.416l-2.492,1.246
					l-4.568,1.245l-6.646,1.662l-2.773,0.83h-5.948h-6.645L306,418.966v-4.568l-1.951-4.568v-7.061l4.568-3.322l4.153-1.246v-4.568
					L312.355,390v-5.09l1.246-6.23l2.076-4.984l2.492-3.322l-4.153-1.661l-1.246,2.492c0,0-1.661,1.246-3.322,0.831
					s-3.989,0.415-3.448-2.077s0-5.399,0-5.399l-1.951-1.661l-2.907-2.907v-2.492l2.907-3.322l-0.831-4.984
					c0,0-3.322,3.738-2.076-2.077s1.246-5.814,1.246-5.814L306,332.58l3.033-6.229l1.246-7.891l3.737-4.153h9.553h6.229l0.83-5.814
					l3.738-4.568h4.983c0,0,4.984-3.322,4.984,0s3.965,6.645,3.965,6.645v4.153l1.85,5.814l1.661-5.399l6.936-0.415l5.939,3.738
					l4.568,0.415l5.399-1.246l4.983,3.738c0,0,0.416,1.662,1.246,2.907s4.983,1.661,4.983,1.661l3.738-0.831l3.737,0.415l2.492-4.568
					l2.492-2.077l4.691,1.246l4.445-0.831l8.307,0.831L423.66,326.766z"/>
			</g>
			<g id="kurunagallaAmatale" mytitle = "Kurunagalla and Matale" myId="6">
				<path  stroke="#000000" d="M189.422,328.42l5.399,3.738l7.476,2.907l6.23,3.322l4.568,2.907h4.984l3.322,3.738
					l6.23,1.662l5.399,4.153l3.323,3.323h6.229c0,0,2.077,5.399,2.492,7.476s0,5.399,0,5.399l6.229,5.814c0,0,2.077,3.323,2.077,4.569
					s-0.416,4.569,0,5.814s0,5.399,0,5.399l3.323,4.984h4.983l3.757-1.661l3.719-3.738l3.738-1.661l2.907-1.661l6.229-1.661
					c0,0,0.831-0.831,0-2.907s0.369-6.23,0.369-6.23l5.594-4.984l6.082-4.153l6.781-2.077l3.187,0.007l5.399,1.239
					c0,0,10.382,1.246,10.798,2.492s9.138,7.06,9.138,7.06s0,10.799,0,14.121s0,11.629,0,11.629l4.983,4.983l4.568,3.323
					c0,0,8.761-1.661,9.364,0s10.571,13.29,10.571,14.951s4.153,14.12,4.153,15.366s1.661,16.198,0,19.521s1.661,8.919-2.907,11.104
					s-8.704,3.362-14.536,5.923s-6.095,4.092-12.6,3.915s-23.784,9.376-26.981,9.791c-3.197,0.415-13.165,16.197-30.192,13.705
					s-33.637-0.969-36.961-1.522s-11.631,13.983-28.659,9.414s-30.316-5.399-34.263-5.399S161.18,500.5,161.18,500.5l-12.875-14.667
					c0,0-4.153-19.943-5.399-24.512s1.246-20.351,0-22.012s4.153-22.427,4.568-24.088s4.569-24.088,6.23-29.072
					s7.476-29.903,7.476-29.903l6.645-17.028L189.422,328.42z"/>
			</g>
			<g id="anuradaATricoAvavniya" mytitle = "Anuradapura and Vavniya" myId="7">
				<path  stroke="#000000" d="M232.199,185.96h3.323l3.324-4.153l5.397-2.907v-2.575v-3.24c0,0-0.831-0.415,0-1.661
					s0-3.323,0-3.323s-0.831,1.246-2.077,0s-1.246-1.246-1.246-1.246l-2.075-2.492v-2.073h3.736h9.137h3.738l5.399,2.904l2.907,2.492
					c0,0,5.399,0,4.984-1.246s-0.415-1.246-0.415-1.246l3.322-5.399h6.23h4.153l1.662,5.399l2.077,3.738l2.225,1.662l6.082,2.077v3.655
					h4.568h3.738L306,178.9l3.033,5.399v6.061l8.306,3.077l4.569-3.077h3.737l2.492-1.907l4.153,1.907v4.323h4.983v-4.323v-1.907
					v-1.661l4.153-1.246h3.737l2.907,4.814l2.492,4.323c0,0,2.906,4.569,3.322,5.814s9.876,7.476,9.876,7.476l3.415,5.399l3.322,5.399
					v4.153l4.153,2.077c0,0,3.322,2.492,3.322,3.738s2.077,2.907,2.492,4.153s3.737,1.246,3.737,2.907s0,6.23,0,6.23l4.568,2.907
					l-2.907,10.798l2.907,4.153l2.907,4.984h-2.076c0,0-0.831-0.831-3.738,0s-2.907,0.831-2.907,0.831s3.738,4.568,2.077,5.399
					s-2.492,2.907-2.492,2.907l4.568,3.738l4.568,2.076h2.492c0,0,2.492,2.907,2.907,0s2.076-7.06,2.076-7.06l3.861-3.738l3.615-2.077
					l2.907,4.568c0,0-1.245,2.908,0,4.153s3.737,2.168,3.737,5.445s-0.415,5.354,0,7.845s4.568,7.891,4.568,7.891
					s3.323,6.646,2.077,7.891s0.279,8.721,0.279,8.721l5.119,8.798c0,0,1.661,0.327,0,2.416s-3.738,2.919-4.568,3.744
					s-8.306,2.071-10.798,3.732s-12.876,6.229-16.613,7.476s-31.563,0-31.563,0s-12.459,15.367-13.29,16.613
					s-2.076,11.616-16.197,12.875s-18.99,11.07-18.99,11.07S303.219,394.644,292.42,396s-35.302,4.679-36.548,4.679
					s-14.121-2.906-22.427-8.306s-7.061-10.798-26.996-21.181s-26.163-12.875-30.525-16.613s-19.728-15.367-22.22-23.258
					s-3.738-28.875-3.738-28.875l3.738-24.286c0,0,11.213-6.645,12.044-17.443s10.176-32.81,10.176-32.81s19.727-19.104,20.973-19.935
					s17.443-9.137,17.443-9.137L232.199,185.96z"/>
			</g>
			<g id="mulathiAkilinochchiAjafna" mytitle = "Mulathiv , Kilinochch and Jaffna" myId="8">
				<path  stroke="#000000" d="M177.793,76.727l5.814,2.907l6.229,3.323l6.23,3.322l4.983,3.323c0,0,1.246,4.153,0,5.399
					s-2.907,4.568-2.907,4.568s-0.415,1.661-2.492,2.077s-4.431,2.492-5.953,2.907s-1.938-1.661-3.184,0s-8.722,3.738-8.722,3.738
					v5.814v6.23l2.907,2.077h4.153l4.845,4.153v4.984v9.137l-2.353,3.334l-0.416,8.295l0.831,7.48c0,0,9.552-0.819,9.552,2.495
					s2.907,14.035,2.907,14.035l1.384,12.538l7.338,9.552l14.121,3.738h17.858h14.536c0,0,22.012,2.077,23.258,2.907
					s17.443,5.814,19.935,4.568s15.782-6.23,15.782-6.23l11.214-4.568v-4.153l4.568-4.318l2.492-2.743l4.568-0.826l-3.322-3.743
					l-5.814-3.738l-2.077-2.985h1.662h2.491h2.492l4.568,2.154l-4.983-5.399l-0.831-2.907c0,0,0.414-1.246-0.831-2.492
					s-3.322-5.391-3.322-5.391l-2.907-2.495c-2.907-0.005-7.476,0-7.476,0v-4.158l2.907,0.831l2.492,0.416h2.907l0.415-2.907
					c0,0-0.415-2.907-1.661-4.153s-2.907-5.803-2.907-5.803l-1.661-6.241l-4.153-2.907l-1.246-5.814l-4.153-3.323l-1.246,2.492
					l-0.83,2.492l2.492,2.907L306,135.287l-2.782-1.661l-2.355-3.738v-2.492L306,126.15v-1.662v-3.738l-1.951-4.153l-4.984-3.738
					c0,0-1.247-1.246-2.492-2.492s-4.983-4.153-4.983-4.153l-5.399-2.907l-2.077-4.983c0,0-1.661-2.077-3.322-2.077s-1.662,0-1.662,0
					l-0.415,2.492l-0.416,2.077h-3.322c0,0-2.907-1.661-4.153-1.661s-6.23-3.323-6.23-3.323l-2.907-2.492l-4.153-2.492l-4.379-2.077
					v-2.907l4.379,0.416l5.399,2.492l7.891,2.907l3.323,3.323l1.246-2.492c0,0,0-1.662-2.077-3.323s-2.907-2.492-4.153-3.738
					s-3.738-5.399-5.814-6.23s-8.307-3.738-8.307-3.738s0-5.399-3.738-5.399s-12.458-5.814-12.458-5.814l-2.494-4.153l-3.323-2.077
					l-4.153-3.738l-3.738-5.399l-0.831-5.399l-3.322-2.907l-3.323-4.153l-2.492-3.323h-5.814h-4.984h-5.814h-3.322h-2.077v2.907
					l0.416,2.284l0.415,2.284l2.492,1.662l4.984,0.831h4.984l4.568,3.738l0.602,1.506l1.059,2.647l1.029,0.588l1.878,1.073
					c0,0,3.738,1.661,3.738,2.907s0,1.246,0,1.246l-5.814-1.246l-6.645-8.306c0,0-2.077-1.662-4.568-1.662s-4.568,0-4.568,0
					l-4.568-2.077l-2.907-8.306l-5.399-2.077c0,0-4.983-2.077-7.06,0s-4.153,2.077-4.153,2.077l-7.891,1.246c0,0-2.077-0.831-4.153,0
					s-4.983,2.077-4.983,2.077l-4.569,2.076v6.23c0,0,3.322,4.153,3.738,5.399s4.569,7.476,4.569,7.476l4.153,2.907l5.399-1.246h6.023
					l-3.531,4.984l3.531,0.831h6.437l4.153,1.246l4.568,2.076l5.399,0.831l4.984,1.246l7.061,4.153c0,0,1.661,1.661,2.492,2.907
					s9.137,8.722,9.137,8.722l4.983,3.322l2.077,2.492c0,0,3.323,1.246,3.323,2.492c0,0.608,0.594,1.811,1.202,2.882
					c0.637,1.123,1.29,2.102,1.29,2.102l5.816,4.153c0,0-7.893-7.891-11.631-7.476s-5.399-1.662-5.399-1.662l0.831-2.492l-3.738-2.907
					l-6.645-2.907l-6.645-3.738c0,0-1.662-1.661-4.153-2.077s-9.968-3.738-9.968-3.738v-2.907c0,0,1.246-1.661,0-2.077
					s-4.568-0.416-4.568-0.416L177.793,76.727z"/>
			</g>
			<g id="puttalamAmannar" mytitle = "Puttalam and Mannar" myId="9">
				<path  stroke="#000000" d="M204.789,148.173v6.23c0,0,3.738,1.246,3.738,2.907s0,7.476,0,7.476s0.416,4.568,0,5.814
					s-2.492,3.738-3.738,4.984s-2.077,4.568-2.077,4.568v5.399l3,3.738h8.214h7.061h7.476l4.568,2.077l4.569,8.306
					c0,0,0.416,2.908,0,4.153s2.862,3.322,0.185,4.568s0.23,0-2.677,1.246s-7.891-2.077-9.137,0s-3.321,2.907-5.191,2.907
					s-7.684-2.076-9.761,0s-8.306,5.399-8.306,5.399s1.246,4.153,0,4.568s-2.492,5.399-2.492,5.399l2.492,5.399l5.814,4.153
					l1.661,3.322l-6.23,1.662c0,0-5.739,2.907-7.438,2.907s-6.683,0-6.683,0h-8.306l-5.192,1.661v6.229l2.7,5.814
					c0,0,0.416,7.061-0.415,8.307s-1.662,2.076-2.285,5.399s-0.623,5.399-1.869,7.061s-3.738,4.984-3.738,4.984
					s-3.323,2.076-4.153,3.322s0,3.323-2.492,4.153s-2.907,3.738-2.907,3.738l2.492,9.137c0,0,2.907,6.23,2.077,7.476
					s2.492,5.814,0.416,7.476s5.399,2.907,5.399,2.907l4.776-1.661l3.946,1.661l4.568,3.738l3.738,5.399c0,0,2.493,3.322,0.831,4.984
					s-1.246,4.569-1.246,4.569l4.153,5.814l2.492,4.568l1.699,6.645v4.984v6.229l-2.114,3.738c0,0-0.415,1.661-1.661,2.077
					s-2.492,2.077-3.738,2.077s-4.153,1.661-5.399,2.907s-4.984,6.23-4.984,6.23s0,4.153-2.285,4.568S170.732,396,170.732,396
					l-1.246,3.855l-2.077,5.398l-3.738,6.646c0,0-1.661,2.492-2.492,4.153s-2.077,7.476-2.077,7.476h-2.907l-3.323,6.835v7.701v4.568
					v6.229v4.494v4.643l2.492,7.477l2.907,6.645l-0.831,6.229l-0.416,4.569l-0.831,2.914l3.323,7.053c0,0-2.077,7.061-3.323,7.061
					s-4.153-1.246-7.891,0s-5.814,0-5.814,0l-2.492-3.737l-0.416-3.315v-7.061l-2.077-6.237c0,0,1.246,2.907,0-1.661
					s-2.907-9.246-2.907-9.246v-3.629v-6.229l-2.076-5.474l-2.077-4.909v-6.229l-2.077-8.307l1.661-3.548l1.661-2.267v-4.568
					l-0.831-6.646l-2.492-4.568v-4.568v-3.738l-2.077-3.322c0,0,1.661-3.557,0-4.686s-1.661-1.129-1.661-1.129L122.556,390v-5.512
					l-2.077-4.984v-4.153v-3.323l-2.907-4.984v-5.814v-5.814l-2.077-3.322v-6.645l-2.492-4.984v-4.568v-4.984v-3.738v-4.569h5.399
					l1.661-2.215v-6.507c0,0,0.831-1.661,1.662-2.907s2.907-4.984,2.907-4.984l1.246-3.547h2.907l3.323,2.716l-1.661,2.492
					l-2.077,4.153l0.831,2.907l1.246,3.738l-1.246,4.153l-1.661,5.399l1.661,5.399l-0.831,5.399v6.645l2.492,4.984l1.246,4.568
					l2.492-9.552c0,0,0-2.076,0-3.738s-0.831-4.153,0-5.814s-0.416-4.568,0-5.814s1.661-2.493,0-4.569s-2.492-5.122-2.492-5.122
					s1.246-4.845,2.492-6.091s0.416,1.246,1.246-1.246s2.907-10.607,2.907-10.607v-3.929l-0.831-8.306l0.416-5.814l4.983-3.738
					c0,0,0.831-1.246,0.831-2.907s-0.831-1.661-0.831-3.738s0.831-4.984,0.831-4.984l9.137-4.568v-6.645l4.153-7.891l-0.416-6.645
					c0,0,0.416-4.983,0.416-6.645s0.416-5.814-0.831-6.645s-3.323-4.568-3.323-5.814s1.246-9.137,1.246-9.137s0-2.077,0-3.738
					s0-6.23,0-6.23l0.831-8.722l3.738-5.399l4.568-0.416l3.738-2.076l-0.415-5.814l3.738-1.662l5.606-2.907l4.361,2.907l-4.361-2.907
					l3.53-4.153l1.662-4.569v-5.399l-2.077-8.306l2.077-3.323l7.06-3.738l0.416-2.492l7.513-1.246l3.7-0.831L204.789,148.173z"/>
				<path stroke="#000000" d="M124.632,163.536h4.568l5.814,1.662l5.399,2.076l8.307,5.399l4.984,4.568
					c0,0,0,1.246,0,3.738s0,4.568,0,4.568s-0.415,0.831-2.077,1.662s-2.077,2.076-4.153,2.492s-3.322,1.246-5.399,0
					s-2.077-4.153-2.077-4.153s0-3.322-1.661-4.153s-4.984-2.908-6.646-3.323s-4.568-2.578-4.568-2.578l-7.061-3.236l-7.06-0.831
					l-2.907-2.077v-5.399l2.907-1.661L124.632,163.536z"/>
			</g>
			<g id="badullaANDmonaragala" mytitle = "Badulla and Monaragala" myId="10">
				<path  stroke="#000000" d="M352.642,448.039c9.137,7.892,9.552,5.398,15.366,0s11.629-9.509,11.629-4.339
					s-5.398,15.553-2.076,21.782s1.246,13.706,7.476,15.782s8.722,7.891,11.629,13.29s5.814,4.983,7.476,0s4.567-14.536,7.891-17.443
					s6.645-9.396,9.137-10.72s7.061-3.816,7.061-3.816s1.661,9.137,4.153,12.875s12.044,18.274,12.044,21.182
					s-3.738,7.892-5.814,10.383s-4.983,13.705-0.415,15.366s18.274,7.476,18.274,7.476s2.076,7.477,2.076,12.045s-1.661,9.137,0,13.705
					s0,57.729,0,60.221s-10.384,2.077-15.782,7.892s-8.306,18.688-9.137,21.181s-41.948,10.798-40.286,13.29
					s-19.104-21.182-33.641-13.29s-11.629,12.874-13.705,16.612s-22.843,6.646-22.843,6.646l-43.192-58.56l-4.153-79.741l44.438-59.423
					l19.936-21.563C353.056,415.08,338.114,435.491,352.642,448.039z"/>
			</g>
			<g id="kegalleANDRathnapura" mytitle = "Kegalle and Rathnapura" myId="11">
				<path  stroke="#000000" d="M233.86,470.467c-5.399,0.83,2.908,11.629-4.983,13.705s-23.673,7.06-24.088,10.798
					s-4.984,13.291-7.476,14.952s1.246,5.706,6.23,8.252s1.661,4.207,0,6.699s-6.645,19.935,1.661,21.181s-2.491,14.951-3.322,17.443
					s6.23,8.306,5.814,11.629s-4.153,0-4.153,0c-2.301-6.834,26.784,82.792,54.822,78.91c26.996-3.737,14.536-6.229,20.766-4.983
					s-2.907,10.799,7.061,8.307s4.568,6.229,4.568,6.229l5.928,2.907l15.668,6.229h9.137l7.476,3.738h5.399l-3.322-8.307
					c0,0,4.154-1.247-14.951-12.46c-0.615-0.361,0.859-25.582,0.83-26.58c-0.31-10.533,3.865-15.31,7.061-16.197l2.492-11.629
					c0,0,2.076,4.569-12.875,2.077c-7.913-1.319,6.235-7.892,2.492-7.892c-4.152,0,2.907-5.814,2.907-5.814l-10.799-8.306
					c0,0-6.418-31.563-11.515-39.455C293.816,537.457,245.318,468.705,233.86,470.467z"/>
			</g>
			<g id="kandyANDnuwaraeliya" mytitle = "Kandy and Nuwaraeliya" myId="12">
				<path  stroke="#000000" d="M266.67,467.145c0.831,4.153-4.153,3.738-6.645,3.738s-4.568,0.439-7.06,0.012
					s-4.569,3.312-2.492,5.803s-5.399,0-5.399,0s26.58,30.317,20.766,34.471s-4.983,6.229-8.514,7.061s-8.514,0-8.514,0
					s0,7.061,3.322,8.307s-0.415,8.306,0.416,9.552s0.83,7.061-4.153,7.061s0,10.799,2.492,12.875s17.028,21.182,6.438,19.936
					s4.775,5.813,12.251,6.645s36.549,0.416,40.702-2.076s6.646-9.554,5.814-7.892s-10.22-10.797-10.094-15.781
					s9.264-4.154,14.662-9.138s12.874-12.874,12.874-12.874s5.398-24.92,0-27.827s26.996,0.416,9.553-22.842
					c-11.584-15.444,11.377-11.824-1.246-28.657c-6.229-8.307-22.679,10.383-35.843,5.399c-13.165-4.983-2.782-2.077-2.782-2.077
					L288,463.822l-7.208,2.492c0,0-4.901-1.044-7.061-4.153C268.749,454.987,266.492,466.253,266.67,467.145z"/>
			</g>
		</g>

	</svg>

</div>

<div id="regionalDetails">
	<div id="regionName" style="padding: 40px; font-size: 20px;"></div>
	<div id="regionUnit" style="padding: 5px; font-size: 20px; margin-left: 20px;"></div>
</div>

<script src="../js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#map g').click(function(){
			var title = $(this).attr('mytitle');
			//alert(title);
			$('#regionName').html(title);

			var regionalId =  $(this).attr('myId');
			var ref = '$unit["' + regionalId + '"]'   ;
			//alert(ref);

			$('#regionUnit').html( "Unit :" + <?php echo $unit["11"] ?>);

		});
	});
</script>