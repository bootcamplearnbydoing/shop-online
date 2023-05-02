-- countries
create table countries (
 id uuid primary key not null default gen_random_uuid(),
 "name" text not null,
 created_at timestamp not null default now(),
 updated_at timestamp not null default now()
);