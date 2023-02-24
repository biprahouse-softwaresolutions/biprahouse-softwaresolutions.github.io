CREATE TABLE visit_counter (
  id int(11) NOT NULL AUTO_INCREMENT,
  count int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO visit_counter (id, count) VALUES (1, 0);
