
/*==============================================================*/
/* Table: REGION                                                */
/*==============================================================*/
create table REGIONS (
	ID            			SERIAL                			not null,
	NOMBRE	            	VARCHAR(255)					not null,
	CREATED_AT				TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: REGION_PK                                             */
create unique index REGIONS_PK on REGIONS (ID);

/*==============================================================*/
/* Table: COMUNA                                                */
/*==============================================================*/
create table COMUNAS (
   ID            			SERIAL                 			not null,
   REGION_ID				INTEGER							not null,
   NOMBRE          	     	VARCHAR(255)        			not null,
   CREATED_AT				TIMESTAMP WITHOUT TIME ZONE     null,
   UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
   primary key (ID)
);

/* Index: COMUNA_PK                                             */
create unique index COMUNAS_PK on COMUNAS (ID);


/*==============================================================*/
/* Table: CATASTROFE                                            */
/*==============================================================*/
create table CATASTROFES (
   ID        				SERIAL           				not null,
   USER_ID           		INTEGER                			not null,
   COMUNA_ID            	INTEGER                 		not null,
   DESCRIPCION          	VARCHAR(255)        			not null,
   TIPO_CATASTROFE      	INTEGER                 		not null,
   CREATED_AT        	    TIMESTAMP WITHOUT TIME ZONE     null,
   UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
  primary key (ID)
);

/* Index: CATASTROFE_PK                                         */
create unique index CATASTROFES_PK on CATASTROFES (ID);


/*==============================================================*/
/* Table: ROL                                            		*/
/*==============================================================*/
create table ROLS (
	ID						SERIAL							not null,
	NOMBRE					VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);
CREATE UNIQUE INDEX ROLS_PK on ROLS (ID);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS (
	ID		            	SERIAL             		 	  	not null,
	ROL_ID					INTEGER							not null,
	COMUNA_ID            	INTEGER        					not null,
	NOMBRE               	VARCHAR(255)        			not null,
	APELLIDO             	VARCHAR(255)        			not null,
	RUT                  	VARCHAR(255)        			not null,
	EMAIL                	VARCHAR(255)        			not null,
	PASSWORD             	VARCHAR(255)        			not null,
	DIRECCION            	VARCHAR(255)        			not null,
	ESTADO               	INTEGER                			not null,
	REMEMBER_TOKEN			VARCHAR(255)					null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: USUARIO_PK                                            */
create unique index USUARIO_PKS on USERS (ID);

create unique index EMAILS_UNIQUE on USERS (EMAIL);


/*==============================================================*/
/* Table: ORGANIZACION                                          */
/*==============================================================*/
create table ORGANIZATIONS (
	ID						SERIAL                 			not null,
	NOMBRE					VARCHAR(255)        			not null,
	LOGO					VARCHAR(255)        			not null,
	DESCRIPCION				VARCHAR(255)        			not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: ORGANIZACION_PK                                       */
create unique index ORGANIZATION_PK on ORGANIZATIONS (ID);

/*==============================================================*/
/* Table: ORGANIZACION_USERS                                    */
/*==============================================================*/
create table ORGANIZATION_USERS (
	ID						SERIAL                 			not null,
	ORGANIZATION_ID			INTEGER        					not null,
	USER_ID					INTEGER        					not null,
	ROL						INTEGER		        			not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: ORGANIZACION_PK                                       */
create unique index ORGANIZATION_PK_USERS on ORGANIZATION_USERS (ID);


/*==============================================================*/
/* Table: RNVS                                                  */
/*==============================================================*/
create table RNVS (
	ID           			SERIAL                 			not null,
	USER_ID           		INTEGER                 		not null,
	ULTIMA_MEDIDA           INTEGER                 		not null,
	RUT               		INTEGER        					not null,
	NOMBRE					VARCHAR(255)					not null,
	CORREO               	VARCHAR(255)        			not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
   primary key (ID)
);

/* Index: RNV_PK                                                */
create unique index RNV_PK on RNVS (ID);						

/* Index: PARTICIPA_FK                                          */
/*create  index PARTICIPA_FK on RNVS (USER_ID);					*/

/*==============================================================*/
/* Table: MEDIDAS                                               */
/*==============================================================*/

create table MEDIDAS (
	ID						SERIAL							not null,
	USER_ID					INTEGER							not null,
	ADMIN_ID				INTEGER							null,
	ORGANIZATION_ID			INTEGER							not null,
	CATASTROFE_ID			INTEGER							not null,
	TIPO_MEDIDA				INTEGER							not null,
	DESCRIPCION				VARCHAR(255)					not null,
	FECHA_INICIO			DATE							not null,
	FECHA_TERMINO			DATE							not null,
	ESTADO					INTEGER							not null,
	AVANCE					INTEGER							not null,
	"MorphMedida_id"		INTEGER							not null,
	"MorphMedida_type"		VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: MEDIDAS_PK*/
create unique index MEDIDAS_PK on MEDIDAS (ID);
/* Index: TIENE_FK_USERS_ID*/


/*==============================================================*/
/* Table: DEPOSITOS	                                    		*/
/*==============================================================*/
create table DEPOSITOS (
	ID						SERIAL							not null,
	USER_ID					INTEGER							not null,
	MEDIDA_ID				INTEGER							not null,
	RUT						INTEGER							not null,
	CANTIDAD				INTEGER							not null,
	"fechaDeposito"			DATE							not null,
	DOCUMENTO				VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key(ID)
);
/* iNDEX: DEPOSITOS_PK*/
create unique index DEPOSITOS_PK on DEPOSITOS (ID);

/*==============================================================*/
/* Table: EVENTOS	                                    		*/
/*==============================================================*/
create table EVENTOS (
	ID						SERIAL							not null,
	"metaDinero"			INTEGER							not null,
	"actualDinero"			INTEGER							not null,
	REGION					VARCHAR(255)					not null,
	COMUNA					VARCHAR(255)					not null,
	DIRECCION				VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
	
);
/* INDEX: EVENTOS_SEMI_PK*/
create unique index EVENTOS_SEMI_PK on EVENTOS (ID);

/*==============================================================*/
/* Table: GASTOS                                                */
/*==============================================================*/
create table GASTOS (
	ID		             	SERIAL                 			not null,
	MEDIDA_ID            	INTEGER                 		not null,
	DESCRIPCION          	VARCHAR(255)        			not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: GASTOS_PK                                             */
create unique index GASTOS_PK on GASTOS (ID);


/*==============================================================*/
/* Table: APOYO_ECONOMICOS                                      */
/*==============================================================*/
create table APOYO_ECONOMICOS (
	ID		             	SERIAL                 		not null,
	"metaMinima"            INTEGER                 		not null,
	ACTUAL          		INTEGER		        			not null,
	"numCuenta"				INTEGER							not null,
	"TipoCuenta"			VARCHAR(255)					not null,
	"bancoCuenta"			VARCHAR(255)					not null,
	"titularCuenta"			VARCHAR(255)					not null,
	"correoCuenta"			VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: APOYO_ECONOMICOS_PK                                             */
create unique index APOYO_ECONOMICOS_PK on APOYO_ECONOMICOS (ID);

/*==============================================================*/
/* Table: RECOLECCIONES		                                    */
/*==============================================================*/
create table RECOLECCIONES (
	ID		             	SERIAL                 			not null,
	"metaRecoleccion"      	INTEGER                 		not null,
	"recoleccionActual"  	INTEGER		        			not null,
	REGION					VARCHAR(255)					not null,
	COMUNA					VARCHAR(255)					not null,
	DIRECCION				VARCHAR(255)					not null,
	"tipoRecoleccion"		INTEGER							not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
primary key (ID)
);

/* Index: RECOLECCIONES_PK                                             */
create unique index RECOLECCIONES_SEMI_PK on RECOLECCIONES (ID);

/*==============================================================*/
/* Table: HISTORIAS		                                        */
/*==============================================================*/
create table HISTORIAS (
	ID		             	SERIAL                 			not null,
	USER_ID        			INTEGER                 		not null,
	TIPO_CAMBIO  			INTEGER		        			not null,
	TABLA					VARCHAR(255)					not null,
	ESTADO_ANTIGUO			VARCHAR(255)					not null,
	ESTADO_NUEVO			VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT				TIMESTAMP WITHOUT TIME ZONE		null,
	primary key (ID)
);

/* Index: HISTORIAS_PK                                             */
create unique index HISTORIAS_PK on HISTORIAS (ID);

/*==============================================================*/
/* Table: PASSWORD_RESETS		                                */
/*==============================================================*/
create table PASSWORD_RESETS (
	EMAIL		            VARCHAR(255)                 	not null,
	TOKEN        			VARCHAR(255)                 	not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null
);

/* INDEX: INDEX_EMAIL*/
create index INDEX_EMAIL on PASSWORD_RESETS (EMAIL);


/*==============================================================*/
/* Table: VOLUNTARIADOS		                                    */
/*==============================================================*/
create table VOLUNTARIADOS (
	ID		            	SERIAL                 			not null,
	"metaVoluntarios"      	INTEGER		                 	not null,
	"voluntariosActuales"	INTEGER							not null,
	"duracionDias"			INTEGER							not null,
	REGION					VARCHAR(255)					not null,
	COMUNA					VARCHAR(255)					not null,
	DIRECCION				VARCHAR(255)					not null,
	CREATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	UPDATED_AT          	TIMESTAMP WITHOUT TIME ZONE     null,
	primary key (ID)
);

/* INDEX: INDEX_VOLUNTARIADOS*/
create index INDEX_VOLUNTARIADOS on VOLUNTARIADOS (ID);




alter table HISTORIAS
	add foreign key (USER_ID)
		references USERS(ID)
		on delete cascade;

alter table GASTOS
	add foreign key (MEDIDA_ID)
		references APOYO_ECONOMICOS(ID)
		on delete cascade;

alter table DEPOSITOS
	add foreign key (USER_ID)
		references USERS(ID)
		on delete cascade;
		
alter table DEPOSITOS
	add foreign key (MEDIDA_ID)
		references APOYO_ECONOMICOS(ID)
		on delete cascade;

alter table MEDIDAS
	add foreign key (USER_ID)
		references USERS(ID)
		on delete cascade;

alter table MEDIDAS
	add foreign key (ORGANIZATION_ID)
		references ORGANIZATIONS(ID)
		on delete cascade;
		
alter table MEDIDAS
	add foreign key (ADMIN_ID)
		references USERS(ID)
		on delete cascade;

alter table MEDIDAS
	add foreign key (CATASTROFE_ID)
		references CATASTROFES(ID)
		on delete cascade;
		
alter table RNVS
	add foreign key(USER_ID)
		references USERS(ID)
		on delete cascade;

alter table ORGANIZATION_USERS
	add foreign key (ORGANIZATION_ID)
		references ORGANIZATIONS (ID)
		on delete cascade;
		
alter table ORGANIZATION_USERS
	add foreign key (USER_ID)
		references USERS (ID)
		on delete cascade;
		
alter table COMUNAS
	add foreign key (REGION_ID)
		references REGIONS (ID)
		on delete cascade;
	 
alter table CATASTROFES
	add foreign key (USER_ID)
		references USERS (ID)
		on delete cascade;

alter table CATASTROFES
	add foreign key (COMUNA_ID)
		references COMUNAS (ID)
		on delete cascade;

alter table USERS
	add foreign key (ROL_ID)
		references ROLS (ID)
		on delete cascade;
		
alter table USERS
	add foreign key (COMUNA_ID)
		references COMUNAS (ID)
		on delete cascade;
/*---------------------------------------------------------------------------------------------------------------------------*/

