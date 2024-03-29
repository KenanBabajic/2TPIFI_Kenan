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

INSERT INTO Translations (StringName, DescriptionEN, DescriptionFR) VALUES
('CommonShopName', 'Gaming Shop', 'Magasin de jeux'),
('HomeHeader', 'All of your components in one place', 'Tous vos composants au même endroit'),
('AboutHeader', 'Electronics Shop - Your Electronics Marketplace #1', 'Magasin d''électronique - Votre marché d''électronique n°1'),
('AboutText', 'ElectronicsShop is an electronics marketplace of unique and creative products. <br> You must be wondering how we differ from other marketplaces? <br> ElectronicsShop was established with a simple idea: all customers should get high-quality electronic products with ease.', 'ElectronicsShop est un marché d''électronique proposant des produits uniques et créatifs. <br> Vous devez vous demander en quoi nous différons des autres marchés ? <br> ElectronicsShop a été créé avec une idée simple : tous les clients doivent obtenir des produits électroniques de haute qualité. produits en toute simplicité.'),
('ContactHeader', 'Contact us', 'Contactez-nous'),
('ContactAddress', 'Our address', 'Notre adresse'),
('ContactEmail', 'Our email', 'Notre email'),
('ContactPhoneNumber', 'Our phone number', 'Notre numéro de téléphone'),
('ProductsName', 'Name : ', 'Nom : '),
('ProductsPrice', 'Price : ', 'Prix : '),
('ProductsDescription', 'Description : ', 'Description : '),
('ProductsBuy', 'Buy', 'Achète-le'),
('UserRegistrationHeader', 'User Registration', 'Enregistrement de l''utilisateur'),
('UserUsername', 'Username', 'Nom d''utilisateur'),
('UserPassword', 'Password', 'Mot de passe'),
('UserRegistrationPegister', 'Register', 'Enregistrez-vous'),
('UserLoginHeader', 'User Login', ' Connection d''utilisateur'),
('UserLoginLogin', 'Login', 'Connectez-vous'),
('UsernameTaken', 'Username already taken. Please choose another one.', 'Nom d''utilisateur déjà pris. Veuillez en choisir un autre.'),
('RegistrationSuccessful', 'Registration successful.', 'Inscription réussi.'),
('SuccessfulLogin', 'Congratulations, you have successfully logged in!', 'Félicitations, vous êtes connecté avec succès !'),
('WrongPassword', 'Wrong password. Please try again.', 'Mauvais mot de passe. Veuillez réessayer.'),
('InvalidUsernamePassword', 'Invalid username or password. Please try again.', 'Nom d''utilisateur ou mot de passe invalide. Veuillez réessayer.'),
('AddProducts', 'Add Products', 'Ajoutez des produits'),
('AddProducts-ProductName', 'Product name : ', 'Nom du produit : '),
('AddProducts-ProductDescription', 'Product description : ', 'Description du produit : '),
('AddProducts-ProductImage', 'Product image URL : ', 'URL de l''image du produit : '),
('AddProducts-ProductPrice', 'Product price : ', 'Prix ​​du produit : '),
('AddProducts-Addbutton', 'Add product', 'Ajouter un produit');

CREATE TABLE Users (
    UserName VARCHAR(255) PRIMARY KEY,
    Password VARCHAR(255) NOT NULL,
    Role ENUM('Admin', 'Guest') NOT NULL
);

INSERT INTO Users (UserName, Password, Role) VALUES ('admin', 'adminpassword', 'Admin');


-- Display the inserted values
SELECT * FROM Products;
SELECT * FROM Translations;
SELECT * FROM Users;
