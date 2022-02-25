<?php
session_start();

	include("config.php");
	// include("function.php");

	if(isset($_POST['btnadd']))
	{
		/// something was posted
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$medhx = $_POST['medhx'];
		$date = $_POST['date'];
		$oldOD = $_POST['oldOD'];
		$oldOS = $_POST['oldOS'];
		$oldODVA = $_POST['oldOD_VA'];
		$oldOSVA = $_POST['oldOS_VA'];
		//newrx of sph
		$newDODSPH = $_POST['newD_OD_SPH'];
		$newDOSSPH = $_POST['newD_OS_SPH'];
		$newCLODSPH = $_POST['new_CL_OD_SPH'];
		$newCLOSSPH = $_POST['newCL_OS_SPH'];
		$newRODSPH = $_POST['newR_OD_SPH'];
		$newROSSPH = $_POST['newR_OS_SPH'];
		//newrx of cyl
		$newDODCYL = $_POST['new_D_OD_CYL'];
		$newDOSCYL = $_POST['new_D_OS_CYL'];
		$newCLODCYL = $_POST['new_CL_OD_CYL'];
		$newCLOSCYL = $_POST['new_CL_OS_CYL'];
		$newRODCYL = $_POST['new_R_OD_CYL'];
		$newROSCYL = $_POST['new_R_OS_CYL'];
		//newrx of axis
		$newDODAXIS = $_POST['new_D_OD_AXIS'];
		$newDOSAXIS = $_POST['new_D_OS_AXIS'];
		$newCLODAXIS = $_POST['new_CL_OD_AXIS'];
		$newCLOSAXIS = $_POST['new_CL_OS_AXIS'];
		$newRODAXIS = $_POST['new_R_OD_AXIS'];
		$newROSAXIS = $_POST['new_R_OS_AXIS'];
		//newrx distance va
		$newDODVA = $_POST['new_D_OD_VA'];
		$newDOSVA = $_POST['new_D_OS_VA'];
		//newrx distance add
		$newDODADD = $_POST['new_D_OD_ADD'];
		$newDOSADD = $_POST['new_D_OS_ADD'];
		//newrx contact lense 
		$newCLMONOOD = $_POST['new_CL_MONO_OD'];
		$newCLPDOS = $_POST['new_CL_PD_OS'];
		//newrx reading
		$newRSEGHTOD = $_POST['new_R_SEGHT_OD'];
		$newRVERHTOS = $_POST['new_R_VERHT_OS'];
		//bp
		$bp = $_POST['bp'];
		//ishihara
		$ishiharaCYL = $_POST['ishihara_CYL'];
		$ishiharaAXIS = $_POST['ishihara_AXIS'];
		$ishiharaPD = $_POST['ishihara_PD'];

			// save to database
			// $user_id = random_num(20);
			$query = "insert into `patients`(`pat_id`, `pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_contact`, `pat_medhx`, `pat_date`) values ('','$lastname','$firstname','$middlename','$age','$sex','$address','$contactno','$medhx','$date')";
			$query1="INSERT INTO `patient_records`(`old_od`, `old_os`, `old_od_add`, `old_os_add`, `distance_od_sph`, `distance_os_sph`, `distance_od_cyl`, `distance_os_cyl`, `distance_od_axis`, `distance_os_axis`, `distance_od_va`, `distance_os_va`, `distance_od_add`, `distance_os_add`, `lense_od_sph`, `lendse_os_sph`, `lense_od_cyl`, `lense_os_cyl`, `lense_od_axis`, `lense_os_axis`, `lense_mono_od`, `lense_pd_os`, `reading_od_sph`, `reading_os_sph`, `reading_od_cyl`, `reading_os_cyl`, `reading_od_axis`, `reading_os_axis`, `reading_seght_od`, `reading_seght_os`, `bp`, `Isihara.cyl`, `Isihara.axis`, `Isihara.pd`, `contact`) VALUES ('$oldOD', '$oldOS', '$oldODVA', '$oldOSVA', '$newDODSPH', '$newDOSSPH', '$newDODCYL', '$newDODCYL', '$newDODAXIS', ' $newDOSAXIS', '$newDODVA','$newDOSVA', '$newDODADD', '$newDOSADD', '$newCLODSPH', '$newCLOSSPH', '$newCLODCYL', '$newCLOSCYL', '$newCLODAXIS', '$newCLOSAXIS', '$newCLMONOOD', '$newCLPDOS', '$newRODSPH', '$newRODSPH', '$newRODCYL', '$newROSCYL', '$newRODAXIS', '$newROSAXIS', '$newRSEGHTOD', '$newRVERHTOS', '$bp', '$ishiharaCYL', '$ishiharaAXIS', '$ishiharaPD', '$contactno') ";

			mysqli_query($con, $query);
			mysqli_query($con, $query1);
		}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NEW PATIENT | ADMIN</title>
<link rel="shorcut icon" type="img/png" href="logo.png">
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/style.css"/>
<script id="applicationScript" type="text/javascript" src="js/script.js"></script>
</head>
<body>

<div id="newpatients">
	<svg class="Rectangle_116">
		<rect id="Rectangle_116" rx="0" ry="0" x="0" y="0" width="399" height="980">
		</rect>
	</svg>
	<svg class="Rectangle_115">
		<rect id="Rectangle_115" rx="0" ry="0" x="0" y="0" width="1920" height="101">
		</rect>
	</svg>
	<a href="../Dashboard/dashboard.php">
	<img id="Untitled_design_12" src="Untitled_design_12.png" srcset="Untitled_design_12.png 1x, Untitled_design_12@2x.png 2x">
		
	</a>
	<a href="../Dashboard/dashboard.php">
	<div id="RNL_Vision_Care">
		<span>RNL Vision Care</span>
	</div>
	</a>
	<img id="Untitled_design_25" src="Untitled_design_25.png" srcset="Untitled_design_25.png 1x, Untitled_design_25@2x.png 2x">
		
	<svg class="Icon_ionic-md-notifications" viewBox="5.625 3.375 27.378 32.355">
		<path id="Icon_ionic-md-notifications" d="M 19.31385231018066 35.73046875 C 21.08554840087891 35.73046875 22.53470039367676 34.27454376220703 22.53470039367676 32.49492263793945 L 16.09292602539062 32.49492263793945 C 16.09292602539062 34.27454376220703 17.54215812683105 35.73046875 19.31385231018066 35.73046875 Z M 29.78185653686523 26.02382278442383 L 29.78185653686523 17.12607192993164 C 29.78185653686523 12.19186496734619 26.31950950622559 7.985809326171875 21.72954559326172 6.934023380279541 L 21.72954559326172 5.801660060882568 C 21.72954559326172 4.426397323608398 20.68289375305176 3.375000476837158 19.31385231018066 3.375000476837158 C 17.9448127746582 3.375000476837158 16.89815711975098 4.426397323608398 16.89815711975098 5.801660060882568 L 16.89815711975098 6.934023857116699 C 12.30811500549316 7.985809326171875 8.845848083496094 12.19186496734619 8.845848083496094 17.12607192993164 L 8.845848083496094 26.02382278442383 L 5.625000953674316 29.25937080383301 L 5.625000953674316 30.87714767456055 L 33.00270080566406 30.87714767456055 L 33.00270080566406 29.25937080383301 L 29.78185653686523 26.02382278442383 Z">
		</path>
	</svg>
	<svg class="Ellipse_8">
		<ellipse id="Ellipse_8" rx="23" ry="23" cx="23" cy="23">
		</ellipse>
	</svg>
	<a href="../Dashboard/dashboard.php">
	<div id="DASHBOARD">
		<span>DASHBOARD</span>
	</div>
	</a>
	<svg class="Icon_material-dashboard" viewBox="4.5 4.5 36.904 36.904">
		<path id="Icon_material-dashboard" d="M 4.500000476837158 25.00197982788086 L 20.90158271789551 25.00197982788086 L 20.90158271789551 4.500000476837158 L 4.500000476837158 4.500000476837158 L 4.500000476837158 25.00197982788086 Z M 4.500000476837158 41.40355682373047 L 20.90158271789551 41.40355682373047 L 20.90158271789551 29.10237312316895 L 4.500000476837158 29.10237312316895 L 4.500000476837158 41.40355682373047 Z M 25.00197982788086 41.40355682373047 L 41.40355682373047 41.40355682373047 L 41.40355682373047 20.90158271789551 L 25.00197982788086 20.90158271789551 L 25.00197982788086 41.40355682373047 Z M 25.00197982788086 4.500000476837158 L 25.00197982788086 16.80118560791016 L 41.40355682373047 16.80118560791016 L 41.40355682373047 4.500000476837158 L 25.00197982788086 4.500000476837158 Z">
		</path>
	</svg>
	<svg class="Icon_awesome-users" viewBox="0 2.25 36.904 36.904">
		<path id="Icon_awesome-users" d="M 5.535534381866455 18.06581115722656 C 7.570996284484863 18.06581115722656 9.225890159606934 15.70167636871338 9.225890159606934 12.79387378692627 C 9.225890159606934 9.88607120513916 7.570996284484863 7.521936416625977 5.535534381866455 7.521936416625977 C 3.500072717666626 7.521936416625977 1.845178246498108 9.88607120513916 1.845178246498108 12.79387378692627 C 1.845178246498108 15.70167636871338 3.500072240829468 18.06581115722656 5.535534381866455 18.06581115722656 Z M 31.3680305480957 18.06581115722656 C 33.40349197387695 18.06581115722656 35.05838394165039 15.70167636871338 35.05838394165039 12.79387378692627 C 35.05838394165039 9.88607120513916 33.40349197387695 7.521936416625977 31.3680305480957 7.521936416625977 C 29.33256340026855 7.521936416625977 27.67767143249512 9.88607120513916 27.67767143249512 12.79387378692627 C 27.67767143249512 15.70167636871338 29.33256340026855 18.06581115722656 31.3680305480957 18.06581115722656 Z M 33.21320724487305 20.70177841186523 L 29.52285194396973 20.70177841186523 C 28.50800132751465 20.70177841186523 27.5911808013916 21.28663635253906 26.92230224609375 22.23393630981445 C 29.2460765838623 24.05440139770508 30.89520645141602 27.34112548828125 31.25270652770996 31.24565887451172 L 35.05838394165039 31.24565887451172 C 36.07899856567383 31.24565887451172 36.90356063842773 30.06770706176758 36.90356063842773 28.60968780517578 L 36.90356063842773 25.97371673583984 C 36.90356063842773 23.06591796875 35.24867248535156 20.70177841186523 33.21320724487305 20.70177841186523 Z M 18.45178031921387 20.70177841186523 C 22.02104759216309 20.70177841186523 24.9099063873291 16.5748405456543 24.9099063873291 11.47588920593262 C 24.9099063873291 6.376937866210938 22.02104759216309 2.25 18.45178031921387 2.25 C 14.88251399993896 2.25 11.99365711212158 6.376937866210938 11.99365711212158 11.47588920593262 C 11.99365711212158 16.5748405456543 14.88251399993896 20.70177841186523 18.45178031921387 20.70177841186523 Z M 22.88020896911621 23.33774948120117 L 22.40161514282227 23.33774948120117 C 21.20224952697754 24.1614875793457 19.87026214599609 24.65573501586914 18.45178031921387 24.65573501586914 C 17.03330230712891 24.65573501586914 15.70707893371582 24.1614875793457 14.50194644927979 23.33774948120117 L 14.02335453033447 23.33774948120117 C 10.35606288909912 23.33774948120117 7.380712985992432 27.58824920654297 7.380712985992432 32.82723617553711 L 7.380712985992432 35.19960784912109 C 7.380712985992432 37.38251876831055 8.620441436767578 39.15356063842773 10.14848041534424 39.15356063842773 L 26.75508499145508 39.15356063842773 C 28.28312301635742 39.15356063842773 29.52285194396973 37.38251876831055 29.52285194396973 35.19960784912109 L 29.52285194396973 32.82723617553711 C 29.52285194396973 27.58824920654297 26.54750442504883 23.33774948120117 22.88020896911621 23.33774948120117 Z M 9.981260299682617 22.23393630981445 C 9.312384605407715 21.28663635253906 8.395560264587402 20.70177841186523 7.380712985992432 20.70177841186523 L 3.690356492996216 20.70177841186523 C 1.654894232749939 20.70177841186523 0 23.06591796875 0 25.97371673583984 L 0 28.60968780517578 C 0 30.06770706176758 0.8245639801025391 31.24565887451172 1.845178246498108 31.24565887451172 L 5.645092010498047 31.24565887451172 C 6.00836181640625 27.34112548828125 7.657488822937012 24.05440521240234 9.981260299682617 22.23393630981445 Z">
		</path>
	</svg>
	<a href="../Patient Records/patientrecords.php">
	<div id="PATIENT_RECORDS">
		<span>PATIENT RECORDS</span>
	</div>
	</a>
	
	<div id="NEW_PATIENT_">
		<span>NEW PATIENT </span>
	</div>
	<svg class="Line_17" viewBox="0 0 1376 1">
		<path id="Line_17" d="M 0 0 L 1376 0">
		</path>
	</svg>
	<a href="../POS/pos.php">
	<svg class="Rectangle_177">
		<rect id="Rectangle_177" rx="13" ry="13" x="0" y="0" width="179" height="30">
		</rect>
	</svg>
</a>
	<a href="../POS/pos.php">
	<div id="Point_of_Sale">
		<span>Point of Sale</span>
	</div>
	</a>
	<svg class="Icon_map-accounting" viewBox="3.6 0.72 17.59 21.108">
		<path id="Icon_map-accounting" d="M 19.43109512329102 0.7199999094009399 L 5.359010696411133 0.7199999094009399 C 4.391554832458496 0.7199999094009399 3.599999904632568 1.511554718017578 3.599999904632568 2.479010343551636 L 3.599999904632568 20.06911468505859 C 3.599999904632568 21.03656959533691 4.391554832458496 21.828125 5.359010696411133 21.828125 L 19.43109512329102 21.828125 C 20.39855194091797 21.828125 21.19010734558105 21.03656959533691 21.19010734558105 20.06911468505859 L 21.19010734558105 2.479010343551636 C 21.19010734558105 1.511554479598999 20.39855194091797 0.7199997901916504 19.43109512329102 0.7199997901916504 Z M 8.877031326293945 18.31010437011719 C 8.877031326293945 18.79383277893066 8.481254577636719 19.18961143493652 7.997526168823242 19.18961143493652 L 6.23851490020752 19.18961143493652 C 5.754787445068359 19.18961143493652 5.359009742736816 18.79383277893066 5.359009742736816 18.31010437011719 L 5.359009742736816 17.87035179138184 C 5.359009742736816 17.38662528991699 5.754787445068359 16.99084663391113 6.23851490020752 16.99084663391113 L 7.997526168823242 16.99084663391113 C 8.481253623962402 16.99084663391113 8.877031326293945 17.38662528991699 8.877031326293945 17.87035179138184 L 8.877031326293945 18.31010437011719 Z M 8.877031326293945 14.79208469390869 C 8.877031326293945 15.27581214904785 8.481254577636719 15.67158985137939 7.997526168823242 15.67158985137939 L 6.23851490020752 15.67158985137939 C 5.754787445068359 15.67158985137939 5.359009742736816 15.27581214904785 5.359009742736816 14.79208469390869 L 5.359009742736816 14.35233211517334 C 5.359009742736816 13.86860466003418 5.754787445068359 13.47282695770264 6.23851490020752 13.47282695770264 L 7.997526168823242 13.47282695770264 C 8.481253623962402 13.47282695770264 8.877031326293945 13.86860466003418 8.877031326293945 14.35233211517334 L 8.877031326293945 14.79208469390869 Z M 8.877031326293945 11.27406311035156 C 8.877031326293945 11.75779151916504 8.481254577636719 12.15356922149658 7.997526168823242 12.15356922149658 L 6.23851490020752 12.15356922149658 C 5.754787445068359 12.15356922149658 5.359009742736816 11.75779151916504 5.359009742736816 11.27406311035156 L 5.359009742736816 10.83431148529053 C 5.359009742736816 10.35058307647705 5.754787445068359 9.954805374145508 6.23851490020752 9.954805374145508 L 7.997526168823242 9.954805374145508 C 8.481253623962402 9.954805374145508 8.877031326293945 10.35058307647705 8.877031326293945 10.83431148529053 L 8.877031326293945 11.27406311035156 Z M 14.15406322479248 18.31010437011719 C 14.15406322479248 18.79383277893066 13.75828552246094 19.18961143493652 13.27455806732178 19.18961143493652 L 11.51554775238037 19.18961143493652 C 11.03182029724121 19.18961143493652 10.63604259490967 18.79383277893066 10.63604259490967 18.31010437011719 L 10.63604259490967 17.87035179138184 C 10.63604259490967 17.38662528991699 11.03181934356689 16.99084663391113 11.51554775238037 16.99084663391113 L 13.27455902099609 16.99084663391113 C 13.75828647613525 16.99084663391113 14.15406513214111 17.38662528991699 14.15406513214111 17.87035179138184 L 14.15406513214111 18.31010437011719 Z M 14.15406322479248 14.79208469390869 C 14.15406322479248 15.27581214904785 13.75828552246094 15.67158985137939 13.27455806732178 15.67158985137939 L 11.51554775238037 15.67158985137939 C 11.03182029724121 15.67158985137939 10.63604259490967 15.27581214904785 10.63604259490967 14.79208469390869 L 10.63604259490967 14.35233211517334 C 10.63604259490967 13.86860466003418 11.03181934356689 13.47282695770264 11.51554775238037 13.47282695770264 L 13.27455902099609 13.47282695770264 C 13.75828647613525 13.47282695770264 14.15406513214111 13.86860466003418 14.15406513214111 14.35233211517334 L 14.15406513214111 14.79208469390869 Z M 14.15406322479248 11.27406311035156 C 14.15406322479248 11.75779151916504 13.75828552246094 12.15356922149658 13.27455806732178 12.15356922149658 L 11.51554775238037 12.15356922149658 C 11.03182029724121 12.15356922149658 10.63604259490967 11.75779151916504 10.63604259490967 11.27406311035156 L 10.63604259490967 10.83431148529053 C 10.63604259490967 10.35058307647705 11.03181934356689 9.954805374145508 11.51554775238037 9.954805374145508 L 13.27455902099609 9.954805374145508 C 13.75828647613525 9.954805374145508 14.15406513214111 10.35058307647705 14.15406513214111 10.83431148529053 L 14.15406513214111 11.27406311035156 Z M 19.43109512329102 18.31010437011719 C 19.43109512329102 18.79383277893066 19.03531837463379 19.18961143493652 18.55158996582031 19.18961143493652 L 16.79257965087891 19.18961143493652 C 16.30885124206543 19.18961143493652 15.91307353973389 18.79383277893066 15.91307353973389 18.31010437011719 L 15.91307353973389 17.87035179138184 C 15.91307353973389 17.38662528991699 16.30885124206543 16.99084663391113 16.79257965087891 16.99084663391113 L 18.55159187316895 16.99084663391113 C 19.03531837463379 16.99084663391113 19.43109703063965 17.38662528991699 19.43109703063965 17.87035179138184 L 19.43109703063965 18.31010437011719 Z M 19.43109512329102 14.79208469390869 C 19.43109512329102 15.27581214904785 19.03531837463379 15.67158985137939 18.55158996582031 15.67158985137939 L 16.79257965087891 15.67158985137939 C 16.30885124206543 15.67158985137939 15.91307353973389 15.27581214904785 15.91307353973389 14.79208469390869 L 15.91307353973389 14.35233211517334 C 15.91307353973389 13.86860466003418 16.30885124206543 13.47282695770264 16.79257965087891 13.47282695770264 L 18.55159187316895 13.47282695770264 C 19.03531837463379 13.47282695770264 19.43109703063965 13.86860466003418 19.43109703063965 14.35233211517334 L 19.43109703063965 14.79208469390869 Z M 19.43109512329102 11.27406311035156 C 19.43109512329102 11.75779151916504 19.03531837463379 12.15356922149658 18.55158996582031 12.15356922149658 L 16.79257965087891 12.15356922149658 C 16.30885124206543 12.15356922149658 15.91307353973389 11.75779151916504 15.91307353973389 11.27406311035156 L 15.91307353973389 10.83431148529053 C 15.91307353973389 10.35058307647705 16.30885124206543 9.954805374145508 16.79257965087891 9.954805374145508 L 18.55159187316895 9.954805374145508 C 19.03531837463379 9.954805374145508 19.43109703063965 10.35058307647705 19.43109703063965 10.83431148529053 L 19.43109703063965 11.27406311035156 Z M 19.43109512329102 7.31628942489624 C 19.43109512329102 7.800017356872559 19.03531837463379 8.195795059204102 18.55158996582031 8.195795059204102 L 6.238515853881836 8.195795059204102 C 5.754788398742676 8.195795059204102 5.359010696411133 7.800017833709717 5.359010696411133 7.31628942489624 L 5.359010696411133 3.79826831817627 C 5.359010696411133 3.31454062461853 5.754788398742676 2.918763160705566 6.238515853881836 2.918763160705566 L 18.55158996582031 2.918763160705566 C 19.03531837463379 2.918763160705566 19.43109512329102 3.31454062461853 19.43109512329102 3.79826831817627 L 19.43109512329102 7.31628942489624 Z">
		</path>
	</svg>
	<style type="text/css">
	</style>
	<form method="post">
	<div id="LASTNAME__">
		<span>LASTNAME : </span><br>
		<input type="text" name="lastname" style="background-color: white; font-size: 20px; border:solid white 1px; width: 250px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>
	
	<div id="FIRST_NAME_">
		<span>FIRST NAME :</span><br>
		<input type="text" name="firstname" style="background-color: white; font-size: 20px; border:solid white 1px; width: 250px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>

	<div id="MIDDLE_NAME_">
		<span>MIDDLE NAME :</span><br>
		<input type="text" name="middlename" style="background-color: white; font-size: 20px; border:solid white 1px; width: 250px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>
	<
	<div id="AGE_">
		<span>AGE :</span><br>
		<input type="text" name="age" style="background-color: white; font-size: 20px; border:solid white 1px; width: 50px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	
	</div>
	<div id="SEX_">
		<span>SEX :</span><br>
			<select name ="sex" style="background-color: white; font-size: 16px; border:solid white 1px; border-radius: 10px; padding: 10px;">
			<option style="font-size: 12px;">Female</option>
			<option style="font-size: 12px;">Male</option>
		</select>
	</div>
	<div id="ADDRESS">
		<span>ADDRESS</span><br>
		<input type="text" name="address" style="background-color: white; font-size: 20px; border:solid white 1px; width: 450px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>
	</svg>
	<div id="CONTACT_NO">
		<span>CONTACT NO.</span><br>
		<input type="text" name="contactno" style="background-color: white; font-size: 20px; border:solid white 1px; width: 300px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>
	
	<svg class="Line_46" viewBox="0 0 1376 1">
		<path id="Line_46" d="M 0 0 L 1376 0">
		</path>
	</svg>
<style type="text/css">
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 900px;
  color: #000;
  background-color: #fff;
}

td, th {
  border: 1px solid #000;
  text-align: left;
  padding: 8px;
}
</style>
	<div id="MEDICAL_Hx">
		<span>MEDICAL Hx</span><br>
		<input type="text" name="medhx" style="background-color: white; font-size: 20px; border:solid white 1px; width: 450px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
		<br><br><br><br>
		<table >
			 <tr>
    <th rowspan="3" >OLD RX</th>
  </tr>
  <tr>
    <td >OD</td>
    <td style="width: 400px;padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 10px;width: 400px; height: 60px;" name="oldOD"></td>
    <td>VA</td>
    <td>ADD</td>
    <td style="width: 100px; padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 5px; width: 110px; height: 56px;" name="oldOD_VA"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td style="width: 200px;padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 10px;width: 400px; height: 60px;" name="oldOS"></td>
    <td>VA</td>
    <td>ADD</td>
    <td style="width: 100px; padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 5px; width: 110px; height: 56px;" name="oldOS_VA"></td>
  </tr>
		</table><br><br>

		<table>
			<tr>
			  <th colspan="3">&nbsp</th>
			  <th>SPH</th>
			  <th>CYL</th>
			  <th>AXIS</th>
			  <th>VA</th>
			  <th>ADD</th>
			</tr>
			<tr><td rowspan="6" style="width: 5px;">NEW<br> RX</td>
			  <td rowspan="2" style="width: 2px;">DISTANCE</td>
			  <td style="width: 2px;">OD</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newD_OD_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_AXIS"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_VA"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_ADD"></td>
			</tr>
			<tr>
			  <td>OS</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newD_OS_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_AXIS"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_VA"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_ADD"></td>
			</tr>
			<tr>
			   <td rowspan="2">CONTACT LENS<br> RX</td>
			  <td>OD</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_AXIS"></td>
			  <td>MONO</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;">OD:<input type="text" style="font-size: 20px; padding: 5px; width: 85px;height: 43px;" name="new_CL_MONO_OD"></td>
			</tr>
			<tr>
			  <td >OS</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newCL_OS_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OS_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OS_AXIS"></td>
			  <td>PD</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;">OS:<input type="text" style="font-size: 20px; padding: 5px; width: 86px;height: 43px;" name="new_CL_PD_OS"></td>
			</tr>
			<tr>
			   <td rowspan="2">READING<br> RX</td>
			  <td>OD</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newR_OD_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OD_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OD_AXIS"></td>
			  <td>SEG HT</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;">OD:<input type="text" style="font-size: 20px; padding: 5px; width: 85px;height: 43px;" name="new_R_SEGHT_OD"></td>
			</tr>
			<tr>
			  <td>OS</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newR_OS_SPH"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OS_CYL"></td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OS_AXIS"></td>
			  <td>VER HT</td>
			  <td style="width: 100px;height:45px;padding: 0; margin: 0;">OS:<input type="text" style="font-size: 20px; padding: 5px; width: 86px;height: 43px;" name="new_R_VERHT_OS"></td>
			</tr>
			<tr>
			<td>B.P.</td>
			<td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 170px; height: 45px;font-size: 20px; padding: 5px;" name="bp"></td>
			<td colspan="2">Ishihara</td>
			<td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_CYL"></td>
			<td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_AXIS"></td>
			<td>PD</td>
			<td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_PD"></td>
			</tr>
			
		  </table>
	</div>

	<div id="Group_36">
		
		<div id="ADD_PATIENT">
			<input type="submit" value="ADD PATIENT" name="btnadd" onclick="return confirm('Are you sure?')">
		</div>
	</div>
	<div id="DATE_">
		<span>DATE :</span><br>
		<input type="date" name="date" style="background-color: white; font-size: 20px; border:solid white 1px; width: 200px; border-radius: 10px; height:40px; padding: 10px; text-transform: lowercase;">
	</div>

</form>
	<style>
	#AUDIT_TRAIL {
	left: 473px;
	top: 127px;
	position: absolute;
	overflow: visible;
	width: 113px;
	white-space: nowrap;
	text-align: left;
	font-family: Segoe UI;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(255,255,255,1);
}
#LOGOUT1 {
	left: 118px;
	top: 395px;
	position: absolute;
	overflow: visible;
	width: 152px;
	white-space: nowrap;
	text-align: left;
	font-family: Segoe UI;
	font-style: normal;
	font-weight: normal;
	font-size: 27px;
	color: white;
}
</style>
	<!-- logout -->
	<a href="../logout.php" onclick="return confirm('Are you sure?')">
	<div id="LOGOUT1" >
		<span>LOG OUT</span>
	</div>
	</a>
</div>
</body>
</html>