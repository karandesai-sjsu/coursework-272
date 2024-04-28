CREATE TABLE users (
    user_id SERIAL PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    home_address VARCHAR(255),
    home_phone VARCHAR(15),
    cell_phone VARCHAR(15)
);