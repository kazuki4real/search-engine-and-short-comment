create table article (
  id int(11) not null auto_increment primary key,
  a_title varchar(255) not null,
  a_text text not null,
  a_author varchar(255) not null,
  a_date datetime not null
);

insert into article (a_title, a_text, a_author, a_date) values ('hello guys', 'my first post', 'kazuki', now());
insert into article (a_title, a_text, a_author, a_date) values ('hello guys', 'my second post', 'Yamada', now());
insert into article (a_title, a_text, a_author, a_date) values ('Whats up folks', 'my third post', 'Okada', now());
insert into article (a_title, a_text, a_author, a_date) values ('Whats up folks this is the latest post', 'my fourth post', 'Kazuki Kitada', now());
insert into article (a_title, a_text, a_author, a_date) values ('Good Morning everyone', 'my fifth post and the very latest', 'Sayuri Kitada', now());