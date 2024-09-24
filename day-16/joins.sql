
SELECT title, tags, name, email
FROM users AS U
LEFT JOIN listings AS L
ON U.id = L.user_id;

SELECT title, tags, name
FROM users
LEFT JOIN listings
ON users.id = listings.user_id;


SELECT title, tags, name, users.email
FROM users
LEFT JOIN listings
ON users.id = listings.user_id;

SELECT title, tags, name, U.email
FROM users AS U
LEFT JOIN listings AS L
ON U.id = L.user_id;

SELECT title, tags, name, U.email AS user_email, L.email AS listing_email
FROM users AS U
LEFT JOIN listings AS L
ON U.id = L.user_id;

-- Continued on pma
