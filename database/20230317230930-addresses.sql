create table addresses (
id uuid primary key not null default gen_random_uuid(),
"name" text not null,
user_id uuid not null,
city_id uuid not null,
postal_code text not null,
created_at timestamp not null default now(),
updated_at timestamp not null default now(),
constraint addresses_user_id_fk
	foreign key(user_id)
  	references users(id),
constraint adresses_city_id_fk
	foreign key(city_id)
  	references cities(id)
)