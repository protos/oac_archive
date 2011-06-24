USE `oac_archive`;

START TRANSACTION;

insert into users (username, full_name, password) values ("b_taylor", "B Taylor", MD5('oac'));
insert into users (username, full_name, password) values ("d_de_barra", "Donal De Barra", MD5('oac'));
insert into users (username, full_name, password) values ("j_carroll", "J Carroll", MD5('oac'));
insert into users (username, full_name, password) values ("p_laban", "P Laban", MD5('oac'));
insert into users (username, full_name, password) values ("other", "Other", MD5('oac'));


insert into compilers (user_id, name) values (1, "B_Taylor");
insert into compilers (user_id, name) values (2, "D_De_Barra");
insert into compilers (user_id, name) values (3, "J_Carroll");
insert into compilers (user_id, name) values (4, "P_Laban");
insert into compilers (user_id, name) values (5, "Other");

insert into audio_album_types (name) values ("Cassette");
insert into audio_album_types (name) values ("Reel-to-reel Multi-track");
insert into audio_album_types (name) values ("Reel-to-reel Continuous");
insert into audio_album_types (name) values ("78 Record");
insert into audio_album_types (name) values ("45 Record");
insert into audio_album_types (name) values ("33 LP Record");
insert into audio_album_types (name) values ("CD");
insert into audio_album_types (name) values ("DVD");
insert into audio_album_types (name) values ("DAT");
insert into audio_album_types (name) values ("Mini Disk");
insert into audio_album_types (name) values ("Digital Recording");
insert into audio_album_types (name) values ("Other");

insert into doc_types (name) values ("Book");
insert into doc_types (name) values ("Journal");
insert into doc_types (name) values ("Newspaper");
insert into doc_types (name) values ("Document");
insert into doc_types (name) values ("Report");
insert into doc_types (name) values ("Brochure");
insert into doc_types (name) values ("Sleeve Notes");
insert into doc_types (name) values ("Keywords");
insert into doc_types (name) values ("Manuscript");
insert into doc_types (name) values ("Thesis");
insert into doc_types (name) values ("Other");

insert into doc_languages (name) values ("English");
insert into doc_languages (name) values ("Irish");
insert into doc_languages (name) values ("Various");
insert into doc_languages (name) values ("Other");

insert into photo_types (name) values ("TIFF");
insert into photo_types (name) values ("Photograph");
insert into photo_types (name) values ("Postcard");
insert into photo_types (name) values ("JPEG");
insert into photo_types (name) values ("Other");

insert into video_types (name) values ("MPEG");
insert into video_types (name) values ("DVD");
insert into video_types (name) values ("Video CD");
insert into video_types (name) values ("Video");
insert into video_types (name) values ("AVI");
insert into video_types (name) values ("Film");
insert into video_types (name) values ("Other");

insert into map_types (name) values ("Digital");
insert into map_types (name) values ("Paper");
insert into map_types (name) values ("Digital Printout");
insert into map_types (name) values ("Book");
insert into map_types (name) values ("Other");

insert into login_levels (name) values ("general");
insert into login_levels (name) values ("online");
insert into login_levels (name) values ("admin");


COMMIT;








