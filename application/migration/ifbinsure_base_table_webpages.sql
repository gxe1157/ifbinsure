
-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_keywords` text NOT NULL,
  `page_description` text NOT NULL,
  `page_content` text NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` int(11) NOT NULL,
  `mod_dt` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `page_url`, `page_title`, `page_keywords`, `page_description`, `page_content`, `status`, `create_date`, `mod_dt`, `userid`) VALUES
(1, '', 'The Home Page', '           ', '           ', '      Home content     ', 0, 0, 0, 0),
(2, 'contactus', 'Contact Us', 'keywords here', 'Description Here', 'Page Content - Form', 0, 0, 0, 0),
(3, 'About-Us', 'About Us', '           ', '           ', '           ', 0, 0, 0, 0),
(4, 'General-Liability', 'General Liability', '           ', '           ', '           ', 0, 0, 0, 0),
(5, 'Liquor-Liability', 'Liquor Liability', '           ', '           ', '           ', 0, 0, 0, 0),
(6, 'Assault-And-Battery', 'Assault And Battery', '           ', '           ', '           ', 0, 0, 0, 0),
(7, 'Workers-Compensation', 'Workers Compensation', '           ', '           ', '           ', 0, 0, 0, 0),
(8, 'Commercial-Property-Insurance', 'Commercial Property Insurance', '           ', '           ', '           ', 0, 0, 0, 0),
(9, 'Commercial-Crime-Coverage', 'Commercial Crime Coverage', '           ', '           ', '           ', 0, 0, 0, 0),
(10, 'News', 'News', '           ', '           ', '           ', 0, 0, 0, 0),
(11, 'Client-Reviews', 'Client Reviews', '           ', '           ', '           ', 0, 0, 0, 0),
(12, 'Faq', 'Faq', '           ', '           ', '           ', 0, 0, 0, 0),
(13, 'Privacy-Statement', 'Privacy Statement', '           ', '           ', '           ', 0, 0, 0, 0),
(14, 'Legal', 'Legal', '           ', '           ', '           ', 0, 0, 0, 0);
