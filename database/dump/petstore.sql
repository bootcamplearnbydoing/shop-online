-- users
INSERT INTO public.users (id, role_id, first_name, last_name, email, "password", birth_date, created_at, updated_at, newsletter) VALUES('1dbbe155-ae3e-4eca-988e-c48bcb53ea3b'::uuid, '1941253a-4315-49f8-a929-1562dc9cb45f'::uuid, 'vagner', 'cantuares', 'vagner.cantuares@gmail.com', '$2y$10$MHfbD5cd93HTG8W10oDNeuDHu6IG/rWqY0.vfAu.g4T/zg7Cof.C.', NULL, '2023-04-26 18:13:14.929', '2023-04-26 18:13:14.929', NULL);
-- roles
INSERT INTO public.roles (id, "name", created_at, updated_at) VALUES('b8499c94-df6c-4550-98e7-dc0127eb3287'::uuid, 'Administrator', '2023-04-19 22:27:44.391', '2023-04-19 22:27:44.391');
INSERT INTO public.roles (id, "name", created_at, updated_at) VALUES('1941253a-4315-49f8-a929-1562dc9cb45f'::uuid, 'Customer', '2023-04-19 22:27:44.393', '2023-04-19 22:27:44.393');

-- states
INSERT INTO public.states (id, "name", created_at, updated_at) VALUES('bc71eef2-5716-4416-989d-07c446b466e9'::uuid, 'LIsboa', '2023-04-26 22:23:40.997', '2023-04-26 22:23:40.997');
INSERT INTO public.states (id, "name", created_at, updated_at) VALUES('4d54a831-2288-4b7e-8c35-3ad7ddfe8548'::uuid, 'Faro', '2023-04-26 22:23:41.001', '2023-04-26 22:23:41.001');
INSERT INTO public.states (id, "name", created_at, updated_at) VALUES('74fd6d70-8b1d-430e-84cf-d02584dc7657'::uuid, 'Setúbal', '2023-04-26 22:23:41.003', '2023-04-26 22:23:41.003');

-- cities
INSERT INTO public.cities (id, state_id, "name", created_at, updated_at) VALUES('eedd8325-a566-4cd1-8c91-41fd6fd5389c'::uuid, 'bc71eef2-5716-4416-989d-07c446b466e9'::uuid, 'Odivelas', '2023-04-26 22:24:19.481', '2023-04-26 22:24:19.481');