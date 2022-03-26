

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
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment VALUES("1","","Danver Omlang","danverjhon@gmail.com","09560492266","2021-11-10","","Appointment test","");
INSERT INTO appointment VALUES("3","","Danver Omlang","danverjhon@gmail.com","09560492266","2021-12-27","","Appointment test 1","CANCELLED");
INSERT INTO appointment VALUES("198","trebor123","ROBERT","robert@gmail.com","09123456789","2022-03-25","8:00 AM to 12:00 NN","Check Up","PENDING");
INSERT INTO appointment VALUES("202","trebor12345","robert","robertvitalicia@gmail.com","09958252990","2022-03-26","08:00 AM","Eye Exams","ONGOING");
INSERT INTO appointment VALUES("203","trebor12345","robert","robertvitalicia@gmail.com","09958252990","2022-03-27","08:30 AM","Eyeglasses and Contact Lenses","ONGOING");



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
INSERT INTO appointment_history VALUES("178","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-26","14:50","Check ups","CANCELLED","26-03-22 4:47 am");
INSERT INTO appointment_history VALUES("179","Mark Anthony Asa","edmar.ramos623@gmail.com","0977879789","2022-03-18","14:54","Hide","FINISH","25-03-22 8:45 am");
INSERT INTO appointment_history VALUES("180","Mark Anthony Asa","danverjhon@gmail.com","09757298152","0000-00-00","","Check ups","CANCELLED","26-03-22 5:26 am");
INSERT INTO appointment_history VALUES("181","Mark Anthony Asa","danverjhon@gmail.com","09757298152","2022-03-26","22:37","Check ups","DENIED","13-03-22 11:50 pm");
INSERT INTO appointment_history VALUES("182","Danver Omlang","danverjhon@gmail.com","09757298152","2022-03-26","22:36","Check ups","DENIED","13-03-22 11:50 pm");
INSERT INTO appointment_history VALUES("183","Danver Omlang","edmar.ramos623@gmail.com","09757298152","2022-03-11","22:35","Check ups","DENIED","14-03-22 12:11 am");
INSERT INTO appointment_history VALUES("184","Raymart","raymart.gahopo@gmail.com","09075647938","2022-03-11","10:55","Check Up","DENIED","14-03-22 9:07 am");
INSERT INTO appointment_history VALUES("186","Jojo","zjhyn16@gmail.com","09154919806","2022-03-25","14:30","Inquire lg","DENIED","15-03-22 10:10 pm");
INSERT INTO appointment_history VALUES("189","Raymart Gahopo","raymart.gahopo@gmail.com","09075647938","2022-03-15","12:00","Dine in","DENIED","15-03-22 10:28 pm");
INSERT INTO appointment_history VALUES("195","Raymart Gahopo","robert@gmail.com","09123456789","2022-03-24","8:00 AM to 12:00 NN","Check Up","CANCELLED","26-03-22 5:26 am");
INSERT INTO appointment_history VALUES("196","q","trisha@gmail.com","09123456789","2022-04-06","8:00 AM to 12:00 NN","Vision Therapy","FINISH","25-03-22 8:45 am");
INSERT INTO appointment_history VALUES("197","123123213","robert@gmail.com","09123456789","2022-04-01","8:00 AM to 12:00 NN","Check Up","DENIED","26-03-22 1:20 pm");
INSERT INTO appointment_history VALUES("199","Raymart Gahopo","maurine.seminiano0707@gmail.com","09123123123","2022-03-29","1:00 PM to 5:00 PM","Eye Exams","DENIED","25-03-22 12:16 pm");
INSERT INTO appointment_history VALUES("200","Robert","robertvitalicia@gmail.com","09958252990","2022-03-26","08:00 AM","Vision Tests","DENIED","26-03-22 4:41 am");
INSERT INTO appointment_history VALUES("201","Robert","robertvitalicia@gmail.com","09958252990","2022-03-26","08:30 AM","Vision Tests","FINISH","26-03-22 4:47 am");
INSERT INTO appointment_history VALUES("204","Prescila","kdg110199@gmail.com","09075659239","2022-03-27","10:00 AM","Request Certification","FINISH","26-03-22 7:46 pm");



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
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO archive_products VALUES("42","FUWA CELLU ","FC2015T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501730_FUWA CELLU FC2015T-9S.jpg","SPECIFICATIONS

BRAND FUWA CELLU
P/No. FC2015T-9S 
MATERIAL Resin 
SIZE 51?18?140?41
");
INSERT INTO archive_products VALUES("42","FUWA CELLU ","FC2015T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","10","1647501730_FUWA CELLU FC2015T-9S.jpg","SPECIFICATIONS

BRAND FUWA CELLU
P/No. FC2015T-9S 
MATERIAL Resin 
SIZE 51?18?140?41
");



CREATE TABLE `archive_supplier` (
  `supp_id` int(255) NOT NULL AUTO_INCREMENT,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO archive_supplier VALUES("8","Gail Co.","Gail Delima","09123123123","gail@gmail.com","123123123");



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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO archive_users_account VALUES("27","marl123","c1c2b5b9d337b912c1ea7a84131e8ef3","Umbao","Marl","Vitalicia","09123456789","marl.umbao@gmail.com","Sales Staff");
INSERT INTO archive_users_account VALUES("29","danver123","c1c2b5b9d337b912c1ea7a84131e8ef3","Omlang","Danver John","Pogi","09560492266","danver.john.omlang@gmail.com","Admin");



CREATE TABLE `client_inquiries` (
  `inquiries_id` int(200) NOT NULL AUTO_INCREMENT,
  `inquiries_name` varchar(100) NOT NULL,
  `inquiries_email` varchar(100) NOT NULL,
  `inquiries_subject` varchar(100) NOT NULL,
  `inquiries_message` varchar(1000) NOT NULL,
  `inquiries_backdate` datetime NOT NULL DEFAULT current_timestamp(),
  `inquiries_status` varchar(255) DEFAULT '2',
  PRIMARY KEY (`inquiries_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_inquiries VALUES("5","ROBERT","daday0012@gmail.com","Product","Good product","2022-03-24 14:21:37","1");
INSERT INTO client_inquiries VALUES("6","Raymart","raymart.gahopo@gmail.com","Product","Good quality product","2022-03-24 14:21:37","1");
INSERT INTO client_inquiries VALUES("7","GAHOPO","raymart.gahopo@gmail.com","Product","Sample ","2022-03-24 14:22:57","1");
INSERT INTO client_inquiries VALUES("8","Raymart Gahopo","raymart.gahopo@gmail.com","Service","Try lang","2022-03-24 14:33:05","1");
INSERT INTO client_inquiries VALUES("9","Raymart Gahopo","raymart.gahopo@gmail.com","Service","sample","2022-03-24 18:12:20","1");
INSERT INTO client_inquiries VALUES("10","Raymart Gahopo","raymart.gahopo@gmail.com","Service","try lang muna","2022-03-24 18:22:40","1");
INSERT INTO client_inquiries VALUES("11","Raymart Gahopo","raymart.gahopo@gmail.com","Service","isa pa nga","2022-03-24 18:23:26","1");
INSERT INTO client_inquiries VALUES("12","Marliardo","marl@gmail.com","Hi","pwede magtanong email mo ko","2022-03-25 08:47:01","1");
INSERT INTO client_inquiries VALUES("13","Robert","robertvitalicia@gmail.com","math","hello lods reymart","2022-03-26 04:21:59","1");



CREATE TABLE `client_logs` (
  `log_id` int(200) NOT NULL AUTO_INCREMENT,
  `log_userid` varchar(100) NOT NULL,
  `log_username` varchar(100) NOT NULL,
  `log_activity` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_time` time NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_logs VALUES("93","RNL-W22030","marliardo","signup","0000-00-00","05:55:39");
INSERT INTO client_logs VALUES("94","RNL-W22031","raymart123","signup","0000-00-00","06:15:11");
INSERT INTO client_logs VALUES("95","RNL-W22032","trebor12345","signup","0000-00-00","09:22:49");
INSERT INTO client_logs VALUES("96","","trebor12345","Login","0000-00-00","09:24:03");
INSERT INTO client_logs VALUES("97","","trebor12345","Login","0000-00-00","09:34:22");
INSERT INTO client_logs VALUES("98","","trebor12345","Login","0000-00-00","09:35:44");
INSERT INTO client_logs VALUES("99","","trebor12345","Login","0000-00-00","09:38:25");
INSERT INTO client_logs VALUES("100","","trebor12345","Login","0000-00-00","09:40:41");
INSERT INTO client_logs VALUES("101","","trebor12345","Login","0000-00-00","09:48:22");
INSERT INTO client_logs VALUES("102","","trebor12345","Login","0000-00-00","09:56:07");
INSERT INTO client_logs VALUES("103","","trebor12345","Login","0000-00-00","10:23:51");
INSERT INTO client_logs VALUES("104","RNL-W22033","marliardo123","signup","0000-00-00","11:06:04");
INSERT INTO client_logs VALUES("105","","marliardo123","Login","0000-00-00","11:07:08");
INSERT INTO client_logs VALUES("106","","marliardo123","Login","0000-00-00","11:11:06");
INSERT INTO client_logs VALUES("107","","marliardo123","Login","0000-00-00","11:12:33");
INSERT INTO client_logs VALUES("108","","marliardo123","Login","0000-00-00","04:17:35");
INSERT INTO client_logs VALUES("109","","marliardo123","Login","0000-00-00","05:04:13");
INSERT INTO client_logs VALUES("110","","marliardo123","Login","0000-00-00","05:24:07");
INSERT INTO client_logs VALUES("111","RNL-W22034","Ella","signup","0000-00-00","05:48:14");
INSERT INTO client_logs VALUES("112","","Ella","Login","0000-00-00","05:49:29");
INSERT INTO client_logs VALUES("113","RNL-W22035","Senpaiguel","signup","0000-00-00","03:24:52");
INSERT INTO client_logs VALUES("114","","Senpaiguel","Login","0000-00-00","03:26:38");
INSERT INTO client_logs VALUES("115","","Senpaiguel","Login","0000-00-00","03:40:51");



CREATE TABLE `client_user` (
  `client_id` varchar(100) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_secquest` varchar(255) NOT NULL,
  `confirm` varchar(500) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user VALUES("RNL-W22030","marliardo","6ff0ab5bcb67c5e594715ca52d177a8c","","");
INSERT INTO client_user VALUES("RNL-W22031","raymart123","4e91b1cbe42b5c884de47d4c7fda0555","","623df89fb9222");
INSERT INTO client_user VALUES("RNL-W22032","trebor12345","a824509a85db96261eacd348024b9f83","","");
INSERT INTO client_user VALUES("RNL-W22033","marliardo123","3bf7b04040fd65c8acb2d945992f2156","","");
INSERT INTO client_user VALUES("RNL-W22034","Ella","81dc9bdb52d04dc20036dbd8313ed055","","");
INSERT INTO client_user VALUES("RNL-W22035","Senpaiguel","202cb962ac59075b964b07152d234b70","","");



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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO client_user_info VALUES("25","RNL-W22030","","","","","0","09268040223","marliardoumbao2@gmail.com","");
INSERT INTO client_user_info VALUES("26","RNL-W22031","","","","","0","09075647938","drae.qcu@gmail.com","");
INSERT INTO client_user_info VALUES("27","RNL-W22032","john robert ","vitalicia ","rosario","1999-08-04 ","22","09958252990","robertvitalicia@gmail.com","Stalucia");
INSERT INTO client_user_info VALUES("28","RNL-W22033","","AS  ","asd","1970-01-10 ","52","09123123123","mumbao222@gmail.com","asASsAS");
INSERT INTO client_user_info VALUES("29","RNL-W22034","Prescila ","De Guzman ","Espinosa","1976-01-27 ","46","09075659239","kdg110199@gmail.com","Blk 47 Lot 5 Ph. 3 Recomville 1 Deparo 2 Caloocan city");
INSERT INTO client_user_info VALUES("30","RNL-W22035","","","","","0","09201132637","senpaiguel@gmail.com","");



CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;




CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_subj` varchar(255) NOT NULL,
  `cont_mess` varchar(255) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO contact VALUES("1","Danver Omlang","danverjhon@gmail.com","Feedback","Great Service");



CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("15","Danver Omlang","dsdsdds.com, sds","09560492266","2","Chicago Bulls Lens","2022-02-19","Makalpal");



CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_subj` varchar(20) NOT NULL,
  `feed_comments` text NOT NULL,
  `feed_rate` varchar(255) NOT NULL,
  `feedbackdate` datetime NOT NULL DEFAULT current_timestamp(),
  `client_id` varchar(255) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("4","pogi","ka","","2022-03-06 21:22:06","");
INSERT INTO feedback VALUES("5","Services","Their service is good and they approach the customer well.","","2022-03-07 10:39:36","");
INSERT INTO feedback VALUES("6","Product","Their product is well package and affordable price.","","2022-03-07 10:41:26","");
INSERT INTO feedback VALUES("7","Services","They give so much professionalism and care to the customers.","","2022-03-07 10:44:21","");
INSERT INTO feedback VALUES("8","Inquiry for Contact ","Hello, may contact lens po ba kayong may grado. Thank you!","","2022-03-12 20:36:30","");
INSERT INTO feedback VALUES("9","Service","Good services and staffs.","5","2022-03-24 03:56:29","");
INSERT INTO feedback VALUES("10","Staff","Friendly staffs and professional on their work","4","2022-03-24 04:03:28","");
INSERT INTO feedback VALUES("11","Services","worst services and staffs","1","2022-03-24 04:03:56","");
INSERT INTO feedback VALUES("12","Product","Good product with a good quality and price.","5","2022-03-24 04:05:32","");
INSERT INTO feedback VALUES("13","Services","Good services and staffs.","5","2022-03-24 04:12:32","");
INSERT INTO feedback VALUES("14","Product","The product and their services is good! I highly recommended this clinic. Thankyou","5","2022-03-25 11:46:34","");
INSERT INTO feedback VALUES("15","wow","good quality","3","2022-03-26 04:28:15","");
INSERT INTO feedback VALUES("16","wow","good quality","4","2022-03-26 04:28:39","");
INSERT INTO feedback VALUES("17","Test","So good ","5","2022-03-26 22:51:11","Senpaiguel");



CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;




CREATE TABLE `password_reset_temp` (
  `email` varchar(255) NOT NULL,
  `key` varchar(2552) NOT NULL,
  `expDate` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO password_reset_temp VALUES("maurine.seminiano0707@gmail.com","768e78024aa8fdb9b8fe87be86f647455b1a6282bf","2022-03-26 15:17:35","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO patient_distancerx VALUES("1","62306a189cd49","Distance","Altarejos, Tricia joy Magora","2001-06-02","09267736621","trishaaltarejos02001@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","test1","75/100","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","+1.2","Dr. Reese Vincent   Deborbon    ","2022-03-15","","0000-00-00","Walk-in");
INSERT INTO patient_distancerx VALUES("2","6224e8434ad52","Contact Lens","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","2","2","22","2","22","2","22","2","2","2","2","22","2","2","2","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("3","6224e8434ad52","Distance","","1997-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("4","6224e8434ad52","Distance","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("5","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_distancerx VALUES("6","RNL-W220311","Contact Lens","Altarejos, Trixy  Magora","2000-07-06","09988876654","trixyaltarejos04@gmail.com","Quezon City","asldhakshdk","70/100","1","1","11","1","11","11","1","11","1","11","1","11","1","11","1","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","Appointment");
INSERT INTO patient_distancerx VALUES("7","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","asdad111222","2022-05-26","Remove");
INSERT INTO patient_distancerx VALUES("8","623d6c06776b7","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try try again","try trytr","ttrt","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","ytu","2022-03-31","Remove");
INSERT INTO patient_distancerx VALUES("9","623d97872207e","Distance","try, try try","2022-03-26","09123456789","tr@gmail.com","try","try","try","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-26","Remove");
INSERT INTO patient_distancerx VALUES("10","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try try again","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_distancerx VALUES("11","RNL-W22032","Distance","vitalicia , john robert  rosario","1999-08-04","09958252990","robertvitalicia@gmail.com","Stalucia","","","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","Dr. john     vitalicia     ","2022-03-26","WAG KANA BUMALIK!!!","2022-04-30","Appointment");



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

INSERT INTO patient_history VALUES("1","62306a189cd49","Distance","Altarejos, Tricia joy Magora","2000-06-02","09267736628","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","test","75/100","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","+1.25","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("2","6224e8434ad52","Reading","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","1","1","11","1","11","1","11","1","11","1","1","11","1","1","1","Dr. Reese Vincent   Deborbon    ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("3","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("4","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("5","6224e8434ad52","Distance","test, test test","2022-03-01","09267736628","testemail@gmail.com","Quezon City","","","","","","","","","","","","","","","","","","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","Remove");
INSERT INTO patient_history VALUES("6","6224e8434ad52","Contact Lens","test, test test","1997-03-01","09267736628","testemail@gmail.com","Quezon City","test","75/100","2","2","22","2","22","2","22","2","2","2","2","22","2","2","2","Dr. Raymart       Gahopo       ","2022-03-15","","0000-00-00","History");
INSERT INTO patient_history VALUES("7","RNL-W220311","Distance","Altarejos, Trixy  Magora","2000-07-06","09988876654","trixyaltarejos04@gmail.com","Quezon City","asldhakshdk","70/100","1","1","11","1","11","1","11","1","11","1","1","11","1","1","1","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","History");
INSERT INTO patient_history VALUES("8","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","","0000-00-00","History");
INSERT INTO patient_history VALUES("9","623bda886a47d","Distance","jlk, asdjasld jkjl","2013-07-24","09122232212","trishaaltarejos0200@gmail.com","Blk 1 lot 7 kalayaan b. Batasan hills Quezon city","asas","70/100","2","2","22","2","22","22","2","22","2","22","2","2","2","22","2","Dr. Jona  Sugabo  ","2022-03-24","asdad111","2022-05-25","History");
INSERT INTO patient_history VALUES("10","623d6c06776b7","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try try","try trytr","ttrt","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","ytu","2022-03-31","Remove");
INSERT INTO patient_history VALUES("11","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try","try","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_history VALUES("12","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_history VALUES("13","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try try again","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_history VALUES("14","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_history VALUES("15","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try try again","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","Remove");
INSERT INTO patient_history VALUES("16","623d987fad9d9","Distance","try, try try","2022-03-26","09123456789","try@gmail.com","try","trytry","try","1.2","1.2","1.2","","1.2","1.2","","1.2","","1.2","","","","","","Dr. RobertVitalicia","2022-03-25","try","2022-03-31","History");
INSERT INTO patient_history VALUES("17","RNL-W22032","Distance","vitalicia , john robert  rosario","1999-08-04","09958252990","robertvitalicia@gmail.com","Stalucia","","","1.2","1.2","1.2","1.2","1.2","","","","","","","","","","","Dr. RobertVitalicia","2022-03-26","balik ka bukas","2022-03-27","Remove");
INSERT INTO patient_history VALUES("18","RNL-W22032","Distance","vitalicia , john robert  rosario","1999-08-04","09958252990","robertvitalicia@gmail.com","Stalucia","","","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","","Dr. RobertVitalicia","2022-03-26","balik ka bukas","2022-03-27","History");
INSERT INTO patient_history VALUES("19","RNL-W22032","Distance","vitalicia , john robert  rosario","1999-08-04","09958252990","robertvitalicia@gmail.com","Stalucia","","","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","Dr. RobertVitalicia","2022-03-26","balik ka bukas","2022-03-27","History");
INSERT INTO patient_history VALUES("20","RNL-W22032","Distance","vitalicia , john robert  rosario","1999-08-04","09958252990","robertvitalicia@gmail.com","Stalucia","","","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","1.2","","","","","Dr. john     vitalicia     ","2022-03-26","WAG KANA BUMALIK!!!","2022-04-30","History");



CREATE TABLE `patients` (
  `pat_last` varchar(255) NOT NULL,
  `pat_first` varchar(255) NOT NULL,
  `pat_middle` varchar(255) NOT NULL,
  `pat_age` int(255) NOT NULL,
  `pat_sex` varchar(100) NOT NULL,
  `pat_address` varchar(100) NOT NULL,
  `pat_contact` varchar(137) NOT NULL,
  `pat_medhx` varchar(255) NOT NULL,
  `pat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO patients VALUES("RAMOS","EDMAR","CUADRO","2021","Female","002 Lydia St.","4242424","dadada","2021-12-11");
INSERT INTO patients VALUES("RAMOS","EDMAR","CUADRO","2021","Female","002 Lydia St.","4242424","dadada","2021-12-11");
INSERT INTO patients VALUES("RAMOS","EDMAR","CUADRO","2021","Female","002 Lydia St.","4242424","dadada","2021-12-11");
INSERT INTO patients VALUES("RAMOS","EDMAR","CUADRO","2021","Female","002 Lydia St.","4242424","dadada","2021-12-11");



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
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("39","OWNDAYS ","OR2042S-8S","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","7","1647501419_OWNDAYS OR2042S-8S.jpg","SPECIFICATIONS

BRAND: OWNDAYS
P/No.: OR2042S-8S 
MATERIAL: Resin
SIZE: 54?16?142?28
");
INSERT INTO product VALUES("40","OWNDAYS ","OR2027N-8A ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","8","1647501506_OWNDAYS OR2027N-8A.jpg","SPECIFICATIONS
								
BRAND: OWNDAYS 											P/No. OR2027N-8A												MATERIAL: Resin												SIZE: 51?19?143?43
");
INSERT INTO product VALUES("41","LILLYBELL","LB1008B-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","9","1647501668_Lillybell LB1008B-9S.jpg","SPECIFICATIONS
BRAND: LILLYBELL
P/No.LB1008B-9S
MATERIAL: Stainless
SIZE 56?19?145?50.4
");
INSERT INTO product VALUES("42","FUWA CELLU ","FC2015T-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","9","1647501730_FUWA CELLU FC2015T-9S.jpg","SPECIFICATIONS

BRAND FUWA CELLU
P/No. FC2015T-9S 
MATERIAL Resin 
SIZE 51?18?140?41
");
INSERT INTO product VALUES("43","GRAPH BELLE","GB2024D-9S ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","9","1647501797_Graph Belle GB2024D-9S.jpg","SPECIFICATIONS 

BRAND GRAPH BELLE
P/No. GB2024D-9S 
MATERIAL Plastic 
SIZE 52?18?140?42.7
");
INSERT INTO product VALUES("44","AIR FIT","AF1025G-9A ","Eyewear for Adults","2022-03-17","0000-00-00","1999","999","1000","Supplier","9","1647501885_Air Fit AF1025G-9A.jpg","SPECIFICATIONS
 
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
INSERT INTO product VALUES("95","","MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD","Accessories","2022-03-13","0000-00-00","100","50","50","Supplier","19","1647508460_Multi-Purpose Chain 22-inches Metal Gold.jpg","Lens Material: 
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
INSERT INTO product VALUES("104","COOPER VISION","My Day Daily Disposable","Contact Lenses","2022-03-17","2022-04-17","800","500","300","Supplier","3","1647509704_MyDay Daily Disposable.jpg","Type: Daily disposable lenses.
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



CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO products VALUES("58","Optic","Glasses"," Makapal Malutong","","1000","1500","500","Chicago Bulls Lens","0","996","1000","2022-02-18","2022-02-18");



CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

INSERT INTO sales VALUES("7","RS-620330","2021-12-01","cash","23988","12000","50000","asda");
INSERT INTO sales VALUES("8","RS-620330","2022-02-02","Remove","23988","12000","50000","sda");
INSERT INTO sales VALUES("9","RS-620330","2022-03-01","cash","23988","12000","100000","asdas");
INSERT INTO sales VALUES("10","RS-28030237","2022-03-24","Remove","9995","5000","10000","bala");
INSERT INTO sales VALUES("11","RS-3303400","2022-03-25","Remove","11994","6000","12000","gail");
INSERT INTO sales VALUES("12","RS-2530500","2022-03-25","cash","3998","2000","4000","asd");
INSERT INTO sales VALUES("13","RS-0040062","2022-03-09","cash","3998","2000","4000","sad");
INSERT INTO sales VALUES("14","RS-7233324","2022-03-18","Remove","5997","3000","6000","lala");
INSERT INTO sales VALUES("15","RS-223422","2022-03-25","Remove","3998","2000","4000","sample");
INSERT INTO sales VALUES("16","RS-933300","2022-03-25","cash","1999","1000","2000","kath");
INSERT INTO sales VALUES("17","RS-308293","2022-03-26","cash","3998","2000","5000","trish");
INSERT INTO sales VALUES("18","RS-50333036","2022-03-26","cash","3998","2000","1","");
INSERT INTO sales VALUES("19","RS-338337","2022-03-26","cash","1999","1000","1","");
INSERT INTO sales VALUES("20","RS-892733","2022-03-26","cash","1999","1000","2000","");
INSERT INTO sales VALUES("21","RS-320003","2022-03-26","cash","1999","1000","2000","treb");



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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

INSERT INTO sales_order VALUES("26","RS-28080","43","1","1999","1000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("27","RS-28233","44","1","1999","1000","AF1025G-9A ","AIR FIT","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("28","RS-28233","43","1","1999","1000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("29","RS-3206089","38","1","1999","1000","OR2041S-8S","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("30","RS-96202339","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("31","RS-96202339","48","1","1999","1000","SUN2058J-9S ","OWNDAYS ","Sunglasses","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("32","RS-2002","41","1","1999","1000","LB1008B-9S ","LILLYBELL","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("33","RS-620330","38","2","3998","2000","OR2041S-8S","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("34","RS-620330","47","10","19990","10000","AU2055T-9S ","AIR ULTEM","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("35","RS-28030237","40","3","5997","3000","OR2027N-8A ","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("36","RS-28030237","40","2","3998","2000","OR2027N-8A ","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("37","RS-3303400","39","2","3998","2000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("38","RS-3303400","43","4","7996","4000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("39","RS-2530500","40","1","1999","1000","OR2027N-8A ","OWNDAYS ","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("40","RS-2530500","50","1","1999","1000","JU3005N-0S ","JUNNI","Sunglasses","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("41","RS-0040062","45","1","1999","1000","GB2026B-9S ","GRAPH BELLE","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("42","RS-0040062","43","1","1999","1000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("43","RS-7233324","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("44","RS-7233324","47","1","1999","1000","AU2055T-9S ","AIR ULTEM","Eyewear for Adults","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("45","RS-7233324","70","1","1999","1000","RY1052/4056_47 ","Ray-Ban Junior","Eyewear for Kids","1999","0000-00-00","0");
INSERT INTO sales_order VALUES("46","RS-223422","43","1","1999","1000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("47","RS-223422","45","1","1999","1000","GB2026B-9S ","GRAPH BELLE","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("48","RS-933300","38","1","1999","1000","OR2041S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-25","0");
INSERT INTO sales_order VALUES("49","RS-32052023","38","1","1999","1000","OR2041S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("50","RS-223347","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("51","RS-223347","42","1","1999","1000","FC2015T-9S ","FUWA CELLU ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("52","RS-308293","41","1","1999","1000","LB1008B-9S ","LILLYBELL","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("53","RS-308293","46","1","1999","1000","JD2017-T ","JOHN DILLINGER","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("54","RS-2950232","95","1","100","50","MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD","","Accessories","100","2022-03-26","0");
INSERT INTO sales_order VALUES("55","RS-23223222","95","1","100","50","MULTI- PURPOSE CHAIN 22-INCHES METAL GOLD","","Accessories","100","2022-03-26","0");
INSERT INTO sales_order VALUES("56","RS-0833023","96","1","800","300","UV SANITIZER","","Accessories","800","2022-03-26","0");
INSERT INTO sales_order VALUES("57","RS-2282873","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("58","RS-2282873","43","1","1999","1000","GB2024D-9S ","GRAPH BELLE","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("59","RS-2282873","40","1","1999","1000","OR2027N-8A ","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("60","RS-50333036","42","1","1999","1000","FC2015T-9S ","FUWA CELLU ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("61","RS-50333036","41","1","1999","1000","LB1008B-9S ","LILLYBELL","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("62","RS-338337","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("63","RS-892733","39","1","1999","1000","OR2042S-8S","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");
INSERT INTO sales_order VALUES("64","RS-320003","40","1","1999","1000","OR2027N-8A ","OWNDAYS ","Eyewear for Adults","1999","2022-03-26","0");



CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO supliers VALUES("5","Chicago Bulls Lens","San Andres Bukid","09456949490","Danver ","Hakdog");



CREATE TABLE `supplier` (
  `supp_id` int(255) NOT NULL AUTO_INCREMENT,
  `supp_cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contactperson` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `supp_desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO supplier VALUES("7","Marl Inc.","Marl Umbao","09123123123","marl@gmail.com","basta");
INSERT INTO supplier VALUES("8","Gail Co.","Gail Delima","09123123123","gail@gmail.com","123123123");
INSERT INTO supplier VALUES("11","Robert Corp. ","Robert ","09123456789","robert.vitalicia@gmail.com ","try");



CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","Admin","admin");
INSERT INTO user VALUES("2","cashier","cashier","Cashier Pharmacy","Cashier");
INSERT INTO user VALUES("3","admin","admin123","Administrator","admin");



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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO users_account VALUES("21","raymart123","5c1318202d612d1689f9ae8a2e180c63","Gahopo","Raymart","Tomagan","09075647938","raymart.gahopo@gmail.com","Admin");
INSERT INTO users_account VALUES("26","gail123","c1c2b5b9d337b912c1ea7a84131e8ef3","Delima","Gail","Umbao","09123456789","gail.delima@gmail.com","Inventory Clerk");
INSERT INTO users_account VALUES("29","robert123","98f8c4739ea3d3dd3d99dcfaf2435235","vitalicia     ","john     ","robert     ","09172371273","treborvitalicia@gmail.com ","Doctor");



CREATE TABLE `users_logs` (
  `logs_id` int(11) NOT NULL AUTO_INCREMENT,
  `logs_username` varchar(255) NOT NULL,
  `logs_activity` varchar(255) NOT NULL,
  `logs_datentime` datetime NOT NULL,
  `logs_roles` varchar(255) NOT NULL,
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

INSERT INTO users_logs VALUES("103","raymart123","Login","2022-03-26 12:06:47","Admin");
INSERT INTO users_logs VALUES("104","raymart123","Login","2022-03-26 12:36:53","Admin");
INSERT INTO users_logs VALUES("105","raymart123","Logout","2022-03-26 12:38:44","Admin");
INSERT INTO users_logs VALUES("106","raymart123","Login","2022-03-26 12:38:53","Admin");
INSERT INTO users_logs VALUES("107","raymart123","Login","2022-03-26 01:01:23","Admin");
INSERT INTO users_logs VALUES("108","raymart123","Login","2022-03-26 02:17:12","Admin");
INSERT INTO users_logs VALUES("109","raymart123","Added User","2022-03-26 02:17:54","Admin");
INSERT INTO users_logs VALUES("110","raymart123","Logout","2022-03-26 02:18:02","Admin");
INSERT INTO users_logs VALUES("111","marl123","Login","2022-03-26 02:18:08","Sales Staff");
INSERT INTO users_logs VALUES("112","marl123","Logout","2022-03-26 02:19:44","Sales Staff");
INSERT INTO users_logs VALUES("113","raymart123","Login","2022-03-26 02:20:55","Admin");
INSERT INTO users_logs VALUES("114","raymart123","Login","2022-03-26 04:39:46","Admin");
INSERT INTO users_logs VALUES("115","raymart123","Logout","2022-03-26 04:42:08","Admin");
INSERT INTO users_logs VALUES("116","raymart123","Login","2022-03-26 04:42:19","Admin");
INSERT INTO users_logs VALUES("117","raymart123","Logout","2022-03-26 04:48:04","Admin");
INSERT INTO users_logs VALUES("118","raymart123","Login","2022-03-26 04:49:33","Admin");
INSERT INTO users_logs VALUES("119","raymart123","Added Patient","2022-03-26 04:52:55","Admin");
INSERT INTO users_logs VALUES("120","raymart123","Updated Patient","2022-03-26 04:53:47","Admin");
INSERT INTO users_logs VALUES("121","raymart123","Updated Patient","2022-03-26 04:55:51","Admin");
INSERT INTO users_logs VALUES("122","raymart123","Logout","2022-03-26 04:55:55","Admin");
INSERT INTO users_logs VALUES("123","raymart123","Login","2022-03-26 04:56:58","Admin");
INSERT INTO users_logs VALUES("124","raymart123","Remove Patient","2022-03-26 04:57:15","Admin");
INSERT INTO users_logs VALUES("125","raymart123","Updated Product","2022-03-26 05:00:40","Admin");
INSERT INTO users_logs VALUES("126","raymart123","Updated Product","2022-03-26 05:01:16","Admin");
INSERT INTO users_logs VALUES("127","raymart123","Remove Product","2022-03-26 05:01:27","Admin");
INSERT INTO users_logs VALUES("128","raymart123","Added Supplier","2022-03-26 05:06:13","Admin");
INSERT INTO users_logs VALUES("129","raymart123","Updated Supplier","2022-03-26 05:06:55","Admin");
INSERT INTO users_logs VALUES("130","raymart123","Remove Supplier","2022-03-26 05:07:20","Admin");
INSERT INTO users_logs VALUES("131","raymart123","Added User","2022-03-26 05:08:28","Admin");
INSERT INTO users_logs VALUES("132","raymart123","Updated User","2022-03-26 05:09:54","Admin");
INSERT INTO users_logs VALUES("133","raymart123","Remove User","2022-03-26 05:10:16","Admin");
INSERT INTO users_logs VALUES("134","raymart123","Logout","2022-03-26 05:17:52","Admin");
INSERT INTO users_logs VALUES("135","raymart123","Login","2022-03-26 05:18:05","Admin");
INSERT INTO users_logs VALUES("136","raymart123","Logout","2022-03-26 05:18:07","Admin");
INSERT INTO users_logs VALUES("137","raymart123","Login","2022-03-26 05:18:38","Admin");
INSERT INTO users_logs VALUES("138","raymart123","Logout","2022-03-26 05:18:50","Admin");
INSERT INTO users_logs VALUES("139","raymart123","Login","2022-03-26 05:20:04","Admin");
INSERT INTO users_logs VALUES("140","raymart123","Remove User","2022-03-26 05:20:13","Admin");
INSERT INTO users_logs VALUES("141","raymart123","Added User","2022-03-26 05:20:37","Admin");
INSERT INTO users_logs VALUES("142","raymart123","Logout","2022-03-26 05:20:39","Admin");
INSERT INTO users_logs VALUES("143","raymart123","Login","2022-03-26 05:24:56","Admin");
INSERT INTO users_logs VALUES("144","raymart123","Logout","2022-03-26 05:25:06","Admin");
INSERT INTO users_logs VALUES("145","raymart123","Login","2022-03-26 05:28:24","Admin");
INSERT INTO users_logs VALUES("146","raymart123","Updated User","2022-03-26 05:28:36","Admin");
INSERT INTO users_logs VALUES("147","raymart123","Logout","2022-03-26 05:28:40","Admin");
INSERT INTO users_logs VALUES("148","raymart123","Login","2022-03-26 05:31:07","Admin");
INSERT INTO users_logs VALUES("149","raymart123","Logout","2022-03-26 05:31:57","Admin");
INSERT INTO users_logs VALUES("150","raymart123","Login","2022-03-26 05:33:50","Admin");
INSERT INTO users_logs VALUES("151","raymart123","Updated User","2022-03-26 05:34:16","Admin");
INSERT INTO users_logs VALUES("152","raymart123","Updated User","2022-03-26 05:34:38","Admin");
INSERT INTO users_logs VALUES("153","raymart123","Logout","2022-03-26 05:34:42","Admin");
INSERT INTO users_logs VALUES("154","robert123","Login","2022-03-26 05:34:47","Admin");
INSERT INTO users_logs VALUES("155","robert123","Updated User","2022-03-26 05:35:04","Admin");
INSERT INTO users_logs VALUES("156","robert123","Logout","2022-03-26 05:35:07","Admin");
INSERT INTO users_logs VALUES("157","raymart123","Login","2022-03-26 05:35:43","Admin");
INSERT INTO users_logs VALUES("158","raymart123","Updated User","2022-03-26 05:36:19","Admin");
INSERT INTO users_logs VALUES("159","raymart123","Logout","2022-03-26 05:36:22","Admin");
INSERT INTO users_logs VALUES("160","raymart123","Login","2022-03-26 05:42:59","Admin");
INSERT INTO users_logs VALUES("161","raymart123","Login","2022-03-26 01:15:17","Admin");
INSERT INTO users_logs VALUES("162","raymart123","Login","2022-03-26 01:31:43","Admin");
INSERT INTO users_logs VALUES("163","raymart123","Updated Patient","2022-03-26 02:00:01","Admin");
INSERT INTO users_logs VALUES("164","raymart123","Updated Patient","2022-03-26 02:06:47","Admin");
INSERT INTO users_logs VALUES("165","raymart123","Login","2022-03-26 11:21:56","Admin");

