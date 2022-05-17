-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 03:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employee_code` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employee_code`, `password`) VALUES
('AA-333', 'admin\r\n'),
('AA-345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `published` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `image`, `author`, `title`, `content`, `date`, `published`) VALUES
(1, '1650562061_foxe.jpg', 'Rebecca Mel', 'How To Keep Calm When Finding White Foxes In The Wild', 'Lorem ipsum doler, sit amet consectetur adipisicing elit. Pariatur recusandae eos unde quia molestias nostrum perspiciatis. Ipsum adipisci delectus iste modi atque excepturi, asperiores fugiat laboriosam totam earum animi placeat aut, perferendis assumenda mollitia provident consectetur. Corrupti, totam! At dicta magnam alias nostrum numquam sunt velit qui, id aliquid repellendus ullam eos quo? Exercitationem veritatis dolorem veniam nesciunt nisi, adipisci tenetur, iure, aspernatur dolor modi voluptas accusantium consectetur deleniti totam dicta libero explicabo ut. Fugiat vel perferendis quibusdam, pariatur aliquam quis, in repudiandae possimus provident quam sed. A illo, asperiores id ea cumque aliquam, facere autem provident recusandae at tempora.\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur recusandae eos unde quia molestias nostrum perspiciatis. Ipsum adipisci delectus iste modi atque excepturi, asperiores fugiat laboriosam totam earum animi placeat aut, perferendis assumenda mollitia provident consectetur. Corrupti, totam! At dicta magnam alias nostrum numquam sunt velit qui, id aliquid repellendus ullam eos quo? Exercitationem veritatis dolorem veniam nesciunt nisi, adipisci tenetur, iure, aspernatur dolor modi voluptas accusantium consectetur deleniti totam dicta libero explicabo ut. Fugiat vel perferendis quibusdam, pariatur aliquam quis, in repudiandae possimus provident quam sed. A illo, asperiores id ea cumque aliquam, facere autem provident recusandae at tempora.', '2022-04-21 17:27:41', 1),
(2, '1650566232_rabbit.jpg', 'Jack Cliff', 'How To Feed Rabbits', 'How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet.', '2022-04-21 18:37:12', 1),
(3, '1650566304_beruang-madu.jpg', 'Jack Cliff', 'How To Handle Bear Attacks', 'How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet.', '2022-04-21 18:38:24', 1),
(4, '1650566365_IMG_20220414_155311.jpg', 'Brad Raugh', 'Feeding Cat', 'How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet How To Feed Rabbits Lorem ipsum dolor sit amet. ', '2022-04-21 18:39:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `program_id`, `user_id`, `amount`, `date`) VALUES
(9, 24, 9, 150000, '2022-05-13 01:05:02'),
(10, 26, 13, 150000, '2022-05-13 01:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `organization_id`, `image`, `name`, `content`, `date`, `active`) VALUES
(1, 2, '1650617870_Bali-Zoo-family-friendly-attraction-day-out-ZOO-EXPLORER-OR-DAY-ZOO.jpg', '\'Animal Party\' event at California Zoo', 'lorem ipsum dolor sit amet constecterur.', '2022-04-21 15:03:05', 1),
(3, 2, '1650618299_jaguars-zoo.webp', 'Happy Cat ', 'Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat Happy Cat ', '2022-04-21 16:14:01', 1),
(4, 3, '1650617998_file-20220318-23-2ehppm.avif', 'Elephant Ride', 'Elephant rides', '2022-04-21 16:15:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `published` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `image`, `author`, `title`, `content`, `date`, `published`) VALUES
(2, '1650542809_IMG_20220414_155311.jpg', 'Jack Baum', 'Local Cat Wins Big', 'dadas', '2022-04-21 12:06:49', 1),
(3, '1650618355_Grizzly-bear-Jasper-National-Park-Canada-Alberta.webp', 'Jack Cliff', 'Strange Happenings of bear', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo dicta labore sequi magni iusto necessitatibus totam est saepe ullam earum corporis rem voluptatibus vitae aliquid nobis doloremque ex non, quibusdam odio dolore tempora quae! Illum, debitis! Amet enim adipisci officiis ullam fugiat ea, quae qui voluptatum. Velit, ab impedit.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo dicta labore sequi magni iusto necessitatibus totam est saepe ullam earum corporis rem voluptatibus vitae aliquid nobis doloremque ex non, quibusdam odio dolore tempora quae! Illum, debitis! Amet enim adipisci officiis ullam fugiat ea, quae qui voluptatum. Velit, ab impedit.', '2022-04-21 13:30:45', 1),
(4, '1650618273_jaguars-zoo.webp', 'Rebecca Mel', 'Local Cat Wins Again!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo dicta labore sequi magni iusto necessitatibus totam est saepe ullam earum corporis rem voluptatibus vitae aliquid nobis doloremque ex non, quibusdam odio dolore tempora quae! Illum, debitis! Amet enim adipisci officiis ullam fugiat ea, quae qui voluptatum. Velit, ab impedit.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo dicta labore sequi magni iusto necessitatibus totam est saepe ullam earum corporis rem voluptatibus vitae aliquid nobis doloremque ex non, quibusdam odio dolore tempora quae! Illum, debitis! Amet enim adipisci officiis ullam fugiat ea, quae qui voluptatum. Velit, ab impedit.\r\n', '2022-04-21 13:41:20', 1),
(5, '1650550618_kuma.png', 'Rebecca Mel', 'Bears Are Roaming San Diego Streets', '        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum, omnis vitae laudantium eveniet nemo illo? Nemo aliquid architecto quidem eligendi pariatur quibusdam fugit natus ratione et maiores, consectetur quaerat. Recusandae nam enim et vitae id, cumque suscipit, necessitatibus dolor commodi assumenda natus quia minus aliquid? Quibusdam iusto fugit quae vero qui eius eveniet veritatis placeat? Quam sequi quisquam accusamus. In, eveniet, ut magni fuga tempore dignissimos optio blanditiis deserunt facilis expedita, quibusdam nihil dolores! Ullam consectetur itaque eum repudiandae praesentium dolorum reprehenderit atque quas harum rerum ex consequuntur eaque odio, quae vero earum eius non quibusdam. Hic, expedita est?', '2022-04-21 14:16:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization_id` int(11) NOT NULL,
  `organization_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`) VALUES
(1, 'GIGA Inc.'),
(2, 'Brand Corp.'),
(3, 'Andy Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `organization_id`, `image`, `name`, `content`, `date`, `active`) VALUES
(24, 3, '1650617255_preview.jpg', 'Saving Sumatran Orangutan ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem saepe placeat facere odio, tenetur odit porro atque eaque adipisci harum iure repudiandae corporis inventore voluptate earum eligendi error sequi impedit soluta nostrum asperiores sit nisi eos voluptatibus. Atque sequi exercitationem itaque possimus sunt minus, deleniti dolores nostrum excepturi doloremque, perferendis adipisci. Illum suscipit quae sapiente nihil voluptas ducimus reiciendis, error ipsum! Dolores voluptatem ratione eum amet, perferendis sapiente quod aliquam eaque pariatur fugit consequuntur voluptate iste voluptatibus. Pariatur doloremque labore earum impedit est enim provident ut voluptatibus reprehenderit suscipit! Voluptate nam rem harum aspernatur non. Mollitia magni dignissimos aliquid alias!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem saepe placeat facere odio, tenetur odit porro atque eaque adipisci harum iure repudiandae corporis inventore voluptate earum eligendi error sequi impedit soluta nostrum asperiores sit nisi eos voluptatibus. Atque sequi exercitationem itaque possimus sunt minus, deleniti dolores nostrum excepturi doloremque, perferendis adipisci. Illum suscipit quae sapiente nihil voluptas ducimus reiciendis, error ipsum! Dolores voluptatem ratione eum amet, perferendis sapiente quod aliquam eaque pariatur fugit consequuntur voluptate iste voluptatibus. Pariatur doloremque labore earum impedit est enim provident ut voluptatibus reprehenderit suscipit! Voluptate nam rem harum aspernatur non. Mollitia magni dignissimos aliquid alias!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem saepe placeat facere odio, tenetur odit porro atque eaque adipisci harum iure repudiandae corporis inventore voluptate earum eligendi error sequi impedit soluta nostrum asperiores sit nisi eos voluptatibus. Atque sequi exercitationem itaque possimus sunt minus, deleniti dolores nostrum excepturi doloremque, perferendis adipisci. Illum suscipit quae sapiente nihil voluptas ducimus reiciendis, error ipsum! Dolores voluptatem ratione eum amet, perferendis sapiente quod aliquam eaque pariatur fugit consequuntur voluptate iste voluptatibus. Pariatur doloremque labore earum impedit est enim provident ut voluptatibus reprehenderit suscipit! Voluptate nam rem harum aspernatur non. Mollitia magni dignissimos aliquid alias!', '2022-04-20 16:32:28', 1),
(26, 1, '1650617563_cat-tree-worried-little-cat-tree-169711167.jpg', 'Saving Cat from tree', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\n\r\nDolorem saepe placeat facere odio, tenetur odit porro atque eaque adipisci harum iure repudiandae corporis inventore voluptate earum eligendi error sequi impedit soluta nostrum asperiores sit nisi eos voluptatibus. \r\n\r\nAtque sequi exercitationem itaque possimus sunt minus, deleniti dolores nostrum excepturi doloremque, perferendis adipisci. Illum suscipit quae sapiente nihil voluptas ducimus reiciendis, error ipsum! Dolores voluptatem ratione eum amet, perferendis sapiente quod aliquam eaque pariatur fugit consequuntur voluptate iste voluptatibus. Pariatur doloremque labore earum impedit est enim provident ut voluptatibus reprehenderit suscipit! Voluptate nam rem harum aspernatur non. Mollitia magni dignissimos aliquid alias!', '2022-04-20 20:26:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `password`, `email`, `phone`, `created_at`) VALUES
(5, 'William River', '$2y$10$bPot8WiR3omN6js./35kPeEDM5beBUi2aeGB/I9twh8NeKeDzq7aq', 'will12@gmail.com', 254654135, '2022-05-12 21:14:58'),
(6, 'Will Smith', '$2y$10$s9mOoTl3XxZe.7yQ6d4SneHO1IN2QQ59w0yG3OPPoVAwv7lz3ojrq', 'will0smith@gmail.com', 254681264, '2022-05-12 21:23:53'),
(9, 'Roswell Smith', '$2y$10$VtSoIOJ6.TNZ17okGfqIFukiMtRofAf7GEu3TPooECQLrcx2ck/l.', 'rose62@gmail.com', 557512546, '2022-05-12 21:30:12'),
(12, 'Reiv Gao', '$2y$10$2XHzWNHWELwqHX3QSNf.feBKNkxQ1jAWZtdzGxjVDCPYnPVmrzWCa', 're812@gmail.com', 445225462, '2022-05-12 21:42:02'),
(13, 'Liliya Rozaliya', '$2y$10$f3spHzkqkALF/GTJOXL3TuIz/ocE0ahO0lsBYUJ5nJMfP7XGPhU6.', 'roza@gmail.com', 544451231, '2022-05-13 01:17:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employee_code`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `organization_id_event` (`organization_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `program_id` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `organization_id_event` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `organization_id` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`organization_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
