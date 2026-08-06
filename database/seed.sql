-- Optional sample data for local development. Do not run in production.

INSERT INTO leads (form_type, name, email, phone, profession, designation, city, message, status)
VALUES ('contact', 'Sample Lead', 'sample@example.com', '9999999999', 'Clinic', 'Owner', 'Kolkata', 'This is seed data for local testing.', 'new');
