INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$12$qb4659.qDYLRzy1ExDpDZeK3VD8SBhtOhbvKyLo44xL3AwQS7T26G');

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Musique', 'Description de la catégorie musique', 'musicAccordeon.png'),
(2, 'Véhicule', 'Description de la catégorie véhicule', 'truck.png'),
(3, 'Steampunk', 'Description de la catégorie steampunk', 'steampunkSpaceShip.png');

INSERT INTO `products` (`id`, `categorie_id`, `name`, `quantity`,`description`, `image`, `price`) VALUES
(4, 2, 'jeep', 10, 'description du contenu de la boite', 'jeep.png', 12.90),
(5, 2, 'carosse citrouille', 5, 'description du contenu de la boite', 'pumpkinCar.png', 10.50),
(6, 2, 'voiture de course', 3, 'description du contenu de la boite', 'raceCar.png', 6.90),
(7, 2, 'camion', 7, 'description du contenu de la boite', 'truck.png', 7.90),
(8, 1, 'accordeon', 5, 'description du contenu de la boite', 'musicAccordeon.png', 15.50),
(9, 1, 'batterie', 4, 'description du contenu de la boite', 'musicDrum.png', 32.00),
(10, 1, 'saxophone', 9, 'description du contenu de la boite', 'musicSaxo.png', 25.00),
(11, 1, 'guitare electrique', 2, 'description du contenu de la boite', 'musicElectricGuitar.png', 8.30),
(12, 1, 'violoncelle', 3, 'description du contenu de la boite', 'notAvailable.png', 9.90),
(24, 3, 'horloge chouette', 2, 'description du contenu de la boite', 'owlClock.png', 20.50),
(25, 3, 'steampunkRabbit', 4, 'description du contenu de la boite', 'steampunkRabbit.png', 10.80),
(26, 3, 'steampunkSpaceShip', 6, 'description du contenu de la boite', 'steampunkSpaceShip.png', 12.30),
(27, 3, 'steampunkSubMarine', 8, 'description du contenu de la boite', 'steampunkSubMarine.png', 13.50),

INSERT INTO `customers` (`id`, `forename`, `surname`, `add1`, `add2`, `add3`, `postcode`, `phone`, `email`, `registered`) VALUES
(1, 'Sarah', 'Hamida', 'ligne add1', 'ligne add2', 'Meximieux', '01800', '0612345678', 's.hamida@gmail.com', 1),
(2, 'Jean-Benoît', 'Delaroche', 'ligne add1', 'ligne add2', 'Lyon', '69009', '0796321458', 'jb.delaroche@gmx.fr', 1);

INSERT INTO `delivery_addresses` (`id`, `forename`, `surname`, `add1`, `add2`, `add3`, `postcode`, `phone`, `email`) VALUES
(46, 'Christian', 'Hamida', '15 Rue de la paix', '', 'Saint Etienne', '42000', '0477213145', 'chr.hamida@gmail.com'),
(47, 'Sarah', 'Hamida', 'ligne add1', 'ligne add2', 'Meximieux', '01800', '0612345678', 's.hamida@gmail.com'),
(48, 'Jean-Benoît', 'Delaroche', 'ligne add1', 'ligne add2', 'Lyon', '69009', '0796321458', 'jb.delaroche@gmx.fr'),
(49, 'Louise', 'Delaroche', '12 avenue condorcet', 'étage 2', 'Saint Priest', '45097', '0526117898', 'louise.delaroche@yahoo.fr');

INSERT INTO `users` (`id`, `customer_id`, `username`, `password`) VALUES
(1, '1', 'Hamidou', 'd6ee53abcd3b045befa8af69f445fafc33f1f88b'),
(2, '2', 'Delaroche', '56a5d2bd85e6c9956d122f59f79540ee0f75e5ad');

INSERT INTO `orders` (`id`, `customer_id`, `registered`, `delivery_addresse_id`, `payment_type`, `status`, `session`, `total`) VALUES
(63, '1', 1, 47, 'cheque', 10, 'da8bcdf51121d96c71673295b825a010', 86.2),
(64, '1', 1, 47, 'paypal', 3, 'da8bcdf51121d96c71673295b825a010', 87),
(65, '2', 1, 49, 'cheque', 10, 'da8bcdf51121d96c71673295b825a010', 51.2),
(66, '2', 1, 49, 'cheque', 2, 'da8bcdf51121d96c71673295b825a010', 42.3);

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(235, 63, 14, 1),
(236, 63, 17, 2),
(237, 63, 19, 1),
(238, 63, 11, 3),
(239, 64, 10, 1),
(240, 64, 18, 1),
(241, 64, 20, 1),
(242, 65, 9, 1),
(243, 65, 15, 2),
(244, 65, 16, 1),
(245, 66, 23, 1),
(246, 66, 24, 1);

