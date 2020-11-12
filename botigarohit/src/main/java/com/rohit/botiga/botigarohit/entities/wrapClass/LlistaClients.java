package com.rohit.botiga.botigarohit.entities.wrapClass;

import com.rohit.botiga.botigarohit.entities.Client;

import java.util.ArrayList;
import java.util.List;

public class LlistaClients {


    private List<Client> llistaClients = new ArrayList<>();

    public List<Client> getLlistaClients() {
        return llistaClients;
    }

    public void setLlistaClients(List<Client> llistaClients) {
        this.llistaClients = llistaClients;
    }
}
