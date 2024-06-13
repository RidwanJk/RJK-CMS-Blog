-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table myweb.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `imagefile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `status` enum('draft','published') DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `articles_ibfk_2` (`category_id`),
  KEY `articles_ibfk_1` (`user_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table myweb.articles: ~16 rows (approximately)
INSERT INTO `articles` (`id`, `user_id`, `title`, `content`, `imagefile`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
	(21, 2, 'Exploring AI advancements', '<p>Transforming industries, enhancing daily life, revolutionizing future.</p>', 'uploads/Screenshot (15).png', 5, 'draft', '2024-05-29 04:05:35', '2024-05-29 04:05:35'),
	(22, 2, 'Boost immunity', '<p>Eat nutritious foods, exercise regularly, sleep well, reduce stress</p>', 'uploads/Screenshot 2024-05-27 172005.png', 6, 'draft', '2024-05-29 04:06:22', '2024-05-29 04:06:22'),
	(23, 2, 'Visit Bali', '<p>Beautiful beaches, vibrant culture, delicious food, unforgettable experiences</p>', 'uploads/Screenshot (38).png', 7, 'draft', '2024-05-29 04:06:43', '2024-05-29 04:06:43'),
	(24, 2, 'Invest smartly', '<p>Diversify portfolio, monitor markets, stay informed, minimize risks</p>', 'uploads/Screenshot 2024-05-20 222554.png', 8, 'draft', '2024-05-29 04:07:47', '2024-05-29 04:07:47'),
	(25, 2, 'Effective study habits', '<p>Organize time, set goals, take breaks, stay motivated</p>', 'uploads/Screenshot (2).png', 9, 'draft', '2024-05-29 04:08:07', '2024-05-29 04:08:07'),
	(26, 2, 'Spring fashion trends', '<p>Bright colors, bold patterns, comfortable fits, chic styles.</p>', 'uploads/Screenshot 2024-05-23 160309.png', 10, 'draft', '2024-05-29 04:08:29', '2024-05-29 04:08:29'),
	(27, 2, 'Food and Recipes', '<p>Delicious pasta recipe: Fresh ingredients, simple steps, rich flavors, satisfying meal</p>', 'uploads/Screenshot (8).png', 11, 'draft', '2024-05-29 04:09:32', '2024-05-29 04:09:32'),
	(28, 2, 'Top movies 2024', '<p>Exciting plots, stellar performances, breathtaking visuals, must-watch</p>', 'uploads/Screenshot (15).png', 12, 'draft', '2024-05-29 04:09:51', '2024-05-29 04:09:51'),
	(29, 2, 'Startup success', '<p>Identify opportunities, innovate solutions, build team, scale effectively</p>', 'uploads/Screenshot 2024-05-21 204128.png', 13, 'draft', '2024-05-29 04:10:13', '2024-05-29 04:10:13'),
	(30, 2, 'Mars mission', '<p>Advancing space travel, studying planet, preparing human exploration journey.</p>', 'uploads/Screenshot (16).png', 14, 'draft', '2024-05-29 04:10:55', '2024-05-29 04:10:55'),
	(38, 1, 'sadsda', '<p>xzc</p>', '../../article/uploads/Screenshot 2024-03-31 103007.png', 6, 'draft', '2024-05-29 08:15:04', '2024-05-29 08:15:04'),
	(39, 1, 'asd', '<p>dsa</p>', 'uploads/Screenshot 2024-05-17 071017.png', 5, 'draft', '2024-05-29 08:18:40', '2024-05-29 08:18:40'),
	(40, 1, 'test', '<p>1234567890</p>', 'uploads/Screenshot (18).png', 11, 'draft', '2024-05-29 08:21:03', '2024-05-29 08:21:03'),
	(41, 1, 'This is test 2', '<p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:&quot;Open Sans&quot;, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 15px;orphans:2;padding:0px;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget enim eu nulla laoreet faucibus. Integer pellentesque congue odio in congue. Aenean porta lobortis posuere. Maecenas pellentesque metus mi, sit amet tincidunt turpis hendrerit vitae. Mauris eu pellentesque sem, lobortis consectetur augue. Nunc rutrum posuere euismod. Nam eget dui a justo faucibus posuere sit amet at tortor. Sed consequat odio nisi, sit amet tristique diam fermentum vel. Proin metus elit, venenatis vel mollis ut, hendrerit et leo. Nam lobortis vel risus eget tincidunt. Aenean condimentum consectetur nulla ut bibendum. Nam in justo nec nulla bibendum pharetra quis sed urna. Fusce lectus urna, placerat quis tincidunt non, ultrices non neque. Phasellus tincidunt tincidunt ligula.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:&quot;Open Sans&quot;, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 15px;orphans:2;padding:0px;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Duis ullamcorper neque leo, sed vulputate nulla faucibus eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque tempus congue ex, quis hendrerit nisl lacinia et. Aliquam purus augue, aliquet quis blandit eget, venenatis vel quam. Vivamus at arcu ut eros scelerisque pretium. Maecenas elementum neque at sem gravida commodo. Vivamus bibendum, libero vel accumsan pulvinar, dolor sapien tincidunt elit, posuere ullamcorper felis orci ut ante. Aliquam erat volutpat. Sed fringilla magna nisi, in mattis neque iaculis eget.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:&quot;Open Sans&quot;, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 15px;orphans:2;padding:0px;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Proin ac volutpat nisl, at dapibus dolor. Donec id convallis purus. Sed sed odio vel massa tincidunt porttitor. Donec laoreet venenatis sodales. In at urna eu odio iaculis sagittis. Donec mattis dignissim ligula, in sollicitudin leo ultricies ac. Aliquam vehicula auctor arcu, vitae pellentesque lacus maximus at. Sed ullamcorper elit libero, a gravida tortor suscipit eu. Quisque metus turpis, venenatis eget leo sit amet, maximus egestas nisl. Vivamus ex quam, elementum eget est sit amet, consequat ornare enim.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:&quot;Open Sans&quot;, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 15px;orphans:2;padding:0px;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Aliquam faucibus et nibh ut pretium. Fusce eget ligula at nisi convallis tempor. Sed condimentum velit ante, eget cursus arcu efficitur suscipit. Donec libero purus, congue nec molestie in, finibus eu urna. Quisque rhoncus mauris non erat elementum, sit amet gravida risus convallis. Aliquam a commodo ex. Suspendisse nisl lectus, euismod eget ipsum eu, egestas porttitor lorem. In urna nibh, malesuada quis mi at, accumsan feugiat dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec rhoncus, libero in cursus hendrerit, ligula lacus volutpat massa, sed finibus velit est id tellus. In scelerisque, velit ac suscipit dictum, dolor est dictum nisi, a efficitur eros purus sed dolor. Vestibulum ut ligula tellus. Fusce a felis aliquet, vehicula ligula consectetur, pharetra libero. Donec aliquet vitae tellus id vestibulum.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(0, 0, 0);font-family:&quot;Open Sans&quot;, Arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 15px;orphans:2;padding:0px;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Ut nec libero turpis. Sed at quam pharetra, egestas sapien id, elementum neque. Fusce id bibendum lectus. Maecenas vehicula ipsum nec libero consequat, eget porttitor metus aliquet. Donec vitae lorem vel sapien faucibus pellentesque. Etiam efficitur bibendum ligula semper viverra. Nulla pharetra mauris eu volutpat viverra. Proin laoreet et arcu et varius. Pellentesque congue porttitor nunc nec porta. Sed nec nisi vehicula, congue mi ac, pharetra eros.</p>', 'uploads/Screenshot 2024-06-08 085859.png', 13, 'draft', '2024-06-08 08:16:14', '2024-06-08 08:16:14'),
	(42, 1, 'The Rise of Quantum Computing', '<p>In the ever-evolving landscape of technology, quantum computing has emerged as a revolutionary paradigm with the potential to transform industries and solve complex problems that are currently beyond the reach of classical computers. Quantum computers leverage the principles of quantum mechanics, such as superposition and entanglement, to perform computations at unprecedented speeds.</p><p><strong>What is Quantum Computing?</strong></p><p>Quantum computing is based on qubits, which unlike classical bits that are either 0 or 1, can exist in multiple states simultaneously. This property, known as superposition, allows quantum computers to process a vast amount of information concurrently. Additionally, qubits can be entangled, meaning the state of one qubit is directly related to the state of another, regardless of the distance between them. This phenomenon enhances computational power and speed.</p><p><strong>Applications and Implications</strong></p><p>Quantum computing holds promise in various fields:</p><ol><li><strong>Cryptography</strong>: Quantum computers can potentially break widely used encryption methods, prompting the need for quantum-resistant cryptographic algorithms.</li><li><strong>Drug Discovery</strong>: Quantum simulations can model complex molecular structures, accelerating the development of new drugs and materials.</li><li><strong>Optimization</strong>: Industries such as logistics, finance, and manufacturing can benefit from quantum algorithms that optimize processes and resource allocation.</li><li><strong>Artificial Intelligence</strong>: Quantum machine learning algorithms can significantly speed up data analysis and pattern recognition.</li></ol><p><strong>Challenges and Future Prospects</strong></p><p>Despite its potential, quantum computing faces several challenges. Qubits are highly sensitive to environmental disturbances, leading to errors in computations. Researchers are developing error-correction methods and more stable qubit designs to overcome this hurdle. Additionally, building scalable quantum computers remains a technical challenge.</p><p>As the field progresses, partnerships between academic institutions, tech giants, and startups are crucial in advancing quantum technology. Governments worldwide are also investing in quantum research, recognizing its strategic importance.</p><p>The next decade will be pivotal in transitioning quantum computing from experimental labs to practical applications. As we unravel the complexities of quantum mechanics, we inch closer to a future where quantum computers could solve some of the world\'s most pressing problems.</p>', 'uploads/view-3d-islamic-mecca-cube.jpg', 5, 'draft', '2024-06-08 13:01:08', '2024-06-08 13:01:08'),
	(43, 1, 'Test', '<p>In the ever-evolving landscape of technology, quantum computing has emerged as a revolutionary paradigm with the potential to transform industries and solve complex problems that are currently beyond the reach of classical computers. Quantum computers leverage the principles of quantum mechanics, such as superposition and entanglement, to perform computations at unprecedented speeds.</p><p><strong>What is Quantum Computing?</strong></p><p>Quantum computing is based on qubits, which unlike classical bits that are either 0 or 1, can exist in multiple states simultaneously. This property, known as superposition, allows quantum computers to process a vast amount of information concurrently. Additionally, qubits can be entangled, meaning the state of one qubit is directly related to the state of another, regardless of the distance between them. This phenomenon enhances computational power and speed.</p><p><strong>Applications and Implications</strong></p><p>Quantum computing holds promise in various fields:</p><ol><li><strong>Cryptography</strong>: Quantum computers can potentially break widely used encryption methods, prompting the need for quantum-resistant cryptographic algorithms.</li><li><strong>Drug Discovery</strong>: Quantum simulations can model complex molecular structures, accelerating the development of new drugs and materials.</li><li><strong>Optimization</strong>: Industries such as logistics, finance, and manufacturing can benefit from quantum algorithms that optimize processes and resource allocation.</li><li><strong>Artificial Intelligence</strong>: Quantum machine learning algorithms can significantly speed up data analysis and pattern recognition.</li></ol><p><strong>Challenges and Future Prospects</strong></p><p>Despite its potential, quantum computing faces several challenges. Qubits are highly sensitive to environmental disturbances, leading to errors in computations. Researchers are developing error-correction methods and more stable qubit designs to overcome this hurdle. Additionally, building scalable quantum computers remains a technical challenge.</p><p>As the field progresses, partnerships between academic institutions, tech giants, and startups are crucial in advancing quantum technology. Governments worldwide are also investing in quantum research, recognizing its strategic importance.</p><p>The next decade will be pivotal in transitioning quantum computing from experimental labs to practical applications. As we unravel the complexities of quantum mechanics, we inch closer to a future where quantum computers could solve some of the world\'s most pressing problems.</p>', 'uploads/view-3d-islamic-mecca-cube.jpg', 5, 'draft', '2024-06-08 13:01:51', '2024-06-08 13:01:51');

-- Dumping structure for table myweb.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table myweb.categories: ~10 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
	(5, 'Technology', '2024-05-29 04:03:11'),
	(6, 'Health and Wellness', '2024-05-29 04:03:16'),
	(7, 'Travel', '2024-05-29 04:03:18'),
	(8, 'Finance', '2024-05-29 04:03:21'),
	(9, 'Education', '2024-05-29 04:03:24'),
	(10, 'Lifestyle', '2024-05-29 04:03:27'),
	(11, 'Food and Recipes', '2024-05-29 04:03:31'),
	(12, 'Entertainment', '2024-05-29 04:03:33'),
	(13, 'Business and Entrepreneurship', '2024-05-29 04:03:37'),
	(14, 'Science', '2024-05-29 04:03:40');

-- Dumping structure for table myweb.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `comments_ibfk_1` (`post_id`),
  KEY `comments_ibfk_2` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table myweb.comments: ~7 rows (approximately)
INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`) VALUES
	(1, 41, 1, 'test', '2024-06-08 02:20:41'),
	(2, 41, 1, 'p', '2024-06-08 02:20:57'),
	(3, 21, 1, 'hae', '2024-06-08 02:21:07'),
	(4, 21, 1, 'test', '2024-06-08 02:23:05'),
	(5, 21, 1, 'test2', '2024-06-08 02:23:27'),
	(6, 21, 1, 'test23', '2024-06-08 02:23:40'),
	(7, 41, 1, 'yey', '2024-06-08 02:23:54');

-- Dumping structure for table myweb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','editor','author') DEFAULT 'author',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table myweb.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
	(1, 'kafa', '$2y$10$KxC8SWuhkMw4lvEg56tU6.4/muB11pVqfyIZQeV7laxojhJEBDbdu', 'j.kafabihi@gmail.com', 'author', '2024-05-28 07:57:30'),
	(2, 'admin', '$2y$10$KxC8SWuhkMw4lvEg56tU6.4/muB11pVqfyIZQeV7laxojhJEBDbdu', 'admin@gmail.com', 'admin', '2024-05-28 09:00:20'),
	(8, 'test123', '$2y$10$KfsR6N86AjPu3GGudUAe9.hXPlgeuQjqxPoBV/mZZ7V4p9OEDGtpS', 'kafabihi@gmail.com', 'admin', '2024-06-13 00:27:53');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
