ALTER SEQUENCE regions_id_seq RESTART WITH 1;
ALTER SEQUENCE comunas_id_seq RESTART WITH 1;
ALTER SEQUENCE users_id_seq RESTART WITH 1;
ALTER SEQUENCE rols_id_seq RESTART WITH 1;
ALTER SEQUENCE catastrofes_id_seq RESTART WITH 1;
ALTER SEQUENCE organizations_id_seq RESTART WITH 1;
ALTER SEQUENCE apoyo_economicos_id_seq RESTART WITH 1;
ALTER SEQUENCE organization_users_id_seq RESTART WITH 1;
ALTER SEQUENCE recolecciones_id_seq RESTART WITH 1;
ALTER SEQUENCE historias_id_seq RESTART WITH 1;

--Insertar Regiones
insert into regions ("nombre","created_at","updated_at") values('Arica y Parinacota',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Tarapaca',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Antofagasta',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Atacama',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Coquimbo',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Valparaiso',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Metropolitana',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('OHiggins',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Maule',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Bio-Bio',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('La Araucania',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Los Rios',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Los Lagos',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Aysen',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Magallanes',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--Insertar comunas
insert into comunas ("nombre","region_id","created_at","updated_at") values ('puente alto ',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('quinta normal',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--roles
insert into rols ("nombre","created_at","updated_at") values ('gobierno',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('organizacion',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('usuario',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--USUARIO
insert into users ("nombre","apellido","rut","email","password","rol_id","comuna_id","direccion","estado","created_at","updated_at") values ('felipe','vasquez','123456789','felipe.vasquez.r@usach.cl','hola',3,1,'por ahi',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('JUAN','PEREZ','987654321','juan.perez@usach.cl','chao',3,2,'POR ACA',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--catastrofes

insert into catastrofes ("user_id","comuna_id","tipo_catastrofe","descripcion","created_at","updated_at") values (1,1,1,'INCENDIO',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(2,2,2,'TERREMOTO',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--organizacion

insert into organizations ("nombre","logo","descripcion","created_at","updated_at") values ('teleton','nose que va','fundacion que ayuda a discapacitados',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('techo para chile','techito','fundacion que hace casas',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--ORGANIZATION USERS
insert into organization_users("organization_id","user_id","rol","created_at","updated_at") values (1,1,2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),(2,2,2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);


--Medidas
INSERT INTO "medidas" ("user_id", "admin_id", "organization_id", "catastrofe_id", "tipo_medida", "descripcion", "fecha_inicio", "fecha_termino", "estado", "avance", "MorphMedida_id", "MorphMedida_type", "created_at", "updated_at" ) 
VALUES(1,NULL,1,1,2,'choripanada','2000-12-17','2000-12-17',1,1,1,2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(2,null,2,2,2,'bingo','2000-12-17','2000-12-17',0,0,2,3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--Apoyo economico
insert into "apoyo_economicos" ("metaMinima", "actual", "numCuenta", "TipoCuenta", "bancoCuenta", "titularCuenta", "correoCuenta", "created_at", "updated_at")values
(1000000, 1452,143224,'rut','banco estado','pedrito','pedrito@usach.cl',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(1000,0,644397,'vista','banco santander','alberto','alberto@hotmail.com',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--gastos
insert into gastos("medida_id","descripcion","created_at","updated_at")values(1,'pago ayudantia',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--recoleccion
insert into recolecciones("metaRecoleccion","recoleccionActual","region","comuna","direccion","tipoRecoleccion","created_at","updated_at") values (1000000,500,7,2,'San Juan 456',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--depositos

insert into depositos("user_id","medida_id","rut","cantidad","fechaDeposito","documento","created_at","updated_at")values
(1,2,123456789,500000,'2000-12-17','cheque',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(2,1,324613453,12000,'2017-06-17','cheque',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--eventos
insert into eventos ("metaDinero","actualDinero","region","comuna", "direccion","created_at","updated_at")values
(15000000,1499999,7,2,'alameda 1234',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(1000,500,7,1,'matta 6367',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--historias
insert into historias("user_id","tipo_cambio","tabla","estado_antiguo","estado_nuevo","created_at","updated_at")values
(1,2,'users','antiguo','nuevo',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
(2,2,'medidas','viejo','actual',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

--passwordReset
insert into password_resets("email","token","created_at")values
('felipe.vasquez.r@usach.cl','qwerty',CURRENT_TIMESTAMP),
('valdomero.lillo@gmail.com','carbon',CURRENT_TIMESTAMP);

--RNV
insert into rnvs("user_id", "ultima_medida", "rut","nombre","correo","created_at","updated_at") values (1,1,123456789,'felipe','felipe.vasquez@usach.cl',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);