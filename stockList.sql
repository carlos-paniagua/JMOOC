CREATE TABLE stockList(
  stock_id int AUTO_INCREMENT ,
  stock_name TEXT NOT NULL ,
  amount VARCHAR(20) ,
  type INT NOT NULL ,
  remarks TEXT ,
  
  PRIMARY KEY(stock_id)
)