

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
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment VALUES("178","Danver","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-26","14:50","Check ups","ONGOING");
INSERT INTO appointment VALUES("179","Danver","Mark Anthony Asa","edmar.ramos623@gmail.com","0977879789","2022-03-18","14:54","Hide","ONGOING");
INSERT INTO appointment VALUES("180","Danver","Mark Anthony Asa","danverjhon@gmail.com","09757298152","0000-00-00","","Check ups","ONGOING");
INSERT INTO appointment VALUES("195","trebor123","Raymart Gahopo","robert@gmail.com","09123456789","2022-03-24","8:00 AM to 12:00 NN","Check Up","PENDING");
INSERT INTO appointment VALUES("196","trisha123","q","trisha@gmail.com","09123456789","2022-04-06","8:00 AM to 12:00 NN","Vision Therapy","PENDING");
INSERT INTO appointment VALUES("197","trebor123","123123213","robert@gmail.com","09123456789","2022-04-01","8:00 AM to 12:00 NN","Check Up","PENDING");
INSERT INTO appointment VALUES("198","trebor123","ROBERT","robert@gmail.com","09123456789","2022-03-25","8:00 AM to 12:00 NN","Check Up","PENDING");



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

INSERT INTO appointment_history VALUES("1","Danver Omlang","danverjhon@gmail.com","09560492266","2021-11-10","00:00:00","Appointment test","FINISH","13-03-22 10:05:51");
INSERT INTO appointment_history VALUES("3","Danver Omlang","danverjhon@gmail.com","09560492266","2021-12-27","00:00:00","Appointment test 1","FINISH","13-03-22 10:37 pm");
INSERT INTO appointment_history VALUES("28","Marl Umbao","marl.umbao@gmail.com","09123456789","2021-12-16","","Check Up","FINISH","13-03-22 11:23 pm");
INSERT INTO appointment_history VALUES("171","sample","sample@gmail.com","09123455678","2021-12-18","","tulog","DENIED","13-03-22 11:24 pm");
INSERT INTO appointment_history VALUES("173","Mark Anthony Asa","edmar.ramos623@gmail.com","0977879789","2022-03-25","13:51","Check ups","DENIED","13-03-22 11:25 pm");
INSERT INTO appointment_history VALUES("181","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-26","22:37","Check ups","DENIED","13-03-22 11:50 pm");
INSERT INTO appointment_history VALUES("182","Danver Omlang","danverjhon@gmail.com","09757298152","2022-03-26","22:36","Check ups","DENIED","13-03-22 11:50 pm");
INSERT INTO appointment_history VALUES("183","Danver Omlang","edmar.ramos623@gmail.com","09757298152","2022-03-11","22:35","Check ups","DENIED","14-03-22 12:11 am");
INSERT INTO appointment_history VALUES("184","Raymart","raymart.gahopo@gmail.com","09075647938","2022-03-11","10:55","Check Up","DENIED","14-03-22 9:07 am");
INSERT INTO appointment_history VALUES("186","Jojo","zjhyn16@gmail.com","09154919806","2022-03-25","14:30","Inquire lg","DENIED","15-03-22 10:10 pm");
INSERT INTO appointment_history VALUES("189","Raymart Gahopo","raymart.gahopo@gmail.com","09075647938","2022-03-15","12:00","Dine in","DENIED","15-03-22 10:28 pm");



CREATE TABLE `client_inquiries` (
  `inquiries_id` int(200) NOT NULL AUTO_INCREMENT,
  `inquiries_name` varchar(100) NOT NULL,
  `inquiries_email` varchar(100) NOT NULL,
  `inquiries_subject` varchar(100) NOT NULL,
  `inquiries_message` varchar(1000) NOT NULL,
  `inquiries_backdate` datetime NOT NULL DEFAULT current_timestamp(),
  `inquiries_status` int(11) NOT NULL,
  PRIMARY KEY (`inquiries_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_inquiries VALUES("5","ROBERT","daday0012@gmail.com","Product","Good product","2022-03-24 14:21:37","0");
INSERT INTO client_inquiries VALUES("6","Raymart","raymart.gahopo@gmail.com","Product","Good quality product","2022-03-24 14:21:37","0");
INSERT INTO client_inquiries VALUES("7","GAHOPO","raymart.gahopo@gmail.com","Product","Sample ","2022-03-24 14:22:57","0");
INSERT INTO client_inquiries VALUES("8","Raymart Gahopo","raymart.gahopo@gmail.com","Service","Try lang","2022-03-24 14:33:05","0");



CREATE TABLE `client_logs` (
  `log_id` int(200) NOT NULL AUTO_INCREMENT,
  `log_userid` varchar(100) NOT NULL,
  `log_username` varchar(100) NOT NULL,
  `log_activity` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_time` time NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_logs VALUES("1","6224e8434ad52","testname","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("2","6224e8afe639a","testname","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("3","6224e931181ae","marl1","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("4","","admin","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("5","","admin","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("6","62259131b6d58","mart123","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("7","62259ad092521","mart123","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("8","62259bc7e2263","admin2","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("9","62259bd359b4b","mart123","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("10","6225cbbf69e33","sample","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("11","","sample","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("12","6225d7ed0e8b2","gahopo","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("13","6227627424074","raymart","signup","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("14","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("15","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("16","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("17","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("18","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("19","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("20","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("21","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("22","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("23","","raymart","Login","0000-00-00","00:00:00");
INSERT INTO client_logs VALUES("24","","raymart","Login","0000-00-00","05:00:18");
INSERT INTO client_logs VALUES("25","","raymart","Login","2022-08-03","05:01:09");
INSERT INTO client_logs VALUES("26","","raymart","Login","2022-08-03","00:00:00");
INSERT INTO client_logs VALUES("27","","raymart","Login","2022-09-03","05:37:10");
INSERT INTO client_logs VALUES("28","","raymart","Login","2022-09-03","05:56:56");
INSERT INTO client_logs VALUES("29","","raymart","Login","2022-09-03","06:14:16");
INSERT INTO client_logs VALUES("30","","raymart","Login","2022-09-03","06:16:34");
INSERT INTO client_logs VALUES("31","","raymart","Login","2022-09-03","06:17:32");
INSERT INTO client_logs VALUES("32","","raymart","Login","2022-09-03","06:18:09");
INSERT INTO client_logs VALUES("33","","raymart","Login","0000-00-00","06:39:51");
INSERT INTO client_logs VALUES("34","","raymart","Login","0000-00-00","06:49:04");
INSERT INTO client_logs VALUES("35","","raymart","Login","0000-00-00","11:49:35");
INSERT INTO client_logs VALUES("36","","raymart","Login","0000-00-00","04:42:59");
INSERT INTO client_logs VALUES("37","","raymart","Login","0000-00-00","03:54:42");
INSERT INTO client_logs VALUES("38","622a1b9b15daf","jona12","signup","0000-00-00","04:39:07");
INSERT INTO client_logs VALUES("39","","jona12","Login","0000-00-00","04:39:16");
INSERT INTO client_logs VALUES("40","","jona12","Login","0000-00-00","04:51:48");
INSERT INTO client_logs VALUES("41","","jona12","Login","0000-00-00","01:16:58");
INSERT INTO client_logs VALUES("42","622c92b29cc63","jojo","signup","0000-00-00","01:31:46");
INSERT INTO client_logs VALUES("43","","jojo","Login","0000-00-00","01:33:15");
INSERT INTO client_logs VALUES("44","","raymart","Login","0000-00-00","05:17:30");
INSERT INTO client_logs VALUES("45","","raymart","Login","0000-00-00","05:50:43");
INSERT INTO client_logs VALUES("46","","raymart","Login","0000-00-00","09:02:06");
INSERT INTO client_logs VALUES("47","","raymart","Login","0000-00-00","02:42:49");
INSERT INTO client_logs VALUES("48","RNL-W22037","martmart","signup","0000-00-00","04:27:54");
INSERT INTO client_logs VALUES("49","","martmart","Login","0000-00-00","04:28:03");
INSERT INTO client_logs VALUES("50","","raymart","Login","0000-00-00","05:42:58");
INSERT INTO client_logs VALUES("51","","raymart","Login","0000-00-00","02:02:19");
INSERT INTO client_logs VALUES("52","RNL-W22038","trytry","signup","0000-00-00","02:54:05");
INSERT INTO client_logs VALUES("53","","trytry","Login","0000-00-00","02:54:12");
INSERT INTO client_logs VALUES("54","","trytry","Login","0000-00-00","02:57:10");
INSERT INTO client_logs VALUES("55","RNL-W22039","trisha123","signup","0000-00-00","04:30:09");
INSERT INTO client_logs VALUES("56","","trisha123","Login","0000-00-00","04:32:09");
INSERT INTO client_logs VALUES("57","","marl","Login","0000-00-00","05:03:22");
INSERT INTO client_logs VALUES("58","","marl","Login","0000-00-00","06:28:59");
INSERT INTO client_logs VALUES("59","","marl","Login","0000-00-00","06:31:09");
INSERT INTO client_logs VALUES("60","","marl","Login","0000-00-00","06:37:14");
INSERT INTO client_logs VALUES("61","RNL-W220310","trebor123","signup","0000-00-00","06:54:40");
INSERT INTO client_logs VALUES("62","","trebor123","Login","0000-00-00","06:54:47");
INSERT INTO client_logs VALUES("63","","marl","Login","0000-00-00","10:01:20");
INSERT INTO client_logs VALUES("64","","trebor123","Login","0000-00-00","10:57:02");
INSERT INTO client_logs VALUES("65","","trisha123","Login","0000-00-00","10:58:58");
INSERT INTO client_logs VALUES("66","","trebor123","Login","0000-00-00","11:05:51");
INSERT INTO client_logs VALUES("67","","trebor123","Login","0000-00-00","11:19:48");
INSERT INTO client_logs VALUES("68","","trisha123","Login","0000-00-00","11:20:12");
INSERT INTO client_logs VALUES("69","","trebor123","Login","0000-00-00","11:22:24");
INSERT INTO client_logs VALUES("70","","trebor123","Login","0000-00-00","11:39:57");
INSERT INTO client_logs VALUES("71","","trebor123","Login","0000-00-00","05:27:33");
INSERT INTO client_logs VALUES("72","RNL-W220311","trytrytry","signup","0000-00-00","09:17:23");
INSERT INTO client_logs VALUES("73","RNL-W220312","martmart","signup","0000-00-00","09:21:18");
INSERT INTO client_logs VALUES("74","RNL-W220312","martmart","signup","0000-00-00","09:22:58");
INSERT INTO client_logs VALUES("75","","martmart","Login","0000-00-00","09:24:06");



CREATE TABLE `client_user` (
  `client_id` varchar(100) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_secquest` varchar(255) NOT NULL,
  `confirm` varchar(500) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user VALUES("$client_ids","$username","$password","","RNLVISIONCARE+date("y")+date("m")+(123)");
INSERT INTO client_user VALUES("2200","admin","21232f297a57a5a743894a0e4a801fc3","","");
INSERT INTO client_user VALUES("6224d0ce6050e","marl","34175d1c1a904c5b9c8029f76dd9f742","","");
INSERT INTO client_user VALUES("6224e8434ad52","testname","098f6bcd4621d373cade4e832627b4f6","","");
INSERT INTO client_user VALUES("6224e8afe639a","testname","098f6bcd4621d373cade4e832627b4f6","","");
INSERT INTO client_user VALUES("6224e931181ae","marl1","34175d1c1a904c5b9c8029f76dd9f742","","");
INSERT INTO client_user VALUES("6227627424074","raymart","d734b6666edc4e351a617b74525c762f","","");
INSERT INTO client_user VALUES("622a1b9b15daf","jona12","827ccb0eea8a706c4c34a16891f84e7b","","");
INSERT INTO client_user VALUES("622c92b29cc63","jojo","827ccb0eea8a706c4c34a16891f84e7b","","");
INSERT INTO client_user VALUES("RNL-W220310","trish02002093284023828","aab7c5e286aaf32a9dc8c0364960bff2","","");
INSERT INTO client_user VALUES("RNL-W220311","trixy1234","84e5d9bd6400aa67050d837be1b49bec","","12121");
INSERT INTO client_user VALUES("RNL-W220312","martmart","356c146c93b02cd3f044e4c450b299d5","","");
INSERT INTO client_user VALUES("RNL-W220314","joanne0987","8c2390592812fdb6a6ee57f188622034","","");
INSERT INTO client_user VALUES("RNL-W220315","triciajoy","f13b9632a551c5e8c7ff2445df606562","","");
INSERT INTO client_user VALUES("RNL-W22037","bambam123","89e2c8f458dda133118ac4a0a762cb3d","","");
INSERT INTO client_user VALUES("RNL-W22038","trisha060200","6a57ff0a005d0bc5461dcb6b5d9e4876","","");
INSERT INTO client_user VALUES("RNL-W22039","trish060200","aab7c5e286aaf32a9dc8c0364960bff2","","");



CREATE TABLE `client_user_info` (
  `client_info_id` int(255) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(1000) NOT NULL,
  `client_fname` varchar(100) NOT NULL,
  `client_lname` varchar(100) NOT NULL,
  `client_mname` varchar(100) NOT NULL,
  `client_bday` varchar(100) NOT NULL,
  `client_age` int(100) NOT NULL,
  `client_contact` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  PRIMARY KEY (`client_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user_info VALUES("1","6224d0ce6050e","Robert ","vitalicia ","robert","1999-08-04 ","22","09075647938","marl@gmail.com","Sta Lucia");
INSERT INTO client_user_info VALUES("2","6224e8434ad52","","","","","0","","testemail@gmail.com","");
INSERT INTO client_user_info VALUES("3","6224e8afe639a","","","","","0","","testemail@gmail.com","");
INSERT INTO client_user_info VALUES("4","6224e931181ae","","","","","0","","marl@gmail.com","");
INSERT INTO client_user_info VALUES("5","6227627424074","","","","","0","","raymart.gahopo@gmail.com","");
INSERT INTO client_user_info VALUES("6","622a1b9b15daf","","","","","0","","zjhyn16@gmail.com","");
INSERT INTO client_user_info VALUES("7","622c92b29cc63","","","","","0","","zjhyn16@gmail.com","");
INSERT INTO client_user_info VALUES("8","RNL-W22037","Raymart ","Gahopo ","M.","1999-08-04 ","22","09075647938","daday0012@gmail.com","Sta Lucia");
INSERT INTO client_user_info VALUES("9","RNL-W22038","","","","","0","09271573625","try@gmail.com","");
INSERT INTO client_user_info VALUES("10","RNL-W22039","","","","","0","09123456789","trisha@gmail.com","");
INSERT INTO client_user_info VALUES("11","RNL-W220310","john ","vitalicia ","rosario","1999-08-04 ","22","09123456789","robert@gmail.com","Sta Lucia");
INSERT INTO client_user_info VALUES("12","RNL-W220311","","","","","0","09123456789","trytry@gmail.com","");
INSERT INTO client_user_info VALUES("14","RNL-W220312","","","","","0","09075647938","drae.qcu@gmail.com","");



CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_subj` varchar(255) NOT NULL,
  `cont_mess` varchar(255) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO contact VALUES("1","Danver Omlang","danverjhon@gmail.com","Feedback","Great Service");



CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_subj` varchar(20) NOT NULL,
  `feed_comments` text NOT NULL,
  `feed_rate` varchar(255) NOT NULL,
  `feedbackdate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("4","pogi","ka","","2022-03-06 21:22:06");
INSERT INTO feedback VALUES("5","Services","Their service is good and they approach the customer well.","","2022-03-07 10:39:36");
INSERT INTO feedback VALUES("6","Product","Their product is well package and affordable price.","","2022-03-07 10:41:26");
INSERT INTO feedback VALUES("7","Services","They give so much professionalism and care to the customers.","","2022-03-07 10:44:21");
INSERT INTO feedback VALUES("8","Inquiry for Contact ","Hello, may contact lens po ba kayong may grado. Thank you!","","2022-03-12 20:36:30");
INSERT INTO feedback VALUES("9","Service","Good services and staffs.","5","2022-03-24 03:56:29");
INSERT INTO feedback VALUES("10","Staff","Friendly staffs and professional on their work","4","2022-03-24 04:03:28");
INSERT INTO feedback VALUES("11","Services","worst services and staffs","1","2022-03-24 04:03:56");
INSERT INTO feedback VALUES("12","Product","Good product with a good quality and price.","5","2022-03-24 04:05:32");
INSERT INTO feedback VALUES("13","Services","Good services and staffs.","5","2022-03-24 04:12:32");



CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;




CREATE TABLE `password_reset_temp` (
  `email` varchar(255) NOT NULL,
  `key` varchar(2552) NOT NULL,
  `expDate` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO patient_distancerx VALUES("1","62306a189cd49","Distance","Altarejos, Tricia joy Magora","2001-06-02","09267736621","trishaaltarejos02001@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","test1","75/100","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","Dr. Reese Vincent   Deborbon    ","2022-03-15","","0000-00-00","Walk-in");
INSERT INTO patient_distancerx VALUES("2","6224e8434ad52","Contact Lens","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","2","2","22","2","22","2","22","2","2","2","2","22","2","2","2","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Walk-in");
INSERT INTO patient_distancerx VALUES("3","6224e8434ad52","Distance","","1997-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("4","6224e8434ad52","Distance","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("5","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("6","RNL-W220311","Contact Lens","Altarejos, Trixy  Magora","2000-07-06","09988876654","trixyaltarejos04@gmail.com","Quezon City","asldhakshdk","70/100","1","1","11","1","11","11","1","11","1","11","1","11","1","11","1","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","Appointment");
INSERT INTO patient_distancerx VALUES("7","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","asdad111222","2022-05-26","Walk-in");



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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO patient_history VALUES("1","62306a189cd49","Distance","Altarejos, Tricia joy Magora","2000-06-02","09267736628","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","test","75/100","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("2","6224e8434ad52","Reading","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","1","1","11","1","11","1","11","1","11","1","1","11","1","1","1","Dr. Reese Vincent   Deborbon    ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("3","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("4","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("5","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("6","6224e8434ad52","Contact Lens","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","2","2","22","2","22","2","22","2","2","2","2","22","2","2","2","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("7","RNL-W220311","Distance","Altarejos, Trixy  Magora","2000-07-06","09988876654","trixyaltarejos04@gmail.com","Quezon City","asldhakshdk","70/100","1","1","11","1","11","1","11","1","11","1","1","11","1","1","1","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","History");
INSERT INTO patient_history VALUES("8","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","History");
INSERT INTO patient_history VALUES("9","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","asdad111","2022-05-25","History");



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
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("38","OWNDAYS ","OR2041S-8S","Eyewear for Adults","0000-00-00","0000-00-00","1999","999","1000","Supplier","10","1647501295_OWNDAYS OR2041S-8S.jpg","SPECIFICATIONS			
BRAND: OWNDAYS
P/No. OR2041S-8S		
MATERIAL: Resin
SIZE: 49?19?142?39");
INSERT INTO product VALUES("39","OWNDAYS ","OR2042S-8S","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501419_OWNDAYS OR2042S-8S.jpg","SPECIFICATIONS

BRAND: OWNDAYS
P/No.: OR2042S-8S 
MATERIAL: Resin
SIZE: 54?16?142?28
");
INSERT INTO product VALUES("40","OWNDAYS ","OR2027N-8A ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501506_OWNDAYS OR2027N-8A.jpg","SPECIFICATIONS
								
BRAND: OWNDAYS 											P/No. OR2027N-8A												MATERIAL: Resin												SIZE: 51?19?143?43
");
INSERT INTO product VALUES("41","LILLYBELL","LB1008B-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501668_Lillybell LB1008B-9S.jpg","SPECIFICATIONS
BRAND: LILLYBELL
P/No.LB1008B-9S
MATERIAL: Stainless
SIZE 56?19?145?50.4
");
INSERT INTO product VALUES("42","FUWA CELLU ","FC2015T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501730_FUWA CELLU FC2015T-9S.jpg","SPECIFICATIONS

BRAND FUWA CELLU
P/No. FC2015T-9S 
MATERIAL Resin 
SIZE 51?18?140?41
");
INSERT INTO product VALUES("43","GRAPH BELLE","GB2024D-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501797_Graph Belle GB2024D-9S.jpg","SPECIFICATIONS 

BRAND GRAPH BELLE
P/No. GB2024D-9S 
MATERIAL Plastic 
SIZE 52?18?140?42.7
");
INSERT INTO product VALUES("44","AIR FIT","AF1025G-9A ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501885_Air Fit AF1025G-9A.jpg","SPECIFICATIONS
 
BRAND AIR FIT 
P/No. AF1025G-9A 
MATERIAL Titanium / Stainless
SIZE 50?20?145?46
");
INSERT INTO product VALUES("45","GRAPH BELLE","GB2026B-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502003_Graph Belle GB2026B-9S.jpg","SPECIFICATIONS

BRAND GRAPH BELLE 
P/No. GB2026B-9S 
MATERIAL Resin / Stainless 
SIZE 51?21?140?45
");
INSERT INTO product VALUES("46","JOHN DILLINGER","JD2017-T ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502080_John Dillinger JD2017-T.jpg","SPECIFICATIONS

BRAND JOHN DILLINGER 
P/No. JD2017-T
MATERIAL Metal / Resin 
SIZE 51?18?145?39 
");
INSERT INTO product VALUES("47","AIR ULTEM","AU2055T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502148_AIR Ultem AU2055T-9S.jpg","SPECIFICATIONS
 
BRAND AIR ULTEM 
P/No. AU2055T-9S 
MATERIAL Resin 
SIZE 53?16?145?32
");
INSERT INTO product VALUES("48","OWNDAYS ","SUN2058J-9S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502268_OWNDAYS SUN2058J-9S.jpg","SPECIFICATIONS 

BRAND OWNDAYS SUNGLASSES
P/No. SUN2058J-9S
MATERIAL Plastic 
SIZE 64?16?100?51
");
INSERT INTO product VALUES("49","OWNDAYS ","SUN2064B-9S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502863_OWNDAYS SUN2064B-9S.jpg","SPECIFICATIONS 

BRAND OWNDAYS SUNGLASSES
P/No. SUN2064B-9S 
MATERIAL Plastic 
SIZE 58?18?142?46.8
");
INSERT INTO product VALUES("50","JUNNI","JU3005N-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647502922_Junni JU3005N-0S.jpg","SPECIFICATIONS

BRAND Junni 
P/No.JU3005N-0S
MATERIAL Resin
SIZE48?16?130?35.8
");
INSERT INTO product VALUES("51","NICHE","NC1019B-9A ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503242_NICHE NC1019B-9A.jpg","SPECIFICATIONS

BRAND NICHE
P/No.NC1019B-9A
MATERIAL Metal
SIZE51?20?140?47
");
INSERT INTO product VALUES("52","OWNDAYS ","SUN2063B-9S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503788_OWNDAYS SUN2063B-9S.jpg","SPECIFICATIONS
 
BRAND OWNDAYS SUNGLASSES 
P/No. SUN2063B-9S 
MATERIAL Plastic / Stainless 
SIZE 52?20?140?42
");
INSERT INTO product VALUES("53","OWNDAYS ","SUN2083B-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503831_OWNDAYS SUN2083B-0S.jpg","SPECIFICATIONS 

BRAND OWNDAYS 
P/No. SUN2083B-0S 
MATERIAL Plastic / Stainless 
SIZE 52?20?140?48
");
INSERT INTO product VALUES("54","OWNDAYS ","SUN2082N-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503891_OWNDAYS SUN2082N-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. SUN2082N-0S
MATERIAL Resin
SIZE56?19?140?39.7
");
INSERT INTO product VALUES("55","OWNDAYS ","SUN2080B-0S","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647503952_OWNDAYS SUN2080B-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. SUN2080B-0S
MATERIAL Plastic
SIZE54?19?145?43.6    
");
INSERT INTO product VALUES("56","NICHE","NC2008B-0S","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504007_NICHE NC2008B-0S.jpg","SPECIFICATIONS

BRAND+NICHE
P/No.NC2008B-0S
MATERIAL Plastic
SIZE52?19?140?43.5
");
INSERT INTO product VALUES("57","OWNDAYS ","SUN1058B-0S ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504073_OWNDAYS SUN1058B-0S.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No.SUN1058B-0S
MATERIAL Stainless
SIZE53?20?140?52
");
INSERT INTO product VALUES("58","OWNDAYS ","COLLECTION KMTY2005Y-1S GIYU TOMIOKA","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504221_COLLECTION KMTY2005Y-1S GIYU TOMIOKA.jpg","SPECIFICATIONS
Materials Lens: Acrylic (demo lens) Frame: Acetate, Alloy 
Size Lens Width: Approx. 53mm Nose Bridge Length: Approx. 17mm Temple Length: Approx. 140mm
");
INSERT INTO product VALUES("59","OWNDAYS ","COLLECTION KMTY2001Y-1S TANJIRO KAMADO","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504293_COLLECTION KMTY2001Y-1S TANJIRO KAMADO.jpg","SPECIFICATIONS
Materials Lens: Acrylic (demo lens) Frame: Acetate, Alloy 
Size Lens Width: Approx. 48mm Nose Bridge Length: Approx. 20mm Temple Length: Approx. 140mm
");
INSERT INTO product VALUES("60","OWNDAYS ","GDM1001T-9A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504382_GUNDAM X OWNDAYS GDM1001T-9A.jpg","SPECIFICATIONS

BRAND OWNDAYS
P/No. GDM1001T-9A
MATERIAL Stainless
SIZE55?16?138?33
");
INSERT INTO product VALUES("61","OWNDAYS ","Graph Bell GB1026B-9A","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504437_Graph Belle GB1026B-9A.jpg","SPECIFICATIONS 

BRAND GRAPH BELLE 
P/No. GB1026B-9A
MATERIAL Titanium / Stainless 
SIZE 51?20?145?45
");
INSERT INTO product VALUES("62","OWNDAYS ","Graph Belle GB1021F-8A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504523_Graph Belle GB1021F-8A.jpg","SPECIFICATIONS 
BRAND GRAPH BELLE 
P/No. GB1021F-8A 
MATERIAL Resin / Stainless 
SIZE 50?18?142?41
");
INSERT INTO product VALUES("63","LILLYBELL","LB1010G-0S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504650_Lillybell LB1010G-0S.jpg","SPECIFICATIONS 

BRAND lillybell 
P/No. LB1010G-0S 
MATERIAL Plastic / Stainless 
SIZE 53?19?140?48.3
");
INSERT INTO product VALUES("64","OWNDAYS ","OR1038T-9S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647504975_OWNDAYS OR1038T-9S.jpg","SPECIFICATIONS

BRANDOWNDAYS
P/No.OR1038T-9S
MATERIAL Metal
SIZE53?16?138?32
");
INSERT INTO product VALUES("65","OWNDAYS ","OR1035T-9S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505023_OWNDAYS OR1035T-9S.jpg","SPECIFICATIONS

BRANDOWNDAYS
P/No. OR1035T-9S
MATERIAL Metal
SIZE55?17?140?32
");
INSERT INTO product VALUES("66","NICHE","NC3014J-0S ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505074_NICHE NC3014J-0S.jpg","SPECIFICATIONS

BRAND+NICHE
P/No.NC3014J-0S
MATERIAL Plastic
SIZE53?19?142?46.7
");
INSERT INTO product VALUES("67","JOHN DILLINGER","JD1009Y-8A ","Seen Wear","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505132_John Dillinger JD1009Y-8A.jpg","SPECIFICATIONS 

BRAND JOHN DILLINGER 
P/No. JD1009Y-8A 
MATERIAL Titanium 
SIZE 49?20?145?42.7
");
INSERT INTO product VALUES("68","Ray-Ban Junior","RY1530/3821_48 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505225_Ray-Ban Junior RY1530-3821-48.jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Rectangle
Frame Color: Red
Lens Color: Clear
Frame Material: Acetate
Frame Style: Full-Rim
");
INSERT INTO product VALUES("69","Ray-Ban Junior","RY9065V/3743_48 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505407_Ray-Ban Junior RY9065V-3743-48.jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Round
Frame Color: Gloss Blue
Lens Color: Clear
Frame Material: Injected
Frame Style: Full-Rim
");
INSERT INTO product VALUES("70","Ray-Ban Junior","RY1052/4056_47 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505517_Ray-Ban Junior RY1052-4056-47 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Purple-Silver
Temple Color: Brown
Lens Color: Clear
Frame Material: Metal
Frame Style: Full-Rim
");
INSERT INTO product VALUES("71","Ray-Ban Junior","RY1562/3747_46 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505766_Ray-Ban Junior RY1562-3747-46 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Red
Temple Color: Grey
Lens Color: Clear
Frame Material:
Frame Style: Full-Rim
");
INSERT INTO product VALUES("72","Ray-Ban Junior","RY1531/3749_46 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505886_Ray-Ban Junior RY1531-3749-46 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Shape: Square
Frame Color: Black
Temple Color: Dark Purple
Lens Color: Clear
Frame Material: Acetate
Frame Style: Full-Rim
");
INSERT INTO product VALUES("73","TONY MORGAN LONDON KIDS","TM SR1701/C3/43 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647505964_Tony Morgan London Kids TM SR1701-C3-43 .jpg","Brand: Tony Morgan London Kids
Gender: Unisex 
Size: 43 Frame 
Colour: Brown 
FrameShape:  Oval 
Frame Style: Full Rim Frame
Material: Acetate Lens
Material: Customisable
");
INSERT INTO product VALUES("74","TONY MORGAN LONDON KIDS","TM SR1701/C5/43 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506195_Tony Morgan London Kids TM SR1701-C5-43 .jpg","DETAIL Brand: Tony Morgan London Kids 
Gender: Unisex 
Size: 43 Frame 
Colour: Blue 
Frame Shape:  Oval
Frame Style: Full Rim 
Frame Material: Acetate 
Lens Material: Customisable
");
INSERT INTO product VALUES("75","TONY MORGAN LONDON KIDS","TM A1663/C5 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506456_Tony Morgan London Kids TM A1663-C5 .jpg","DETAIL
Brand: Tony Morgan London Kids 
Gender: Unisex
Size: 48 
Frame Colour: Pink
Frame Shape:  Square 
Frame Style: Full Rim 
Frame Material: Acetate
Lens Material: Customisable
");
INSERT INTO product VALUES("76","Ray-Ban Junior","RY1566D/3712_50 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506548_Ray-Ban Junior (Kids) RY1566D-3712-50 .jpg","DETAIL
Brand: Ray-Ban Junior
Gender: Unisex
Frame Colour: Blue-Red
Lens Colour: Clear 
Frame Shape: Oval 
Frame Style: Full Rim
Frame Material: Acetate
");
INSERT INTO product VALUES("77","Ray-Ban Junior","RY1053/4066_45 ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506624_Ray-Ban Junior RY1053-406645 .jpg","DETAIL 
Brand: Ray-Ban Junior
Gender: Unisex
Frame Colour: Red 
Lens Colour: Clear 
Frame Shape: Round 
Frame Style: Full-Rim 
Frame Material: Meta
");
INSERT INTO product VALUES("78","","SQUARE FLORAL ","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506785_Square Floral Eyeglasses.jpg","DESCRIPTION: 
Size: Small | 49 ?17-135
Color: Floral
Weight: Lightweight (15g)
Material: plastic
Shape: Square
Rim: Full-Rim
Anti-Scratch lens coating
");
INSERT INTO product VALUES("79","","LITTLE BRISTOL","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506850_Little Bristol.jpg","DESCRIPTION:
Size: Small | 50 ?17-135
Color: Black
Weight: 19g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
");
INSERT INTO product VALUES("80","","SQUARE BLACK TORTOISE","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506897_Square Black Tortoise.jpg","DESCRIPTION:
Size: Medium | 50 ?19-135
Color: Black Tortoise
Weight: Lightweight (15g)
Material: acetate
Shape: Square
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
");
INSERT INTO product VALUES("81","","LITTLE MORNING","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647506954_Little Morning.jpg","Size: Small | 47 ?18-133
Color: Clear
Weight: Lightweight (10g)
Material: plastic
Shape: Round
Rim: Full-Rim
Anti-Scratch lens coating
");
INSERT INTO product VALUES("82","","LITTLE JOHN","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507001_Little John.jpg","DESCRIPTION:
Size: X-Small | 49 ?16-127
Color: Black
Weight: 21g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
");
INSERT INTO product VALUES("83","","ST. MICHEL","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507046_St Michel.jpg","Size: Small | 48 ?19-140
Color: Rose Gold
Weight: Lightweight (15g)
Material: metal
Shape: Round
Rim: Full-Rim
Anti-Scratch lens coating
");
INSERT INTO product VALUES("84","","THINKER","Eyewear for Kids","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507087_Thinker.jpg","Size: X-Small | 48 ?17-125
Color: Clear Pink
Weight: Lightweight (15g)
Material: acetate
Shape: Cat Eye
Rim: Full-Rim
Other features: Spring hinge
Anti-Scratch lens coating
");
INSERT INTO product VALUES("85","","BOTANIST","Eyewear for Kids","2021-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507144_Botanist.jpg","Size: Medium | 52 ?18-145
Color: Ivory Tortoise
Weight: 16g
Material: acetate
Shape: Rectangle
Rim: Full-Rim
Anti-Scratch lens coating
");
INSERT INTO product VALUES("86","","ISABELLA","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507223_Isabella.jpg","Size: Large | 58 ?16-145
Color: Black Sunglasses
Weight: 23g
Material: acetate
Shape: Square
Anti-Scratch lens coating
");
INSERT INTO product VALUES("87","","HANOI","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507269_Hanoi.jpg","Size: Medium | 51 ?20-140
Color: Black Sunglasses
Weight: 25g
Material: acetate
Shape: Square
Anti-Scratch lens coating
");
INSERT INTO product VALUES("88","","LISA","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507340_Lisa.jpg","Size: Large | 54 ?21-148
Color: Black Sunglasses
Weight: 26g
Material: acetate-metal
Shape: Square
Other features: Spring hinge
Anti-Scratch lens coating
");
INSERT INTO product VALUES("89","","CORTEZ","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507546_Cortez.jpg","Size: Large | 56 ?17-147
Color: Black Sunglasses
Weight: Lightweight (14g)
Material: plastic
Shape: Rectangle
Anti-Scratch lens coating
");
INSERT INTO product VALUES("90","","GRAYTON","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507588_Grayton.jpg","Size: Medium | 56 ?19-145
Color: Clear Blue Sunglasses
Weight: 24g
Material: acetate
Shape: Rectangle
Anti-Scratch lens coating
");
INSERT INTO product VALUES("91","","LOS ANGELES","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507634_Los Angeles.jpg","Size: Large | 52 ?21-145
Color: Clear Green Sunglasses
Weight: 32g
Material: acetate
Shape: Square
Anti-Scratch lens coating
");
INSERT INTO product VALUES("92","","CINEMATIC","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507680_Cinematic.jpg","Size: Large | 54 ?18-145
Color: Ivory Tortoise Sunglasses
Weight: 22g
Material: acetate
Shape: Cat Eye
Anti-Scratch lens coating
");
INSERT INTO product VALUES("93","","SAFARI","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507839_Safari.jpg","Size: Medium | 50 ?21-145
Color: Tortoise Sunglasses
Weight: 17g
Material: acetate
Shape: Round
Anti-Scratch lens coating
");
INSERT INTO product VALUES("94","","SUN ULTRAVIOLET","Sunglasses","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647507884_Sun Ultraviolet.jpg","Size: Large | 54 ?18-140
Color: Brown Striped Sunglasses
Weight: 16g
Material: acetate-metal
Shape: Square
Anti-Scratch lens coating
");
INSERT INTO product VALUES("95","","MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD","Accessories","2022-03-13","0000-00-00","100","50","50","Supplier","20","1647508460_Multi-Purpose Chain 22-inches Metal Gold.jpg","Lens Material: 
Balafilcon A (Silicone Hydrogel)
Product Category:
Chain
Length:
27 inches
Box Content:
Multi-Purpose Chain
Material: Metal
");
INSERT INTO product VALUES("96","","UV SANITIZER","Accessories","2022-03-19","0000-00-00","800","500","300","Supplier","5","1647508909_UV Sanitizer.jpg","With the safe start up mechanism and a preset-timer, the UV-C sanitizer only operates when the box is closed, keeping your eyes safe. The box easily accommodates most daily accessories like smartphones, rings and jewelries, face masks and small apparel, personal care tools, money, spectacles/sunglasses or small accessories like earphones.");
INSERT INTO product VALUES("97","TITAN","LENS SOLUTION","Accessories","2021-03-03","2023-03-03","300","200","100","Supplier","20","1647509029_Lens Solution.jpg","Sku: LS06A
Brand: Titan
Lens Material: Balafilcon A (Silicone Hydrogel)
Product Category: Lens Cleaning Solution
Size: 50 ML
");
INSERT INTO product VALUES("98","TITAN","UNIVERSAL ANTI FOG CLOTH","Accessories","2022-03-03","2023-03-03","200","100","100","Supplier","10","1647509108_Universal Anti Fog Cloth.jpg","Universal Fog-Free cloth can be applied with any lens coating (except Anti Fog Lenses) to activate the anti-fog property of the lens");
INSERT INTO product VALUES("99","BAUSCH & LOMB RENU","Advance Solution","Accessories","2022-03-03","2023-03-03","400","200","200","Supplier","5","1647509224_Renu Advance Solution.jpg","Bausch & Lomb Renu Advance Solution 355 ml");
INSERT INTO product VALUES("100","BAUSCH & LOMB RENU","Biotrue","Accessories","2022-03-03","2023-03-03","400","200","200","Supplier","5","1647509282_Biotrue.jpg","Bausch & Lomb Biotrue 60ml");
INSERT INTO product VALUES("101","ALCON","Opti-Free Contact Lens Solution ","Accessories","2022-03-03","2023-02-03","300","200","100","Supplier","5","1647509348_Opti-Fresh Replenish.jpg","Alcon Opti-Free Contact Lens Solution 120 ml");
INSERT INTO product VALUES("102","ALCON","Opti-Free Puremoist","Accessories","2022-03-03","2024-06-03","250","150","100","Supplier","5","1647509423_Opti-Free Puremoist.jpg","Opti Free Puremoist 4 OZ 120ml");
INSERT INTO product VALUES("103","","Clip-Ons","Accessories","2022-04-03","0000-00-00","320","200","120","Supplier","5","1647509504_Clip-Ons.jpg","Rim: Rimless
Front Shape: Rectangle
Material: Polycarbonate
Lens Height: 40 mm

Lens Width: 58 mm
Bridge Width: 15 mm
Bridge Color: Black
Size: Large
Lens Color: Black
");
INSERT INTO product VALUES("104","COOPER VISION","My Day Daily Disposable","Contact Lenses","2022-03-17","2022-04-17","800","500","300","Supplier","5","1647509704_MyDay Daily Disposable.jpg","Type: Daily disposable lenses.
Packaging: 30 Lenses per box.
Content: Provides the eyes with 54% of available water content.
Manufacturer: CooperVision
Benefits: Created with Smart Silicone, which helps maximize oxygen delivery to the cornea for superior comfort.
");
INSERT INTO product VALUES("105","AIR OPTIX","Hydraglyde","Contact Lenses","2022-04-03","2022-05-03","800","500","300","Supplier","5","1647509913_Air Optix Hydraglyde.jpg","AIR OPTIX HYDRAGLYDE
Type: Monthly disposable
Packaging: 6 lenses per box
Content: 67% lotrafilcon B & 33% water
Manufacturer: AIR OPTIX
");
INSERT INTO product VALUES("106","BAUSCH & LOMB RENU","SofLens 59","Contact Lenses","2022-04-03","2022-05-03","800","500","300","Supplier","5","1647509984_Softlens 59.jpg","SOFTLENS 59
Type: Monthly disposable
Packaging: 6 lenses per box
Content: 41% Polymer (hilafilcon A) & 59% water
Manufacturer: Bausch & Lomb
");
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
");
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
");
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
");
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
");
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
");
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
");
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
");
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
");
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
");
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
");
INSERT INTO product VALUES("117","ACUVUE","OASYS with Transitions ","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","6","1647511102_OASYS with Transitions .jpg","Handling Tint: No 
Replacement Frequency: Biweekly lenses Diameter: 14 millimeter 
Material: Senofilcon A 
Material Type: Silicone Hydrogel Type: Soft 
Orientation Marking Available: Yes Oxygen Permeability (Dk/t): 121 Water Content: 38% 
Quantity: 25 
Producer: Johnson & Johnson 
Price: $184.99 
Brand: ACUVUE
");
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
");
INSERT INTO product VALUES("119","BIOFINITY","XR Toric","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511219_Biofinity® XR toric .jpg","Handling Tint: Yes 
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
");
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
");
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
");
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
");
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
");
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
");
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
");
INSERT INTO product VALUES("126","MIRU","Miru 1 Month","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511774_Miru 1month  .jpg","Handling Tint: No 
Replacement Frequency: Monthly lenses Diameter: 14 millimeter 
Material: Asmofilcon A 
Material Type: Silicone Hydrogel Type: Soft 
Orientation Marking Available: No Oxygen Permeability (Dk/t): 161 Water Content: 40% 
Quantity: 6 
Producer: Menicon 
Price: $49.99 
Brand: Miru
");
INSERT INTO product VALUES("127","AIR OPTIX","Night & Day Aqua","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647511994_IR OPTIX NIGHT & DAY AQUA.jpg","AIR OPTIX NIGHT & DAY AQUA Contact Lenses 
clear vision and comfortable contact lens wear at any hour of the day.
");
INSERT INTO product VALUES("128","CIBA VISION","Fresh Look Colorblends","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512137_Freshlook Colorblends .jpg","Freshlook Colorblends spherical contact lenses are  indicated for the correction of near- and farsightedness  in non-diseased eyes that may have a refractive  astigmatism of up to 2.0 diopters.");
INSERT INTO product VALUES("129","CIBA VISION","Dailies Total Breatable One-Day Contact Lenses","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512231_Eye-bar Optometrists & Opticians .jpg","Eye-bar Optometrists & Opticians carries a number of 1-Day  disposable contact lenses brands and can offer same day  contact lens fitting and dispensing in most prescriptions");
INSERT INTO product VALUES("130","MAXI EYES","2 Tone Natural Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512369_Maxi Eyes 2 Tone Natural Series .jpg","Maxi Eyes Double Tone contact lenses make your eyes bigger  and give them a vibrant colorful look with natural brilliance. The 3 layer system of this lens comes with an outer circle for  bigger eyes, a highlight layer for beautiful colors and a comfort  layer for a pleasant wearing experience. 
Boost your look with Maxi Eyes Colors Double Tone Color  Contact Lenses. 
Material: HEMA + MAA Copolymer 
Type: Brown, Grey, Maroon 
DK: 20 
Water Content: 55% 
Base Curve: 8.6mm 
Diameter: 14.0mm 
Quantity per Box: 2 Lenses/Box
");
INSERT INTO product VALUES("131","GEOLICA","Color Lady Series","Contact Lenses","2022-03-17","2022-04-17","800","500","300","Supplier","5","1647512548_Geolica Color Lady Series .jpg","Geolica Color Lady Series (Light Brown, Pearl Gray) 
Geolica Color Lady generate an impressive look with  attractive colors. This GEO colored cosmetic lens naturally  change your eye color and give a good impression to anyone. 
Life Span : 3 months 
B.C : 8.6 mm 
Diameter : 14.20 mm 
Water Content : 42%
");
INSERT INTO product VALUES("132","AIR OPTIX","Color Series Power","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","5","1647512618_Air Optix Color Series Power .jpg","Air Optix Color Series Power (Grey, Brown, Pure Hazel, Honey) ");
INSERT INTO product VALUES("133","ALCON","Fresh Look Colorblends Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513235_FreshLook COLORBLENDS Series .jpg","FreshLook COLORBLENDS Series (Grey, Brown, Pure Hazel,  Green)");
INSERT INTO product VALUES("134","MAXI","Secret Garden Series","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513327_Maxi Eyes Secret Garden Series .jpg","Maxi Eyes Secret Garden contact lens that enhance your  natural eye color that gives you subtle to vibrant look, perfect  from day-to-night. They are available in Swan Lake, Nymph  Fairy Blue, Pixie, Glacial, Stardust, & Caspian Rain. These  lenses are designed to be worn for one month or up to 30  times over a longer period for occasional wear, as long as they  are properly cleaned and handled. 
Material: HEMA Copolymer 
DK: 9.5 x 10-11 cm2 
Water Content: 38% 
Base Curve: 8.6mm 
Diameter: 14.2 mm 
Lens Color: Swan Lake, Nymph Fairy Blue, Pixie, Glacia l, Stardust, Caspian Rain 
Usage: Monthly Disposable Lens 
Quantity per Box: 2 Lenses/Box
");
INSERT INTO product VALUES("135","ALCON","Fresh Look One-Day","Contact Lenses","2022-03-17","0000-00-00","800","500","300","Supplier","10","1647513435_FreshLook One-Day .jpg","FreshLook One-Day 
Wearing Type : Daily Disposables 
Power Range : 0.00 to -6.00 in .25 D steps and -6.00 to -8.00  in .50 D steps 
Base Curve(s) : 8.6mm 
Diameter(s) : 13.8mm 
Lens Material : Nelfilcon A
");



CREATE TABLE `sales` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `amount` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `due_date` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO sales VALUES("1","RS-3024023","03/24/22","cash","9995","5000","10000","trish");
INSERT INTO sales VALUES("2","RS-3024023","03/24/22","cash","9995","5000","10000","trish");



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
  `date` varchar(500) NOT NULL,
  `discount` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `supplier` (
  `supp_id` int(255) NOT NULL AUTO_INCREMENT,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO supplier VALUES("1","TREBOR ","ROBERT ","09128362732","john.robert.vitalicia@gmail.com ","drug dealer");
INSERT INTO supplier VALUES("4","EO","Raymart","09075647938","raymart.gahopo@gmail.com","Sample");
INSERT INTO supplier VALUES("5","EA ","Gahopo  ","09075647938","raymart.gahopo@gmail.com ","Sample");



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO users_account VALUES("6","raymart123","c1c2b5b9d337b912c1ea7a84131e8ef3","Gahopo","Raymart","Tomagan","09075647938","raymart.gahopo@gmail.com","Admin");
INSERT INTO users_account VALUES("7","robert123","3847820138564525205299f1f444c5ec","Vitalicia ","Robert ","Umbao ","09123456789","robert.vitalicia@gmail.com ","Doctor");
INSERT INTO users_account VALUES("8","jona123","c1c2b5b9d337b912c1ea7a84131e8ef3","Sugabo","Jona","Umbao","09123456789","jona.sugabo@gmail.com","Sales Staff");
INSERT INTO users_account VALUES("9","marl123","689ef0be2832358cc850b91a2e91adb3","Umbao ","Marl ","Vitalicia ","09123456789","marl.umbao@gmail.com ","Doctor");



CREATE TABLE `users_logs` (
  `logs_id` int(11) NOT NULL AUTO_INCREMENT,
  `logs_username` varchar(255) NOT NULL,
  `logs_activity` varchar(255) NOT NULL,
  `logs_datentime` datetime NOT NULL,
  `logs_roles` varchar(255) NOT NULL,
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO users_logs VALUES("1","admin123","Login","2022-03-14 03:13:42","Doctor");
INSERT INTO users_logs VALUES("2","admin123","Login","2022-03-14 03:13:57","Doctor");
INSERT INTO users_logs VALUES("3","admin123","Login","2022-03-14 03:15:57","Doctor");
INSERT INTO users_logs VALUES("4","admin123","Login","2022-03-14 03:16:19","Doctor");
INSERT INTO users_logs VALUES("5","admin123","Login","2022-03-14 03:19:43","Doctor");
INSERT INTO users_logs VALUES("6","Doctor","Logout","2022-03-14 03:20:31","Doctor");
INSERT INTO users_logs VALUES("7","raymart","Login","2022-03-15 07:26:14","Doctor");
INSERT INTO users_logs VALUES("8","Jona","Login","2022-03-17 02:47:18","Doctor");
INSERT INTO users_logs VALUES("9","Jona","Login","2022-03-20 02:47:16","Doctor");
INSERT INTO users_logs VALUES("10","reese","Login","2022-03-21 08:49:06","Sales Staff");
INSERT INTO users_logs VALUES("11","reese","Logout","2022-03-21 08:50:33","Sales Staff");
INSERT INTO users_logs VALUES("12","robert123","Login","2022-03-22 05:16:09","Doctor");
INSERT INTO users_logs VALUES("13","robert123","Logout","2022-03-22 05:16:23","Doctor");
INSERT INTO users_logs VALUES("14","jona123","Login","2022-03-22 05:16:30","Sales Staff");
INSERT INTO users_logs VALUES("15","jona123","Logout","2022-03-22 05:16:48","Sales Staff");
INSERT INTO users_logs VALUES("16","robert123","Login","2022-03-23 10:27:56","Doctor");

