-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2021 at 01:06 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locatemy_hur_zameen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(11, 'dhani', 'younis@mail.com', '$2y$10$ZEs4eq3h1XbP5KYo9Yp.1e1Lyj6EFkIj7ICECiKHyAmR.UOHn8Vbu'),
(16, 'Dhani', 'dhani@mail.com', '$2y$10$9w.fpE/GTcJoTFORzIcX7u.2xcmfQrtSrogTEIjCoa78Jsn89lo1G'),
(17, 'Ali KHAN', 'ali@mail.com', '$2y$10$zeyv6O8Wrr/tyVMs9iRTQ.VCmdG6HcWpFzrXXz7ZDUi7wlkcL2Pyi');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_04_16_185419_create_schemes_context_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `scheme_id` int(10) UNSIGNED NOT NULL,
  `schemes_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`scheme_id`, `schemes_name`, `status`) VALUES
(2, 'AR TOWN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schemes_contexts`
--

CREATE TABLE `schemes_contexts` (
  `scheme_id` int(11) NOT NULL,
  `context` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schemes_contexts`
--

INSERT INTO `schemes_contexts` (`scheme_id`, `context`, `status`) VALUES
(2, '<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:36px\"><span style=\"color:#e74c3c\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Georgia&quot;,serif\">How to evolve [develop, create, discover ]a strategic [judicious, clever, prudent, shrewd] mind?</span></strong></span></span></span></p>\n\n<p><span style=\"font-size:28px\"><span style=\"color:#c0392b\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Strategic mind reflects culture of country where priority [preference] is given to education, research, innovation, human security</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">. [Thesis statement]</span></span></span></span></p>\n\n<hr />\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Georgia&quot;,serif\">No nation can progress unless it is equipped with a strategic mind capable of effectively dealing with crises [dilemma, troubles, quandary ]and conflicts[ quarrel, dispute, squabble] and geared [prepared ]towards seeking excellence in economic, human and social development. What is a strategic mind and how can it evolve in a society which is underdeveloped and socially backward? Why is there a dearth [lack, shortage, paucity]of strategic minds in Pakistan and how can the country strive[ grapple, struggle,compete ]for a strategic thought process which is clear, coherent [logical, reason, cogent], consistent PERMANENT&nbsp; and courageous, and can focus on dealing with issues which are critical [serious] in nature?</span></strong></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Strategic mind reflects culture of a country where priority is given to education, research, innovation, human security and vision for achieving good governance, rule of law and a quality life for citizens. If the leadership is honest, competent, clear-headed and focused, and believes in the ownership of resources, its decisions also reflect a strategic mindset.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">There is a dearth of strategic minds in Pakistan because those at the helm of affairs lack competence, clarity, consistency, integrity, vision and courage to turn things around and pull the country from the vicious cycle of poverty, under-development, bad governance and ill-management of external relations. Some of the requisites [requirements, essentials] for shaping PLANNING, MAKING a strategic mindset are: adequate [sufficient ] knowledge of issues, clarity, 1creativity, coherence, consistency, courage, time management, risk taking and pragmatic [practical] thinking. Unfortunately, in 73 years of Pakistan&rsquo;s history, national debacles [downfall, mess, wreck, collapse] like the Operation Gibraltar fiasco&nbsp; failure , of 1965, the East Pakistan crisis and emergence of Bangladesh in 1971, Pakistan in the US-led Afghan war 1980-88, the Kargil crisis in 1999, Mumbai terrorist attacks of November 2009, and India&rsquo;s annexation [cancellation, abolish, concede, revoke] of Jammu &amp; Kashmir on August 5, 2019 were primarily the result of a lack of strategic mindset, statesmanship and tactical [judicious, wise, clever,]thinking. Domestic indigenous&nbsp; issues ranging from the assassination murder of politician of Prime Minister Liaquat Ali Khan in October 1951, military takeover in October 1958, failure of political parties to strengthen to make powerful, democracy, imposition of martial law in 1969, 1977 and 1999, worsening economy, bad governance, absence of rule of law as well as surge increase&nbsp; in religious extremism, militancy, violence and terrorism also reflect the absence of a strategic mindset and thought process.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">What&rsquo;s mentioned [explained, point out] above proves that if there had been a leadership excelling increasing in tact, wisdom, clarity, courage, integrity, innovation and vision, Pakistan would not have faced back-to-back national tragedies [calamity, catastrophe]. Leadership qualities apart, people should also be educated, prudent [ clever, adroit, diligent, sagacious, adept]and honest, and possess the qualities of intelligence, tactfulness, courage and good education.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Pakistan&rsquo;s dilemma issues is four-fold when it comes to evolving a strategic mind.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">First, feudal and tribal culture has not been eradicated &mdash; something which precludes efforts for inculcating enlightenment, innovation, intelligence, adherence [obedient, servile,] to merit, quest for knowledge and wisdom. When the culture of over 220 million people of Pakistan is devoid of a forward-looking approach, wisdom, intelligence, integrity unity, and pragmatism realistic , it is impossible to evolve a strategic mind. When more than 25 million children are out of school and a majority of those who are enrolled [enlisted, documented, admitted] at primary and secondary levels are not trained in terms of developing analytical logical, approach and critical thinking how can one expect the country to evolve a culture where strategic mindset could prevail exist?</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">A society which is educated, enlightened, wise and follows work ethics of integrity, hard work, merit, intelligence, perseverance, planning and time -management, its leadership cannot be incompetent, dishonest and unwise. Strategic mind is a reflection of strategic culture where shrewdness intelligence acumen, cleverness, sagacity,, tact, vision and intelligence shape decision-making on the various issues. Non-serious and irresponsible approach in a crisis situation, reflected in Pakistan since its inception [start, beginning, commencement ], caused irreparable damage to the country&rsquo;s national interests and security. Had that not been the case, Pakistan would not have lost East Pakistan, Kargil and Siachen; and India would not have dared cross the red line and annex [take over,occupy, seize,] Jammu &amp; Kashmir two years ago. If the leadership thinks strategically and is equipped with enough wisdom, tact, courage, clarity and consistency, it cannot be harmed by its adversary [enemy, foe]. Unfortunately, successive Pakistani governments failed to redeem [think, cogitate, cerebrate, mull over, ponder over] a crisis situation which led the enemy to strike again and again. A strategic mind, before venturing journey, into any adventure like Operation Gibraltar 1965 and Kargil 1999, should have thought several times about the reaction from the other side. On both occasions incidents , Pakistan suffered setbacks defeat and humiliations shame, dishonor embarrassment&nbsp; because early warnings about negative ramifications [effects, consequences, impacts, repercussions] of such misadventures were overlooked ignored . coalition, temporary relation [ alliance permanent ]</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><strong><span style=\"color:#e74c3c\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Section has been done</span></span></span></strong></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Second, the gap in perception and reality also led to strategic debacles destruction, collapse,. If the perception is devoid of liban in Afghanistan till 9/11 reflected strategic imprudence[reluctant, heedlessness] on the part of the successive Pakistani regimes governments that failed to redeem the consequences of siding with those who were to be attacked by the US and its allies [partner] on allegations blames of hosting Al-Qaeda. Also, it was the gap in perception and reality which led to a serious economic crisis in Pakistan when the government of Prime Minister Nawaz Sharif ordered the freezing of foreign current accounts in the wake of the nuclear tests of May 28, 1998. The perception which prevailed in the policymaking circles of Pakistan that people will accept that decision proved to be wrong as it led to a serious credibility status, reputation, credit, crisis because the foreign currency account holders criticised the government for eroding [damaging harming ] their trust. Foreign currency accounts worth $14 billion were frozen because the government feared the flight of capital from the country due to possible sanctions penality, by the West. The government breached cracked finish the trust of account holders by spending their money to an extent that hardly $800 million were left.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\"><img alt=\"\" src=\"http://localhost:8000/storage/uploads/2/79141_1628004455.jfif\" style=\"border-style:solid; border-width:2px; height:524px; margin:50px 100px; width:350px\" /></span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Third, the culture of strategic mindset in Pakistan failed to evolve because no lessons were learned from the blunders of the past mentioned above, besides &lsquo;Operation Gerimino&rsquo; of May 2, 2011 when US navy seals breached the sovereignty of Pakistan and killed global terrorist Osama bin Landen who was recovered from a compound in the garrison city of Abbottabad. When the strategic thinking is devoid of prudence and rationality, the country continues to face such fiascos, also jeopardizing damaging, national security.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Finally, strategic mindset cannot evolve unless there are institutions that focus on purposeful and meaningful study and research in the field of strategic studies so as to train a generation of strategic thinkers. Ironically, the Department of Strategic Studies is not to be found outside the capital city of Islamabad. Even those who graduate from departments of Strategic Studies in Quaid-e-Azam University and National Defense University, Islamabad or elsewhere are not enough in numbers to meet the demand of strategic thinkers shaping the policies in the realm of national security, economy and defence. Political leaders, like their state counterparts, also lack strategic mind and mainly focus on the dynamics of seeking power by manipulative means. Lack of professionalism, political wisdom, clarity and vision shaping the mindset of the majority of political parties and their leaders cannot be overlooked.</span></span></span></span></p>\n\n<p><span style=\"font-size:26px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Georgia&quot;,serif\">Jani</span></span></span></span></p>\n\n<p><br />\n&nbsp;</p>\n\n<p>&nbsp;</p>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `schemes_contexts`
--
ALTER TABLE `schemes_contexts`
  ADD PRIMARY KEY (`scheme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `scheme_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
