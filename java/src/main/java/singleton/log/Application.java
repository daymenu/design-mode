package singleton.log;

import java.io.IOException;

public class Application {
    public static void main(String[] args) {
        try {
            OrderController orderController = new OrderController();
            UserController userController = new UserController();
            orderController.create();
            userController.login("hanjian", "hajjj");
        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    }
}
