CREATE TABLE product_clicks (
    product_id SERIAL PRIMARY KEY,
    product_name VARCHAR(255),
    click_count INT DEFAULT 0
);

INSERT INTO product_clicks (product_name, click_count) VALUES ('Product A', 0);
INSERT INTO product_clicks (product_name, click_count) VALUES ('Product B', 0);
INSERT INTO product_clicks (product_name, click_count) VALUES ('Product C', 0);
INSERT INTO product_clicks (product_name, click_count) VALUES ('Product D', 0);
INSERT INTO product_clicks (product_name, click_count) VALUES ('Product E', 0);
INSERT INTO product_clicks (product_name, click_count) VALUES ('Product F', 0);