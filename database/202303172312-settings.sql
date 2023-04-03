--settings

create table settings (
id uuid primary key not null default gen_random_uuid(),
key text not null,
value text null,
created_at timestamp not null default now(),
updated_at timestamp not null default now()
)