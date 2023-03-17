-- addresses types

create table addresses_types (
id uuid primary key not null default gen_random_uuid(),

address_id uuid not null,
type_id uuid not null,

created_at timestamp not null default now(),
updated_at timestamp not null default now(),

constraint addresses_types_address_id_fk
	foreign key(address_id)
  	references addresses(id),

constraint addresses_types_type_id_fk
	foreign key (type_id)
  	references types(id)

)