
-- --------------------------------------------------------

--
-- Table structure for table `quickquote`
--

CREATE TABLE `quickquote` (
  `id` int(11) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(25) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `cell` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `building_limit` int(11) NOT NULL,
  `content_limit` int(11) NOT NULL,
  `gross_sales_food` int(11) NOT NULL,
  `gross_sales_liquor` int(11) NOT NULL,
  `gross_sales_other` int(11) NOT NULL,
  `square_footage` int(11) NOT NULL,
  `age_built` int(11) NOT NULL,
  `construction` varchar(100) NOT NULL,
  `stories` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `modified_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
