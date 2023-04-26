create table users_addresses (
  id uuid primary key not null default gen_random_uuid(),
  user_id uuid not null,
  "content" text not null,
  postal_code text null,
  city_id uuid not null,
  created_at timestamp not null default now(),
  updated_at timestamp not null default now(),
  constraint users_id_fk
  	foreign key (user_id)
    	references users(id),
  constraint city_id_fk
  	foreign key (city_id)
    	references cities(id)
);