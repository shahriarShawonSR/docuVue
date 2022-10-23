-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2019 at 11:34 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docuvue_docuvue`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project_titles`
--

CREATE TABLE `add_project_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `enty_by` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `project_title_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_project_titles`
--

INSERT INTO `add_project_titles` (`id`, `deleted_at`, `created_at`, `updated_at`, `enty_by`, `project_title_name`) VALUES
(1, '2018-11-18 01:49:36', '2018-11-17 02:14:44', '2018-11-18 01:49:36', 0, ''),
(2, '2018-11-18 01:49:43', '2018-11-17 02:15:08', '2018-11-18 01:49:43', 0, ''),
(3, '2018-11-18 01:47:52', '2018-11-18 01:31:31', '2018-11-18 01:47:52', 1, ''),
(4, '2018-11-18 01:49:40', '2018-11-18 01:40:47', '2018-11-18 01:49:40', 7, ''),
(5, '2018-11-18 01:49:44', '2018-11-18 01:49:05', '2018-11-18 01:49:44', 1, 'Software'),
(6, '2018-11-18 01:49:47', '2018-11-18 01:49:14', '2018-11-18 01:49:47', 1, 'Software'),
(7, '2018-11-18 01:52:21', '2018-11-18 01:51:13', '2018-11-18 01:52:21', 0, 'Software'),
(8, '2018-11-18 01:54:30', '2018-11-18 01:54:26', '2018-11-18 01:54:30', 1, 'Software'),
(9, NULL, '2018-11-18 01:59:07', '2018-11-18 01:59:07', 1, 'Software'),
(10, NULL, '2018-11-18 01:59:23', '2018-11-18 01:59:23', 1, 'Software'),
(11, NULL, '2018-11-18 02:00:35', '2018-11-18 02:00:35', 9, 'Software'),
(12, NULL, '2018-11-18 02:02:36', '2018-11-18 02:02:36', 10, 'TEST'),
(13, NULL, '2018-11-18 02:02:43', '2018-11-18 02:02:43', 10, 'TEST1'),
(14, NULL, '2018-11-18 02:31:43', '2018-11-18 02:31:43', 11, 'Software'),
(15, NULL, '2019-01-16 05:19:27', '2019-01-16 05:19:27', 12, 'Action Order'),
(16, NULL, '2019-01-19 06:27:12', '2019-01-19 06:27:12', 12, 'Not'),
(17, NULL, '2019-01-19 06:27:47', '2019-01-19 06:27:47', 12, 'Office Order');

-- --------------------------------------------------------

--
-- Table structure for table `backups`
--

CREATE TABLE `backups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `backup_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tags` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `tags`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administration', '[]', '#000', NULL, '2018-11-16 13:16:54', '2018-11-16 13:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `document_managements`
--

CREATE TABLE `document_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ab` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_manages`
--

CREATE TABLE `document_manages` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sarok_no` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `others` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `project_sub_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `issue_date` date NOT NULL DEFAULT '1970-01-01',
  `image` int(11) NOT NULL DEFAULT '0',
  `order_description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `project_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `enty_by` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_manages`
--

INSERT INTO `document_manages` (`id`, `deleted_at`, `created_at`, `updated_at`, `sarok_no`, `others`, `project_sub_title`, `issue_date`, `image`, `order_description`, `title`, `project_title`, `enty_by`) VALUES
(22, '2019-01-16 09:34:20', '2019-01-16 07:27:50', '2019-01-16 09:34:20', '2019-101', '01', 'agm, momo-in, Annual', '2019-01-01', 9, 'agm, momo-in, Annual', 1, '15', 12),
(23, '2019-01-16 06:03:49', '2019-01-16 05:53:02', '2019-01-16 06:03:49', '5677', '7777', 'hgjhgjh', '2019-01-16', 9, '', 1, '15', 12),
(24, '2019-01-19 06:30:39', '2019-01-16 07:29:21', '2019-01-19 06:30:39', '2018-1', '1', 'agm, momo-in, Annual', '2017-01-01', 9, 'agm, momo-in, Annual', 1, '15', 12),
(25, NULL, '2019-01-16 07:41:43', '2019-01-16 07:41:43', '2019-101', '01', 'agm, momo-in, Annual', '2019-01-05', 10, 'agm, momo-in, Annual', 1, '15', 12),
(26, NULL, '2019-01-16 09:56:04', '2019-01-16 09:56:04', '2019-2', '02', 'agm, momo-in, Annual', '2019-01-16', 13, 'agm, momo-in,', 1, '15', 12),
(27, NULL, '2019-01-19 06:32:54', '2019-01-19 06:32:54', '2019-01', '01', 'HRM&A, Contract Based', '2019-01-01', 14, 'HRM&A, Contract Based', 1, '16', 12);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mobile2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dept` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date NOT NULL DEFAULT '1990-01-01',
  `date_hire` date NOT NULL,
  `date_left` date NOT NULL DEFAULT '1990-01-01',
  `salary_cur` decimal(15,3) NOT NULL DEFAULT '0.000',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `gender`, `mobile`, `mobile2`, `email`, `dept`, `city`, `address`, `about`, `date_birth`, `date_hire`, `date_left`, `salary_cur`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12, 'TMSS ES DATA FO\r\n', 'Super Admin', 'Male', '8888888888', '', 'tmssras7@gmail.com', 1, 'Pune', 'Karve nagar, Pune 411030', 'About user / biography', '2019-01-16', '2019-01-16', '2019-01-16', '0.000', NULL, '2019-01-16 04:29:45', '2019-01-16 04:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `la_configs`
--

CREATE TABLE `la_configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `la_configs`
--

INSERT INTO `la_configs` (`id`, `key`, `section`, `value`, `created_at`, `updated_at`) VALUES
(1, 'sitename', '', 'Docu  Vue', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(2, 'sitename_part1', '', 'Docu', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(3, 'sitename_part2', '', 'Vue', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(4, 'sitename_short', '', 'DV', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(5, 'site_description', '', 'Welcome To Document Management System  ', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(6, 'sidebar_search', '', '1', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(7, 'show_messages', '', '1', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(8, 'show_notifications', '', '1', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(9, 'show_tasks', '', '1', '2018-11-16 13:16:57', '2018-11-17 23:56:27'),
(10, 'show_rightsidebar', '', '1', '2018-11-16 13:16:57', '2018-11-17 23:56:28'),
(11, 'skin', '', 'skin-blue', '2018-11-16 13:16:57', '2018-11-17 23:56:28'),
(12, 'layout', '', 'fixed', '2018-11-16 13:16:57', '2018-11-17 23:56:28'),
(13, 'default_email', '', 'test@example.com', '2018-11-16 13:16:58', '2018-11-17 23:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `la_menus`
--

CREATE TABLE `la_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'module',
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hierarchy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `la_menus`
--

INSERT INTO `la_menus` (`id`, `name`, `url`, `icon`, `type`, `parent`, `hierarchy`, `created_at`, `updated_at`) VALUES
(2, 'Users', 'users', 'fa-group', 'module', 1, 1, '2018-11-16 13:16:53', '2018-11-16 14:16:33'),
(4, 'Departments', 'departments', 'fa-tags', 'module', 1, 2, '2018-11-16 13:16:53', '2018-11-16 14:16:33'),
(5, 'Employees', 'employees', 'fa-group', 'module', 1, 3, '2018-11-16 13:16:53', '2018-11-16 14:16:33'),
(6, 'Roles', 'roles', 'fa-user-plus', 'module', 1, 4, '2018-11-16 13:16:53', '2018-11-16 14:16:33'),
(8, 'Permissions', 'permissions', 'fa-magic', 'module', 1, 5, '2018-11-16 13:16:53', '2018-11-16 14:16:33'),
(9, 'Document_Managements', 'document_managements', 'fa fa-cube', 'module', 0, 2, '2018-11-16 14:14:07', '2018-11-17 00:34:00'),
(10, 'Document_Manages', 'document_manages', 'fa fa-cube', 'module', 9, 1, '2018-11-16 14:16:18', '2018-11-16 14:16:33'),
(11, 'Add_Project_Titles', 'add_project_titles', 'fa fa-book', 'module', 12, 1, '2018-11-17 00:26:12', '2018-11-17 00:34:00'),
(12, 'Settings', 'settings', 'fa fa-cogs', 'module', 0, 1, '2018-11-17 00:33:27', '2018-11-17 00:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_26_050000_create_modules_table', 1),
('2014_05_26_055000_create_module_field_types_table', 1),
('2014_05_26_060000_create_module_fields_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_12_01_000000_create_uploads_table', 1),
('2016_05_26_064006_create_departments_table', 1),
('2016_05_26_064007_create_employees_table', 1),
('2016_05_26_064446_create_roles_table', 1),
('2016_07_05_115343_create_role_user_table', 1),
('2016_07_06_140637_create_organizations_table', 1),
('2016_07_07_134058_create_backups_table', 1),
('2016_07_07_134058_create_menus_table', 1),
('2016_09_10_163337_create_permissions_table', 1),
('2016_09_10_163520_create_permission_role_table', 1),
('2016_09_22_105958_role_module_fields_table', 1),
('2016_09_22_110008_role_module_table', 1),
('2016_10_06_115413_create_la_configs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_db` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view_col` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fa_icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `is_gen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `label`, `name_db`, `view_col`, `model`, `controller`, `fa_icon`, `is_gen`, `created_at`, `updated_at`) VALUES
(1, 'Users', 'Users', 'users', 'name', 'User', 'UsersController', 'fa-group', 1, '2018-11-16 12:28:50', '2018-11-16 13:16:58'),
(2, 'Uploads', 'Uploads', 'uploads', 'name', 'Upload', 'UploadsController', 'fa-files-o', 1, '2018-11-16 12:28:51', '2018-11-16 13:16:58'),
(3, 'Departments', 'Departments', 'departments', 'name', 'Department', 'DepartmentsController', 'fa-tags', 1, '2018-11-16 12:28:52', '2018-11-16 13:16:58'),
(4, 'Employees', 'Employees', 'employees', 'name', 'Employee', 'EmployeesController', 'fa-group', 1, '2018-11-16 12:28:53', '2018-11-16 13:16:58'),
(5, 'Roles', 'Roles', 'roles', 'name', 'Role', 'RolesController', 'fa-user-plus', 1, '2018-11-16 12:28:54', '2018-11-16 13:16:58'),
(6, 'Organizations', 'Organizations', 'organizations', 'name', 'Organization', 'OrganizationsController', 'fa-university', 1, '2018-11-16 12:28:58', '2018-11-16 13:16:58'),
(7, 'Backups', 'Backups', 'backups', 'name', 'Backup', 'BackupsController', 'fa-hdd-o', 1, '2018-11-16 12:29:01', '2018-11-16 13:16:58'),
(8, 'Permissions', 'Permissions', 'permissions', 'name', 'Permission', 'PermissionsController', 'fa-magic', 1, '2018-11-16 12:29:02', '2018-11-16 13:16:58'),
(9, 'Document_Managements', 'Document_Managements', 'document_managements', 'ab', 'Document_Management', 'Document_ManagementsController', 'fa-cube', 1, '2018-11-16 14:13:20', '2018-11-16 14:14:07'),
(10, 'Document_Manages', 'Document_Manages', 'document_manages', 'sarok_no', 'Document_Manage', 'Document_ManagesController', 'fa-cube', 1, '2018-11-16 14:14:35', '2018-11-16 14:16:18'),
(11, 'Add_Project_Titles', 'Add_Project_Titles', 'add_project_titles', 'project_title_name', 'Add_Project_Title', 'Add_Project_TitlesController', 'fa-book', 1, '2018-11-17 00:24:23', '2018-11-17 00:26:12'),
(12, 'Settings', 'Settings', 'settings', 'name', 'Setting', 'SettingsController', 'fa-cogs', 1, '2018-11-17 00:31:53', '2018-11-17 00:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `module_fields`
--

CREATE TABLE `module_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `colname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module` int(10) UNSIGNED NOT NULL,
  `field_type` int(10) UNSIGNED NOT NULL,
  `unique` tinyint(1) NOT NULL DEFAULT '0',
  `defaultvalue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minlength` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `maxlength` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `popup_vals` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_fields`
--

INSERT INTO `module_fields` (`id`, `colname`, `label`, `module`, `field_type`, `unique`, `defaultvalue`, `minlength`, `maxlength`, `required`, `popup_vals`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Name', 1, 16, 0, '', 5, 250, 1, '', 0, '2018-11-16 12:28:50', '2018-11-16 12:28:50'),
(2, 'context_id', 'Context', 1, 13, 0, '0', 0, 0, 0, '', 0, '2018-11-16 12:28:50', '2018-11-16 12:28:50'),
(3, 'email', 'Email', 1, 8, 1, '', 0, 250, 0, '', 0, '2018-11-16 12:28:50', '2018-11-16 12:28:50'),
(4, 'password', 'Password', 1, 17, 0, '', 6, 250, 1, '', 0, '2018-11-16 12:28:50', '2018-11-16 12:28:50'),
(5, 'type', 'User Type', 1, 7, 0, 'Employee', 0, 0, 0, '[\"Employee\",\"Client\"]', 0, '2018-11-16 12:28:50', '2018-11-16 12:28:50'),
(6, 'name', 'Name', 2, 16, 0, '', 5, 250, 1, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(7, 'path', 'Path', 2, 19, 0, '', 0, 250, 0, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(8, 'extension', 'Extension', 2, 19, 0, '', 0, 20, 0, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(9, 'caption', 'Caption', 2, 19, 0, '', 0, 250, 0, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(10, 'user_id', 'Owner', 2, 7, 0, '1', 0, 0, 0, '@users', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(11, 'hash', 'Hash', 2, 19, 0, '', 0, 250, 0, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(12, 'public', 'Is Public', 2, 2, 0, '0', 0, 0, 0, '', 0, '2018-11-16 12:28:51', '2018-11-16 12:28:51'),
(13, 'name', 'Name', 3, 16, 0, '', 1, 250, 1, '', 0, '2018-11-16 12:28:52', '2018-11-16 12:28:52'),
(14, 'tags', 'Tags', 3, 20, 0, '[]', 0, 0, 0, '', 0, '2018-11-16 12:28:52', '2018-11-16 12:28:52'),
(15, 'color', 'Color', 3, 19, 0, '', 0, 50, 1, '', 0, '2018-11-16 12:28:52', '2018-11-16 12:28:52'),
(16, 'name', 'Name', 4, 16, 0, '', 5, 250, 1, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(17, 'designation', 'Designation', 4, 19, 0, '', 0, 50, 1, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(18, 'gender', 'Gender', 4, 18, 0, 'Male', 0, 0, 1, '[\"Male\",\"Female\"]', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(19, 'mobile', 'Mobile', 4, 14, 0, '', 10, 20, 1, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(20, 'mobile2', 'Alternative Mobile', 4, 14, 0, '', 10, 20, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(21, 'email', 'Email', 4, 8, 1, '', 5, 250, 1, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(22, 'dept', 'Department', 4, 7, 0, '0', 0, 0, 1, '@departments', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(23, 'city', 'City', 4, 19, 0, '', 0, 50, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(24, 'address', 'Address', 4, 1, 0, '', 0, 1000, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(25, 'about', 'About', 4, 19, 0, '', 0, 0, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(26, 'date_birth', 'Date of Birth', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(27, 'date_hire', 'Hiring Date', 4, 4, 0, 'date(\'Y-m-d\')', 0, 0, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(28, 'date_left', 'Resignation Date', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(29, 'salary_cur', 'Current Salary', 4, 6, 0, '0.0', 0, 2, 0, '', 0, '2018-11-16 12:28:53', '2018-11-16 12:28:53'),
(30, 'name', 'Name', 5, 16, 0, '', 1, 250, 1, '', 0, '2018-11-16 12:28:54', '2018-11-16 12:28:54'),
(31, 'display_name', 'Display Name', 5, 19, 0, '', 0, 250, 1, '', 0, '2018-11-16 12:28:54', '2018-11-16 12:28:54'),
(32, 'description', 'Description', 5, 21, 0, '', 0, 1000, 0, '', 0, '2018-11-16 12:28:54', '2018-11-16 12:28:54'),
(33, 'parent', 'Parent Role', 5, 7, 0, '1', 0, 0, 0, '@roles', 0, '2018-11-16 12:28:54', '2018-11-16 12:28:54'),
(34, 'dept', 'Department', 5, 7, 0, '1', 0, 0, 0, '@departments', 0, '2018-11-16 12:28:54', '2018-11-16 12:28:54'),
(35, 'name', 'Name', 6, 16, 1, '', 5, 250, 1, '', 0, '2018-11-16 12:28:58', '2018-11-16 12:28:58'),
(36, 'email', 'Email', 6, 8, 1, '', 0, 250, 0, '', 0, '2018-11-16 12:28:58', '2018-11-16 12:28:58'),
(37, 'phone', 'Phone', 6, 14, 0, '', 0, 20, 0, '', 0, '2018-11-16 12:28:58', '2018-11-16 12:28:58'),
(38, 'website', 'Website', 6, 23, 0, 'http://', 0, 250, 0, '', 0, '2018-11-16 12:28:58', '2018-11-16 12:28:58'),
(39, 'assigned_to', 'Assigned to', 6, 7, 0, '0', 0, 0, 0, '@employees', 0, '2018-11-16 12:28:58', '2018-11-16 12:28:58'),
(40, 'connect_since', 'Connected Since', 6, 4, 0, 'date(\'Y-m-d\')', 0, 0, 0, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(41, 'address', 'Address', 6, 1, 0, '', 0, 1000, 1, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(42, 'city', 'City', 6, 19, 0, '', 0, 250, 1, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(43, 'description', 'Description', 6, 21, 0, '', 0, 1000, 0, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(44, 'profile_image', 'Profile Image', 6, 12, 0, '', 0, 250, 0, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(45, 'profile', 'Company Profile', 6, 9, 0, '', 0, 250, 0, '', 0, '2018-11-16 12:28:59', '2018-11-16 12:28:59'),
(46, 'name', 'Name', 7, 16, 0, '', 0, 250, 1, '', 0, '2018-11-16 12:29:01', '2018-11-16 12:29:01'),
(47, 'file_name', 'File Name', 7, 19, 0, '', 0, 250, 1, '', 0, '2018-11-16 12:29:01', '2018-11-16 12:29:01'),
(48, 'backup_size', 'File Size', 7, 19, 0, '0', 0, 10, 1, '', 0, '2018-11-16 12:29:01', '2018-11-16 12:29:01'),
(49, 'name', 'Name', 8, 16, 0, '', 1, 250, 1, '', 0, '2018-11-16 12:29:02', '2018-11-16 12:29:02'),
(50, 'display_name', 'Display Name', 8, 19, 0, '', 0, 250, 1, '', 0, '2018-11-16 12:29:02', '2018-11-16 12:29:02'),
(51, 'description', 'Description', 8, 21, 0, '', 0, 1000, 0, '', 0, '2018-11-16 12:29:02', '2018-11-16 12:29:02'),
(52, 'ab', 'ab', 9, 1, 0, '', 0, 256, 0, '', 0, '2018-11-16 14:13:56', '2018-11-16 14:13:56'),
(53, 'sarok_no', 'Sarok No', 10, 22, 1, '', 0, 256, 1, '', 0, '2018-11-16 14:16:08', '2018-11-18 02:32:53'),
(54, 'project_title', 'Project Title', 10, 7, 0, '', 0, 0, 1, '@add_project_titles', 0, '2018-11-16 14:30:20', '2018-11-17 12:40:24'),
(55, 'others', 'Others', 10, 22, 0, '', 0, 256, 0, '', 0, '2018-11-16 14:31:19', '2018-11-17 14:23:42'),
(56, 'project_sub_title', 'Project-Sub-title', 10, 22, 0, '', 0, 256, 0, '', 0, '2018-11-16 14:32:19', '2018-11-16 14:32:19'),
(57, 'issue_date', 'Issue Date', 10, 4, 0, '', 0, 0, 1, '', 0, '2018-11-16 14:33:11', '2018-11-16 14:33:11'),
(58, 'image', 'Image', 10, 9, 0, '', 0, 0, 1, '', 0, '2018-11-16 14:34:26', '2018-11-17 14:23:19'),
(59, 'order_description', 'order_description', 10, 21, 0, '', 0, 0, 0, '', 0, '2018-11-16 14:35:51', '2018-11-16 14:35:51'),
(61, 'name', 'name ', 12, 1, 0, '', 0, 256, 0, '', 0, '2018-11-17 00:33:18', '2018-11-17 00:33:18'),
(62, 'title', 'title', 10, 7, 0, '', 0, 0, 0, '@add_project_titles', 0, '2018-11-17 12:50:54', '2018-11-17 12:50:54'),
(63, 'organizations', 'organizations', 1, 7, 0, '', 0, 0, 0, '@organizations', 0, '2018-11-17 13:18:43', '2018-11-17 13:18:43'),
(64, 'enty_by', 'enty by', 10, 13, 0, '', 0, 11, 1, '', 0, '2018-11-17 14:02:57', '2018-11-17 14:02:57'),
(65, 'enty_by', 'enty by', 11, 13, 0, '', 0, 11, 1, '', 0, '2018-11-18 01:24:56', '2018-11-18 01:24:56'),
(66, 'project_title_name', 'Project Title Name', 11, 22, 0, '', 0, 256, 1, '', 0, '2018-11-18 01:46:04', '2018-11-18 01:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `module_field_types`
--

CREATE TABLE `module_field_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_field_types`
--

INSERT INTO `module_field_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Address', '2018-11-16 12:28:47', '2018-11-16 12:28:47'),
(2, 'Checkbox', '2018-11-16 12:28:47', '2018-11-16 12:28:47'),
(3, 'Currency', '2018-11-16 12:28:47', '2018-11-16 12:28:47'),
(4, 'Date', '2018-11-16 12:28:47', '2018-11-16 12:28:47'),
(5, 'Datetime', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(6, 'Decimal', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(7, 'Dropdown', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(8, 'Email', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(9, 'File', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(10, 'Float', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(11, 'HTML', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(12, 'Image', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(13, 'Integer', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(14, 'Mobile', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(15, 'Multiselect', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(16, 'Name', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(17, 'Password', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(18, 'Radio', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(19, 'String', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(20, 'Taginput', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(21, 'Textarea', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(22, 'TextField', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(23, 'URL', '2018-11-16 12:28:48', '2018-11-16 12:28:48'),
(24, 'Files', '2018-11-16 12:28:48', '2018-11-16 12:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://',
  `assigned_to` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `connect_since` date NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN_PANEL', 'Admin Panel', 'Admin Panel Permission', NULL, '2018-11-16 13:16:57', '2018-11-16 13:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `dept` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `parent`, `dept`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SUPER_ADMIN', 'Super Admin', 'Full Access Role', 1, 1, NULL, '2018-11-16 13:16:54', '2018-11-16 13:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_module`
--

CREATE TABLE `role_module` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `acc_view` tinyint(1) NOT NULL,
  `acc_create` tinyint(1) NOT NULL,
  `acc_edit` tinyint(1) NOT NULL,
  `acc_delete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_module`
--

INSERT INTO `role_module` (`id`, `role_id`, `module_id`, `acc_view`, `acc_create`, `acc_edit`, `acc_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(2, 1, 2, 1, 1, 1, 1, '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(3, 1, 3, 1, 1, 1, 1, '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(4, 1, 4, 1, 1, 1, 1, '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(5, 1, 5, 1, 1, 1, 1, '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(6, 1, 6, 1, 1, 1, 1, '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(7, 1, 7, 1, 1, 1, 1, '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(8, 1, 8, 1, 1, 1, 1, '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(9, 1, 9, 1, 1, 1, 1, '2018-11-16 14:14:07', '2018-11-16 14:14:07'),
(10, 1, 10, 1, 1, 1, 1, '2018-11-16 14:16:18', '2018-11-16 14:16:18'),
(11, 1, 11, 1, 1, 1, 1, '2018-11-17 00:26:12', '2018-11-17 00:26:12'),
(12, 1, 12, 1, 1, 1, 1, '2018-11-17 00:33:27', '2018-11-17 00:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_module_fields`
--

CREATE TABLE `role_module_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `field_id` int(10) UNSIGNED NOT NULL,
  `access` enum('invisible','readonly','write') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_module_fields`
--

INSERT INTO `role_module_fields` (`id`, `role_id`, `field_id`, `access`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(2, 1, 2, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(3, 1, 3, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(4, 1, 4, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(5, 1, 5, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(6, 1, 6, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(7, 1, 7, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(8, 1, 8, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(9, 1, 9, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(10, 1, 10, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(11, 1, 11, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(12, 1, 12, 'write', '2018-11-16 13:16:54', '2018-11-16 13:16:54'),
(13, 1, 13, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(14, 1, 14, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(15, 1, 15, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(16, 1, 16, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(17, 1, 17, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(18, 1, 18, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(19, 1, 19, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(20, 1, 20, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(21, 1, 21, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(22, 1, 22, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(23, 1, 23, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(24, 1, 24, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(25, 1, 25, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(26, 1, 26, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(27, 1, 27, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(28, 1, 28, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(29, 1, 29, 'write', '2018-11-16 13:16:55', '2018-11-16 13:16:55'),
(30, 1, 30, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(31, 1, 31, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(32, 1, 32, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(33, 1, 33, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(34, 1, 34, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(35, 1, 35, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(36, 1, 36, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(37, 1, 37, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(38, 1, 38, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(39, 1, 39, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(40, 1, 40, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(41, 1, 41, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(42, 1, 42, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(43, 1, 43, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(44, 1, 44, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(45, 1, 45, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(46, 1, 46, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(47, 1, 47, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(48, 1, 48, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(49, 1, 49, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(50, 1, 50, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(51, 1, 51, 'write', '2018-11-16 13:16:56', '2018-11-16 13:16:56'),
(52, 1, 52, 'write', '2018-11-16 14:13:58', '2018-11-16 14:13:58'),
(53, 1, 53, 'write', '2018-11-16 14:16:09', '2018-11-16 14:16:09'),
(54, 1, 54, 'write', '2018-11-16 14:30:35', '2018-11-16 14:30:35'),
(55, 1, 55, 'write', '2018-11-16 14:31:19', '2018-11-16 14:31:19'),
(56, 1, 56, 'write', '2018-11-16 14:32:19', '2018-11-16 14:32:19'),
(57, 1, 57, 'write', '2018-11-16 14:33:12', '2018-11-16 14:33:12'),
(58, 1, 58, 'write', '2018-11-16 14:34:27', '2018-11-16 14:34:27'),
(59, 1, 59, 'write', '2018-11-16 14:35:51', '2018-11-16 14:35:51'),
(61, 1, 61, 'write', '2018-11-17 00:33:19', '2018-11-17 00:33:19'),
(62, 1, 62, 'write', '2018-11-17 12:50:56', '2018-11-17 12:50:56'),
(63, 1, 63, 'write', '2018-11-17 13:20:51', '2018-11-17 13:20:51'),
(64, 1, 64, 'write', '2018-11-17 14:02:58', '2018-11-17 14:02:58'),
(65, 1, 65, 'write', '2018-11-18 01:24:57', '2018-11-18 01:24:57'),
(66, 1, 66, 'write', '2018-11-18 01:46:04', '2018-11-18 01:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(10, 1, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `path`, `extension`, `caption`, `user_id`, `hash`, `public`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'e-Statement of DBBL VISA Gold Credit Card for Dec-2018.pdf', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-16-115257-e-Statement of DBBL VISA Gold Credit Card for Dec-2018.pdf', 'pdf', '', 12, 'uk3ocnv1oqyryxm5aewo', 0, NULL, '2019-01-16 05:52:57', '2019-01-16 05:52:57'),
(10, '07.pdf', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-16-134044-07.pdf', 'pdf', '', 12, 'wjysoki0wqsqlreisyvk', 0, NULL, '2019-01-16 07:40:44', '2019-01-16 07:40:44'),
(11, 'e-Statement of DBBL VISA Gold Credit Card for Dec-2018.pdf', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-16-154331-e-Statement of DBBL VISA Gold Credit Card for Dec-2018.pdf', 'pdf', '', 12, 'iq1ohlf8b6d8sscesm4r', 0, NULL, '2019-01-16 09:43:31', '2019-01-16 09:43:31'),
(12, 'american-express.png', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-16-154414-american-express.png', 'png', '', 12, 'az4udhvdlrlxf2ovhvf7', 0, NULL, '2019-01-16 09:44:14', '2019-01-16 09:44:14'),
(13, 'Agm, momo-in.pdf', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-16-155547-Agm, momo-in.pdf', 'pdf', '', 12, 'czoj0kqw15uimhwp3c5e', 0, NULL, '2019-01-16 09:55:47', '2019-01-16 09:55:47'),
(14, 'HRM&A,Contract Based.pdf', '/home/docuvue/public_html/es/Laravel/storage/uploads/2019-01-19-123230-HRM&A,Contract Based.pdf', 'pdf', '', 12, 'hycor6vglnqwdz75ttvp', 1, NULL, '2019-01-19 06:32:30', '2019-01-19 06:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `context_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Employee',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `organizations` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `context_id`, `email`, `password`, `type`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `organizations`) VALUES
(1, 'Md. Monirul Islam ', 1, 'monirul.sk2012@gmail.com', '$2y$10$YZdeJTDGWdYRwJgaSFsFO.OiaF/jtGMjYDwRBTFYVms7nPcM1ECVy', 'Employee', 'hWP4iiEwRwJWwuWlN0ukXpRmrkPY3LAXoj6kgtJcxxb3tixfDskQj7MuQY9E', NULL, '2018-11-16 13:18:06', '2019-03-13 06:40:40', 1),
(12, 'TMSS ES DATA FO\r\n', 12, 'tmssras7@gmail.com', '$2y$10$YZdeJTDGWdYRwJgaSFsFO.OiaF/jtGMjYDwRBTFYVms7nPcM1ECVy', 'Employee', 'KmlM2Hj1RAcDJMJQE0OH7rU3g16sPQQ93CeZ7fngcqEeQtpYZkaB2GrykKI1', NULL, '2019-01-16 04:29:45', '2019-01-16 04:31:01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_project_titles`
--
ALTER TABLE `add_project_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backups`
--
ALTER TABLE `backups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `backups_name_unique` (`name`),
  ADD UNIQUE KEY `backups_file_name_unique` (`file_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `document_managements`
--
ALTER TABLE `document_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_manages`
--
ALTER TABLE `document_manages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_manages_title_foreign` (`title`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_dept_foreign` (`dept`);

--
-- Indexes for table `la_configs`
--
ALTER TABLE `la_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `la_menus`
--
ALTER TABLE `la_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_fields`
--
ALTER TABLE `module_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_fields_module_foreign` (`module`),
  ADD KEY `module_fields_field_type_foreign` (`field_type`);

--
-- Indexes for table `module_field_types`
--
ALTER TABLE `module_field_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizations_name_unique` (`name`),
  ADD UNIQUE KEY `organizations_email_unique` (`email`),
  ADD KEY `organizations_assigned_to_foreign` (`assigned_to`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD KEY `roles_parent_foreign` (`parent`),
  ADD KEY `roles_dept_foreign` (`dept`);

--
-- Indexes for table `role_module`
--
ALTER TABLE `role_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_module_role_id_foreign` (`role_id`),
  ADD KEY `role_module_module_id_foreign` (`module_id`);

--
-- Indexes for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_module_fields_role_id_foreign` (`role_id`),
  ADD KEY `role_module_fields_field_id_foreign` (`field_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploads_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `add_project_titles`
--
ALTER TABLE `add_project_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `backups`
--
ALTER TABLE `backups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_managements`
--
ALTER TABLE `document_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_manages`
--
ALTER TABLE `document_manages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `la_configs`
--
ALTER TABLE `la_configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `la_menus`
--
ALTER TABLE `la_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `module_fields`
--
ALTER TABLE `module_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `module_field_types`
--
ALTER TABLE `module_field_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_module`
--
ALTER TABLE `role_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_manages`
--
ALTER TABLE `document_manages`
  ADD CONSTRAINT `document_manages_title_foreign` FOREIGN KEY (`title`) REFERENCES `add_project_titles` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_dept_foreign` FOREIGN KEY (`dept`) REFERENCES `departments` (`id`);

--
-- Constraints for table `module_fields`
--
ALTER TABLE `module_fields`
  ADD CONSTRAINT `module_fields_field_type_foreign` FOREIGN KEY (`field_type`) REFERENCES `module_field_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_fields_module_foreign` FOREIGN KEY (`module`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_assigned_to_foreign` FOREIGN KEY (`assigned_to`) REFERENCES `employees` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_dept_foreign` FOREIGN KEY (`dept`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `roles_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `roles` (`id`);

--
-- Constraints for table `role_module`
--
ALTER TABLE `role_module`
  ADD CONSTRAINT `role_module_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_module_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
  ADD CONSTRAINT `role_module_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `module_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_module_fields_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
