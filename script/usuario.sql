CREATE USER DRIVE
  IDENTIFIED BY "oracle"
  DEFAULT TABLESPACE USERS
  TEMPORARY TABLESPACE TEMP;
--asignar cuota ilimitada al tablespace por defecto  
ALTER USER DRIVE QUOTA UNLIMITED ON USERS;

--Asignar privilegios basicos
GRANT create session TO DRIVE;
GRANT create table TO DRIVE;
GRANT create view TO DRIVE;
GRANT create any trigger TO DRIVE;
GRANT create any procedure TO DRIVE;
GRANT create sequence TO DRIVE;
GRANT create synonym TO DRIVE;
GRANT create materialized view TO DRIVE;