CREATE TABLE `users` (
  `userID` int PRIMARY KEY AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) UNIQUE NOT NULL,
  `password` varchar(50) NOT NULL,
  `avatar` varchar(50),
  `status` bit NOT NULL DEFAULT 1,
  `role` varchar(10) NOT NULL DEFAULT 'user'
);

CREATE TABLE `products` (
  `productID` int PRIMARY KEY AUTO_INCREMENT,
  `categoryID` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `unitPrice` DECIMAL(10,2),
  `discount` DECIMAL(5,2),
  `thumbnail` varchar(50),
  `createAt` timestamp NOT NULL DEFAULT (now()),
  `views` int NOT NULL DEFAULT 0,
  `special` bit NOT NULL DEFAULT 0,
  `desc` text
);

CREATE TABLE `category` (
  `categoryID` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255)
);

CREATE TABLE `comments` (
  `commentID` int PRIMARY KEY AUTO_INCREMENT,
  `userID` int NOT NULL,
  `productID` int NOT NULL,
  `content` varchar(500) NOT NULL,
  `commentAt` timestamp NOT NULL DEFAULT (now())
);

ALTER TABLE `products` ADD FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);

ALTER TABLE `comments` ADD FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

ALTER TABLE `comments` ADD FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);
