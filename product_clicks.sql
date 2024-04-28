CREATE TABLE product_clicks (
    product_id SERIAL PRIMARY KEY,
    product_name VARCHAR(255),
    click_count INT DEFAULT 0,
    image_url VARCHAR(255) -- Assuming URLs are stored
);

INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('VR Set', 0, 'images/vr-set.jpg');
INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('Console', 0, 'images/ps5.jpg');
INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('Feedback Controllers', 0, 'images/controller.jpg');
INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('Display Set', 0, 'images/display-set.jpg');
INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('Gaming Chair', 0, 'images/chair.jpg');
INSERT INTO product_clicks (product_name, click_count, image_url) VALUES ('Gaming Keyboard', 0, 'images/keyboard.jpg');
