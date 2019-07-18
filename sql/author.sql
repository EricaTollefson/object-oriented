-- The statement below sets the collation of the database to utf8
ALTER DATABASE etollefson CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- create the author entity
create table author(
	authorId binary(16) not null,
	authorAvatarUrl varchar(255),
	authorActivationToken char(32),
	authorEmail varchar(128) not null,
	authorHash char(97) not null,
	authorUsername varchar(32) not null,
	unique(authorEmail),
	unique(authorUsername),
	INDEX(authorEmail),
	primary key(authorId)
);
