create table states (
    id uuid primary key not null default gen_random_uuid(),
    country_id uuid not null references countries(id),
    "name" text not null,
    created_at timestamp not null default now(),
    updated_at timestamp not null default now()
);