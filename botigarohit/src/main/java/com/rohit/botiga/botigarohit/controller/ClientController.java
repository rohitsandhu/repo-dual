package com.rohit.botiga.botigarohit.controller;

import com.rohit.botiga.botigarohit.entities.Client;
import com.rohit.botiga.botigarohit.service.ClientService;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.List;

@Controller
public class ClientController {

    private final ClientService cs;

    public ClientController(ClientService cs) {
        this.cs = cs;
    }


    @RequestMapping("/getGet")
    public String recuperaClients(Model model){
        List<Client>  llista = cs.getClients();
        model.addAttribute("llistaClients", llista);
        return "llistaClients";
    }

    @RequestMapping("/hola")
    public String saluda(Model model){
        List<Client>  llista = cs.getClients();
        model.addAttribute("llistaClients", llista);
        return "main";
    }

    @RequestMapping("/")
    public String xd(Model model){

        return "main";
    }
}
