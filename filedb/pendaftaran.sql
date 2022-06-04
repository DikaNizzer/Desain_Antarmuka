/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     04/06/2022 11.44.33                          */
/*==============================================================*/



drop index if exists PASIEN.PASIEN_PK;

drop table if exists PASIEN;

drop index if exists PENDAFTARAN.MENDAFTAR_FK;

drop index if exists PENDAFTARAN.PENDAFTARAN_PK;

drop table if exists PENDAFTARAN;

/*==============================================================*/
/* Table: PASIEN                                                */
/*==============================================================*/
create table PASIEN 
(
   NIK                  char(12)                       not null,
   NAMA                 varchar(255)                   not null,
   TGL_LAHIR            date                           null,
   ALAMAT               varchar(255)                   null,
   constraint PK_PASIEN primary key (NIK)
);

/*==============================================================*/
/* Index: PASIEN_PK                                             */
/*==============================================================*/
create unique index PASIEN_PK on PASIEN (
NIK ASC
);

/*==============================================================*/
/* Table: PENDAFTARAN                                           */
/*==============================================================*/
create table PENDAFTARAN 
(
   ID_PENDAFTARAN       integer                        not null,
   NIK                  char(12)                       not null,
   TGL_DAFTAR           date                           not null,
   constraint PK_PENDAFTARAN primary key (ID_PENDAFTARAN)
);

/*==============================================================*/
/* Index: PENDAFTARAN_PK                                        */
/*==============================================================*/
create unique index PENDAFTARAN_PK on PENDAFTARAN (
ID_PENDAFTARAN ASC
);

/*==============================================================*/
/* Index: MENDAFTAR_FK                                          */
/*==============================================================*/
create index MENDAFTAR_FK on PENDAFTARAN (
NIK ASC
);

alter table PENDAFTARAN
   add constraint FK_PENDAFTA_MENDAFTAR_PASIEN foreign key (NIK)
      references PASIEN (NIK)
      on update restrict
      on delete restrict;

