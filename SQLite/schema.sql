Create Table personas(
    id INTEGER PRIMARY KEY,
	nombre varchar(50),
	email varchar(50),
	telefono int(15)
);

Insert into personas(nombre,email,telefono)
values
('persona1','p1@gmail.com', 7712046855),
('persona2','p2@gmail.com', 7712046866),
('persona3','p3@gmail.com', 7712046833);