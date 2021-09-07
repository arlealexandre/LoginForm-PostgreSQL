create extension pgcrypto;
create table users(

	id serial primary key,
    	name text not null,
    	email text unique not null,
    	password text not null

);
