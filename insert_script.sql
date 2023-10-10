show tables;

show columns from objednavka;
show columns from rezervace;
show columns from restaurace;

INSERT INTO objednavka (name, price, count) VALUES ('Margherita', '199Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Quattro Formaggi', '229Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Salame', '189Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Capricciosa', '199Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Hawaii', '199Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Diavola', '209Kč', '');
INSERT INTO objednavka (name, price, count) VALUES ('Caesar salát', '79Kč', '');
select * from objednavka;

insert into rezervace (name, email, phone, personcount, datetime, note) values ('damian', 'damian@gmail.com', '+420604612660', '6', '2023-5-1 12:25:53', 'nic');
select * from rezervace;

insert into restaurace (name, capacity, rezervace_id, objednavka_id) values ('Dam0k Pizza', '50', '1', '1');
select * from restaurace;