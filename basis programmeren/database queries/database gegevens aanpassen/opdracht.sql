SHOW TABLES;

-- Voeg 2 nieuwe klanten toe aan de tabel
INSERT INTO customers (first_name, last_name, email, address, postal_code, city, country_code, phone, created_at, updated_at)
VALUES
('Kevin', 'Pierik', 'kevinpierik@email.com', 'Straat 123', '12345', 'Stad', 'da_DK', '+421944294384', '2022-07-07 08:20:07', NULL),
('Famke', 'Dijk', 'famkedijk@email.com', 'Straat 456', '54321', 'Stad', 'da_DK', '+9876543210', '2022-07-07 08:22:12', NULL);

-- Verwijder de eerste 10 boekingen
DELETE FROM reservations
ORDER BY id
LIMIT 10;

-- Pas het adres van de klant met id 13 aan
UPDATE customers
SET address = 'De van der Veldensteeg 81', city = 'Apeldoorn'
WHERE id = 13;

-- Toon het aangepaste record van de klant met id 13
SELECT * FROM customers WHERE id = 13;
