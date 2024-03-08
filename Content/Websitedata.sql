create or replace database Websitedatabase;

use Websitedatabase;

-- Create the Products table
CREATE TABLE Products (
    Product_ID INT AUTO_INCREMENT PRIMARY KEY,
    Product_Name VARCHAR(255),
    Description VARCHAR(255),
    Image VARCHAR(255),
    Price DECIMAL(10, 2)
);

-- Insert the values into the Products table
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES 
('MSI Écran gamer Optix G2412', '1ms Full-HD 24\'\'', 'Images/MSI_24_INCH_170HZ.png', 119.99),
('MSI Écran gamer Optix G2712D', '1ms Full-HD 27\'\'', 'Images/MSI_ESPORTS_27.png', 150.99),
('SAMSUNG Écran gamer Odyssey G6', '1ms Full-HD 25\'\'', 'Images/OdysseyG62.png', 150.99),
('SAMSUNG Moniteur Business', '5ms Full-HD 24\'\'', 'Images/Samsung24.png', 100.99),
('HP OMEN 45L GT22-1004ng', '5ms Full-HD 27\'\'', 'Images/Omen.png', 2000.99),
('MEMORY PC Intel Core I7-10700F', 'Intel® Core™ i7 Prozessor 32 GB RAM 1000 GB SSD NVIDIA GeForce RTX™ 3060', 'Images/HPOmen2.png', 939.99),
('MSI PC gamer MAG Infinite', 'Intel Core i7-13700F', 'Images/MSI2.png', 1100.99),
('MSI PC gamer MAG', 'Ryzen 5 3600', 'Images/MSI2.png', 800.99);

-- Display the inserted values
SELECT * FROM Products;
