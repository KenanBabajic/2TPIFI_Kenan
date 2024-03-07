create or replace database Test2024;

use Test2024;

create table Clients (
ClientId int not null auto_increment primary key,
ClientName varchar(50)
);

INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('MSI Écran gamer Optix G2412', '1ms Full-HD 24\'\'', 'MSI_24_INCH_170HZ.png', '119.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('MSI Écran gamer Optix G2712D', '1ms Full-HD 27\'\'', 'MSI_ESPORTS_27.png', '150.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('SAMSUNG Écran gamer Odyssey G6', '1ms Full-HD 25\'\'', 'OdysseyG62.png', '150.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('SAMSUNG Moniteur Business', '5ms Full-HD 24\'\'', 'Samsung24.png', '100.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('HP OMEN 45L GT22-1004ng, Intel® Core™ i9 Processor 32 GB RAM 2 TB SSD NVIDIA GeForce RTX™ 4080', 'Omen.png', '2000.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('MEMORY PC Intel Core I7-10700F, Intel® Core™ i7 Prozessor 32 GB RAM 1000 GB SSD NVIDIA GeForce RTX™ 3060', 'HPOmen2.png', '939.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('MSI PC gamer MAG Infinite', 'Intel Core i7-13700F', 'MSI2.png', '1100.99€');
INSERT INTO Products (Product_Name, Description, Image, Price) VALUES ('MSI PC gamer MAG', 'Ryzen 5 3600', 'MSI2.png', '800.99€');
