

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `form_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED


INSERT INTO `employees` (`id`, `lastname`, `firstname`, `patronymic`, `company`, `department`) VALUES (1, 'Nukem', 'Duke', 'Dynamit', 'ООО "ТД Комплект"', 'ИТ отдел');

INSERT INTO `companies` (`id`, `company_name`) VALUES (1, 'ООО "ТД Комплект"');
INSERT INTO `companies` (`id`, `company_name`) VALUES (2, 'EpamSystems');

INSERT INTO `departments` (`id`, `department_name`, `id_company`) VALUES (1, 'ИТ отдел', 1);
INSERT INTO `departments` (`id`, `department_name`, `id_company`) VALUES (2, 'Экономичекий отдел', 2);
INSERT INTO `departments` (`id`, `department_name`, `id_company`) VALUES (3, 'Отдел продаж', 1);