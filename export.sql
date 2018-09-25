-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Jokes`;
CREATE TABLE `Jokes` (
  `id` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `setup` varchar(256) NOT NULL,
  `punchline` varchar(256) NOT NULL,
  `rating` int(11) NOT NULL,
  `totalrated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Jokes` (`id`, `type`, `setup`, `punchline`, `rating`, `totalrated`) VALUES
(1,	'',	'',	'',	4,	4),
(2,	'general',	'What do you call a singing Laptop',	'A Dell',	6,	6),
(3,	'general',	'Why do chicken coops only have two doors?',	'Because if they had four, they would be chicken sedans',	3,	3),
(4,	'general',	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	5,	5),
(5,	'programming',	'To understand what recursion is...',	'You must first understand what recursion is',	4,	4),
(6,	'general',	'Did you hear about the two silk worms in a race?',	'It ended in a tie.',	5,	5),
(7,	'programming',	'Where do programmers like to hangout?',	'The Foo Bar.',	4,	4),
(8,	'general',	'What does C.S. Lewis keep at the back of his wardrobe?',	'Narnia business!',	3,	3),
(9,	'general',	'How do you make holy water?',	'You boil the hell out of it',	3,	3),
(10,	'general',	'Did you hear about the two silk worms in a race?',	'It ended in a tie.',	3,	3),
(11,	'general',	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	3,	3),
(12,	'general',	'How many lips does a flower have?',	'Tulips',	3,	3),
(13,	'general',	'How does a train eat?',	'It goes chew, chew',	3,	3),
(14,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	5,	5),
(15,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	3,	3),
(16,	'general',	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	3,	3),
(17,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	3,	3),
(18,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	3,	3),
(19,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	5,	5),
(20,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	4,	4),
(21,	'general',	'I just watched a documentary about beavers.',	'It was the best dam show I ever saw',	3,	3),
(22,	'general',	'How do you organize an outer space party?',	'You planet',	5,	5),
(23,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	4,	4),
(24,	'general',	'How do you make holy water?',	'You boil the hell out of it',	4,	4),
(25,	'general',	'How do you make holy water?',	'You boil the hell out of it',	3,	3),
(26,	'general',	'What do you call a laughing motorcycle?',	'A Yamahahahaha.',	4,	4),
(27,	'general',	'If you boil a clown...',	'Do you get a laughing stock?',	3,	3),
(28,	'general',	'What do you call a belt made out of watches?',	'A waist of time.',	3,	3),
(29,	'general',	'Why is peter pan always flying?',	'Because he neverlands',	3,	3),
(30,	'general',	'What do you call a laughing motorcycle?',	'A Yamahahahaha.',	6,	6),
(31,	'',	'',	'',	3,	3),
(32,	'general',	'Why did the Clydesdale give the pony a glass of water?',	'Because he was a little horse',	3,	3),
(33,	'general',	'If you boil a clown...',	'Do you get a laughing stock?',	3,	3),
(34,	'general',	'Why did the Clydesdale give the pony a glass of water?',	'Because he was a little horse',	5,	5),
(35,	'general',	'What do you call a singing Laptop',	'A Dell',	3,	3),
(36,	'general',	'What kind of shoes does a thief wear?',	'Sneakers',	3,	3),
(37,	'programming',	'How do you check if a webpage is HTML5?',	'Try it out on Internet Explorer',	3,	3),
(38,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	3,	3),
(39,	'general',	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	4,	4),
(40,	'general',	'Why did the Clydesdale give the pony a glass of water?',	'Because he was a little horse',	3,	3),
(41,	'general',	'What do you call a laughing motorcycle?',	'A Yamahahahaha.',	5,	5),
(42,	'general',	'Why do chicken coops only have two doors?',	'Because if they had four, they would be chicken sedans',	4,	4),
(43,	'general',	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	4,	4),
(44,	'general',	'What do you call a belt made out of watches?',	'A waist of time.',	3,	3),
(45,	'general',	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	3,	3),
(46,	'general',	'What do you call a singing Laptop',	'A Dell',	5,	5),
(47,	'general',	'What does C.S. Lewis keep at the back of his wardrobe?',	'Narnia business!',	5,	5),
(48,	'programming',	'Why do programmers always mix up Halloween and Christmas?',	'Because Oct 31 == Dec 25',	3,	3),
(49,	'programming',	'How do you check if a webpage is HTML5?',	'Try it out on Internet Explorer',	3,	3),
(50,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	3,	3),
(51,	'general',	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	4,	4),
(52,	'general',	'What do you call a belt made out of watches?',	'A waist of time.',	3,	3),
(53,	'general',	'What did the fish say when it hit the wall?',	'Damn.',	3,	3),
(54,	'general',	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	6,	6),
(55,	'general',	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	4,	4),
(56,	'general',	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	4,	4),
(57,	'general',	'Why is peter pan always flying?',	'Because he neverlands',	7,	7),
(58,	'general',	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	3,	3),
(59,	'general',	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	4,	4),
(60,	'general',	'What kind of shoes does a thief wear?',	'Sneakers',	3,	3),
(61,	'programming',	'If you put a million monkeys at a million keyboards, one of them will eventually write a Java program',	'the rest of them will write Perl',	4,	4),
(62,	'general',	'What do you call a belt made out of watches?',	'A waist of time.',	4,	4);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(256) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`) VALUES
(1,	'raice',	''),
(2,	'reaganmatunga@gmail.com',	'e4c83d809639bae1e378eb0b081a11cd');
