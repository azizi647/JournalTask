-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 02:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mo', 1, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(2, 'Tu', 1, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(3, 'We', 1, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(4, 'Th', 1, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(5, 'Fr', 1, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(6, 'Sa', 0, '2019-07-12 06:11:08', '2019-07-12 06:11:08'),
(7, 'Su', 0, '2019-07-12 06:11:08', '2019-07-12 06:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentID` bigint(20) UNSIGNED NOT NULL,
  `teacherID` int(11) DEFAULT NULL,
  `subjectID` bigint(20) UNSIGNED NOT NULL,
  `dayID` int(11) DEFAULT NULL,
  `journalID` int(11) DEFAULT NULL,
  `grade` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ie',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `studentID`, `teacherID`, `subjectID`, `dayID`, `journalID`, `grade`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 2, 5, 1, '4', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(2, 2, NULL, 2, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(3, 3, NULL, 2, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(4, 1, NULL, 4, 5, 1, '4', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(5, 2, NULL, 6, 5, 1, '3', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(6, 3, NULL, 4, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(7, 4, NULL, 6, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(8, 1, NULL, 4, 5, 1, '4', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(9, 2, NULL, 6, 5, 1, '3', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(10, 3, NULL, 4, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(11, 4, NULL, 6, 5, 1, '5', '2019-07-25 20:00:00', '2019-07-25 20:00:00'),
(12, 3, NULL, 4, NULL, NULL, 'ie', NULL, NULL),
(13, 2, NULL, 4, NULL, NULL, 'ie', NULL, NULL),
(14, 2, NULL, 2, NULL, NULL, 'ie', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `begin` timestamp NOT NULL DEFAULT '2019-09-15 04:00:00',
  `end` timestamp NOT NULL DEFAULT '2010-05-31 11:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `title`, `begin`, `end`, `created_at`, `updated_at`) VALUES
(1, NULL, '2019-09-15 04:00:00', '2010-05-31 11:00:00', '2019-07-12 06:15:22', '2019-07-12 06:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `journal_day_subject_xref`
--

CREATE TABLE `journal_day_subject_xref` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journalID` bigint(20) UNSIGNED NOT NULL,
  `dayID` bigint(20) UNSIGNED NOT NULL,
  `subjectID` bigint(20) UNSIGNED NOT NULL,
  `lessonOrder` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_day_subject_xref`
--

INSERT INTO `journal_day_subject_xref` (`id`, `journalID`, `dayID`, `subjectID`, `lessonOrder`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, '2019-07-12 06:15:22', '2019-07-12 06:15:22'),
(2, 1, 1, 4, 2, '2019-07-12 06:15:22', '2019-07-12 06:15:22'),
(3, 1, 1, 3, 3, '2019-07-12 06:15:22', '2019-07-12 06:15:22'),
(4, 1, 1, 6, 4, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(5, 1, 2, 7, 1, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(6, 1, 2, 8, 2, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(7, 1, 2, 6, 3, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(8, 1, 2, 5, 4, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(9, 1, 3, 1, 1, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(10, 1, 3, 3, 2, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(11, 1, 3, 3, 3, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(12, 1, 3, 4, 4, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(13, 1, 4, 5, 1, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(14, 1, 4, 8, 2, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(15, 1, 4, 2, 3, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(16, 1, 4, 3, 4, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(17, 1, 5, 2, 1, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(18, 1, 5, 3, 2, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(19, 1, 5, 4, 3, '2019-07-12 06:15:23', '2019-07-12 06:15:23'),
(20, 1, 5, 6, 4, '2019-07-12 06:15:23', '2019-07-12 06:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_11_063353_create_students_table', 1),
(4, '2019_07_11_065219_create_subjects_table', 1),
(5, '2019_07_11_065502_create_teachers_table', 1),
(6, '2019_07_11_072130_create_grades_table', 1),
(7, '2019_07_11_203302_create_days_table', 1),
(8, '2019_07_11_210913_create_subject_teacher_pivot_table', 1),
(9, '2019_07_11_211122_create_journals_table', 1),
(10, '2019_07_11_211221_create_journal_day_subject_xref_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `class`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Murl', 'Waters', '10', 'female', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(2, 'Kendrick', 'Gerhold', '10', 'male', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(3, 'Adaline', 'Osinski', '10', 'female', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(4, 'River', 'Littel', '10', 'male', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Azerbaycan dili', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(2, 'Ingilis dili', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(3, 'Rus dili', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(4, 'Riyaziyyat', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(5, 'Kimya', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(6, 'Fizika', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(7, 'Informatika', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(8, 'Asronomiya', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `subject_teacher_pivot`
--

CREATE TABLE `subject_teacher_pivot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subjectID` bigint(20) UNSIGNED NOT NULL,
  `teacherID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wyman', 'O\'Hara', 'male', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(2, 'Jammie', 'O\'Kon', 'male', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(3, 'Christy', 'Bayer', 'female', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(4, 'Sage', 'Walker', 'female', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(5, 'Fiona', 'Parker', 'female', 1, '2019-07-12 05:56:29', '2019-07-12 05:56:29'),
(6, 'Guy', 'Schultz', 'female', 1, '2019-07-12 05:56:30', '2019-07-12 05:56:30'),
(7, 'Mackenzie', 'Kunze', 'female', 1, '2019-07-12 05:56:30', '2019-07-12 05:56:30'),
(8, 'Alisha', 'Roberts', 'female', 1, '2019-07-12 05:56:30', '2019-07-12 05:56:30'),
(9, 'Ernestina', 'Kunde', 'male', 1, '2019-07-12 05:56:30', '2019-07-12 05:56:30'),
(10, 'Mellie', 'Lowe', 'female', 1, '2019-07-12 05:56:30', '2019-07-12 05:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aziz Azizli', 'admin@admin.com', NULL, '$2y$10$ZPAFRk1iAxclFFPdo.VmqecPUwvO10AkmgZN96Hm/UUxEJvcK.f0O', NULL, '2019-07-12 05:56:28', '2019-07-12 05:56:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_studentid_foreign` (`studentID`),
  ADD KEY `grades_subjectid_foreign` (`subjectID`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_day_subject_xref`
--
ALTER TABLE `journal_day_subject_xref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_day_subject_xref_journalid_index` (`journalID`),
  ADD KEY `journal_day_subject_xref_dayid_index` (`dayID`),
  ADD KEY `journal_day_subject_xref_subjectid_index` (`subjectID`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_teacher_pivot`
--
ALTER TABLE `subject_teacher_pivot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_teacher_pivot_subjectid_foreign` (`subjectID`),
  ADD KEY `subject_teacher_pivot_teacherid_foreign` (`teacherID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journal_day_subject_xref`
--
ALTER TABLE `journal_day_subject_xref`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject_teacher_pivot`
--
ALTER TABLE `subject_teacher_pivot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_studentid_foreign` FOREIGN KEY (`studentID`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `grades_subjectid_foreign` FOREIGN KEY (`subjectID`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `journal_day_subject_xref`
--
ALTER TABLE `journal_day_subject_xref`
  ADD CONSTRAINT `journal_day_subject_xref_dayid_foreign` FOREIGN KEY (`dayID`) REFERENCES `days` (`id`),
  ADD CONSTRAINT `journal_day_subject_xref_subjectid_foreign` FOREIGN KEY (`subjectID`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `subject_teacher_pivot`
--
ALTER TABLE `subject_teacher_pivot`
  ADD CONSTRAINT `subject_teacher_pivot_subjectid_foreign` FOREIGN KEY (`subjectID`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `subject_teacher_pivot_teacherid_foreign` FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
