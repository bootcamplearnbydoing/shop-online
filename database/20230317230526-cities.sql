-- cities

create table cities (
	id uuid primary key not null default gen_random_uuid(),
  state_id uuid not null,
  "name" text not null,
 	created_at timestamp not null default now(),
  updated_at timestamp not null default now(),
  constraint cities_state_id_fk
  	foreign key (state_id)
    	references states(id)
);
