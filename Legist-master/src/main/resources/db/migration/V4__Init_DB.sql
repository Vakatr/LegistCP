create sequence hibernate_sequence start 1 increment 1;

create table news (
                         id int8 not null,
                         title varchar(255) not null,
                         text varchar(2048) not null,
                         date_of_created timestamp default current_timestamp,
                         date_of_updated timestamp,
                         id_author int8,
                         primary key (id)
);


create table brand_of_cars (
                               id int8 not null,
                               name varchar(255),
                               primary key (id)
);

create table cars (
                      id int8 not null,
                      reg_num varchar(255),
                      brand_id int8,
                      model_id int8,
                      body_id int8,
                      transport_id int8,
                      primary key (id)
);

create table cities (
                        id int8 not null,
                        name varchar(255),
                        region_id int8,
                        primary key (id)
);

create table model_of_cars (
                               id int8 not null,
                               name varchar(255),
                               brand_id int8,
                               primary key (id)
);

create table regions (
                         id int8 not null,
                         name varchar(255),
                         primary key (id)
);

create table statuses (
                          id int8 not null,
                          name varchar(255),
                          primary key (id)
);

create table streets (
                         id int8 not null,
                         name varchar(255),
                         city_id int8,
                         primary key (id)
);

create table type_of_bodies (
                                id int8 not null,
                                name varchar(255),
                                primary key (id)
);

create table type_of_road_objects (
                                      id int8 not null,
                                      name varchar(255),
                                      primary key (id)
);

create table type_of_transports (
                                    id int8 not null,
                                    name varchar(255),
                                    primary key (id)
);

create table images (
                        id int8 not null,
                        path varchar(255),
                        primary key (id)
);

create table comments (
                          id int8 not null,
                          text varchar(255),
                          user_id varchar(255),
                          primary key (id)
);