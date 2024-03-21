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

CREATE TABLE Translations (
    StringName VARCHAR(255) PRIMARY KEY,
    DescriptionEN TEXT,
    DescriptionFR TEXT
);

-- Insert the data into the translations table
INSERT INTO Translations (StringName, DescriptionEN, DescriptionFR) VALUES
('Gaming Shop', 'Gaming Shop', 'Magasin de jeux'),
('All of your components in one place', 'All of your components in one place', 'Tous vos composants au même endroit'),
('Electronics Shop - Your Electronics Marketplace #1', 'Electronics Shop - Your Electronics Marketplace #1', 'Magasin d''électronique - Votre marché d''électronique n°1'),
('ElectronicsShop is an electronics marketplace of unique and creative products. <br> You must be wondering how we differ from other marketplaces? <br> ElectronicsShop was established with a simple idea: all customers should get high-quality electronic products with ease.', 'ElectronicsShop is an electronics marketplace of unique and creative products. <br> You must be wondering how we differ from other marketplaces? <br> ElectronicsShop was established with a simple idea: all customers should get high-quality electronic products with ease.', 'ElectronicsShop est un marché d''électronique proposant des produits uniques et créatifs. <br> Vous devez vous demander en quoi nous différons des autres marchés ? <br> ElectronicsShop a été créé avec une idée simple : tous les clients doivent obtenir des produits électroniques de haute qualité. produits en toute simplicité.'),
('Contact us', 'Contact us', 'Contactez-nous'),
('Our address', 'Our address', 'Notre adresse'),
('Our email', 'Our email', 'Notre email'),
('Our phone number', 'Our phone number', 'Notre numéro de téléphone'),
('Name : ', 'Name : ', 'Nom : '),
('Price : ', 'Price : ', 'Prix : '),
('Description : ', 'Description : ', 'Description : '),
('Buy', 'Buy', 'Achète-le'),
('User Registration', 'User Registration', 'Enregistrement de l''utilisateur'),
('Username', 'Username', 'Nom d''utilisateur'),
('Password', 'Password', 'Mot de passe'),
('Register', 'Register', 'Enregistrez-vous'),
('User Login', 'User Login', ' Connection d''utilisateur'),
('Login', 'Login', 'Connectez-vous'),
('Username already taken. Please choose another one.', 'Username already taken. Please choose another one.', 'Nom d''utilisateur déjà pris. Veuillez en choisir un autre.'),
('Registration successful.', 'Registration successful.', 'Inscription réussi.'),
('Congratulations, you have successfully logged in!', 'Congratulations, you have successfully logged in!', 'Félicitations, vous êtes connecté avec succès !'),
('Wrong password. Please try again.', 'Wrong password. Please try again.', 'Mauvais mot de passe. Veuillez réessayer.'),
('Invalid username or password. Please try again.', 'Invalid username or password. Please try again.', 'Nom d''utilisateur ou mot de passe invalide. Veuillez réessayer.'),
('Add Products', 'Add Products', 'Ajoutez des produits'),
('Product name : ', 'Product name : ', 'Nom du produit : '),
('Product description : ', 'Product description : ', 'Description du produit : '),
('Product image URL : ', 'Product image URL : ', 'URL de l''image du produit : '),
('Product price : ', 'Product price : ', 'Prix ​​du produit : '),
('Add product', 'Add product', 'Ajouter un produit');

-- Display the inserted values
SELECT * FROM Products;
SELECT * FROM Translations;
