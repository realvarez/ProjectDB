ALTER SEQUENCE regions_id_seq RESTART WITH 1;
ALTER SEQUENCE comunas_id_seq RESTART WITH 1;
ALTER SEQUENCE users_id_seq RESTART WITH 1;
ALTER SEQUENCE rols_id_seq RESTART WITH 1;
ALTER SEQUENCE catastroves_id_seq RESTART WITH 1;
ALTER SEQUENCE organizations_id_seq RESTART WITH 1;
ALTER SEQUENCE apoyo_economicos_id_seq RESTART WITH 1;
ALTER SEQUENCE organization_users_id_seq RESTART WITH 1;
ALTER SEQUENCE recoleccions_id_seq RESTART WITH 1;
ALTER SEQUENCE historias_id_seq RESTART WITH 1;
ALTER SEQUENCE "tipo_catastroves_id_seq" RESTART WITH 1;


insert into "tipo_catastroves" ("tipo")values
  ('Incendio'),
  ('Terremoto'),
  ('Maremoto'),
  ('Destruccion del Mundo'),
  ('Aluvion'),
  ('Movimientos de masa'),
  ('Fenómenos atmosféricos'),
  ('Desastres biológicos'),
  ('Erupciones'),
  ('Hambruna'),
  ('Fenómenos espaciales'),
  ('Inundación'),
  ('otros');


insert into regions ("nombre","created_at","updated_at") values
('XV-Arica y Parinacota',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),--1
('I-Tarapacá',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),--2
('II-Antofagasta',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),--3
('III-Atacama',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --4
('IV-Coquimbo',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --5
('V-Valparaíso',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --6
('VI-Libertador General Bernardo OHiggins',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --7
('VII-Maule',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --8
('VIII-Bío-Bío',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --9
('IX-La Araucanía',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --10
('XIV-Los Rios',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --11
('X-Los Lagos',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),  --12
('XI-Aysen del General Carlos Ibáñes del Campo',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --13
('XII-Magallanes y Antartica Chilena',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)), --14
('XIII-Metropolitana de Santiago',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));--15


--Insertar comunas
insert into comunas ("nombre","region_id","created_at","updated_at") values
('Arica',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Camarones',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Putre',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('General Lagos',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Iquique',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Alto Hospicio',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Pozo Almonte',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Camiña',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Colchane',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Huara',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Pica',2,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Antofagasta',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Mejillones',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Sierra Gorda',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Taltal',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Calama',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Ollague',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Pedro de Atacama',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Tocopilla',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('María Elena',3,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Copiapo',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Caldera',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Tierra Amarilla',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Chañaral',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Diego de Almagro',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Vallenar',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Alto del Carmen',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Freirina',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Huasco',4,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Serena',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Coquimbo',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Andacollo',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Higuera',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Paihuano',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Vicuña',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Illapel',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Canela',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Los Vilos',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Salamanca',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Ovalle',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Combarbalá',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Monte Patria',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Punitaqui',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Río Hurtado',5,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Valparaiso',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Casablanca',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Concón',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Juan Fernández',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Puchuncaví',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quintero',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Viña del Mar',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Isla de Pascua',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Los Andes',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Calle Larga',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Rinconada',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Esteban',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Ligua',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Cabildo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Papudo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Petorca',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Zapallar',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quillota',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Calera',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Hijuelas',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Cruz',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Nogales',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Antonio',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Algarrobo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Cartagena',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('El Quisco',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('El Tabo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Santo Domingo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Felipe',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Catemu',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Llaillay',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Panquehue',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Putaendo',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Santa Maria',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quilpué',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Limache',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Olmué',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Villa Alemana',6,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
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
('Santiago',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Cerrillos',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Cerro Navia',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Conchalí',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('El Bosque',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Estación Central',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Huechuraba',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Independencia',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Cisterna',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Florida',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Granja',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Pintana',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('La Reina',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Las Condes',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lo Barnechea',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lo Espejo',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lo Prado',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Macul',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Maipú',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Ñuñoa',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Pedro Aguirre Cerda',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Santiago',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Peñalolén',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Providencia',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Pudahuel',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quilicura',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Quinta Normal',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Recoleta',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Renca',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Joaquín',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Miguel',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Ramón',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Vitacura',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Puente Alto',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Pirque',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San José de Maipo',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Colina',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Lampa',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Til Til',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Bernardo',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Buin',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Calera de Tango',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Paine',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Melipilla',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Alhué',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Curacaví',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('María Pinto',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('San Pedro',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Talagante',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('El Monte',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Isla de Maipo',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Padre Hurtado',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Peñaflor',15,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));


--roles
insert into rols ("nombre","created_at","updated_at") values
('Gobierno',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Usuario',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Miembro Organizacion',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Administrador Organizacion',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));
--Users
insert into users ("nombre","apellido","rut","email","password","rol_id","comuna_id","direccion","estado","created_at","updated_at") values
('Felipe','Vasquez','195467858','felipe.vasquez.r@usach.cl','123456789Aa',3,29,'San Carlos 274',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Juan','Perez','987654321','juan.perez@usach.cl','password',3,30,'Radal 1750',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
('Baldomero','Lillo','56748274','baldomero.lillo@gmail.com','1234',3,18,'Carlos Causino 89',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Catastrofes
insert into catastroves ("user_id","comuna_id","tipo_catastrove_id","descripcion","titulo","created_at","updated_at") values
(1,1,1,'Un gran incendio azota este lugar, dejando una gran cantidad de damnificados,bla blablablablablablablablablablablablablablablablablablablablablabla','incendio en este lugar',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,2,2,'Un gran terremota azota este lugar, dejando una gran cantidad de damnificados,bla blablablablablablablablablablablablablablablablablablablablablabla','Gran terremoto en otro lugar',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

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
insert into "medidas" ("user_id", "admin_id", "organization_id", "catastrove_id", "descripcion", "fecha_inicio", "fecha_termino", "estado", "avance", "MorphMedida_id", "MorphMedida_type","titulo", "created_at", "updated_at" )
values
(1,NULL,1,1,'choripanada','2000-12-17','2000-12-17',1,1,2,'App/Eventos','Venta de Choripanes',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,NULL,2,2,'colecta junta vecinos','2000-12-17','2000-12-17',0,0,1,'App/Recolecciones','Recoleccion de insumos',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Apoyo economico
insert into "apoyo_economicos" ("metaMinima", "actual", "numCuenta", "TipoCuenta", "bancoCuenta", "titularCuenta", "correoCuenta", "created_at", "updated_at")values
(1000000, 1452,143224,'rut','banco estado','pedrito','pedrito@usach.cl',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(1000,0,644397,'vista','banco santander','alberto','alberto@hotmail.com',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Gastos
insert into gastos("medida_id","descripcion","comuna_id","created_at","updated_at")values
(1,'pago ayudantia',30,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Recoleccion
/*insert into recoleccions("metaRecoleccion","recoleccionActual","region","comuna_id","direccion","tipoRecoleccion","created_at","updated_at") values
(1000000,500,'Region Metropolitana',120,'San Juan 456',1,CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));
*/
/*--Depositos
insert into depositos("user_id","medida_id","rut","cantidad","fechaDeposito","documento","created_at","updated_at")values
(1,2,123456789,500000,'2000-12-17','cheque',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,1,324613453,12000,'2017-06-17','cheque',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));
*/

--Eventos
insert into eventos ("metaDinero","actualDinero","comuna_id", "direccion","created_at","updated_at")values
(15000000,1499999,150,'Alameda 1234',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(1000,500,5,'Matta 6367',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--Historias
insert into historias("user_id","tipo_cambio","tabla","estado_antiguo","estado_nuevo","created_at","updated_at")values
(1,2,'users','antiguo','nuevo',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(2,2,'medidas','viejo','actual',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--passwordReset
insert into password_resets("email","token","created_at")values
('felipe.vasquez.r@usach.cl','qwerty',CURRENT_TIMESTAMP(0)),
('baldomero.lillo@gmail.com','carbon',CURRENT_TIMESTAMP(0));

--voluntariados
insert into voluntariados ("metaVoluntarios", "voluntariosActuales", "duracionDias","comuna_id","direccion","created_at","updated_at") values
(100,50,10,70,'Miguel Aguirre 1499',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0)),
(43,40,15,1,'Balmaceda 1010',CURRENT_TIMESTAMP(0),CURRENT_TIMESTAMP(0));

--tipoCatastroves
