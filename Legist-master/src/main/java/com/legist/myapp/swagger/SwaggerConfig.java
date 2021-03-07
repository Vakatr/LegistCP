package com.legist.myapp.swagger;

import org.springfraemwork.boot.SpringApplication;
import org.springfraemwork.boot.autoconfigure.SpringApplication;
import springfox.documentation.swagger.annotations.EnableSwagger2;

@SpringBootApplication
@EnableSwagger2

public class SwaggerConfig {
    public static void main(String[] args) {
        SpringApplication.run(SpringbootSwagger2Application.class, args)
    }
}
