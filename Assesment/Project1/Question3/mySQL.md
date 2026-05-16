CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);
-- Insert a test user (password: 1234)
INSERT INTO users (username, password) VALUES ('admin', MD5('1234'));