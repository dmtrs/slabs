use slabs;
insert into `slabs_user` values (NULL, 'admin', 'Administrator Tron', sha1('4cac33f104ec8admin'), 'admin@encom.com');

insert into `slabs_status` VALUES (NULL, 'open','F');
insert into `slabs_status` VALUES (NULL, 'closed','F');

insert into `slabs_priority` values (NULL, 'Low', 'F');
insert into `slabs_priority` values (NULL, 'Medium', 'F');
insert into `slabs_priority` values (NULL, 'High', 'F');

insert into `slabs_service_category` values (NULL, 'Software');
insert into `slabs_service_category` values (NULL, 'Hardware');
