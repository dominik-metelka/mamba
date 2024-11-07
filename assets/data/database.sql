CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert some sample data
INSERT INTO users (username, email, password) VALUES 
('Dominik', 'd.metelka11@gmail.com', 'password123'),
('Samuel', 'samuel@example.com', 'password456');

CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price VARCHAR(100) NOT NULL,
    genres VARCHAR(255) NOT NULL
);

-- Insert some sample data
INSERT INTO games (name, price, genres) VALUES 
('GTA V', '8,99€', 'openworld, action, shooter, crime'),
('No mans sky', '15,99€', 'RPG, massive world, survival');