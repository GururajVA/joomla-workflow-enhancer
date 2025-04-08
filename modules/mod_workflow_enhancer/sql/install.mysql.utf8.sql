CREATE TABLE IF NOT EXISTS '#__workflow_enhancer_settings'(
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'params' text NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO '#__workflow_enhancer_settings' ('params') VALUES ('{"email_template":"Article {title} moved to {stage}"}');