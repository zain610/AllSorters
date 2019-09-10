create schema ug19s2_team106_dev collate utf8_general_ci;

create table admin
(
	Admin_username varchar(255) not null
		primary key,
	Password varchar(255) not null,
	Admin_Email varchar(255) null,
	Admin_Phone int null
);

create table blog_post
(
	Post_id int auto_increment
		primary key,
	Title varchar(255) not null,
	Date datetime null,
	Description varchar(255) null,
	Post_Content varchar(255) null
);

create table book_selling
(
	Book_Title varchar(255) null,
	Book_id int auto_increment
		primary key,
	Description varchar(255) null,
	Price int not null
);

create table client
(
	Client_id int auto_increment
		primary key,
	Client_fname varchar(255) not null,
	Client_sname varchar(255) not null,
	Client_DOB date null,
	Client_Addr varchar(255) null,
	Client_Phone int null,
	Client_Email varchar(255) null
);

create table contractor
(
	Contractor_id int auto_increment
		primary key,
	Contractor_name varchar(255) null,
	Contractor_job varchar(255) null,
	Rate int not null
);

create table gallery_page
(
	BA_Image_id int auto_increment
		primary key,
	Date datetime null,
	Image_Attribute varchar(255) null,
	Suburb int null,
	Image_Comment varchar(255) null
);

create table home_page
(
	Home_id int not null
		primary key,
	Content varchar(255) null
);

create table image
(
	Image_id int auto_increment
		primary key,
	Image_Content varchar(255) null
);

create table blog_post_image
(
	Blog_Post_image_id int auto_increment
		primary key,
	Image_id int null,
	Post_id int null,
	constraint Blog_Post_Image_pk_2
		unique (Post_id, Image_id),
	constraint Blog_Post_Image_blog_post_Post_id_fk
		foreign key (Post_id) references blog_post (Post_id),
	constraint Blog_Post_Image_image_Image_id_fk
		foreign key (Image_id) references image (Image_id)
);

create table gallery_page_image
(
	BA_Image_id int auto_increment
		primary key,
	Image_id int not null,
	constraint Gallery_Page_Image_pk_2
		unique (Image_id),
	constraint Gallery_Page_Image_gallery_page_BA_Image_id_fk
		foreign key (BA_Image_id) references gallery_page (BA_Image_id),
	constraint Gallery_Page_Image_image_Image_id_fk
		foreign key (Image_id) references image (Image_id)
);

create table job
(
	Job_id int auto_increment
		primary key,
	Quote_id int not null,
	Price int null,
	Commence_Date date null,
	Duration time null,
	Job_Status varchar(255) null,
	client_id int not null,
	constraint Job_pk_Quote_id
		unique (Quote_id),
	constraint client_id
		foreign key (client_id) references client (Client_id)
);

create table job_contractor
(
	Job_id int auto_increment
		primary key,
	Contractor_id int not null,
	constraint Job_Contractor_pk_2
		unique (Contractor_id),
	constraint Job_Contractor_Contractor_id_fk
		foreign key (Contractor_id) references contractor (Contractor_id),
	constraint Job_Contractor_job_id_fk
		foreign key (Job_id) references job (Job_id)
);

create table post_comment
(
	Post_Comment_id int auto_increment
		primary key,
	User_Name varchar(255) null,
	User_Email varchar(255) null,
	Comment_Details varchar(255) null,
	Post_id int null,
	constraint Post_Comment_pk_2
		unique (Post_id),
	constraint Post_Comment_blog_post_Post_id_fk
		foreign key (Post_id) references blog_post (Post_id)
);

create table request
(
	Request_No int auto_increment
		primary key,
	Request_Email varchar(255) not null,
	Cust_Fname varchar(255) null,
	Cust_Sname varchar(255) null,
	Subscription varchar(255) null,
	constraint Request_pk_2
		unique (Request_Email)
);

create table review
(
	Review_id int auto_increment
		primary key,
	Client_Name varchar(255) not null,
	Month_Year datetime null,
	Suburb int null,
	Review_Details varchar(255) null
);

create table service
(
	Serv_id int auto_increment
		primary key,
	Serv_Title varchar(255) not null,
	Serv_Description varchar(255) null,
	Serv_Detail varchar(255) not null
);

create table job_service
(
	Job_id int auto_increment
		primary key,
	Serv_id int not null,
	constraint Job_Service_pk_2
		unique (Serv_id),
	constraint Job_Service_job_Job_id_fk
		foreign key (Job_id) references job (Job_id),
	constraint Job_Service_service_Serv_id_fk
		foreign key (Serv_id) references service (Serv_id)
);

create table service_image
(
	Serv_image_id int auto_increment
		primary key,
	Image_id int null,
	Serv_id int null,
	constraint Service_Image_pk_2
		unique (Serv_image_id, Serv_id),
	constraint Service_Image_image_Image_id_fk
		foreign key (Image_id) references image (Image_id),
	constraint Service_Image_service_Serv_id_fk
		foreign key (Serv_id) references service (Serv_id)
);

create table transaction
(
	Transaction_id int auto_increment
		primary key,
	Payment_details varchar(255) null
);

