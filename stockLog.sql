CREATE TABLE stockLog(
  log_id INT AUTO_INCREMENT ,
  stock_id INT NOT NULL ,
  user_id INT NOT NULL ,
  in_out_n INT NOT NULL ,
  update_date DATETIME NOT NULL ,

  PRIMARY KEY(log_id)
);