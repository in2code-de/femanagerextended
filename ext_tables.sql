#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	twitter_id varchar(255) DEFAULT '' NOT NULL,
	skype_id varchar(255) DEFAULT '' NOT NULL,
    user_categories tinytext DEFAULT '0'
);
