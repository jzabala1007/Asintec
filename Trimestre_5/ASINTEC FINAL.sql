create database ASINTEC_FINAL;
use ASINTEC_FINAL;

create table if not exists USUARIOS (
idUSUARIO int(11) unsigned not null auto_increment,
idADMINISTRADOR_LOCAL INT(5) unsigned not null,
idRECEPCIONISTA INT(5) unsigned not null,
Nombres varchar(45),
Apellidos varchar(45),
Tipo_Usuario varchar(45) not null,
Dirección_Domicilio varchar(45),
Numero_Contacto int(10),
Numero_Documento int(15),
Correo_Electronico varchar(45),
Username varchar(45) not null,
Clave_Usuario varchar (45) not null,
primary key(idUSUARIO,idADMINISTRADOR_LOCAL));

show databases;
drop table USUARIOS;
describe USUARIOS;

create table if not exists TIPO_DOCUMENTO(
idTIPO_DOCUMENTO int(100) unsigned not null,
Cedula_Ciudadania int (15) not null,
Cedula_Extrageria varchar(45) not null,
primary key(idTIPO_DOCUMENTO));

create table if not exists ADMINISTRADOR_LOCAL(
idADMINISTRADOR_LOCAL int(9) unsigned not null auto_increment,
Nombres varchar(45),
Apellidos varchar(45),
Numero_Documento int (20),
Correo_Electronico varchar(45),
Numero_Contacto int(10),
Dirección_Residencia varchar(45),
primary key(idADMINISTRADOR_LOCAL));
drop table ADMINISTRADOR_LOCAL;
describe ADMINISTRADOR_LOCAL;
select *from ADMINISTRADOR_LOCAL;

insert into ADMINISTRADOR_LOCAL (idADMINISTRADOR_LOCAL, Nombres, Apellidos, Numero_Documento, Correo_Electronico, Numero_Contacto, Dirección_Residencia)
           values(NULL, 'Ronald', 'Posada Daza','1524556546','ronald@posada.net','354564884684','Carrera 89# 189-90'),
				 (NULL, 'Julio', 'Zabala ','66525684','julio@zabala.com','6562325354','Carrera 65# 45-01'),
                 (NULL, 'Jhon', 'Godoy Romero','1011325666','jhon@godoy.net','33225662554','calle 78# 56-23');
           
create table if not exists RECEPCIONISTA(
idRECEPCIONISTA int (9) unsigned not null auto_increment,
Nombres varchar(45),
Apellidos varchar(45),
Numero_Documento int (20),
Correo_Electronico varchar(45),
Numero_Contacto int(10),
Dirección_Residencia varchar(45),
primary key(idRECEPCIONISTA));
drop table RECEPCIONISTA;
describe RECEPCIONISTA;
select *from RECEPCIONISTA;

insert into RECEPCIONISTA (idRECEPCIONISTA, Nombres, Apellidos, Numero_Documento, Correo_Electronico, Numero_Contacto, Dirección_Residencia)
           values(NULL, 'Ronald', 'Posada Daza','1524556546','ronald@posada.net','354564884684','Carrera 89# 189-90'),
				 (NULL, 'Julio', 'Zabala ','66525684','julio@zabala.com','6562325354','Carrera 65# 45-01'),
                 (NULL, 'Jhon', 'Godoy Romero','1011325666','jhon@godoy.net','33225662554','calle 78# 56-23');

create table if not exists PROVEEDOR(
idPROVEEDOR int (9) unsigned not null auto_increment,
Nombres varchar (45),
Apellidos varchar (45),
Numero_Contacto int (10),
Correo_Electronico varchar (45),
Dirección_Empresa varchar (45),
Nit_Proveedor varchar (20),
primary key (idPROVEEDOR));
drop table PROVEEDOR;
describe PROVEEDOR;
select *from PROVEEDOR;

insert into PROVEEDOR(idPROVEEDOR, Nombres, Apellidos, Numero_Contacto, Correo_Electronico, Dirección_Empresa, Nit_Proveedor)
values( NULL, 'Joaquin', 'Andrade Rodriguez','3253665588','joaquin@andrade.com','calle 80# 87-34', '896522544 -5'),
	  ( NULL, 'Jose', 'Portela Lopez','65853255','joose@portela.com','calle 650# 8-54', '5689484 -6'),
      ( NULL, 'Carlos', 'Patino Rodriguez','98781122','joaquin@andrade.com','calle 2# 36-03', '896522544 -7'),
      ( NULL, 'jorge', 'Polo Polo','23153545','joorge@polo.com','calle 35# 27-89', '896522544 -68'),
      ( NULL, 'viviana', 'James Torino','95355452','vivia@james.com','calle 45# 65-98', '896522544 -52'),
      ( NULL, 'teodoro', 'Murillo Velandia','335544885','teodoro@murillo.com','calle 15# 65-87', '896522544 -32'),
      ( NULL, 'lazaro', 'Carabali Osorio','015545655','lazaro@carabali.com','calle 88# 13-15', '896522544 -02'),
      ( NULL, 'ismael', 'Tenorio Rada','9558333332','ismael@tenorio.com','calle 85# 98-02', '896522544 -14'),
      ( NULL, 'judas', 'Andes Ramirez','874765552','judas@andes.com','calle 12# 02-54', '896522544 -4'),
      ( NULL, 'Admed', 'Policarpa Toro','3255685566','admed@policarpa.com','calle 56# 13-03', '896522544 -25'),
      ( NULL, 'Thanos', 'Ponchado Roa','6545588633','thanos@ponchado.com','calle 56# 25-01', '262565232 -56'),
      ( NULL, 'Lucy', 'Rios Rodriguez','0115416644','lucy@rios.com','calle 98# 75-65', '89836662 -58'),
      ( NULL, 'Lety', 'Rivas Torca','7548666652','lety@rivas.com','calle 96# 78-47', '2325654545 -63'),
      ( NULL, 'Tatiana', 'Tinama Ocoro','5952440005','tatiana@tinama.com','calle 99# 45-46', '3545898558 -45'),
      ( NULL, 'Yudi', 'Aturin Garcia','32568565978','yudi@aturin.com','calle 78# 10-25', '31231556 -7'),
      ( NULL, 'Oscar', 'Ostra Molina','2424898664','oscar@ostra.com','calle 45# 12-32', '7987845689 -54'),
      ( NULL, 'Manuel', 'Hurtado Rito','6648795656','manuel@hurtado.com','calle 68# 78-45', '7844696320 -09'),
      ( NULL, 'Nancy', 'Piraquibe Otorino','23154587565','nancy@pitraq.com','calle 54# 8-89', '5951546454 -02'),
      ( NULL, 'Julio', 'Turquis Gamez','5484856595','joaquin@andrade.com','calle 46# 88-65', '32645468484 -75'),
      ( NULL, 'Diego', 'Ardila Valvuena','323264549565','diegon@aardila.com','calle 65# 45-23', '215335115 -26');
create table if not exists FACTURAS(
idFACTURAS int unsigned not null auto_increment,
Numero_Factura int,
Fecha_Venta date,
Cantidad_Productos int,
V_Unit_Product float,
Subtotal float,
IVA float,
Total float,
primary key (idFACTURAS));

drop table FACTURAS;

create table if not exists PRODUCTOS_ALMACEN(
idPRODUCTOS_ALMACEN int unsigned not null auto_increment,
Nombre_Producto varchar(45),
Tipo_Producto varchar(45),
Caract_Producto varchar(45),
Costo_Producto_Ingreso float (8,3),
Costo_Producto_Venta float (8,3),
F_Fabric_Producto varchar(45),
Proveedor_Producto varchar(45),
primary key (idPRODUCTOS_ALMACEN));
describe PRODUCTOS_ALMACEN;
drop table PRODUCTOS_ALMACEN;
select * from PRODUCTOS_ALMACEN;

insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria USB', 'Accesorio PC', 'Memoria de almacenamiento para PC', 10.000, 12.500, '26/08/2020','ASTOR Distribuidor LTDA');
insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Funda PC','Accesorio PC','Funda Protectora para PC', 20.000, 27.500, '27/08/2020','Distri Ramirez LTDA');
      insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values ( NULL,'Estuche Celular','Accesorio Celular','Funda Protectora para celular', 8.000, 12.000, '28/08/2020','Distri Celucos S.A');
	   insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Vidrio Celular','Accesorio Celular', 'Vidrio protector de pantalla', 10.000, 15.500, '29/08/2020','Distri Celucos S.A');
      insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values ( NULL,'Mouse PC','Accesorio PC', 'Mouse Inhalambrico para PC', 20.000, 33.500, '30/08/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Teclados Led','Accesorio PC', 'Teclado iluminado para PC', 60.000, 72.500, '20/08/2020','Distri Ramirez LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Lampara Led','Accesorio PC', 'Lampara iluminaria para PC', 30.000, 45.000, '21/02/2020','Distri Ramirez LTDA');
      insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values ( NULL,'Base Ventilador','Accesorio PC', 'Base para refrigerar el PC', 80.000, 102.000, '26/03/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Protector Siliconado','Accesorio PC', 'Silicon protector para pantalla de PC', 30.000, 42.500, '06/08/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Multipuerto USB', 'Accesorio PC','Multipuertos con coneccion USB', 20.000, 32.000, '02/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Extensor Pantalla', 'Accesorio PC','Extensor para pantalla de PC en tres pantallas', 700.000, 950.300, '20/04/2020','Distri Ramirez LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Cargador PC', 'Accesorio PC','Adaptador de corriente para PC', 60.000, 72.800, '26/10/2020','Distri Celucos S.A');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Cargador Celular', 'Accesorio Celular','Adaptador de corriente para celular', 10.000, 15.500, 26/10/2020,'Distri Celucos S.A');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Stickers Teclado', 'Accesorio PC','Stickers decorativos para teclado de PC', 18.000, 22.900, '26/10/2020','Distri Ramirez LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria 16G', 'Accesorio Celular','memoria de almacenamiento para Celular', 20.000, 30.000, '20/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria 32G', 'Accesorio Celular','memoria de almacenamiento para Celular', 30.000, 40.500, '20/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria 64G', 'Accesorio Celular','memoria de almacenamiento para Celular', 40.000, 55.500, '20/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria 128G', 'Accesorio Celular','memoria de almacenamiento para Celular', 50.000, 70.800, '20/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Memoria 256G', 'Accesorio Celular','memoria de almacenamiento para Celular', '90.000', 110.000, '20/01/2020','ASTOR Distribuidor LTDA');
       insert into PRODUCTOS_ALMACEN(idPRODUCTOS_ALMACEN, Nombre_Producto, Tipo_Producto, Caract_Producto, Costo_Producto_Ingreso, Costo_Producto_Venta, F_Fabric_Producto, Proveedor_Producto)
 values( NULL,'Cable Carga Rapida', 'Accesorio Celular', 'memoria de almacenamiento para PC', 10.000, 18.000, '20/01/2020','Distri Celucos S.A');
       
create table if not exists PEDIDOS_COMPRAyVENTA(
idPEDIDOS_COMPRAyVENTA int unsigned not null auto_increment,
Tipo_Pedido varchar(45),
Cantidad_Product int,
V_Indiv_Product float,
V_Total_Product float,
Fecha_Pedido datetime,
Numero_Pedido int,
primary key (idPEDIDOS_COMPRAyVENTA));

drop table PEDIDOS_COMPRAyVENTA;

create table IF NOT exists CLIENTES(
idCLIENTES int unsigned not null auto_increment,
Nombres varchar(45),
Apellidos varchar(45),
Tipo_Documento varchar(45),
Numero_Documento int(20),
Telefono_Contacto int(10),
Correo_Electronico varchar(45),
Dirección_Residencia varchar(45),
primary key (idCLIENTES));

drop table CLIENTES;
describe CLIENTES;
select *from CLIENTES;

insert into CLIENTES (idCLIENTES, Nombres, Apellidos, Tipo_Documento, Numero_Documento, Telefono_Contacto, Correo_Electronico, Dirección_Residencia )
values( NULL, 'jiku', 'Jacinto Rodriguez','Cedula de Ciudadania','15113513513','6464313446','jiku@andrade.com','calle 840# 877-344'),
	  ( NULL, 'giovany', 'Tracala Lopez','Cedula de Ciudadania','564684435','02313166','gio@tracala.com','calle 50# 54-545'),
      ( NULL, 'dino', 'Vanegas Rodriguez','Cedula de Ciudadania','4684684483','998985655','dino@vanegas.com','calle 42# 356-053'),
      ( NULL, 'cris', 'Pilas Polo','Cedula de Ciudadania','48646845313','656566255','cris@plasss.com','calle 435# 257-859'),
      ( NULL, 'yasuri', 'yolombo Torino','Cedula de Ciudadania','846435050550','65656232','yasu@yolo.com','calle 455# 65-958'),
      ( NULL, 'teofilo', 'Quintana Velandia','Cedula de Ciudadania','056560656','65232656523','teooo@quintana.com','calle 145# 655-87'),
      ( NULL, 'libardo', 'Tutaina Osorio','Cedula de Ciudadania','9864330050','16133611','libardo@tutaina.com','calle 868# 153-15'),
      ( NULL, 'isturin', 'Tocara Rada','Cedula de Ciudadania','5443433131','121323656','isturin@tocara.com','calle 875# 988-052'),
      ( NULL, 'emily', 'Ades Ramirez','Cedula de Ciudadania','551153553','3032020055','emily@ades.com','calle 152# 052-554'),
      ( NULL, 'adriana', 'Poli Toro','Cedula de Ciudadania','543896336','464643236','adriana@poli.com','calle 556# 153-043'),
      ( NULL, 'yury', 'Poncho Roa','Cedula de Ciudadania','1464845353','164454232','yuri@poncho.com','calle 556# 255-071'),
      ( NULL, 'tuti', 'Roma Rodriguez','Cedula de Ciudadania','545845645','464131464','tuti@roma.com','calle 948# 755-655'),
      ( NULL, 'kate', 'Roca Torca','Cedula de Ciudadania','113215353','2656323232','kate@roca.com','calle 916# 71-471'),
      ( NULL, 'carla', 'kilas Ocoro','Cedula de Ciudadania','7886464889','3232666','carla@kilas.com','calle 998# 454-455'),
      ( NULL, 'jidis', 'Atena Garcia','Cedula de Ciudadania','544646513','25232665','jids@atenas.com','calle 718# 105-275'),
      ( NULL, 'bibiana', 'Costa Molina','Cedula de Ciudadania','131553555','64646964','bibiana@costaa.com','calle 458# 162-342'),
      ( NULL, 'naana', 'Jifro Rito','Cedula de Ciudadania','59595956','549593339','nana@jifro.com','calle 668# 785-455'),
      ( NULL, 'nidia', 'Porquis Otorino','Cedula de Ciudadania','556000845','568786489','nidia@prquis.com','calle 548# 68-895'),
      ( NULL, 'jairo', 'Turco Gamez','Cedula de Ciudadania','6556650000','533543848','hairo@turco.com','calle 486# 888-645'),
      ( NULL, 'diana', 'Atila Valvuena','Cedula de Ciudadania','5963341547','55555313','diana@aatila.com','calle 652# 455-263');

use ASINTEC_FINAL;
show tables;
describe clientes;
describe PRODUCTOS_ALMACEN;
select * from PRODUCTOS_ALMACEN;