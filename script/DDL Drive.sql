CREATE TABLE tbl_archivo (
    codigo_archivo           INTEGER NOT NULL,
    codigo_usuario_creador   INTEGER NOT NULL,
    nombre                   VARCHAR2(50) NOT NULL,
    ubicacion                VARCHAR2(100) NOT NULL,
    descripcion              VARCHAR2(200),
    tamanio                  VARCHAR2(30) NOT NULL,
    fecha_creacion           DATE NOT NULL,
    fecha_modificacion       DATE NOT NULL,
    fecha_abierto            DATE NOT NULL,
    codigo_estado            INTEGER NOT NULL,
    codigo_tipo_arhivo       INTEGER NOT NULL,
    codigo_permiso           INTEGER NOT NULL,
    codigo_empresa           INTEGER 
);

ALTER TABLE tbl_archivo ADD CONSTRAINT tbl_archivo_pk PRIMARY KEY ( codigo_archivo );

CREATE TABLE tbl_archivo_x_usuario (
    codigo_usuario   INTEGER NOT NULL,
    codigo_archivo   INTEGER NOT NULL
);

CREATE TABLE tbl_archivos_x_carpeta (
    codigo_carpeta   INTEGER NOT NULL,
    codigo_archivo   INTEGER NOT NULL
);

CREATE TABLE tbl_carpeta (
    codigo_carpeta             INTEGER NOT NULL,
    codigo_usuario_creador     INTEGER NOT NULL,
    nombre_carpeta             VARCHAR2(200),
    fecha_creacion             DATE,
    ubicacion                  VARCHAR2(200),
    codigo_carpeta_origen      INTEGER,
    tbl_estado_codigo_estado   INTEGER NOT NULL,
    codigo_empresa             INTEGER 
);

ALTER TABLE tbl_carpeta ADD CONSTRAINT tbl_carpeta_pk PRIMARY KEY ( codigo_carpeta );

CREATE TABLE tbl_categoria_plan (
    codigo_categoria   INTEGER NOT NULL,
    categoria          VARCHAR2(200)
);

ALTER TABLE tbl_categoria_plan ADD CONSTRAINT table_21_pk PRIMARY KEY ( codigo_categoria );

CREATE TABLE tbl_comentarios (
    codigo_comentario   INTEGER NOT NULL,
    codigo_usuario      INTEGER NOT NULL,
    codigo_archivo      INTEGER NOT NULL,
    comentario          VARCHAR2(200) 
);

ALTER TABLE tbl_comentarios ADD CONSTRAINT tbl_comentarios_pk PRIMARY KEY ( codigo_comentario );

CREATE TABLE tbl_continente (
    codigo_continente   INTEGER NOT NULL,
    continente          VARCHAR2(200)
);

ALTER TABLE tbl_continente ADD CONSTRAINT tbl_continente_pk PRIMARY KEY ( codigo_continente );

CREATE TABLE tbl_empresa (
    codigo_empresa                 INTEGER NOT NULL,
    nombre_empresa                 VARCHAR2(200),
    dominio                        VARCHAR2(200),
    direccion                      VARCHAR2(200),
    codigo_usuario_administrador   INTEGER NOT NULL,
    codigo_pais                    INTEGER NOT NULL
);

ALTER TABLE tbl_empresa ADD CONSTRAINT tbl_empresa_pk PRIMARY KEY ( codigo_empresa );

CREATE TABLE tbl_estado (
    codigo_estado   INTEGER NOT NULL,
    estado          VARCHAR2(200)
);

ALTER TABLE tbl_estado ADD CONSTRAINT tbl_estado_pk PRIMARY KEY ( codigo_estado );

CREATE TABLE tbl_genero (
    codigo_genero   INTEGER NOT NULL,
    genero          VARCHAR2(20)
);

ALTER TABLE tbl_genero ADD CONSTRAINT tbl_genero_pk PRIMARY KEY ( codigo_genero );

CREATE TABLE tbl_idioma (
    codigo_idioma   INTEGER NOT NULL,
    idioma          VARCHAR2(60) NOT NULL
);

ALTER TABLE tbl_idioma ADD CONSTRAINT tbl_idioma_pk PRIMARY KEY ( codigo_idioma );

CREATE TABLE tbl_pais (
    codigo_pais         INTEGER NOT NULL,
    codigo_idioma       INTEGER NOT NULL,
    pais                VARCHAR2(50) NOT NULL,
    codigo_continente   INTEGER NOT NULL
);

ALTER TABLE tbl_pais ADD CONSTRAINT tbl_pais_pk PRIMARY KEY ( codigo_pais );

CREATE TABLE tbl_permisos (
    codigo_permiso   INTEGER NOT NULL,
    permiso          VARCHAR2(30) NOT NULL
);

ALTER TABLE tbl_permisos ADD CONSTRAINT tbl_permisos_pk PRIMARY KEY ( codigo_permiso );

CREATE TABLE tbl_planes (
    codigo_plan               INTEGER NOT NULL,
    codigo_categoria          INTEGER NOT NULL,
    plan                      VARCHAR2(200),
    cantidad_almacenamiento   FLOAT,
    costo                     FLOAT
);

ALTER TABLE tbl_planes ADD CONSTRAINT tbl_planes_pk PRIMARY KEY ( codigo_plan );

CREATE TABLE tbl_tareas (
    codigo_tarea       INTEGER NOT NULL,
    codigo_usuario     INTEGER NOT NULL,
    codigo_archivo     INTEGER NOT NULL,
    codigo_sub_tarea   INTEGER,
    titulo             VARCHAR2(20) NOT NULL,
    detalle            VARCHAR2(30) NOT NULL,
    fecha              DATE
);

ALTER TABLE tbl_tareas ADD CONSTRAINT tbl_tareas_pk PRIMARY KEY ( codigo_tarea );

CREATE TABLE tbl_tipo_archivo (
    codigo_tipo_arhivo   INTEGER NOT NULL,
    tipo_archivo         VARCHAR2(20) NOT NULL
);

ALTER TABLE tbl_tipo_archivo ADD CONSTRAINT tbl_tipo_archivo_pk PRIMARY KEY ( codigo_tipo_arhivo );

CREATE TABLE tbl_usuario (
    codigo_usuario            INTEGER NOT NULL,
    codigo_genero             INTEGER NOT NULL,
    nombre                    VARCHAR2(20) NOT NULL,
    apellido                  VARCHAR2(30) NOT NULL,
    correo_electronico        VARCHAR2(100) NOT NULL,
    contrasenia               VARCHAR2(30) NOT NULL,
    fecha_nacimiento          DATE NOT NULL,
    fecha_creacion            DATE NOT NULL,
    telefono                  VARCHAR2(20),
    correo_recuperacion       VARCHAR2(50) NOT NULL,
    codigo_pais_nacimiento    INTEGER NOT NULL,
    codigo_pais_resisdencia   INTEGER NOT NULL,
    direccion                 VARCHAR2(200),
    codigo_plan               INTEGER NOT NULL,
    fecha_inicio_plan         DATE,
    fecha_fin_plan            DATE
);

ALTER TABLE tbl_usuario ADD CONSTRAINT tbl_usuario_pk PRIMARY KEY ( codigo_usuario );

CREATE TABLE tbl_usuario_x_empresa (
    codigo_empresa   INTEGER NOT NULL,
    codigo_usuario   INTEGER NOT NULL
);

CREATE TABLE tbl_usuarios_x_carpeta (
    codigo_usuario   INTEGER NOT NULL,
    codigo_carpeta   INTEGER NOT NULL
);

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_estado_fk FOREIGN KEY ( codigo_estado )
        REFERENCES tbl_estado ( codigo_estado );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_permisos_fk FOREIGN KEY ( codigo_permiso )
        REFERENCES tbl_permisos ( codigo_permiso );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_tipo_archivo_fk FOREIGN KEY ( codigo_tipo_arhivo )
        REFERENCES tbl_tipo_archivo ( codigo_tipo_arhivo );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_creador )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo_x_usuario
    ADD CONSTRAINT tbl_archivo_x_usuario_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo_x_usuario
    ADD CONSTRAINT tbl_archivo_x_usuario_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivos_x_carpeta
    ADD CONSTRAINT tbl_archivos_x_carpeta_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivos_x_carpeta
    ADD CONSTRAINT tbl_archivos_x_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta )
        REFERENCES tbl_carpeta ( codigo_carpeta );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta_origen )
        REFERENCES tbl_carpeta ( codigo_carpeta );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_estado_fk FOREIGN KEY ( tbl_estado_codigo_estado )
        REFERENCES tbl_estado ( codigo_estado );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_creador )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_comentarios_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_comentarios_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_empresa
    ADD CONSTRAINT tbl_empresa_tbl_pais_fk FOREIGN KEY ( codigo_pais )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_empresa
    ADD CONSTRAINT tbl_empresa_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_administrador )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_pais
    ADD CONSTRAINT tbl_pais_tbl_continente_fk FOREIGN KEY ( codigo_continente )
        REFERENCES tbl_continente ( codigo_continente );

ALTER TABLE tbl_pais
    ADD CONSTRAINT tbl_pais_tbl_idioma_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idioma ( codigo_idioma );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_planes
    ADD CONSTRAINT tbl_planes_tbl_categoria_plan_fk FOREIGN KEY ( codigo_categoria )
        REFERENCES tbl_categoria_plan ( codigo_categoria );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_tareas_fk FOREIGN KEY ( codigo_sub_tarea )
        REFERENCES tbl_tareas ( codigo_tarea );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_genero_fk FOREIGN KEY ( codigo_genero )
        REFERENCES tbl_genero ( codigo_genero );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_pais_fk FOREIGN KEY ( codigo_pais_nacimiento )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_pais_fkv2 FOREIGN KEY ( codigo_pais_resisdencia )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_planes_fk FOREIGN KEY ( codigo_plan )
        REFERENCES tbl_planes ( codigo_plan );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuario_x_empresa
    ADD CONSTRAINT tbl_usuario_x_empresa_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuario_x_empresa
    ADD CONSTRAINT tbl_usuario_x_empresa_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuarios_x_carpeta
    ADD CONSTRAINT tbl_usuarios_x_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta )
        REFERENCES tbl_carpeta ( codigo_carpeta );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuarios_x_carpeta
    ADD CONSTRAINT tbl_usuarios_x_carpeta_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_estado_fk FOREIGN KEY ( codigo_estado )
        REFERENCES tbl_estado ( codigo_estado );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_permisos_fk FOREIGN KEY ( codigo_permiso )
        REFERENCES tbl_permisos ( codigo_permiso );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_tipo_archivo_fk FOREIGN KEY ( codigo_tipo_arhivo )
        REFERENCES tbl_tipo_archivo ( codigo_tipo_arhivo );

ALTER TABLE tbl_archivo
    ADD CONSTRAINT tbl_archivo_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_creador )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo_x_usuario
    ADD CONSTRAINT tbl_archivo_x_usuario_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivo_x_usuario
    ADD CONSTRAINT tbl_archivo_x_usuario_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivos_x_carpeta
    ADD CONSTRAINT tbl_archivos_x_carpeta_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_archivos_x_carpeta
    ADD CONSTRAINT tbl_archivos_x_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta )
        REFERENCES tbl_carpeta ( codigo_carpeta );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta_origen )
        REFERENCES tbl_carpeta ( codigo_carpeta );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_estado_fk FOREIGN KEY ( tbl_estado_codigo_estado )
        REFERENCES tbl_estado ( codigo_estado );

ALTER TABLE tbl_carpeta
    ADD CONSTRAINT tbl_carpeta_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_creador )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_comentarios_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_comentarios_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_empresa
    ADD CONSTRAINT tbl_empresa_tbl_pais_fk FOREIGN KEY ( codigo_pais )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_empresa
    ADD CONSTRAINT tbl_empresa_tbl_usuario_fk FOREIGN KEY ( codigo_usuario_administrador )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_pais
    ADD CONSTRAINT tbl_pais_tbl_continente_fk FOREIGN KEY ( codigo_continente )
        REFERENCES tbl_continente ( codigo_continente );

ALTER TABLE tbl_pais
    ADD CONSTRAINT tbl_pais_tbl_idioma_fk FOREIGN KEY ( codigo_idioma )
        REFERENCES tbl_idioma ( codigo_idioma );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_planes
    ADD CONSTRAINT tbl_planes_tbl_categoria_plan_fk FOREIGN KEY ( codigo_categoria )
        REFERENCES tbl_categoria_plan ( codigo_categoria );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_archivo_fk FOREIGN KEY ( codigo_archivo )
        REFERENCES tbl_archivo ( codigo_archivo );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_tareas_fk FOREIGN KEY ( codigo_sub_tarea )
        REFERENCES tbl_tareas ( codigo_tarea );

ALTER TABLE tbl_tareas
    ADD CONSTRAINT tbl_tareas_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_genero_fk FOREIGN KEY ( codigo_genero )
        REFERENCES tbl_genero ( codigo_genero );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_pais_fk FOREIGN KEY ( codigo_pais_nacimiento )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_pais_fkv2 FOREIGN KEY ( codigo_pais_resisdencia )
        REFERENCES tbl_pais ( codigo_pais );

ALTER TABLE tbl_usuario
    ADD CONSTRAINT tbl_usuario_tbl_planes_fk FOREIGN KEY ( codigo_plan )
        REFERENCES tbl_planes ( codigo_plan );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuario_x_empresa
    ADD CONSTRAINT tbl_usuario_x_empresa_tbl_empresa_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresa ( codigo_empresa );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuario_x_empresa
    ADD CONSTRAINT tbl_usuario_x_empresa_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuarios_x_carpeta
    ADD CONSTRAINT tbl_usuarios_x_carpeta_tbl_carpeta_fk FOREIGN KEY ( codigo_carpeta )
        REFERENCES tbl_carpeta ( codigo_carpeta );

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE tbl_usuarios_x_carpeta
    ADD CONSTRAINT tbl_usuarios_x_carpeta_tbl_usuario_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuario ( codigo_usuario );

