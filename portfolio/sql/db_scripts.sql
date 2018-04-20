DROP TABLE IF EXISTS project_categories;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS categories;

CREATE TABLE projects (
  p_name VARCHAR(37) NOT NULL PRIMARY KEY,
  p_description VARCHAR(300) NOT NULL,
  p_picture VARCHAR(30),
  p_group INT(2) NOT NULL,
  p_url VARCHAR(25) NOT NULL
);

INSERT INTO projects
  (p_name, p_description, p_picture, p_group, p_url)
VALUES
  ('Third Year Project - Website Security', 'A Java service that monitors websites for unauthorised changes, restores the website from the backup, informs the administrator of event details, and implements basic blocking methods.', 'web-security.png', 3, 'project-web-sec.php'),

  ('Data Engineering', 'Using datasets to predict the outcome of a class.<br/><br/>Analysing the attributes of a dataset and performing basic data mining techniques in order to improve the outcome of predicting the class.', '', 3, 'data-engineering.php'),

  ('Web Services', 'Simple service accessible in a variety of ways using different technologies<br/><br/>', 'web-services.png', 3, 'web-services.php'),

  ('Information and Network Security', 'Encryption<br/><br/>Intrusion prevention<br/><br/>Networking<br/><br/>', '', 3, 'infosec.php'),

  ('Food Hygiene Ratings', 'Android application that queries a server for the hygiene ratings from the Food Standards Agency and presents them in a table and map format.', 'food-hygiene-ratings.png', 2, 'food-hygiene-ratings.php'),

  ('Hyper AV', 'Database driven storefront web application built with PHP and MySQL. Contains login, shopping basket and admin edit features.', 'hyperav.png', 2, 'HyperAV.php'),

  ('Congo', 'Database driven storefront web application built with Java, using servlets as a controller to fetch information from a MySQL database and present it to the user as a website. Contains login and shopping basket features.', 'congo.png', 2, 'congo.php'),

  ('Concurrency', 'Java application demonstrating thread concurrency', 'concurrency.png', 2, 'concurrency.php'),

  ('Computer Fundamentals', 'Logical circuit that displays the numbers 0 - 9 on a seven segment display.<br/><br/>MIPS Assembly program that displays the results of various mathematical calculations.', 'csf.png', 1, 'csf.php'),

  ('Photo Gallery', 'Interactive database-managed photo gallery. <br/><br/>Object oriented programming with PHP and MySQL, developed from a tutorial by Lynda.com', '', 0, 'photo-gallery.php');

CREATE TABLE categories (
  c_name VARCHAR(20) NOT NULL PRIMARY KEY
);

INSERT INTO categories
  (c_name)
VALUES
  ('Java'),
  ('MySQL'),
  ('Data Engineering'),
  ('REST'),
  ('Cloud'),
  ('Ajax'),
  ('XML'),
  ('HTML-CSS'),
  ('Python'),
  ('Network Design'),
  ('Encryption'),
  ('Android'),
  ('PHP'),
  ('Servlets'),
  ('JSP'),
  ('Logic'),
  ('Assembly'),
  ('JSON');

CREATE TABLE project_categories (
  p_name VARCHAR(37) NOT NULL,
  c_name VARCHAR(20) NOT NULL,
  PRIMARY KEY (p_name, c_name),
  FOREIGN KEY (c_name) REFERENCES categories (c_name),
  FOREIGN KEY (p_name) REFERENCES projects (p_name)
);

INSERT INTO project_categories
  (p_name, c_name)
VALUES
  ('Third Year Project - Website Security', 'Java'),
  ('Third Year Project - Website Security', 'MySQL'),
  ('Data Engineering', 'Data Engineering'),
  ('Web Services', 'Java'),
  ('Web Services', 'JSP'),
  ('Web Services', 'REST'),
  ('Web Services', 'Cloud'),
  ('Web Services', 'Ajax'),
  ('Web Services', 'XML'),
  ('Web Services', 'HTML-CSS'),
  ('Web Services', 'JSON'),
  ('Information and Network Security', 'Python'),
  ('Information and Network Security', 'Network Design'),
  ('Information and Network Security', 'Encryption'),
  ('Food Hygiene Ratings', 'Java'),
  ('Food Hygiene Ratings', 'XML'),
  ('Food Hygiene Ratings', 'Android'),
  ('Food Hygiene Ratings', 'JSON'),
  ('Hyper AV', 'PHP'),
  ('Hyper AV', 'MySQL'),
  ('Hyper AV', 'HTML-CSS'),
  ('Congo', 'Java'),
  ('Congo', 'Servlets'),
  ('Congo', 'HTML-CSS'),
  ('Congo', 'JSP'),
  ('Congo', 'MySQL'),
  ('Concurrency', 'Java'),
  ('Computer Fundamentals', 'Logic'),
  ('Computer Fundamentals', 'Assembly'),
  ('Photo Gallery', 'PHP'),
  ('Photo Gallery', 'HTML-CSS'),
  ('Photo Gallery', 'MySQL');
