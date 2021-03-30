package singleton.log;

import java.io.IOException;

public class OrderController {
    private Logger logger = new Logger();


    public OrderController() throws IOException {
    }

    public void create() throws IOException {
        logger.log("Created an order order");
    }
}
