CREATE TABLE `base_arrange`.`Produits` (
    `product_id` INT(4) NOT NULL AUTO_INCREMENT ,
    `product_img_rel` VARCHAR(128) NOT NULL ,
    `product_categories`  VARCHAR(32) NOT NULL,
    `product_ref` VARCHAR(4) NOT NULL ,
    `product_label` VARCHAR(32) NOT NULL ,
    `product_stock` INT(4) NOT NULL ,
    `product_desc` VARCHAR(512) NOT NULL ,
    `product_prix` INT(4) NOT NULL ,
    PRIMARY KEY (`product_id`));