-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2021 at 11:04 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdvr`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf16 NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `name`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'info', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(2, 'test page 2', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(3, 'test 3.3', 0, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(4, 'test 4', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(5, 'test 5', 0, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(6, 'test 6', 0, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(8, 'test 7', 0, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(9, 'test 8', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(10, 'test 9', 0, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(11, 'test 10', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48'),
(12, 'test 11', 1, '2021-06-24 09:06:48', '2021-06-24 11:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `paragraphs`
--

CREATE TABLE `paragraphs` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(80) CHARACTER SET utf16 NOT NULL,
  `content` text CHARACTER SET utf16 NOT NULL,
  `order_index` int(11) NOT NULL,
  `paragraph_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paragraphs`
--

INSERT INTO `paragraphs` (`id`, `page_id`, `title`, `content`, `order_index`, `paragraph_visible`, `created_at`, `updated_at`) VALUES
(1, 1, 'Origins of Full Dive Virtual Reality', 'The term originated from a Japanese light novel anime series, Sword Art Online, written by Reki Kawahara in 2009. In the series, a Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG) called Sword Art Online, or SAO, is released in the year 2022. 10,000 players don their “NerveGear” BMI(brain-computer interface) helmets and begin to play.\r\n\r\nPlayers soon realize that the game developer has locked them into the game and that any attempt to logout or end the game will be fatal to their real-life bodies. The only way to exit the game, and to survive, is to successfully reach the 100th floor of the castle and defeat the final foe.\r\n\r\nNot exactly the pitch you want to give investors, to be sure, but there are some good things there we can take away. First, the story popularized the concept of VRMMORPG. Gamers who weren’t thinking of engaging untold minions in gameplay suddenly started dreaming. Second, the concept of a helmet creating a non-invasive neural interface between man and machine whetted the appetite for those wanting a more seamless way to interact with computers. Not that the idea of BMIs was new, but seeing the concept demonstrated in such a rich storyline made the idea all the more tempting.', 1, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(2, 1, 'Examples of Full Dive Virtual Reality in Use', 'Back in the real world, real and exciting things are happening. Full dive virtual reality technology is rapidly stepping off the pages of science fiction and into the lab.', 2, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(3, 1, 'Humble Beginnings', 'Recent advances in technology can sometimes be appreciated more when contrasted with earlier successes and failures.\r\n\r\nIn 2013, Harvard University broke ground for FDVR advances by conducting a human- brain-to-mouse-brain experiment. In this experiment, researchers used an electroencephalogram (EEG) brain-brain-interface (BBI) to detect the thought patterns of a researcher. By focusing his thoughts, the researcher was able to control the movement of a rat’s tail. Not exactly the kind of action most serious gamers are looking for, but it marked an important turning point in BBI technology. For the first time, two brains communicated directly through a hardware interface.\r\n\r\nThere were two reasons why this experiment was noteworthy. Not only did it demonstrate that human thought could be correctly interpreted by computer and used to control a rat’s brain, but the experiment was non-invasive for both the researcher and the rat. While researchers around the world have been able to control rats’ brains through the use of implanted electrodes, this rat suffered no such indignity. Non-surgical focused ultrasound (FUS) was used to impart the control signals to the rat’s brain, a technology we will elaborate on shortly.', 3, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(4, 1, 'The Paralyzed Walk', 'Fast-forward to 2015. Researchers at the University of California at Irvine also used an electroencephalogram machine to detect human thought. This time, however, those thoughts did not make it possible to control a rat’s tail, but to help a paraplegic man walk for the first time in five years. The man, who had suffered a spinal cord injury, walked nearly four meters with the assistance of the EEG device and advanced software.\r\n\r\nThe study involved placing electrodes on the patient’s head and on his legs. By detecting and interpreting signals from the man’s brain and sending those signals to his legs, the system bypassed the damaged spinal cord and allowed him to once again control the movement of his legs.\r\n\r\nThe experiment required the patient to undergo 19 weeks of training prior to taking his first step, but the encouraging results proved the concept was valid.\r\n\r\nThese two experiments may not be encouraging to those who had hoped for more, but consider this. Within two years, we have seen the technology advance from wiggling a rats tail to allowing a paralyzed person to actually walk across the floor. Such progress should be exciting, indeed, for anyone interested in full dive virtual reality development.', 4, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(5, 1, 'Technologies involved in Full Dive Virtual Reality', 'Full dive is a term that has been used by some game developers to imply that their games provide a more-immersive VR experience. By using advanced full-body motion sensors and high definition spacial audio, along with the VR headset, players do enjoy more immersive gameplay than ever before. But this is not true full dive.\r\n\r\nFull dive, in the truest sense, goes beyond external viewers and sensors for user interaction and provides direct interaction between the user’s brain and the computer. Full dive is not so much full body immersion as it is full mind immersion.\r\n\r\nPhysical connections to the brain are not necessarily required, but there must be interpretation of the user’s thoughts by the computer, and — more importantly — the computer must be able to send sensory data directly into the user’s central nervous system. Full dive is, essentially, the ultimate goal of brain-to-computer interface research.\r\n\r\nBCIs have been around, in various experimental stages, for years. What makes FDVR a new concept is that it has the added component of virtual reality. Regardless of whatever advancements in BCIs may have been made until now, VR is a game changer (no pun intended).\r\n\r\nWithin the scope of what full dive is, or can become, is the question of just how much interaction between user and machine is possible. Two levels of interaction are theoretically achievable: Mobile and Immobile.', 5, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(6, 1, 'Mobile and Immobile Full Dive', 'Mobile full dive, as the name suggests, involves the user physically moving his or her body with their movements being detected by external sensors, not unlike current VR technology. For lack of refined methods of detecting and interpreting thoughts, physical action provides the most reliable means of providing data to the computer. In order for the experience to be FDVR, the sensory data returned by the computer must be fed directly into the user’s brain or central nervous system; otherwise, we just have a conventional VR experience.\r\n\r\nImmobile full dive, on the other hand, means just what it says: the user is immobile and the FD experience is entirely cerebral. No physical movement is necessary, as the computer can translate the user’s thoughts with adequate precision to control the program. While conventional VR gear could still be used — and probably will be for the foreseeable future, full dive will ultimately involve bypassing the user’s five senses by sending sights, sounds, smells, tastes, and tactile sensations directly into the brain.\r\n\r\nIn theory, a full full-dive experience would disable the user’s external sensory awareness, replacing it with virtual awareness for the duration of the HDVR session. Likewise, the user would have no need to move their body, as their thoughts would control their virtual bodies within VR space. There is, admittedly, a creep factor to being so totally immersed that one’s own physical body becomes obsolete. Some might even question whether we really want to go there. But, of course, we will.', 6, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(7, 1, 'Government Help', 'Studies such as the Harvard experiment show exciting progress, there must be greater even advances in order for FD to become a reality. The U.S. Defense Advanced Research Project Agency (DARPA) may provide a key component.\r\n\r\nDARPA plans to spend $60 million (USD) over the next four years to develop a high-resolution, wide-bandwidth intracranial electrode array for recording and stimulating brain activity. The DARPA Stentrode (stent and electrode) has been successfully tested in sheep and is injected into a blood vessel where it records and stimulates neural activity. Experiments with humans began in 2017.\r\n\r\nThe minimally invasive device may be the closest thing we have, yet, to a brain modem. And while the ultimate goal is to enjoy a full dive experience without the need for implants of any sort, the lessons learned by the Stentrode will help us to get there.', 7, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(8, 1, 'Electroencephalogram (EEG)', 'One secret to advancing any technology is to find what works and keep doing it. As we discussed, EEG systems were successful in the 2013 rat-tail experiment, and they were successful in the 2015 University of California at Irvine experiment where a paraplegic walked. As promising as the DARPA device may be, the non-invasive EEG holds, perhaps, greater promise for developers wishing to advance full dive technology.\r\n\r\nEEG has already moved from the lab to commercial applications. One company, Emotive, has penetrated the market with 5-channel and 14-channel “neuroheadsets” and advanced EEG software. Emotive is developing applications for its products in the fields of “academic research, advertising and media, education and training, mobility, defense, communication, automotive and IoT (Internet of Things) development.”\r\n\r\nClearly, EEG is an excellent foundation upon which to advance full drive technology.', 8, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(9, 1, 'Focused Ultrasound (FUS)', 'In terms of brain interfaces, focused ultrasound is a means of stimulating targeted regions of the brain by bombarding them with ultrasonic energy of a particular frequency and pressure level. In the case of the rat tail experiment, the motor cortex of the rat’s brain was stimulated with 350 KHz from a transducer placed on the rat’s head.\r\n\r\nWhile FUS is primarily a therapeutic tool used by healthcare professionals for treating certain health conditions, Harvard’s out-of-the-box thinking adapted it for their brain interface. This is exactly the kind of creativity that will lead innovators to push full dive closer to reality.', 9, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(10, 1, 'Full Dive Virtual Reality in Gaming', 'In the 2016 edition of this article, we stated, “To date, there are no TRUE full dive games…” And to be honest, no commercial-grade FD game was even on the horizon, nor the headset to control such a game.\r\n\r\nThat has all changed.\r\n\r\nAt SIGGRAPH 2017 in Los Angeles, Neurable debued the VR game Awakening. The game storyline goes like this: you are a child who has telekinetic powers and you are being held prisoner in a government lab. Robot prison guards are present prevent you from escaping your cell. The object of the game is to use your telekinetic abilities to select objects in the lab and to hurl them at the robot guards, knocking them out of commission. Defeat enough guards and you are free to escape.\r\n\r\nOh, yeah. And you control the game with your thoughts.\r\n\r\nBy simply focusing on whatever object you wish to weaponize, you cause that object to be thrown at the guards. The debut version used a modified HTC Vive headset. An array of sensors detect brainwave activity on the surface of the player’s scalp\r\n\r\nIf battling foes using only the power of your mind is on your bucket list, you might not have long to wait. Neurable is aggressively working with content developers and VR partners to bring their technology to market.\r\n\r\nBut wait… it gets even better.\r\n\r\nNeurable is working on an SDK for Unity, so developers can build their own mind-controlled games. How cool is that?\r\n\r\nFull dive virtual reality development isn’t all fun and games. Success requires a solid foundation in the very latest virtual reality technology, and the ability to transform complex theories into workable solutions. Pioneers in full dive development must go beyond adopting the latest technology; they must be able to do real science.', 10, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(11, 1, 'source', '<a target=\"_blank\" href=https://www.linkedin.com/pulse/full-dive-virtual-reality-coming-soon-brain-near-you-aviram-eisenberg>full-dive-virtual-reality-coming-soon-brain-near-you</a>', 11, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(14, 2, 'test paragraph 2.1', 'beep boop 2.0', 1, 1, '2021-06-24 09:07:43', '2021-06-24 11:07:43'),
(15, 2, 'invis check', 'check check?', 2, 0, '2021-06-24 09:07:43', '2021-06-24 11:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(16) CHARACTER SET utf16 NOT NULL,
  `password` varchar(40) CHARACTER SET utf16 NOT NULL,
  `admin_power` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `password`, `admin_power`) VALUES
(7, 'rens', '87acec17cd9dcd20a716cc2cf67417b71c8a7016', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD CONSTRAINT `paragraphs_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
