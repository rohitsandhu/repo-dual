package com.rohit.botiga.botigarohit.service;

import com.rohit.botiga.botigarohit.entities.Client;
import org.springframework.core.ParameterizedTypeReference;
import org.springframework.http.HttpMethod;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Service;
import org.springframework.web.client.RestTemplate;

import java.util.List;

@Service
public class ClientService {
    public List<Client> getClients(){
        final String uri = "http://localhost:8080/getClients";
        RestTemplate rt = new RestTemplate();
        ResponseEntity<List<Client>> rateResponse =
                rt.exchange(uri,
                        HttpMethod.GET,
                        null,
                        new ParameterizedTypeReference<List<Client>>() {
                        });

        List<Client> llista = rateResponse.getBody();


        return llista;
    }
}
