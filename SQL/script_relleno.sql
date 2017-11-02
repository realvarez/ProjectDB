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
insert into regions ("nombre","created_at","updated_at") values
('Arica y Parinacota',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Tarapaca',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Antofagasta',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Atacama',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Coquimbo',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Valparaiso',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('OHiggins',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Maule',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Bio-Bio',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Araucania',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Los Rios',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Los Lagos',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Aysen',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Magallanes',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Metropolitana',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));


--Insertar comunas
insert into comunas ("nombre","region_id","created_at","updated_at") values 
('Arica',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Camarones',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Iquique',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Alto Hospicio',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Antofagasta',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Mejillones',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Copiapo',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Caldera',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Serena',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Coquimbo',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Valparaiso',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Casablanca',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Rancagua',7,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Codegua',7,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Talca',8,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Constitucion',8,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Concepcion',9,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lota',9,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Temuco',10,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Carahue',10,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Valdivia',11,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Corral',11,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Puerto Montt',12,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Calbuco',12,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Coyhaique',13,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lago Verde',13,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Punta Arenas',14,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Laguna Blanca',14,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Puente Alto ',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quinta Normal',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--roles
insert into rols ("nombre","created_at","updated_at") values
('Gobierno',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Organizacion',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Usuario',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Users
insert into users ("nombre","apellido","rut","email","password","rol_id","comuna_id","direccion","estado","created_at","updated_at") values
('Felipe','Vasquez','195467858','felipe.vasquez.r@usach.cl','123456789Aa',3,29,'San Carlos 274',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Juan','Perez','987654321','juan.perez@usach.cl','password',3,30,'Radal 1750',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Baldomero','Lillo','56748274','baldomero.lillo@gmail.com','1234',3,18,'Carlos Causino 89',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Catastrofes
insert into catastrofes ("user_id","comuna_id","tipo_catastrofe","descripcion","created_at","updated_at") values 
(1,1,1,'incendio',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,2,2,'terremoto',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Organizacion
insert into organizations ("nombre","logo","descripcion","created_at","updated_at") values 
('teleton','nose que va','fundacion que ayuda a discapacitados',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('techo para chile','techito','fundacion que hace casas',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Organization users
insert into organization_users("organization_id","user_id","rol","created_at","updated_at") values 
(1,1,2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),(2,2,2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--RNV
insert into rnvs("user_id", "ultima_medida", "rut","nombre","correo","created_at","updated_at") values 
(1,1,123456789,'Felipe','felipe.vasquez@usach.cl',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Medidas	
insert into "medidas" ("user_id", "admin_id", "organization_id", "catastrofe_id", "tipo_medida", "descripcion", "fecha_inicio", "fecha_termino", "estado", "avance", "MorphMedida_id", "MorphMedida_type", "created_at", "updated_at" )
values 
(1,NULL,1,1,2,'choripanada','2000-12-17','2000-12-17',1,1,2,'App/Eventos',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,NULL,2,2,1,'colecta junta vecinos','2000-12-17','2000-12-17',0,0,1,'App/Recolecciones',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Apoyo economico
insert into "apoyo_economicos" ("metaMinima", "actual", "numCuenta", "TipoCuenta", "bancoCuenta", "titularCuenta", "correoCuenta", "created_at", "updated_at")values
(1000000, 1452,143224,'rut','banco estado','pedrito','pedrito@usach.cl',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(1000,0,644397,'vista','banco santander','alberto','alberto@hotmail.com',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Gastos
insert into gastos("medida_id","descripcion","created_at","updated_at")values
(1,'pago ayudantia',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Recoleccion
insert into recolecciones("metaRecoleccion","recoleccionActual","region","comuna","direccion","tipoRecoleccion","created_at","updated_at") values 
(1000000,500,'Region Metropolitana','Quinta Normal','San Juan 456',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Depositos
insert into depositos("user_id","medida_id","rut","cantidad","fechaDeposito","documento","created_at","updated_at")values
(1,2,123456789,500000,'2000-12-17','cheque',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,1,324613453,12000,'2017-06-17','cheque',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Eventos
insert into eventos ("metaDinero","actualDinero","region","comuna", "direccion","created_at","updated_at")values
(15000000,1499999,'Metropolitana','Puente Alto','Alameda 1234',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(1000,500,'Antofagasta','Antofagasta','Matta 6367',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Historias
insert into historias("user_id","tipo_cambio","tabla","estado_antiguo","estado_nuevo","created_at","updated_at")values
(1,2,'users','antiguo','nuevo',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,2,'medidas','viejo','actual',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--passwordReset
insert into password_resets("email","token","created_at")values
('felipe.vasquez.r@usach.cl','qwerty',CURRENT_TIMESTAMP(0)),
('baldomero.lillo@gmail.com','carbon',CURRENT_TIMESTAMP(0));

--voluntariados
insert into voluntariados ("metaVoluntarios", "voluntariosActuales", "duracionDias","region","comuna","direccion","created_at","updated_at") values
(100,50,10,'Araucania','Temuco','Miguel Aguirre 1499',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(43,40,15,'Arica y Parinacota','Arica','Balmaceda 1010',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));