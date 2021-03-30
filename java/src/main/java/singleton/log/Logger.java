package singleton.log;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

public class Logger {
    private FileWriter writer;

    public Logger() throws IOException {
        File file = new File("./log.log");
        writer = new FileWriter(file, true);
    }

    public void log(String message) throws IOException {
        writer.write(message + "\n");
        writer.flush();
    }
}
