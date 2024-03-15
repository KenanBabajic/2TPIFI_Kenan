create or replace database Translationsdata;

use Translationsdata;

-- Create the translations table
CREATE TABLE Translations (
    StringName VARCHAR(255) PRIMARY KEY,
    DescriptionEN TEXT,
    DescriptionFR TEXT
);

-- Insert the data into the translations table
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
