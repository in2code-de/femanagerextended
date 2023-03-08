#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	twitter_id varchar(255) DEFAULT '' NOT NULL,
	skype_id varchar(255) DEFAULT '' NOT NULL,
	example_model int(11) DEFAULT '0' NOT NULL
);

CREATE TABLE tx_femanagerextended_domain_model_examplemodel
(
	title varchar(255) DEFAULT '' NOT NULL,
);
