

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_user` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_email` varchar(150) NOT NULL,
  `app_contact` varchar(150) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` varchar(255) NOT NULL,
  `app_purpose` varchar(255) NOT NULL,
  `app_remarks` varchar(200) NOT NULL,
  `client_id` varchar(500) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment VALUES("1","","Danver Omlang","danverjhon@gmail.com","09560492266","2021-11-10","","Appointment test","","");
INSERT INTO appointment VALUES("3","","Danver Omlang","danverjhon@gmail.com","09560492266","2021-12-27","","Appointment test 1","FINISH","");
INSERT INTO appointment VALUES("6","","Raymart Gahopo","raymart.gahopo@gmail.com","09075647938","2021-12-01","","Check Up","FINISH","");
INSERT INTO appointment VALUES("172","","Danver Omlang","danverjhon@gmail.com","09757298152","2022-03-11","12:02","Check ups","FINISH","");
INSERT INTO appointment VALUES("174","","Danver Omlang","danverjhon@gmail.com","0977879789","2022-03-23","01:52","Check ups","ONGOING","");
INSERT INTO appointment VALUES("175","","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-24","01:52","Check ups","ONGOING","");
INSERT INTO appointment VALUES("178","Danver","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-26","14:50","Check ups","ONGOING","");
INSERT INTO appointment VALUES("179","Danver","Mark Anthony Asa","edmar.ramos623@gmail.com","0977879789","2022-03-18","14:54","Hide","ONGOING","");
INSERT INTO appointment VALUES("180","Danver","Mark Anthony Asa","danverjhon@gmail.com","09757298152","0000-00-00","","Check ups","ONGOING","");
INSERT INTO appointment VALUES("185","jona12","Jona Sugabo","zjhyn16@gmail.com","09154919806","2022-03-12","14:00","Eye Check Up","ONGOING","");
INSERT INTO appointment VALUES("187","jojo","Jojo","zjhyn16@gmail.com","09154919806","2022-03-25","14:30","Inquire lg","ONGOING","");
INSERT INTO appointment VALUES("192","trish0200","Tricia Joy Altarejos","trishaaltarejos0200@gmail.com","09876654431","2022-03-28","09:30 AM","Request Certification","Approve","RNL-W22031");
INSERT INTO appointment VALUES("205","danver123","Dan","vernigo019@gmail.com","09757298152","2022-04-20","01:30 PM","Check Up","Approve","RNL-W22041");
INSERT INTO appointment VALUES("206","raymart","raymart","raymart.gahopo@gmail.com","09268040223","2022-04-27","01:00 PM","Check Up","Approve","RNL-W22030");



CREATE TABLE `appointment_history` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(255) DEFAULT NULL,
  `app_email` varchar(150) DEFAULT NULL,
  `app_contact` varchar(150) DEFAULT NULL,
  `app_date` varchar(255) DEFAULT NULL,
  `app_time` varchar(255) DEFAULT NULL,
  `app_purpose` varchar(255) DEFAULT NULL,
  `app_remarks` varchar(255) DEFAULT NULL,
  `app_DateTime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment_history VALUES("191","Trixy","trixyaltarejos04@gmail.com","09988876654","2022-03-25","8:00 AM to 12:00 NN","Check Up","DENIED","01-04-22 7:40 pm");
INSERT INTO appointment_history VALUES("194","Dan","vernigo019@gmail.com","09757298152","2022-04-08","02:00 PM","Adjust and Repair Glasses, Frames","DENIED","01-04-22 7:39 pm");
INSERT INTO appointment_history VALUES("195","Dan","vernigo019@gmail.com","09757298152","2022-04-27","09:30 AM","Check Up","DENIED","01-04-22 7:43 pm");
INSERT INTO appointment_history VALUES("196","Dan","vernigo019@gmail.com","09757298152","2022-04-21","08:00 AM","Check Up","DENIED","01-04-22 7:54 pm");
INSERT INTO appointment_history VALUES("197","Dan","vernigo019@gmail.com","09757298152","2022-04-20","01:00 PM","Check Up","DENIED","01-04-22 7:56 pm");
INSERT INTO appointment_history VALUES("198","dan","vernigo019@gmail.com","09757298152","2022-04-27","02:00 PM","Check Up","DENIED","01-04-22 7:56 pm");
INSERT INTO appointment_history VALUES("199","Dan","vernigo019@gmail.com","09757298152","2022-04-30","01:00 PM","Adjust and Repair Glasses, Frames","DENIED","01-04-22 8:04 pm");
INSERT INTO appointment_history VALUES("200","Dan","vernigo019@gmail.com","09757298152","2022-04-21","08:00 AM","Check Up","DENIED","01-04-22 8:05 pm");
INSERT INTO appointment_history VALUES("203","Dan","vernigo019@gmail.com","09757298152","2022-04-26","08:00 AM","Check Up","DENIED","02-04-22 10:13 pm");
INSERT INTO appointment_history VALUES("204","Dan","vernigo019@gmail.com","09757298152","2022-04-20","11:00 AM","Check Up","DENIED","03-04-22 2:58 pm");
INSERT INTO appointment_history VALUES("207","Thanos","danver.jhon1999@gmail.com","09560492266","2022-04-28","01:30 PM","Adjust and Repair Glasses, Frames","FINISH","25-04-22 4:51 pm");



CREATE TABLE `archive_patients` (
  `patient_no` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_contact` varchar(500) NOT NULL,
  `patient_email` varchar(500) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_medhx` varchar(1000) NOT NULL,
  `patient_bp` varchar(500) NOT NULL,
  `D_OD_SPH` varchar(500) NOT NULL,
  `D_OD_CYL` varchar(500) NOT NULL,
  `D_OD_AXIS` varchar(500) NOT NULL,
  `D_OD_VA` varchar(500) NOT NULL,
  `D_OD_ADD` varchar(500) NOT NULL,
  `D_OS_SPH` varchar(500) NOT NULL,
  `D_OS_CYL` varchar(500) NOT NULL,
  `D_OS_AXIS` varchar(500) NOT NULL,
  `D_OS_VA` varchar(500) NOT NULL,
  `D_OS_ADD` varchar(500) NOT NULL,
  `I_SPH` varchar(500) NOT NULL,
  `I_CYL` varchar(500) NOT NULL,
  `I_AXIS` varchar(500) NOT NULL,
  `I_PD` varchar(500) NOT NULL,
  `I_ADD` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `add_date` date NOT NULL,
  `recommendation` varchar(1000) NOT NULL,
  `appointment` date NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`patient_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `archive_products` (
  `pro_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateofarrival` date NOT NULL,
  `expdate` date NOT NULL,
  `sellingprice` int(255) NOT NULL,
  `origprice` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `image` text NOT NULL,
  `remarks` text NOT NULL,
  `pro_status` varchar(255) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO archive_products VALUES("42","FUWA CELLU ","FC2015T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501730_FUWA CELLU FC2015T-9S.jpg","SPECIFICATIONS

BRAND FUWA CELLU
P/No. FC2015T-9S 
MATERIAL Resin 
SIZE 51?18?140?41
","2");
INSERT INTO archive_products VALUES("38","OWNDAYS ","OR2041S-8S","Eyewear for Adults","0000-00-00","0000-00-00","1999","999","1000","","9","1647501295_OWNDAYS OR2041S-8S.jpg","SPECIFICATIONS			
BRAND: OWNDAYS
P/No. OR2041S-8S		
MATERIAL: Resin
SIZE: 49?19?142?39","2");
INSERT INTO archive_products VALUES("44","AIR FIT","AF1025G-9A ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","8","1647501885_Air Fit AF1025G-9A.jpg","SPECIFICATIONS
 
BRAND AIR FIT 
P/No. AF1025G-9A 
MATERIAL Titanium / Stainless
SIZE 50?20?145?46
","1");
INSERT INTO archive_products VALUES("46","JOHN DILLINGER","JD2017-T ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Marl Inc.","10","1647502080_John Dillinger JD2017-T.jpg","SPECIFICATIONS

BRAND JOHN DILLINGER 
P/No. JD2017-T
MATERIAL Metal / Resin 
SIZE 51?18?145?39 
","2");



CREATE TABLE `archive_supplier` (
  `supp_id` int(255) NOT NULL AUTO_INCREMENT,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `archive_users_account` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_middlename` varchar(255) NOT NULL,
  `users_contact` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_roles` varchar(250) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO archive_users_account VALUES("21","raymart123","c1c2b5b9d337b912c1ea7a84131e8ef3","Gahopo","Raymart","Tomagan","09075647938","raymart.gahopo@gmail.com","Admin");
INSERT INTO archive_users_account VALUES("28","kim","c1c2b5b9d337b912c1ea7a84131e8ef3","De Guzman","Kimberly May","Gahopo","09556344223","kim.berly@gmail.com","Sales Staff");
INSERT INTO archive_users_account VALUES("30","thanos","c1c2b5b9d337b912c1ea7a84131e8ef3","thanos","martian","ocampo","09560492266","thanos@gmail.com","Admin");



CREATE TABLE `client_inquiries` (
  `inquiries_id` int(200) NOT NULL AUTO_INCREMENT,
  `inquiries_name` varchar(100) NOT NULL,
  `inquiries_email` varchar(100) NOT NULL,
  `inquiries_subject` varchar(100) NOT NULL,
  `inquiries_message` varchar(1000) NOT NULL,
  `inquiries_backdate` datetime NOT NULL DEFAULT current_timestamp(),
  `inquiries_status` varchar(255) DEFAULT '2',
  PRIMARY KEY (`inquiries_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `client_logs` (
  `log_id` int(200) NOT NULL AUTO_INCREMENT,
  `log_userid` varchar(100) NOT NULL,
  `log_username` varchar(100) NOT NULL,
  `log_activity` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_time` time NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_logs VALUES("104","RNL-W22030","raymart","signup","0000-00-00","07:41:22");
INSERT INTO client_logs VALUES("105","","raymart","Login","0000-00-00","07:45:19");
INSERT INTO client_logs VALUES("106","","raymart","Login","0000-00-00","03:06:20");
INSERT INTO client_logs VALUES("107","RNL-W22041","danver123","signup","0000-00-00","01:37:09");
INSERT INTO client_logs VALUES("108","","danver123","Login","0000-00-00","01:38:12");
INSERT INTO client_logs VALUES("109","","danver123","Login","0000-00-00","01:43:20");
INSERT INTO client_logs VALUES("110","","danver123","Login","0000-00-00","01:54:07");
INSERT INTO client_logs VALUES("111","","danver123","Login","0000-00-00","03:48:54");
INSERT INTO client_logs VALUES("112","","raymart","Login","0000-00-00","09:08:43");
INSERT INTO client_logs VALUES("113","RNL-W22042","Thanos","signup","0000-00-00","09:22:05");
INSERT INTO client_logs VALUES("114","","Thanos","Login","0000-00-00","09:22:42");
INSERT INTO client_logs VALUES("115","","Thanos","Login","0000-00-00","10:43:46");
INSERT INTO client_logs VALUES("116","","Thanos","Login","0000-00-00","10:51:21");



CREATE TABLE `client_user` (
  `client_id` varchar(100) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_secquest` varchar(255) NOT NULL,
  `confirm` varchar(500) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user VALUES("RNL-W22030","raymart","d4084705d27847c3cb87d7864c0a6410","","");
INSERT INTO client_user VALUES("RNL-W22041","danver123","be3825a48f02297f61056fdba87627ca","","");
INSERT INTO client_user VALUES("RNL-W22042","Thanos","be3825a48f02297f61056fdba87627ca","","");



CREATE TABLE `client_user_info` (
  `client_info_id` int(255) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(1000) NOT NULL,
  `client_fname` varchar(100) NOT NULL,
  `client_lname` varchar(100) NOT NULL,
  `client_mname` varchar(100) NOT NULL,
  `client_bday` date NOT NULL,
  `client_age` int(100) NOT NULL,
  `client_contact` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  PRIMARY KEY (`client_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user_info VALUES("28","RNL-W22030","Raymart ","Umbao ","","1998-04-09","23","09268040223","raymart.gahopo@gmail.com","Quezon City");
INSERT INTO client_user_info VALUES("29","RNL-W22041","Dan ","Omlang ","","1999-11-03","22","09757298152","vernigo019@gmail.com","Quezon City");
INSERT INTO client_user_info VALUES("30","RNL-W22042","Thanos ","Paramecia ","Drake","2000-01-05","22","09560492266","danver.jhon1999@gmail.com","Quezon Blvd.");



CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_subj` varchar(20) NOT NULL,
  `feed_comments` text NOT NULL,
  `feed_rate` varchar(255) NOT NULL,
  `feedbackdate` datetime NOT NULL DEFAULT current_timestamp(),
  `client_id` varchar(255) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("17","Good Service","Thank you for accomodating us!","5","2022-03-28 01:50:40","raymart");
INSERT INTO feedback VALUES("18","Quality Product","Thank you for good and quality product!","5","2022-03-28 01:54:13","raymart");



CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

INSERT INTO loginlogs VALUES("97","::1","1651473675");
INSERT INTO loginlogs VALUES("98","::1","1651473690");
INSERT INTO loginlogs VALUES("99","::1","1651473703");
INSERT INTO loginlogs VALUES("100","::1","1651473738");
INSERT INTO loginlogs VALUES("101","::1","1651473747");
INSERT INTO loginlogs VALUES("102","::1","1651473765");



CREATE TABLE `password_reset_temp` (
  `email` varchar(255) NOT NULL,
  `key` varchar(2552) NOT NULL,
  `expDate` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `patient_distancerx` (
  `patient_no` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_contact` varchar(500) NOT NULL,
  `patient_email` varchar(500) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_medhx` varchar(1000) NOT NULL,
  `patient_bp` varchar(500) NOT NULL,
  `D_OD_SPH` varchar(500) NOT NULL,
  `D_OD_CYL` varchar(500) NOT NULL,
  `D_OD_AXIS` varchar(500) NOT NULL,
  `D_OD_VA` varchar(500) NOT NULL,
  `D_OD_ADD` varchar(500) NOT NULL,
  `D_OS_SPH` varchar(500) NOT NULL,
  `D_OS_CYL` varchar(500) NOT NULL,
  `D_OS_AXIS` varchar(500) NOT NULL,
  `D_OS_VA` varchar(500) NOT NULL,
  `D_OS_ADD` varchar(500) NOT NULL,
  `I_SPH` varchar(500) NOT NULL,
  `I_CYL` varchar(500) NOT NULL,
  `I_AXIS` varchar(500) NOT NULL,
  `I_PD` varchar(500) NOT NULL,
  `I_ADD` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `add_date` date NOT NULL,
  `recommendation` varchar(1000) NOT NULL,
  `appointment` date NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`patient_no`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO patient_distancerx VALUES("13","RNL-W22030","Distance","Omlang, Danver John ","1999-11-03","09560492266","danver.john.omlang@gmail.com","002 Lydia St. Brgy. Sta. Monica Novaliches.Q.C","","","","","","","","","","","","","","","","","","Dr. RobertVitalicia","2022-03-28","","0000-00-00","Walk-in");



CREATE TABLE `patient_history` (
  `patient_no` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(500) NOT NULL,
  `type` varchar(200) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_contact` varchar(500) NOT NULL,
  `patient_email` varchar(500) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_medhx` varchar(1000) NOT NULL,
  `patient_bp` varchar(500) NOT NULL,
  `D_OD_SPH` varchar(500) NOT NULL,
  `D_OD_CYL` varchar(500) NOT NULL,
  `D_OD_AXIS` varchar(500) NOT NULL,
  `D_OD_VA` varchar(500) NOT NULL,
  `D_OD_ADD` varchar(500) NOT NULL,
  `D_OS_SPH` varchar(500) NOT NULL,
  `D_OS_CYL` varchar(500) NOT NULL,
  `D_OS_AXIS` varchar(500) NOT NULL,
  `D_OS_VA` varchar(500) NOT NULL,
  `D_OS_ADD` varchar(500) NOT NULL,
  `I_SPH` varchar(500) NOT NULL,
  `I_CYL` varchar(500) NOT NULL,
  `I_AXIS` varchar(500) NOT NULL,
  `I_PD` varchar(500) NOT NULL,
  `I_ADD` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `date_up` date NOT NULL,
  `recommendation` varchar(1000) NOT NULL,
  `appointment` date NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`patient_no`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;




CREATE TABLE `product` (
  `pro_id` int(255) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateofarrival` date NOT NULL,
  `expdate` date NOT NULL,
  `sellingprice` int(255) NOT NULL,
  `origprice` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `image` text NOT NULL,
  `remarks` text NOT NULL,
  `pro_status` varchar(255) DEFAULT '2',
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("49","OWNDAYS ","SUN2064B-9S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Marl Inc.","10","1647502863_OWNDAYS SUN2064B-9S.jpg","SPECIFICATIONS 

BRAND OWNDAYS SUNGLASSES
P/No. SUN2064B-9S 
MATERIAL Plastic 
SIZE 58?18?142?46.8
","1");
INSERT INTO product VALUES("50","JUNNI","JU3005N-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502922_Junni JU3005N-0S.jpg","SPECIFICATIONS

BRAND Junni 
P/No.JU3005N-0S
MATERIAL Resin
SIZE48?16?130?35.8
","1");
INSERT INTO product VALUES("51","NICHE","NC1019B-9A ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503242_NICHE NC1019B-9A.jpg","SPECIFICATIONS

BRAND NICHE
P/No.NC1019B-9A
MATERIAL Metal
SIZE51?20?140?47
","1");
INSERT INTO product VALUES("52","OWNDAYS ","SUN2063B-9S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503788_OWNDAYS SUN2063B-9S.jpg","SPECIFICATIONS
 
BRAND OWNDAYS SUNGLASSES 
P/No. SUN2063B-9S 
MATERIAL Plastic / Stainless 
SIZE 52?20?140?42
","1");
INSERT INTO product VALUES("53","OWNDAYS ","SUN2083B-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503831_OWNDAYS SUN2083B-0S.jpg","SPECIFICATIONS 

BRAND OWNDAYS 
P/No. SUN2083B-0S 
MATERIAL Plastic / Stainless 
SIZE 52?20?140?48
","1");
INSERT INTO product VALUES("54","OWNDAYS ","SUN2082N-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503891_OWNDAYS SUN2082N-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. SUN2082N-0S
MATERIAL Resin
SIZE56?19?140?39.7
","1");
INSERT INTO product VALUES("55","OWNDAYS ","SUN2080B-0S","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503952_OWNDAYS SUN2080B-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. SUN2080B-0S
MATERIAL Plastic
SIZE54?19?145?43.6    
","1");
INSERT INTO product VALUES("56","NICHE","NC2008B-0S","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504007_NICHE NC2008B-0S.jpg","SPECIFICATIONS

BRAND+NICHE
P/No.NC2008B-0S
MATERIAL Plastic
SIZE52?19?140?43.5
","1");
INSERT INTO product VALUES("57","OWNDAYS ","SUN1058B-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504073_OWNDAYS SUN1058B-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No.SUN1058B-0S
MATERIAL Stainless
SIZE53?20?140?52
","1");
INSERT INTO product VALUES("58","OWNDAYS ","COLLECTION KMTY2005Y-1S GIYU TOMIOKA","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504221_COLLECTION KMTY2005Y-1S GIYU TOMIOKA.jpg","SPECIFICATIONS
Materials Lens: Acrylic (demo lens) Frame: Acetate, Alloy 
Size Lens Width: Approx. 53mm Nose Bridge Length: Approx. 17mm Temple Length: Approx. 140mm
","1");
INSERT INTO product VALUES("59","OWNDAYS ","COLLECTION KMTY2001Y-1S TANJIRO KAMADO","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504293_COLLECTION KMTY2001Y-1S TANJIRO KAMADO.jpg","SPECIFICATIONS
Materials Lens: Acrylic (demo lens) Frame: Acetate, Alloy 
Size Lens Width: Approx. 48mm Nose Bridge Length: Approx. 20mm Temple Length: Approx. 140mm
","1");
INSERT INTO product VALUES("60","OWNDAYS ","GDM1001T-9A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504382_GUNDAM X OWNDAYS GDM1001T-9A.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. GDM1001T-9A
MATERIAL Stainless
SIZE55?16?138?33
","1");
INSERT INTO product VALUES("61","OWNDAYS ","Graph Bell GB1026B-9A","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504437_Graph Belle GB1026B-9A.jpg","SPECIFICATIONS 

BRAND GRAPH BELLE 
P/No. GB1026B-9A
MATERIAL Titanium / Stainless 
SIZE 51?20?145?45
","1");
INSERT INTO product VALUES("62","OWNDAYS ","Graph Belle GB1021F-8A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504523_Graph Belle GB1021F-8A.jpg","SPECIFICATIONS 
BRAND GRAPH BELLE 
P/No. GB1021F-8A 
MATERIAL Resin / Stainless 
SIZE 50?18?142?41
","1");
INSERT INTO product VALUES("63","LILLYBELL","LB1010G-0S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504650_Lillybell LB1010G-0S.jpg","SPECIFICATIONS 

BRAND lillybell 
P/No. LB1010G-0S 
MATERIAL Plastic / Stainless 
SIZE 53?19?140?48.3
","1");
INSERT INTO product VALUES("64","OWNDAYS ","OR1038T-9S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504975_OWNDAYS OR1038T-9S.jpg","SPECIFICATIONS

BRANDOWNDAYS
P/No.OR1038T-9S
MATERIAL Metal
SIZE53?16?138?32
","1");
INSERT INTO product VALUES("65","OWNDAYS ","OR1035T-9S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505023_OWNDAYS OR1035T-9S.jpg","SPECIFICATIONS

BRANDOWNDAYS
P/No. OR1035T-9S
MATERIAL Metal
SIZE55?17?140?32
","1");
INSERT INTO product VALUES("66","NICHE","NC3014J-0S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505074_NICHE NC3014J-0S.jpg","SPECIFICATIONS

BRAND+NICHE
P/No.NC3014J-0S
MATERIAL Plastic
SIZE53?19?142?46.7
","1");
INSERT INTO product VALUES("67","JOHN DILLINGER","JD1009Y-8A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505132_John Dillinger JD1009Y-8A.jpg","SPECIFICATIONS 

BRAND JOHN DILLINGER 
P/No. JD1009Y-8A 
MATERIAL Titanium 
SIZE 49?20?145?42.7
","1");
INSERT INTO product VALUES("68","Ray-Ban Junior","RY1530/3821_48 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505225_Ray-Ban Junior RY1530-3821-48.jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Rectangle
Frame Color: Red
Lens Color: Clear
Frame Material: Acetate
Frame Style: Full-Rim
","1");
INSERT INTO product VALUES("69","Ray-Ban Junior","RY9065V/3743_48 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505407_Ray-Ban Junior RY9065V-3743-48.jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Round
Frame Color: Gloss Blue
Lens Color: Clear
Frame Material: Injected
Frame Style: Full-Rim
","1");
INSERT INTO product VALUES("70","Ray-Ban Junior","RY1052/4056_47 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505517_Ray-Ban Junior RY1052-4056-47 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Purple-Silver
Temple Color: Brown
Lens Color: Clear
Frame Material: Metal
Frame Style: Full-Rim
","1");
INSERT INTO product VALUES("71","Ray-Ban Junior","RY1562/3747_46 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505766_Ray-Ban Junior RY1562-3747-46 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Red
Temple Color: Grey
Lens Color: Clear
Frame Material:
Frame Style: Full-Rim
","1");
INSERT INTO product VALUES("72","Ray-Ban Junior","RY1531/3749_46 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505886_Ray-Ban Junior RY1531-3749-46 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Black
Temple Color: Dark Purple
Lens Color: Clear
Frame Material: Acetate
Frame Style: Full-Rim
","1");
INSERT INTO product VALUES("73","TONY MORGAN LONDON KIDS","TM SR1701/C3/43 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505964_Tony Morgan London Kids TM SR1701-C3-43 .jpg","Brand: Tony Morgan London Kids
Gender: Unisex 
Size: 43 Frame 
Colour: Brown 
FrameShape:  Oval 
Frame Style: Full Rim Frame
Material: Acetate Lens
Material: Customisable
","1");
INSERT INTO product VALUES("74","TONY MORGAN LONDON KIDS","TM SR1701/C5/43 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506195_Tony Morgan London Kids TM SR1701-C5-43 .jpg","DETAIL Brand: Tony Morgan London Kids 
Gender: Unisex 
Size: 43 Frame 
Colour: Blue 
Frame Shape:  Oval
Frame Style: Full Rim 
Frame Material: Acetate 
Lens Material: Customisable
","1");
INSERT INTO product VALUES("75","TONY MORGAN LONDON KIDS","TM A1663/C5 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506456_Tony Morgan London Kids TM A1663-C5 .jpg","DETAIL
Brand: Tony Morgan London Kids 
Gender: Unisex
Size: 48 
Frame Colour: Pink
Frame Shape:  Square 
Frame Style: Full Rim 
Frame Material: Acetate
Lens Material: Customisable
","1");
INSERT INTO product VALUES("76","Ray-Ban Junior","RY1566D/3712_50 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506548_Ray-Ban Junior (Kids) RY1566D-3712-50 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Colour: Blue-Red
Lens Colour: Clear 
Frame Shape: Oval 
Frame Style: Full Rim
Frame Material: Acetate
","1");
INSERT INTO product VALUES("77","Ray-Ban Junior","RY1053/4066_45 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506624_Ray-Ban Junior RY1053-406645 .jpg","DETAIL 
Brand: Ray-Ban Junior
Gender: Unisex
Frame Colour: Red 
Lens Colour: Clear 
Frame Shape: Round 
Frame Style: Full-Rim 
Frame Material: Meta
","1");
INSERT INTO product VALUES("78","","SQUARE FLORAL ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506785_Square Floral Eyeglasses.jpg","DESCRIPTION: 
Size: Small | 49 ?17-135
Color: Floral
Weight: Lightweight (15g)
Material: plastic
Shape: Square
Rim: Full-Rim
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("79","","LITTLE BRISTOL","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506850_Little Bristol.jpg","DESCRIPTION:
Size: Small | 50 ?17-135
Color: Black
Weight: 19g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("80","","SQUARE BLACK TORTOISE","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506897_Square Black Tortoise.jpg","DESCRIPTION:
Size: Medium | 50 ?19-135
Color: Black Tortoise
Weight: Lightweight (15g)
Material: acetate
Shape: Square
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("81","","LITTLE MORNING","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506954_Little Morning.jpg","Size: Small | 47 ?18-133
Color: Clear
Weight: Lightweight (10g)
Material: plastic
Shape: Round
Rim: Full-Rim
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("82","","LITTLE JOHN","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507001_Little John.jpg","DESCRIPTION:
Size: X-Small | 49 ?16-127
Color: Black
Weight: 21g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("83","","ST. MICHEL","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507046_St Michel.jpg","Size: Small | 48 ?19-140
Color: Rose Gold
Weight: Lightweight (15g)
Material: metal
Shape: Round
Rim: Full-Rim
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("84","","THINKER","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","7","1647507087_Thinker.jpg","Size: X-Small | 48 ?17-125
Color: Clear Pink
Weight: Lightweight (15g)
Material: acetate
Shape: Cat Eye
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("85","","BOTANIST","Eyewear for Kids","2021-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507144_Botanist.jpg","Size: Medium | 52 ?18-145
Color: Ivory Tortoise
Weight: 16g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("86","","ISABELLA","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507223_Isabella.jpg","Size: Large | 58 ?16-145
Color: Black Sunglasses
Weight: 23g
Material: acetate
Shape: Square
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("87","","HANOI","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507269_Hanoi.jpg","Size: Medium | 51 ?20-140
Color: Black Sunglasses
Weight: 25g
Material: acetate
Shape: Square
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("88","","LISA","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507340_Lisa.jpg","Size: Large | 54 ?21-148
Color: Black Sunglasses
Weight: 26g
Material: acetate-metal
Shape: Square
Other features: Spring hinge
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("89","","CORTEZ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507546_Cortez.jpg","Size: Large | 56 ?17-147
Color: Black Sunglasses
Weight: Lightweight (14g)
Material: plastic
Shape: Rectangle
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("90","","GRAYTON","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507588_Grayton.jpg","Size: Medium | 56 ?19-145
Color: Clear Blue Sunglasses
Weight: 24g
Material: acetate
Shape: Rectangle
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("91","","LOS ANGELES","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507634_Los Angeles.jpg","Size: Large | 52 ?21-145
Color: Clear Green Sunglasses
Weight: 32g
Material: acetate
Shape: Square
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("92","","CINEMATIC","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507680_Cinematic.jpg","Size: Large | 54 ?18-145
Color: Ivory Tortoise Sunglasses
Weight: 22g
Material: acetate
Shape: Cat Eye
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("93","","SAFARI","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507839_Safari.jpg","Size: Medium | 50 ?21-145
Color: Tortoise Sunglasses
Weight: 17g
Material: acetate
Shape: Round
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("94","","SUN ULTRAVIOLET","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507884_Sun Ultraviolet.jpg","Size: Large | 54 ?18-140
Color: Brown Striped Sunglasses
Weight: 16g
Material: acetate-metal
Shape: Square
Anti-Scratch lens coating
","1");
INSERT INTO product VALUES("95","","MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD","Accessories","2022-03-13","0000-00-00","100","50","50","Supplier","18","1647508460_Multi-Purpose Chain 22-inches Metal Gold.jpg","Lens Material: 
Balafilcon A (Silicone Hydrogel)
Product Category:
Chain
Length:
27 inches
Box Content:
Multi-Purpose Chain
Material: Metal
","2");
INSERT INTO product VALUES("96","","UV SANITIZER","Accessories","2022-03-19","0000-00-00","800","500","300","Supplier","-1","1647508909_UV Sanitizer.jpg","With the safe start up mechanism and a preset-timer, the UV-C sanitizer only operates when the box is closed, keeping your eyes safe. The box easily accommodates most daily accessories like smartphones, rings and jewelries, face masks and small apparel, personal care tools, money, spectacles/sunglasses or small accessories like earphones.","1");
INSERT INTO product VALUES("97","TITAN","LENS SOLUTION","Accessories","2021-03-03","2023-03-03","300","200","100","Supplier","18","1647509029_Lens Solution.jpg","Sku: LS06A
Brand: Titan
Lens Material: Balafilcon A (Silicone Hydrogel)
Product Category: Lens Cleaning Solution
Size: 50 ML
","2");
INSERT INTO product VALUES("98","TITAN","UNIVERSAL ANTI FOG CLOTH","Accessories","2022-03-03","2023-03-03","200","100","100","Supplier","9","1647509108_Universal Anti Fog Cloth.jpg","Universal Fog-Free cloth can be applied with any lens coating (except Anti Fog Lenses) to activate the anti-fog property of the lens","1");
INSERT INTO product VALUES("99","BAUSCH & LOMB RENU","Advance Solution","Accessories","2022-03-03","2023-03-03","400","200","200","Supplier","5","1647509224_Renu Advance Solution.jpg","Bausch & Lomb Renu Advance Solution 355 ml","1");
INSERT INTO product VALUES("100","BAUSCH & LOMB RENU","Biotrue","Accessories","2022-03-03","2023-03-03","400","200","200","Supplier","5","1647509282_Biotrue.jpg","Bausch & Lomb Biotrue 60ml","1");
INSERT INTO product VALUES("101","ALCON","Opti-Free Contact Lens Solution ","Accessories","2022-03-03","2023-02-03","300","200","100","Supplier","5","1647509348_Opti-Fresh Replenish.jpg","Alcon Opti-Free Contact Lens Solution 120 ml","1");
INSERT INTO product VALUES("102","ALCON","Opti-Free Puremoist","Accessories","2022-03-03","2024-06-03","250","150","100","Supplier","5","1647509423_Opti-Free Puremoist.jpg","Opti Free Puremoist 4 OZ 120ml","1");
INSERT INTO product VALUES("103","","Clip-Ons","Accessories","2022-04-03","0000-00-00","320","200","120","Supplier","5","1647509504_Clip-Ons.jpg","Rim: Rimless
Front Shape: Rectangle
Material: Polycarbonate
Lens Height: 40 mm

Lens Width: 58 mm
Bridge Width: 15 mm
Bridge Color: Black
Size: Large
Lens Color: Black
","1");
INSERT INTO product VALUES("104","COOPER VISION","My Day Daily Disposable","Contact Lenses","2022-03-17","2022-04-17","800","500","300","Supplier","4","1647509704_MyDay Daily Disposable.jpg","Type: Daily disposable lenses.
Packaging: 30 Lenses per box.
Content: Provides the eyes with 54% of available water content.
Manufacturer: CooperVision
Benefits: Created with Smart Silicone, which helps maximize oxygen delivery to the cornea for superior comfort.
","1");
INSERT INTO product VALUES("105","AIR OPTIX","Hydraglyde","Contact Lenses","2022-04-03","2022-05-03","800","500","300","Supplier","-10","1647509913_Air Optix Hydraglyde.jpg","AIR OPTIX HYDRAGLYDE
Type: Monthly disposable
Packaging: 6 lenses per box
Content: 67% lotrafilcon B & 33% water
Manufacturer: AIR OPTIX
","1");
INSERT INTO product VALUES("106","BAUSCH & LOMB RENU","SofLens 59","Contact Lenses","2022-04-03","2022-05-03","800","500","300","Supplier","1","1647509984_Softlens 59.jpg","SOFTLENS 59
Type: Monthly disposable
Packaging: 6 lenses per box
Content: 41% Polymer (hilafilcon A) & 59% water
Manufacturer: Bausch & Lomb
","1");
INSERT INTO product VALUES("107","BURBERRY","BE1313Q ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510343_BE1313Q.jpg","Frame Lens Width: 53 millimeter 
Frame Bridge: 16 millimeter 
Frame Temple: 140 millimeter 
Gender: Women 
Frame Material: Metal 
Frame Shape: Square 
Color:Black Light Gold 
Brand: Burberry 
Price: $174.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("108","DOLCE & GABBANA","DG1323 ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510403_DG1323 .jpg","Frame Lens Width: 57 millimeter 
Frame Bridge: 16 millimeter 
Frame Temple: 140 millimeter 
Gender: Women 
Frame Material: Metal 
Frame Shape: Square 
Color: Pink Gold Bordeaux 
Brand: Dolce & Gabbana 
Price: $230.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("109","GUCCI","GG0329O ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510450_GG0329O .jpg","Frame Lens Width: 53 millimeter 
Frame Bridge: 18 millimeter 
Frame Temple: 145 millimeter 
Gender: Women 
Frame Material: Acetate 
Frame Shape: Round 
Color: Shiny Blue 
Brand: Gucci 
Price: $230.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("110","HERITAGE","HEOF0008 ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510496_HEOF0008 .jpg","Frame Lens Width: 51 millimeter 
Frame Bridge: 21 millimeter 
Frame Temple: 140 millimeter 
Gender: Women 
Frame Material: Stainless Steel 
Frame Shape: Round 
Color: Havana 
Brand: Heritage 
Price: $97.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold, Platinum,  Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("111","HUGO BOSS","B0976 ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510632_B0976 .jpg","Frame Lens Width: 60 millimeter 
Frame Bridge: 17 millimeter 
Frame Temple: 150 millimeter 
Gender: Men 
Frame Material: Metal 
Frame Shape: Rectangle 
Color: Matte Black 
Brand: Hugo Boss 
Price: $188.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("112","KATE SPADE","Sharla ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510712_Sharla .jpg","Frame Lens Width: 53 millimeter 
Frame Bridge: 14 millimeter 
Frame Temple:135 millimeter 
Gender: Women 
Frame Material: Acetate 
Frame Shape: Rectangle 
Color: Blue Tortoise Fade 
Brand: Kate Spade 
Price: $146.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("113","MARC JACOBS","Marc 391 ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647510771_MARC 391 .jpg","Frame Lens Width: 58 millimeter 
Frame Bridge: 16 millimeter 
Frame Temple: 145 millimeter 
Gender: Men 
Frame Material: Stainless Steel 
Frame Shape: Square 
Color: Ruthenium 
Brand: Marc Jacobs 
Price: $146.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("114","OAKLEY","OX8163 Centerboard ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","5","1647510841_OX8163 Centerboard .jpg","Frame Lens Width: 55 millimeter 
Frame Bridge: 17 millimeter 
Frame Temple: 141 millimeter 
Gender: Men 
Frame Material: Plastic 
Frame Shape: Square 
Color: Polished Clear 
Brand: Oakley 
Price: $209 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("115","PRADE","PS 08GV ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","5","1647510889_PS 08GV .jpg","Frame Lens Width: 54 millimeter 
Frame Bridge: 18 millimeter 
Frame Temple: 145 millimeter 
Gender: Men 
Frame Material: Plastic 
Frame Shape: Square 
Color: Black Rubber 
Brand: Prada 
Price: $230.30 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("116","Ray-Ban","RX6285 ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","5","1647510940_RX6285 .jpg","Frame Lens Width: 53 millimeter 
Frame Bridge: 18 millimeter 
Frame Temple: 140 millimeter 
Gender: Men 
Frame Material: Metal 
Frame Shape: Rectangle 
Color: Gunmetal 
Brand: Ray-Ban 
Price: $209 
Prescription Type: Single Vision, Progressive, Non-Prescription Select Your Lenses: Standard, Bronze, Silver, Gold,  Platinum,Diamond 
Lens Adds On: None, Photochromic Gray,Photochromic Brown,  Photochromic Dark Gray, Photochromic Dark Brown, Photochromic  Mirror Gray, Photochromic Mirror Brown 
Pair Protect: No pair protect, pair protect 
Enter Prescription: Right (OD) {Sphere, Cylinder, Axis} Left (OD)  {Sphere, Cylinder, Axis} PD 
","1");
INSERT INTO product VALUES("117","ACUVUE","OASYS with Transitions ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","6","1647511102_OASYS with Transitions .jpg","Handling Tint: No 
Replacement Frequency: Biweekly lenses Diameter: 14 millimeter 
Material: Senofilcon A 
Material Type: Silicone Hydrogel Type: Soft 
Orientation Marking Available: Yes Oxygen Permeability (Dk/t): 121 Water Content: 38% 
Quantity: 25 
Producer: Johnson & Johnson 
Price: $184.99 
Brand: ACUVUE
","1");
INSERT INTO product VALUES("118","AIR OPTIX","HydraGlyde® Multifocal ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511160_Air Optix® plus  HydraGlyde Multifocal.jpg","Handling Tint: Yes 
Replacement Frequency: Monthly lenses 
Diameter: 14.2 millimeter 
Material: Lotrafilcon B 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 138 
Water Content: 33% 
Quantity: 6 
Producer: Alcon 
Price: $80.49 
Brand: Air Optix
","1");
INSERT INTO product VALUES("119","BIOFINITY","XR Toric","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","2","1647511219_Biofinity® XR toric .jpg","Handling Tint: Yes 
Replacement Frequency: Monthly lenses 
Diameter: 14.5 millimeter 
Material: Comfilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 116 
Water Content: 48% 
Quantity: 6 
Producer: CooperVision 
Price: $124.80 
Brand: Biofinity
","1");
INSERT INTO product VALUES("120","CLARITI","1day Multifocal 90 Pack ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511281_Clariti 1day Multifocal 90 Pack .jpg","Handling Tint: no 
Replacement Frequency: Daily lenses 
Diameter: 14.1 millimeter 
Material: Somofilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 86 
Water Content: 56% 
Quantity: 90 
Producer: CooperVision 
Price: $87.49 
Brand: clariti
","1");
INSERT INTO product VALUES("121","DAILIES","TOTAL 1® Multifocal ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511326_DAILIES TOTAL 1® Multifocal .jpg","Handling Tint: Yes 
Replacement Frequency: Daily lenses 
Diameter: 14 millimeter 
Material: Delefilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 156 
Water Content: 69% 
Quantity: 90 
Producer: Alcon 
Price: $115.99 
Brand: DAILIES
","1");
INSERT INTO product VALUES("122","iWear ","Harmony 90pk ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511372_iWear Harmony 90pk .jpg","Handling Tint: No 
Replacement Frequency: Daily lenses 
Diameter: 14.2 millimeter 
Material: Stenfilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 100 Dk/t (at -3.00D) Water Content: 54% 
Quantity: 90 
Producer: CooperVision 
Price: $79.99 
Brand: iWear
","1");
INSERT INTO product VALUES("123","MY DAY","Daily Lenses","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511507_MyDay®.jpg","Handling Tint: Yes 
Replacement Frequency: Daily lenses 
Diameter: 14.2 millimeter 
Material: Stenfilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 100 
Water Content: 54% 
Quantity: 90 
Producer: CooperVision 
Price: $66.66 
Brand: MyDay
","1");
INSERT INTO product VALUES("124","BIOMEDICS","55 Premier 6 Pack ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511576_Biomedics 55 Premier 6 Pack .jpg","Handling Tint: Yes 
Replacement Frequency: Biweekly lenses 
Diameter: 14.2 millimeter 
Material: Ocufilcon D 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 28.1 
Water Content: 55% 
Quantity: 6 
Producer 
CooperVision 
Price: $28.49 
Brand: Biomedics
","1");
INSERT INTO product VALUES("125","BAUSCH & LOMB ULTRA","Ultra Multifocal For Astigmatism  6pk ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511688_Ultra Multifocal For Astigmatism  6pk .jpg","Handling Tint: yes 
Replacement Frequency: Monthly lenses 
Diameter: 14.5 millimeter 
Material: Samfilcon A 
Material Type: Silicone Hydrogel 
Type: Soft 
Orientation Marking Available: No 
Oxygen Permeability (Dk/t): 32 
Water Content: 46% 
Quantity: 6 
Producer: Bausch & Lomb 
Price: $139.99 
Brand: Bausch + Lomb ULTRA 
","1");
INSERT INTO product VALUES("126","MIRU","Miru 1 Month","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511774_Miru 1month  .jpg","Handling Tint: No 
Replacement Frequency: Monthly lenses Diameter: 14 millimeter 
Material: Asmofilcon A 
Material Type: Silicone Hydrogel Type: Soft 
Orientation Marking Available: No Oxygen Permeability (Dk/t): 161 Water Content: 40% 
Quantity: 6 
Producer: Menicon 
Price: $49.99 
Brand: Miru
","1");
INSERT INTO product VALUES("127","AIR OPTIX","Night & Day Aqua","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511994_IR OPTIX NIGHT & DAY AQUA.jpg","AIR OPTIX NIGHT & DAY AQUA Contact Lenses 
clear vision and comfortable contact lens wear at any hour of the day.
","1");
INSERT INTO product VALUES("128","CIBA VISION","Fresh Look Colorblends","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512137_Freshlook Colorblends .jpg","Freshlook Colorblends spherical contact lenses are  indicated for the correction of near- and farsightedness  in non-diseased eyes that may have a refractive  astigmatism of up to 2.0 diopters.","1");
INSERT INTO product VALUES("129","CIBA VISION","Dailies Total Breatable One-Day Contact Lenses","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512231_Eye-bar Optometrists & Opticians .jpg","Eye-bar Optometrists & Opticians carries a number of 1-Day  disposable contact lenses brands and can offer same day  contact lens fitting and dispensing in most prescriptions","1");
INSERT INTO product VALUES("130","MAXI EYES","2 Tone Natural Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512369_Maxi Eyes 2 Tone Natural Series .jpg","Maxi Eyes Double Tone contact lenses make your eyes bigger  and give them a vibrant colorful look with natural brilliance. The 3 layer system of this lens comes with an outer circle for  bigger eyes, a highlight layer for beautiful colors and a comfort  layer for a pleasant wearing experience. 
Boost your look with Maxi Eyes Colors Double Tone Color  Contact Lenses. 
Material: HEMA + MAA Copolymer 
Type: Brown, Grey, Maroon 
DK: 20 
Water Content: 55% 
Base Curve: 8.6mm 
Diameter: 14.0mm 
Quantity per Box: 2 Lenses/Box
","1");
INSERT INTO product VALUES("131","GEOLICA","Color Lady Series","Contact Lenses","2022-03-17","2022-04-17","800","500","300","Supplier","5","1647512548_Geolica Color Lady Series .jpg","Geolica Color Lady Series (Light Brown, Pearl Gray) 
Geolica Color Lady generate an impressive look with  attractive colors. This GEO colored cosmetic lens naturally  change your eye color and give a good impression to anyone. 
Life Span : 3 months 
B.C : 8.6 mm 
Diameter : 14.20 mm 
Water Content : 42%
","1");
INSERT INTO product VALUES("132","AIR OPTIX","Color Series Power","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512618_Air Optix Color Series Power .jpg","Air Optix Color Series Power (Grey, Brown, Pure Hazel, Honey) ","1");
INSERT INTO product VALUES("133","ALCON","Fresh Look Colorblends Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513235_FreshLook COLORBLENDS Series .jpg","FreshLook COLORBLENDS Series (Grey, Brown, Pure Hazel,  Green)","1");
INSERT INTO product VALUES("134","MAXI","Secret Garden Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513327_Maxi Eyes Secret Garden Series .jpg","Maxi Eyes Secret Garden contact lens that enhance your  natural eye color that gives you subtle to vibrant look, perfect  from day-to-night. They are available in Swan Lake, Nymph  Fairy Blue, Pixie, Glacial, Stardust, & Caspian Rain. These  lenses are designed to be worn for one month or up to 30  times over a longer period for occasional wear, as long as they  are properly cleaned and handled. 
Material: HEMA Copolymer 
DK: 9.5 x 10-11 cm2 
Water Content: 38% 
Base Curve: 8.6mm 
Diameter: 14.2 mm 
Lens Color: Swan Lake, Nymph Fairy Blue, Pixie, Glacia l, Stardust, Caspian Rain 
Usage: Monthly Disposable Lens 
Quantity per Box: 2 Lenses/Box
","1");
INSERT INTO product VALUES("135","ALCON","Fresh Look One-Day","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513435_FreshLook One-Day .jpg","FreshLook One-Day 
Wearing Type : Daily Disposables 
Power Range : 0.00 to -6.00 in .25 D steps and -6.00 to -8.00  in .50 D steps 
Base Curve(s) : 8.6mm 
Diameter(s) : 13.8mm 
Lens Material : Nelfilcon A
","1");
INSERT INTO product VALUES("151","","Check-up","Services","0000-00-00","0000-00-00","350","350","0","","-3","","","2");
INSERT INTO product VALUES("152","","Adjusting Frame","Services","0000-00-00","0000-00-00","300","300","0","","0","","","2");
INSERT INTO product VALUES("153","","Repairing Frame","Services","0000-00-00","0000-00-00","400","400","0","","-1","","","2");



CREATE TABLE `sales` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(500) NOT NULL,
  `amount` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `due_date` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sales_order` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(500) NOT NULL,
  `product` varchar(500) NOT NULL,
  `qty` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `model` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `price` int(255) NOT NULL,
  `date` date NOT NULL,
  `discount` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `supplier` (
  `supp_id` int(255) NOT NULL AUTO_INCREMENT,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

INSERT INTO supplier VALUES("21","EO Optical Supplies","Arthur Marvin Hernandez","09560334423","a.marvinhernandez@gmail.com","EO Optical Services");



CREATE TABLE `users_account` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_middlename` varchar(255) NOT NULL,
  `users_contact` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_roles` varchar(250) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO users_account VALUES("25","robert123","c1c2b5b9d337b912c1ea7a84131e8ef3","Vitalicia","Robert","Casero","09123456789","robert.vitalicia@gmail.com","Doctor");
INSERT INTO users_account VALUES("26","gail123","c1c2b5b9d337b912c1ea7a84131e8ef3","Delima ","Gail ","Umbao ","09123456789","gail.delima@gmail.com ","Sales Staff");
INSERT INTO users_account VALUES("27","marl123","c1c2b5b9d337b912c1ea7a84131e8ef3","Umbao     ","Marl     ","Vitalicia     ","09123456789","marl.umbao@gmail.com ","Inventory Clerk");
INSERT INTO users_account VALUES("29","raymart123","c1c2b5b9d337b912c1ea7a84131e8ef3","Gahopo","Raymart","Tomagan","09075647938","raymart.gahopo@gmail.com","Admin");



CREATE TABLE `users_logs` (
  `logs_id` int(11) NOT NULL AUTO_INCREMENT,
  `logs_username` varchar(255) NOT NULL,
  `logs_activity` varchar(255) NOT NULL,
  `logs_datentime` datetime NOT NULL,
  `logs_roles` varchar(255) NOT NULL,
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=latin1;

INSERT INTO users_logs VALUES("259","raymart123","Login","2022-03-28 01:39:08","Admin");
INSERT INTO users_logs VALUES("260","raymart123","Logout","2022-03-28 01:40:26","Admin");
INSERT INTO users_logs VALUES("261","raymart123","Added User","2022-03-28 06:18:01","Admin");
INSERT INTO users_logs VALUES("262","raymart123","Added Patient","2022-03-28 06:22:05","Admin");
INSERT INTO users_logs VALUES("263","raymart123","Added Supplier","2022-03-28 06:24:00","Admin");
INSERT INTO users_logs VALUES("264","raymart123","Logout","2022-03-28 06:24:49","Admin");
INSERT INTO users_logs VALUES("265","raymart123","Login","2022-03-28 08:54:40","Admin");
INSERT INTO users_logs VALUES("266","raymart123","Login","2022-03-28 08:58:26","Admin");
INSERT INTO users_logs VALUES("267","raymart123","Login","2022-03-28 09:15:42","Admin");
INSERT INTO users_logs VALUES("268","raymart123","Login","2022-03-28 10:52:41","Admin");
INSERT INTO users_logs VALUES("269","raymart123","Login","2022-04-01 07:32:54","Admin");
INSERT INTO users_logs VALUES("270","raymart123","Logout","2022-04-01 07:35:09","Admin");
INSERT INTO users_logs VALUES("271","raymart123","Login","2022-04-01 07:39:16","Admin");
INSERT INTO users_logs VALUES("272","raymart123","Login","2022-04-01 07:43:36","Admin");
INSERT INTO users_logs VALUES("273","raymart123","Login","2022-04-02 09:48:36","Admin");
INSERT INTO users_logs VALUES("274","raymart123","Logout","2022-04-03 02:57:33","Admin");
INSERT INTO users_logs VALUES("275","raymart123","Login","2022-04-03 02:57:52","Admin");
INSERT INTO users_logs VALUES("276","raymart123","Login","2022-04-11 04:15:23","Admin");
INSERT INTO users_logs VALUES("277","raymart123","Login","2022-04-25 03:11:37","Admin");
INSERT INTO users_logs VALUES("278","raymart123","Logout","2022-04-25 03:20:31","Admin");
INSERT INTO users_logs VALUES("279","raymart123","Login","2022-04-25 03:23:55","Admin");
INSERT INTO users_logs VALUES("280","raymart123","Login","2022-04-25 04:43:03","Admin");
INSERT INTO users_logs VALUES("281","raymart123","Login","2022-04-25 04:44:11","Admin");
INSERT INTO users_logs VALUES("282","raymart123","Login","2022-05-02 11:44:39","Admin");
INSERT INTO users_logs VALUES("283","raymart123","Login","2022-05-02 11:47:41","Admin");
INSERT INTO users_logs VALUES("284","raymart123","Login","2022-05-02 02:19:16","Admin");
INSERT INTO users_logs VALUES("285","raymart123","Logout","2022-05-02 02:22:52","Admin");
INSERT INTO users_logs VALUES("286","raymart123","Login","2022-05-02 03:14:46","Admin");
INSERT INTO users_logs VALUES("287","raymart123","Added User","2022-05-02 03:15:26","Admin");

