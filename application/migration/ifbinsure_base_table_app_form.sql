
-- --------------------------------------------------------

--
-- Table structure for table `app_form`
--

CREATE TABLE `app_form` (
  `id` int(11) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `liquor_License` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `contact_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `current_company` varchar(200) NOT NULL,
  `current_agent` varchar(200) NOT NULL,
  `renewal_month` varchar(20) NOT NULL,
  `premium` int(11) NOT NULL,
  `type_operation` varchar(200) NOT NULL,
  `building_limit` int(11) NOT NULL,
  `contents_limit` int(11) NOT NULL,
  `building_age` int(11) NOT NULL,
  `construction` varchar(200) NOT NULL,
  `apartments` varchar(200) NOT NULL,
  `number_of_units` int(11) NOT NULL,
  `sprinkler_system` varchar(10) NOT NULL,
  `years_at_location` int(11) NOT NULL,
  `liability_limit` int(11) NOT NULL,
  `annual_food_sales` int(11) NOT NULL,
  `annual_liquor_sales` int(11) NOT NULL,
  `type_entertainment` varchar(200) NOT NULL,
  `payroll_restaurant` int(11) NOT NULL,
  `payroll_clerical` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
