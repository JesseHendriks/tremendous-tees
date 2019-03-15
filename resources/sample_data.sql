INSERT INTO `customers` (`id`, `customer_number`, `first_name`, `last_name`, `middle_name`, `street`, `housenumber`, `department`, `city`, `postalcode`, `phone`, `email`) VALUES
(1, 'CST0000123', 'Jesse', 'Hendriks', '', 'Worp Tjaardastraat', 49, '', 'Sneek', '8602XB', '+31613527565', 'jesse.hendriks@vodafoneziggo.com');
INSERT INTO `designers` (`id`, `designer_number`, `name`, `email`, `password`) VALUES
(1, 'DSG0000123', 'Jimy Hendrix', 'jimmy@hendrix.com', 'secret'),
(2, 'DSG0000124', 'Jappie', 'info@jappie.com', 'secret');
INSERT INTO `products` (`id`, `product_code`, `name`, `designer_number`, `price`) VALUES
(4, '16588223', 'Debugger', 'DSG0000124', '14.50'),
(3, '168334528', 'Php is awesome', 'DSG0000124', '15.00'),
(1, 'jh-12346-awezome-guitar-v-neck', 'Awesome Guitar v-neck', 'DSG0000123', '25.00'),
(2, 'jh-654321-stratocaster-regular', 'Stratocaster regular fit', 'DSG0000123', '22.50');