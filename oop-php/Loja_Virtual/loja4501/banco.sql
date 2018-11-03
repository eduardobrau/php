CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(20) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `sumario` text NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `livros` (`id`, `isbn`, `autor`, `titulo`, `preco`, `sumario`) VALUES
(1, '0973862149', 'Davey Shafik e Ben Ramsey', 'Zend PHP 5 Certification Study Guide', 35.95, 'The second edition of the popular Zend PHP 5 Certification Study Guide, edited and produced by the publishers of php|architect, provides the most comprehensive and thorough preparation tool for developers who wish to take the exam.');
INSERT INTO `livros` (`id`, `isbn`, `autor`, `titulo`, `preco`, `sumario`) VALUES (2, '9780973862188', 'Ivo Jansch', 'Guide to Enterprise PHP Development', 39.95, 'Whether you are running a large scale web app in a PHP-based environment, or if you are considering switching your site to PHP, our new book, php|architect Enterprise PHP Development will surely be a valuable resource for you and your development team.');
INSERT INTO `livros` (`id`, `isbn`, `autor`, `titulo`, `preco`, `sumario`) VALUES (3, '321321321', 'Zé', 'Fulano', 29.9, 'asdasdasdasd');

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `admin`) VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);
