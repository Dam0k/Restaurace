show tables;

show columns from objednavka;
show columns from rezervace;
show columns from restaurace;

insert into objednavka (name,price, count) values ('Margherita', '199', '2');
select * from objednavka;

insert into rezervace (name, email, phone, personcount, datetime, note) values ('damian', 'damian@gmail.com', '+420604612660', '6', '2023-5-1 12:25:53', 'nic');
select * from rezervace;

insert into restaurace (name, capacity, rezervace_id, objednavka_id) values ('Dam0k Pizza', '50', '1', '1');
select * from restaurace;