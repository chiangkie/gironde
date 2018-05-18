-- role
create table glt_role(
	id 			int unsigned auto_increment,
	rolename	varchar(50) not null,
	description	varchar(200) not null,
	permission_id int unsigned not null,
	userlist		varchar(200) not null,
	create_time  timestamp DEFAULT CURRENT_TIMESTAMP,
	update_time  timestamp ,
	operator    varchar(50) not null,
	primary key (id)

)engine=innodb default charset=utf8;

-- permission
create table glt_permission(
	id 			int unsigned auto_increment,
	role_id  	int unsigned not null,	
	pname	    varchar(50),
	field       varchar(200),
	create_time  timestamp DEFAULT CURRENT_TIMESTAMP,
	update_time  timestamp ,
	operator    varchar(50) not null,
	primary key (id)

)engine=innodb default charset=utf8;

-- adminlist
create table glt_adminlist(
	id 			int unsigned auto_increment,
	name    	varchar(20) unique not null,	
	password	varchar(50) not null,
	sex       	tinyint	  default 1,
	phone  		varchar(11) unique not null,
	email		varchar(50) unique default null,
	role_id		int unsigned not null,
	status		tinyint default 1,
	comment		varchar(200) default null,
	create_time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	update_time  TIMESTAMP ,
	operator    varchar(50) not null,
	primary key (id)

)engine=innodb default charset=utf8;

--article
create table glt_article(
	id 			int unsigned auto_increment,
	title		varchar(200) not null,
	abbrtitle   varchar(100),
	columnclass       varchar(50),
	articleclass varchar(50),
	sortid    int unsigned default null ,
	keyword   varchar(100),
	summary   varchar(200),
	author    varchar(20),
	ref       varchar(20),
	iscomment tinyint(1),
	thubnail  varchar(100),
	content   text,
	create_time timestamp DEFAULT CURRENT_TIMESTAMP,
	modify_time timestamp ,
	views int(10) unsigned default 0,
	status tinyint default 0,
	primary key (id)

)engine=innodb default charset=utf8; 




{
"model_id":[
{"model_id":["添加","修改","查看","审核","只能操作自己发布的"],"model_id":["添加","修改","查看","审核","只能操作自己发布的"]}
]
}