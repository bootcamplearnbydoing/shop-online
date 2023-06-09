create table users (
  id uuid primary key not null default gen_random_uuid(),
  role_id uuid not null,
  first_name text not null,
  last_name text not null,
  email text not null,
  "password" text not null,
  birth_date date null,
  newsletter int2 null,
  created_at timestamp not null default now(),
  updated_at timestamp not null default now(),
  constraint users_role_id_fk
  	foreign key (role_id)
    	references roles(id)
);