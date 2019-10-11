create schema ug19s2_team106_dev collate utf8_general_ci;

create table admin
(
	id int auto_increment
		primary key,
	username varchar(255) default '' not null,
	password varchar(255) default '' not null,
	email varchar(255) not null,
	phone varchar(15) null,
	created datetime null,
	modified datetime null
);

create table blog_post
(
	blog_post_id int auto_increment
		primary key,
	title varchar(255) not null,
	Date datetime not null,
	Description varchar(255) not null,
	Body varchar(255) not null,
	created datetime not null,
	modified datetime not null,
	Published tinyint(1) default 0 null,
	Archived tinyint(1) default 0 null
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
	id int auto_increment
		primary key,
	fname varchar(255) not null,
	sname varchar(255) not null,
	DOB date null,
	Address varchar(255) null,
	Phone varchar(15) null,
	Email varchar(255) null,
	Created datetime not null,
	Modified datetime not null
);

create table contractor
(
	Contractor_id int auto_increment
		primary key,
	Contractor_name varchar(255) null,
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
	Image_Content varchar(255) null,
	name varchar(255) null,
	path varchar(255) null,
	created_at date null
);

create table blog_post_image
(
	Blog_Post_image_id int auto_increment
		primary key,
	Image_id int null,
	blog_post_id int null,
	constraint Blog_Post_Image_pk_2
		unique (blog_post_id, Image_id),
	constraint Blog_Post_Image_blog_post_Post_id_fk
		foreign key (blog_post_id) references blog_post (blog_post_id),
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
	Price int null,
	Commence_Date date null,
	Duration time null,
	Job_Status varchar(255) null
);

create table job_contractor
(
	Job_Contractor_id int auto_increment
		primary key,
	Job_id int null,
	Contractor_id int null,
	constraint job_contractor_pk_2
		unique (Job_id, Contractor_id),
	constraint Job_Contractor_Contractor_id_fk
		foreign key (Contractor_id) references contractor (Contractor_id),
	constraint Job_Contractor_Job_id_fk
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
		foreign key (Post_id) references blog_post (blog_post_id)
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
	Suburb varchar(255) null,
	Review_Details varchar(255) null
);

create table service
(
	Service_id int auto_increment
		primary key,
	Service_Title varchar(255) not null,
	Service_Description varchar(255) null,
	Service_Detail text not null
);

create table service_image
(
	Service_image_id int auto_increment
		primary key,
	Image_id int null,
	Service_id int null,
	constraint Service_Image_pk_2
		unique (Service_image_id, Service_id),
	constraint Service_Image_image_Image_id_fk
		foreign key (Image_id) references image (Image_id),
	constraint Service_Image_service_Serv_id_fk
		foreign key (Service_id) references service (Service_id)
);

create table service_job
(
	Service_Job_id int auto_increment
		primary key,
	Service_id int null,
	Job_id int null,
	constraint Service_Job_pk_2
		unique (Service_id, Job_id),
	constraint Service_Job_Job_fk
		foreign key (Job_id) references job (Job_id),
	constraint Service_Job_Service_fk
		foreign key (Service_id) references service (Service_id)
);

create table transaction
(
	Transaction_id int auto_increment
		primary key,
	Payment_details varchar(255) null
);

